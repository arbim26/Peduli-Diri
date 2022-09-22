<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
      return view('login');
    }

    public function register()
    {
      return view('register');
    }

    public function postlogin(Request $request)
    {
      // (Auth::guard('admin')->attempt((['email' => $request->email, 'password' => $request->password])))
       if(Auth::guard('user')->attempt((['email' => $request->email, 'password' => $request->password]))) {
          return redirect('/dashboard');
        }elseif(Auth::guard('admin')->attempt((['email' => $request->email, 'password' => $request->password]))) {
          return redirect('/duser');
        }
        return redirect('/login');
    }

    public function registernew(Request $request)
    {
        $this->validate($request, [
          'name'=> 'required',
          'nik'=> 'required',
          'email'=> 'required',
          'password'=> 'required',
        ]);
        // dd($request);
        User::create([
            'name' =>$request->name,
            'nik' =>$request->nik,
            'email' =>$request->email,
            'password' =>bcrypt($request->password),
            'remember_token' =>Str::random(60)
        ]);

        return redirect('/login');
    }

    public function logout()
    {
      if(Auth::guard('user')->check()){
        Auth::guard('user')->logout();
      }
      return redirect('/');
    }
}
