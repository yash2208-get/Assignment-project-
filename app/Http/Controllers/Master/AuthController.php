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
        }
        
        // Render the login view if user is not authenticated
        return view('login');
    }
    public function Sigin()
    {
        return view('siginPage');
    }
    public function Sigin_check(Request $res)
    {
        $error=$res->validate([
            'Username'=>'required|min:2|unique:users,name,NULL,id,deleted_at,NULL/',
            'contact_number'=>'required | digits:10',
            'email'=>'required | email|unique:users,email,NULL,id,deleted_at,NULL',
            'password'=>'required | min:4',
        ]);

            $login_value=new User;
            $login_value->name=$res->Username;
            $login_value->email=$res->email;
            $login_value->phone=$res->contact_number;
            $login_value->password=Hash::make($res->password);
            $result=$login_value->save();
            if(Auth::attempt($res->only('email','password')))
            {
                return redirect('/dashboard');
            }
            else
            {
                return redirect('/sigin_page')->withError('error');
            }

    }
    public function login_check(Request $res)
    {
        $error=$res->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(Auth::attempt($res->only('email','password')))
            {
                return redirect('/dashboard');
            }
        else
        {
            // $error="Login Detail are not valid";
            return Redirect::back()->withErrors(['error' =>'  <div class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Error!</strong>!!! Login Detail are not valid!!!
        </div>']);
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/login');
    }
}
