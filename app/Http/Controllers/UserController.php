<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }
    public function login(Request $request){
        $this->validateLogin($request);

        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return redirect()->route('main');
        }
        return back()
        ->withErrors(['email'=>trans('auth.failed')])
        ->withInput(request(['usuario']));
    }
    protected function validateLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|string',
            'password'=>'required|string'
        ]);
    }
}
