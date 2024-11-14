<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use Session;
use Redirect;


class AuthController extends Controller
{
    public function Display()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard'); // Redirect to dashboard if logged in
        } else {
            return view('login');
        }
    }

    public function login_check(Request $res)
    {
        $error = $res->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt($res->only('email', 'password'))) {
            return redirect('/dashboard');
        } else {
            return Redirect::back()->withErrors(['error' => '<div class="alert alert-danger alert-dismissible"> <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong>!!! Login Detail are not valid!!!</div>']);
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
