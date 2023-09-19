<?php

namespace App\Http\Controllers;

use App\Models\Career_path;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;


class Graduates_registration_controller extends Controller
{
    public function graduate_registration(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'year_graduated' => ['required'],
        ]);

        

        $new_registration = new User([
            'name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'user_type' => 'user',
            'status' => 0,
            'year_graduated' => $request->input('year_graduated'),
        ]);

        $new_registration->save();

        $encrypted_id = Crypt::encrypt($new_registration->id);
        return redirect()->route('career_path', ['id' => $encrypted_id])->with('success', 'Please update your career path');
    }

    public function career_path($id)
    {
        return view('career_path')
            ->with('id', Crypt::decrypt($id));
    }

    public function career_path_save(Request $request)
    {
       
        $destinationPath = 'image';
        $myimage = uniqid() . '-' . $request->file->getClientOriginalName();
        $request->file->move(public_path($destinationPath), $myimage);

        $new = new Career_path([
            'career' => $request->input('career'),
            'description' => $request->input('description'),
            'from' => $request->input('from'),
            'user_id' => $request->input('user_id'),
            'file' => $myimage,
        ]);

        $new->save();

        return redirect('login')->with('success', 'Registration Successful');
    }
}
