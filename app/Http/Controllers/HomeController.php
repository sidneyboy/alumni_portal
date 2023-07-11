<?php

namespace App\Http\Controllers;

use App\Events\Comment_notification;
use App\Models\Announcements;
use App\Models\Announcements_attachments;
use App\Models\Announcement_replies;
use App\Models\User;
use App\Models\Wall;
use App\Models\Wall_attachments;
use App\Models\Wall_replies;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function logout()
    {

        User::where('id', auth()->user()->id)
            ->update(['status' => 0]);
        Auth::logout();
        return redirect('/');
    }

    public function index()
    {
        $user = User::find(auth()->user()->id);
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        if ($user->user_type == 'admin') {
            User::where('id', auth()->user()->id)
                ->update(['status' => 1]);

            $announcement = Announcements::orderBy('id', 'desc')->take(1)->first();
            if ($announcement) {
                $announcement_counter = Announcements_attachments::where('announcements_id', $announcement->id)
                    ->get();
            } else {
                $announcement_counter[] = 0;
            }

            $latest_announcement_photos = Announcements_attachments::select('attachment')
                ->where('user_id', auth()->user()->id)
                ->take(3)
                ->orderBy('id', 'desc')
                ->get();

            $latest_wall_photos = Wall_attachments::select('attachment')
                ->where('user_id', auth()->user()->id)
                ->take(3)
                ->orderBy('id', 'desc')
                ->get();

            $wall = Wall::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();

            return view('admin_welcome', [
                'user' => $user,
                'wall' => $wall,
                'date_now' => $date_now,
                'announcement' => $announcement,
                'announcement_counter' => $announcement_counter,
                'latest_announcement_photos' => $latest_announcement_photos,
                'latest_wall_photos' => $latest_wall_photos,
            ]);
        } else {
            return redirect('user_welcome');
        }
    }

    public function admin_feed()
    {
        $user = User::find(auth()->user()->id);
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');

        if ($user->user_type == 'admin') {
            User::where('id', auth()->user()->id)
                ->update(['status' => 1]);

            $announcement = Announcements::orderBy('id', 'desc')->take(1)->first();
            if ($announcement) {
                $announcement_counter = Announcements_attachments::where('announcements_id', $announcement->id)
                    ->get();
            } else {
                $announcement_counter[] = 0;
            }

            $latest_announcement_photos = Announcements_attachments::select('attachment')
                ->where('user_id', auth()->user()->id)
                ->take(3)
                ->orderBy('id', 'desc')
                ->get();

            $latest_wall_photos = Wall_attachments::select('attachment')
                ->where('user_id', auth()->user()->id)
                ->take(3)
                ->orderBy('id', 'desc')
                ->get();

            $wall = Wall::orderBy('id', 'desc')->get();

            return view('admin_feed', [
                'user' => $user,
                'wall' => $wall,
                'date_now' => $date_now,
                'announcement' => $announcement,
                'announcement_counter' => $announcement_counter,
                'latest_announcement_photos' => $latest_announcement_photos,
                'latest_wall_photos' => $latest_wall_photos,
            ]);
        } else {
            return redirect('user_welcome');
        }
    }

    public function user_welcome()
    {
        $user = User::find(auth()->user()->id);
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');

        User::where('id', auth()->user()->id)
            ->update(['status' => 1]);

        $latest_wall_photos = Wall_attachments::select('attachment')
            ->where('user_id', auth()->user()->id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $wall = Wall::where('user_id', auth()->user()->id)
            ->orderBy('id', 'desc')
            ->get();

        return view('user_welcome', [
            'user' => $user,
            'wall' => $wall,
            'date_now' => $date_now,
            'latest_wall_photos' => $latest_wall_photos,
        ]);
    }

    public function user_feed()
    {
        $user = User::find(auth()->user()->id);
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');

        $latest_wall_photos = Wall_attachments::select('attachment')
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $wall = Wall::orderBy('id', 'desc')->get();

        return view('user_feed', [
            'user' => $user,
            'wall' => $wall,
            'date_now' => $date_now,
            'latest_wall_photos' => $latest_wall_photos,
        ]);
    }


    public function admin_update_profile(Request $request)
    {

        User::where('id', $request->input('user_id'))
            ->update([
                'gender' => $request->input('gender'),
                'about' => $request->input('about'),
                'date_of_birth' => $request->input('date_of_birth'),
            ]);

        return redirect('home');
    }

    public function user_update_profile(Request $request)
    {
        User::where('id', $request->input('user_id'))
            ->update([
                'gender' => $request->input('gender'),
                'about' => $request->input('about'),
                'date_of_birth' => $request->input('date_of_birth'),
            ]);

        return redirect('user_welcome');
    }

    public function admin_update_profile_picture(Request $request)
    {
        //dd($request->all());
        // $profile_picture = $request->file('profile_picture');
        // $profile_picture_name = time()  . "." . $profile_picture->getClientOriginalExtension();
        // $profile_picture_file_type = $profile_picture->getClientmimeType();
        // $path_profile_picture = $profile_picture->storeAs('/profile_picture/', $profile_picture_name);

        $destinationPath = 'image';
        $myimage = uniqid() . '-' . $request->profile_picture->getClientOriginalName();
        $request->profile_picture->move(public_path($destinationPath), $myimage);


        User::where('id', $request->input('user_id'))
            ->update([
                'profile_picture' => $myimage,
            ]);

        return redirect('home');
    }

    public function user_update_profile_picture(Request $request)
    {

        $destinationPath = 'image';
        $myimage = uniqid() . '-' . $request->profile_picture->getClientOriginalName();
        $request->profile_picture->move(public_path($destinationPath), $myimage);


        User::where('id', $request->input('user_id'))
            ->update([
                'profile_picture' => $myimage,
            ]);

        return redirect('user_welcome');
    }

    public function admin_update_timeline_picture(Request $request)
    {
        //dd($request->all());
        $destinationPath = 'image';
        $myimage = uniqid() . '-' . $request->timeline_picture->getClientOriginalName();
        $request->timeline_picture->move(public_path($destinationPath), $myimage);


        User::where('id', $request->input('user_id'))
            ->update([
                'timeline_picture' => $myimage,
            ]);

        return redirect('home');
    }

    public function user_update_timeline_picture(Request $request)
    {
        $destinationPath = 'image';
        $myimage = uniqid() . '-' . $request->timeline_picture->getClientOriginalName();
        $request->timeline_picture->move(public_path($destinationPath), $myimage);


        User::where('id', auth()->user()->id)
            ->update([
                'timeline_picture' => $myimage,
            ]);

        return redirect('user_welcome');
    }

    public function admin_post_announcement(Request $request)
    {
        //dd($request->all());
        $new = new Announcements([
            'subject' => $request->input('subject'),
            'body' => $request->input('body'),
            'user_id' => auth()->user()->id,
        ]);

        $new->save();

        $file_images = $request->file('images');

        if (isset($file_images)) {
            foreach ($request->file('images') as $key => $images) {
                $destinationPath = 'announcement_photos';
                $myimage = uniqid() . '-' . $images->getClientOriginalName();
                $images->move(public_path($destinationPath), $myimage);

                $new_announcement_attachments = new Announcements_attachments([
                    'announcements_id' => $new->id,
                    'attachment' => $myimage,
                    'user_id' => auth()->user()->id,
                ]);

                $new_announcement_attachments->save();
            }
        }

        return redirect('home');
    }

    public function admin_reply_announcement(Request $request)
    {
        //return $request->input();
        $new_comment_reply = new Announcement_replies([
            'announcements_id' => $request->input('announcement_id'),
            'user_id' => auth()->user()->id,
            'content' => $request->input('content'),
            'user_type' => 'admin',
        ]);

        $new_comment_reply->save();

        return redirect()->route('admin_announcement', ['id' => $request->input('announcement_id')]);

        // $user = User::select('user_type')->find(auth()->user()->id);

        // if ($user->user_type == 'admin') {
        //     return redirect()->route('admin_wall', ['id' => $request->input('wall_id')]);
        // } else {
        //     return redirect()->route('user_wall', ['id' => $request->input('wall_id')]);
        // }
    }

    public function admin_reply_announcement_once_more(Request $request)
    {
        $new_comment_reply = new Announcement_replies([
            'announcements_id' => $request->input('announcement_id'),
            'user_id' => auth()->user()->id,
            'content' => $request->input('content'),
            'user_type' => 'admin',
        ]);

        $new_comment_reply->save();

        return redirect()->route('admin_announcement', ['id' => $request->input('announcement_id')]);
    }

    public function admin_post_wall(Request $request)
    {
        //dd($request->all());

        $new = new Wall([
            'body' => $request->input('body'),
            'user_id' => auth()->user()->id,
            'user_type' => 'admin',
        ]);

        $new->save();

        $file_images = $request->file('wall_images');

        if (isset($file_images)) {
            foreach ($request->file('wall_images') as $key => $images) {
                $destinationPath = 'announcement_photos';
                $myimage = uniqid() . '-' . $images->getClientOriginalName();
                $images->move(public_path($destinationPath), $myimage);

                $wall_attachments = new Wall_attachments([
                    'wall_id' => $new->id,
                    'attachment' => $myimage,
                    'user_id' => auth()->user()->id,
                    'user_type' => 'admin',
                ]);

                $wall_attachments->save();
            }
        }

        return redirect('home');
    }

    public function user_post_wall(Request $request)
    {
        $new = new Wall([
            'body' => $request->input('body'),
            'user_id' => auth()->user()->id,
            'user_type' => 'admin',
        ]);

        $new->save();

        $file_images = $request->file('wall_images');

        if (isset($file_images)) {
            foreach ($request->file('wall_images') as $key => $images) {
                $destinationPath = 'announcement_photos';
                $myimage = uniqid() . '-' . $images->getClientOriginalName();
                $images->move(public_path($destinationPath), $myimage);

                $wall_attachments = new Wall_attachments([
                    'wall_id' => $new->id,
                    'attachment' => $myimage,
                    'user_id' => auth()->user()->id,
                    'user_type' => 'admin',
                ]);

                $wall_attachments->save();
            }
        }

        return redirect('user_welcome');
    }

    public function admin_announcement($id)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        $user = User::find(auth()->user()->id);

        $announcement = Announcements::find($id);
        if ($announcement) {
            $announcement_counter = Announcements_attachments::where('announcements_id', $announcement->id)
                ->get();
        } else {
            $announcement_counter[] = 0;
        }

        $latest_announcement_photos = Announcements_attachments::select('attachment')
            ->where('user_id', auth()->user()->id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $latest_wall_photos = Wall_attachments::select('attachment')
            ->where('user_id', auth()->user()->id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        return view('admin_announcement', [
            'user' => $user,
            'date_now' => $date_now,
            'announcement' => $announcement,
            'announcement_counter' => $announcement_counter,
            'latest_announcement_photos' => $latest_announcement_photos,
            'latest_wall_photos' => $latest_wall_photos,
        ]);
    }

    public function admin_announcement_get_comments(Request $request)
    {
        $announcement_replies = Announcement_replies::where('announcements_id', $request->input('announcement_id'))
            ->get();

        return view('admin_announcement_get_comments', [
            'announcement_replies' => $announcement_replies,
        ]);
    }

    public function admin_view_user_get_comments(Request $request)
    {
        $wall_replies = Wall_replies::where('wall_id', $request->input('wall_id'))
            ->get();

        return view('admin_view_user_get_comments', [
            'wall_replies' => $wall_replies,
        ]);
    }

    public function user_wall_get_comments(Request $request)
    {
        $wall_replies = Wall_replies::where('wall_id', $request->input('wall_id'))
            ->get();

        return view('user_wall_get_comments', [
            'wall_replies' => $wall_replies,
        ]);
    }

    public function user_view_user_get_comments(Request $request)
    {
        $wall_replies = Wall_replies::where('wall_id', $request->input('wall_id'))
            ->get();

        return view('user_view_user_get_comments', [
            'wall_replies' => $wall_replies,
        ]);
    }

    public function admin_wall_reply(Request $request)
    {
        $new_comment_reply = new Wall_replies([
            'wall_id' => $request->input('wall_id'),
            'user_id' => auth()->user()->id,
            'content' => $request->input('content'),
            'user_type' => 'admin',
        ]);

        $new_comment_reply->save();

        $user = User::select('user_type')->find(auth()->user()->id);

        if ($user->user_type == 'admin') {
            return redirect()->route('admin_wall', ['id' => $request->input('wall_id')]);
        } else {
            return 'dili siya admin sayop imong link';
        }
    }

    public function admin_view_user_reply(Request $request)
    {
        $new_comment_reply = new Wall_replies([
            'wall_id' => $request->input('wall_id'),
            'user_id' => $request->input('user_id'),
            'content' => $request->input('content'),
            'user_type' => 'admin',
        ]);

        $new_comment_reply->save();

        $user = User::select('user_type')->find(auth()->user()->id);

        if ($user->user_type == 'admin') {
            return redirect()->route('admin_view_user_wall', ['id' => $request->input('wall_id')]);
        } else {
            return 'dili siya admin sayop imong link';
        }
    }

    public function user_view_user_wall_reply(Request $request)
    {
        $new_comment_reply = new Wall_replies([
            'wall_id' => $request->input('wall_id'),
            'user_id' => $request->input('user_id'),
            'content' => $request->input('content'),
            'user_type' => 'admin',
        ]);

        $new_comment_reply->save();

        $user = User::select('user_type')->find(auth()->user()->id);

        return redirect()->route('user_view_user_wall', ['id' => $request->input('wall_id')]);

        // if ($user->user_type == 'admin') {
        //     return redirect()->route('admin_view_user_wall', ['id' => $request->input('wall_id')]);
        // } else {
        //     return 'dili siya admin sayop imong link';
        // }
    }

    public function user_wall_reply(Request $request)
    {
        $new_comment_reply = new Wall_replies([
            'wall_id' => $request->input('wall_id'),
            'user_id' => $request->input('user_id'),
            'content' => $request->input('content'),
            'user_type' => 'admin',
        ]);

        $new_comment_reply->save();

        return redirect()->route('user_wall', ['id' => $request->input('wall_id')]);
    }

    public function user_wall($id)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        $user = User::find(auth()->user()->id);

        $latest_wall_photos = Wall_attachments::select('attachment')
            ->where('user_id', auth()->user()->id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $wall = Wall::find($id);

        return view('user_wall', [
            'user' => $user,
            'wall' => $wall,
            'date_now' => $date_now,
            'latest_wall_photos' => $latest_wall_photos,
        ]);
    }

    public function admin_wall_reply_once_more(Request $request)
    {
        $new_comment_reply = new Wall_replies([
            'wall_id' => $request->input('wall_id'),
            'user_id' => auth()->user()->id,
            'content' => $request->input('content'),
            'user_type' => 'admin',
        ]);

        $new_comment_reply->save();

        return redirect()->route('admin_wall', ['id' => $request->input('wall_id')]);
    }

    public function user_wall_reply_once_more(Request $request)
    {
        // return $request->input();
        // $name = 'sidney';
        // event(new Comment_notification($name));


        $fetch_wall_replies = Wall_replies::select('user_id')->where('wall_id', $request->input('wall_id'))
            ->whereNotIn('user_id', [auth()->user()->id])
            ->groupBy('user_id')
            ->get();

        foreach ($fetch_wall_replies as $key => $wall_user_id) {
            
            $user_details = $wall_user_id->user->name ." ". $wall_user_id->user->middle_name ." ". $wall_user_id->user->last_name;
            $name = $user_details .' on a post';
            $link = url('user_wall', ['id' => $request->input('wall_id')]);
            event(new Comment_notification($name,$link));
        }


        // $new_comment_reply = new Wall_replies([
        //     'wall_id' => $request->input('wall_id'),
        //     'user_id' => auth()->user()->id,
        //     'content' => $request->input('content'),
        //     'user_type' => 'admin',
        // ]);

        // $new_comment_reply->save();

        // return redirect()->route('user_wall', ['id' => $request->input('wall_id')]);
    }

    public function user_view_user_reply_once_more(Request $request)
    {
        $new_comment_reply = new Wall_replies([
            'wall_id' => $request->input('wall_id'),
            'user_id' => $request->input('user_id'),
            'content' => $request->input('content'),
            'user_type' => 'admin',
        ]);

        $new_comment_reply->save();

        return redirect()->route('user_view_user_wall', ['id' => $request->input('wall_id')]);
    }

    public function admin_wall($id)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        $user = User::find(auth()->user()->id);

        $latest_announcement_photos = Announcements_attachments::select('attachment')
            ->where('user_id', auth()->user()->id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $latest_wall_photos = Wall_attachments::select('attachment')
            ->where('user_id', auth()->user()->id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $wall = Wall::find($id);

        return view('admin_wall', [
            'user' => $user,
            'wall' => $wall,
            'date_now' => $date_now,
            'latest_announcement_photos' => $latest_announcement_photos,
            'latest_wall_photos' => $latest_wall_photos,
        ]);
    }

    public function admin_view_user_wall($id)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');

        $wall = Wall::find($id);

        $user = User::find($wall->user_id);

        $latest_announcement_photos = Announcements_attachments::select('attachment')
            ->where('user_id', $wall->user_id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $latest_wall_photos = Wall_attachments::select('attachment')
            ->where('user_id', $wall->user_id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();


        return view('admin_view_user_wall', [
            'user' => $user,
            'wall' => $wall,
            'date_now' => $date_now,
            'latest_announcement_photos' => $latest_announcement_photos,
            'latest_wall_photos' => $latest_wall_photos,
        ]);
    }

    public function user_view_user_wall($id)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');

        $wall = Wall::find($id);

        $user = User::find($wall->user_id);

        $latest_announcement_photos = Announcements_attachments::select('attachment')
            ->where('user_id', $wall->user_id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $latest_wall_photos = Wall_attachments::select('attachment')
            ->where('user_id', $wall->user_id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $viewer = User::select('id')->find(auth()->user()->id);


        return view('user_view_user_wall', [
            'viewer' => $viewer,
            'user' => $user,
            'wall' => $wall,
            'date_now' => $date_now,
            'latest_announcement_photos' => $latest_announcement_photos,
            'latest_wall_photos' => $latest_wall_photos,
        ]);
    }

    public function admin_wall_get_comments(Request $request)
    {
        $wall_replies = Wall_replies::where('wall_id', $request->input('wall_id'))
            ->get();

        return view('admin_wall_get_comments', [
            'wall_replies' => $wall_replies,
        ]);
    }

    public function admin_photos()
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        $user = User::find(auth()->user()->id);

        $announcement_photos = DB::table("announcements_attachments")
            ->select(
                "attachment"
            )->where('user_id', auth()->user()->id);
        $wall_photos = DB::table("wall_attachments")
            ->select(
                "attachment"
            )->where('user_id', auth()->user()->id)
            ->unionAll($announcement_photos)
            ->get();


        return view('admin_photos', [
            'user' => $user,
            'date_now' => $date_now,
            'wall_photos' => $wall_photos,
        ]);
    }

    public function user_photos()
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        $user = User::find(auth()->user()->id);


        $wall_photos = Wall_attachments::select("attachment")
            ->where('user_id', $user->id)
            ->get();


        return view('user_photos', [
            'user' => $user,
            'date_now' => $date_now,
            'wall_photos' => $wall_photos,
        ]);
    }

    public function user_view_user_photos($id)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        $user = User::find($id);


        $wall_photos = Wall_attachments::select("attachment")
            ->where('user_id', $id)
            ->get();


        return view('user_view_user_photos', [
            'user' => $user,
            'date_now' => $date_now,
            'wall_photos' => $wall_photos,
        ]);
    }

    public function admin_user_list(Request $request)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        $user = User::find(auth()->user()->id);

        $user_list = User::select('id', 'name', 'last_name', 'middle_name', 'timeline_picture', 'profile_picture', 'created_at', 'user_type', 'status')
            ->whereNotIn('id', [auth()->user()->id])
            ->orderBy('id', 'desc')
            ->get();

        return view('admin_user_list', [
            'user' => $user,
            'date_now' => $date_now,
            'user_list' => $user_list,
        ]);
    }

    public function admin_update_user_type(Request $request)
    {
        User::where('id', $request->input('user_list_id'))
            ->update(['user_type' => $request->input('user_type')[$request->input('user_list_id')]]);

        return redirect('admin_user_list');
    }

    public function admin_view_user_timeline($id)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');

        $latest_wall_photos = Wall_attachments::select('attachment')
            ->where('user_id', $id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $wall = Wall::where('user_id', $id)->orderBy('id', 'desc')->get();

        $user = User::find($id);

        return view('admin_view_user_timeline', [
            'user' => $user,
            'wall' => $wall,
            'date_now' => $date_now,
            'latest_wall_photos' => $latest_wall_photos,
        ]);
    }

    public function admin_view_user_photos($id)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        $user = User::find($id);

        $announcement_photos = DB::table("announcements_attachments")
            ->select(
                "attachment"
            )->where('user_id', $id);
        $wall_photos = DB::table("wall_attachments")
            ->select(
                "attachment"
            )
            ->where('user_id', $id)
            ->unionAll($announcement_photos)
            ->get();


        return view('admin_view_user_photos', [
            'user' => $user,
            'date_now' => $date_now,
            'wall_photos' => $wall_photos,
        ]);
    }

    public function admin_user_search(Request $request)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        $user = User::find(auth()->user()->id);

        $user_list = User::select('id', 'name', 'last_name', 'middle_name', 'timeline_picture', 'profile_picture', 'created_at', 'user_type', 'status')
            ->where('last_name', 'like', '%' . $request->input('search_name') . '%')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin_user_search', [
            'user_list' => $user_list,
            'user' => $user,
            'date_now' => $date_now,
        ]);
    }

    public function user_view_user($id)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');

        $latest_wall_photos = Wall_attachments::select('attachment')
            ->where('user_id', $id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $wall = Wall::where('user_id', $id)->orderBy('id', 'desc')->get();

        $user = User::find($id);

        $viewer = User::select('id')->find(auth()->user()->id);

        return view('user_view_user', [
            'viewer' => $viewer,
            'user' => $user,
            'wall' => $wall,
            'date_now' => $date_now,
            'latest_wall_photos' => $latest_wall_photos,
        ]);
    }

    public function user_get_new_feed(Request $request)
    {
        $announcement = Announcements::orderBy('id', 'desc')->first();
        $wall = Wall::orderBy('id', 'desc')->get();

        return view('user_get_new_feed', [
            'wall' => $wall,
            'announcement' => $announcement,
        ]);
    }

    public function user_announcement_reply(Request $request)
    {
        $new = new Announcement_replies([
            'announcements_id' => $request->input('announcement_id'),
            'user_id' => auth()->user()->id,
            'content' => $request->input('content'),
            'user_type' => 'user',
        ]);

        $new->save();

        return redirect()->route('user_announcement', ['id' => $request->input('announcement_id')]);
    }

    public function user_announcement($id)
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        $user = User::find(auth()->user()->id);

        $latest_wall_photos = Wall_attachments::select('attachment')
            ->where('user_id', auth()->user()->id)
            ->take(3)
            ->orderBy('id', 'desc')
            ->get();

        $announcement = Announcements::find($id);

        return view('user_announcement', [
            'user' => $user,
            'announcement' => $announcement,
            'date_now' => $date_now,
            'latest_wall_photos' => $latest_wall_photos,
        ]);
    }

    public function user_announcement_reply_once_more(Request $request)
    {
        $new =  new Announcement_replies([
            'announcements_id' => $request->input('announcement_id'),
            'user_id' => auth()->user()->id,
            'content' => $request->input('content'),
            'user_type' => 'user',
        ]);

        $new->save();

        return redirect()->route('user_announcement', ['id' => $request->input('announcement_id')]);
    }

    public function user_announcement_get_comments(Request $request)
    {
        $announcement_replies = announcement_replies::where('announcements_id', $request->input('announcement_id'))
            ->get();

        return view('user_announcement_get_comments', [
            'announcement_replies' => $announcement_replies,
        ]);
    }
}
