<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserCreateRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ConnectController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
         return view('connect.login');
    }
    public function PostLogin(Request $request)
    {
    request()->validate([
        'email'=>'required|email',
        'password' =>'required'
    ]);

    if (Auth::attempt(['email' =>$request->email, 'password' => $request->password],true)) {
         return redirect('/');
    }
    return back()
    ->withErrors(['password' => trans('auth.failed')])
    ->withInput(request(['password']));
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
    }
    public function getRegister()
    {
         return view('connect.register');
    }

    public function PostRegister(UserCreateRequest $request)
    {
         $request->validated();
         $user = User::create([
          'name'=>$request->name,
          'last_name'=>$request->last_name,
          'email'=> $request->email,
          'password'=>$request->password,
         ]);
         return redirect()->route('login.view')->with('info','Se ha registrado su usuario con exito');
    }

}
