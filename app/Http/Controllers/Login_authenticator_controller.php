<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Graduates_profile;
use Illuminate\Http\Request;

class Login_authenticator_controller extends Controller
{
    public function login_authenticator(Request $request)
    {
        return $request->input();
    }

    public function admin_login()
    {
        return view('auth.admin_login');
    }
}
