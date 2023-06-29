<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return view('admin_welcome', [
            'user' => $user,
            'date_now' => $date_now,
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
        $myimage = $request->profile_picture->getClientOriginalName();
        $request->profile_picture->move(public_path($destinationPath), $myimage);


        User::where('id', $request->input('user_id'))
            ->update([
                'profile_picture' => $myimage,
            ]);

        return redirect('home');
    }
}
