<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function show(User $user) {
        return view('users.view', ['user'=>$user]);
    }

    public function edit(User $user) {
        if(auth()->user()->id != $user->id && auth()->user()->role!="admin") {
            return redirect()->back()
                ->with('Error',"You cannot edit the profile of other users.");
        }

        $otherusers = null;
        if(auth()->user()->role=="admin") {
            $otherusers = \App\User::where('id','<>',auth()->user()->id)->get();
        }

        return view('users.edit', [
            'user' => $user,
            'otherusers' => $otherusers
        ]);
    }

    public function update(User $user, Request $request) {
        if(auth()->user()->id != $user->id && auth()->user()->role!="admin") {
            return redirect()->back()
                ->with('Error',"You cannot edit the profile of other users.");
        }

        $this->validate($request, [
            'username' => 'required',
            'fullname' => 'required',
        ]);

        $user->update($request->all());

        return redirect("/profile/$user->id")->with('Info','User profile updated.');
    }

    public function changePasswordForm(User $user) {
        if(auth()->user()->id != $user->id && auth()->user()->role!="admin") {
            return redirect()->back()
                ->with('Error',"You cannot change password of other users.");
        }

        return view('users.change-password', compact('user'));
    }

    public function changePassword(User $user, Request $request) {
        if(auth()->user()->id != $user->id && auth()->user()->role!="admin") {
            return redirect()->back()
                ->with('Error',"You cannot change password of other users.");
        }

        $this->validate($request, [
            'password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        if(Hash::check($request['password'], auth()->user()->password)) {
            $user->update([
                'password' => bcrypt($request['new_password']),
            ]);
            return redirect("/profile/$user->id")->with('Info','Your password has been changed.');
        }else {
            return redirect()->back()->with('Error','Invalid current password: ' . $request['new_password']);
        }
    }
}
