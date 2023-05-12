<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function postSignin(Request $request)
    {
	echo "jk";
    }
    public function postReg(Request $request)
    {
        $user = User::create([
            'email'    => $request->input('email'),
            'name'     => $request->input('name'),
            'password' => bcrypt($request->input('password'))
        ]);
        $valid = $_request->validate([
            'email' =>  'required|min:4|max:100',
            'password' =>  'required|min:4|max:100',
        ]);

        Auth::loginUsingId($user->id);

        return redirect()
                ->route('home')
                ->with('success', 'Вы успешно зарегистрировались');
    }
}
