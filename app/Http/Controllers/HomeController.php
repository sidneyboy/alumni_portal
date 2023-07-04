<?php

namespace App\Http\Controllers;


use App\Models\Announcements;
use App\Models\Announcements_attachments;
use App\Models\Announcement_replies;
use App\Models\User;
use App\Models\Wall;
use App\Models\Wall_attachments;
use Illuminate\Http\Request;

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
    public function index()
    {
        date_default_timezone_set('Asia/Manila');
        $date_now = date('Y-m-d');
        $user = User::find(auth()->user()->id);
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

        return view('admin_welcome', [
            'user' => $user,
            'wall' => $wall,
            'date_now' => $date_now,
            'announcement' => $announcement,
            'announcement_counter' => $announcement_counter,
            'latest_announcement_photos' => $latest_announcement_photos,
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

        return redirect()->route('announcement', ['id' => $request->input('announcement_id')]);
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

        return redirect()->route('announcement', ['id' => $request->input('announcement_id')]);
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
}
