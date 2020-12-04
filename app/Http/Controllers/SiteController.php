<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function loginForm() {
        if(!auth()->guest()) {
            return redirect('/dashboard');
        }
        return view('pages.login');
    }

    public function login(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $login = auth()->attempt([
            'username' => $request['username'],
            'password' => $request['password']
        ]);

        if($login) {
            return redirect('/dashboard');
        }else {
            return redirect()->back()->with('Error','Invalid username or password.');
        }
    }

    public function dash() {
        if(auth()->guest()) {
            return redirect('/');
        }
        return view('pages.dash');
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
