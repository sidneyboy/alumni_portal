<?php

namespace App\Http\Controllers;

use App\Models\Graduates_profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Graduates_registration_controller extends Controller
{
    public function graduate_registration(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:graduates_profiles'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        $new_registration = new Graduates_profile([
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'status' => 0,
        ]);

        $new_registration->save();

        return redirect('login')->with('success','Registration Successful');
    }
}
