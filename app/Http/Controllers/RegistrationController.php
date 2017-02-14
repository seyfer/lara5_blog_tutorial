<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }

    public function store()
    {
        //validate
        $this->validate(request(), [
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required|confirmed',
        ]);

        //create
        $user = User::create(request(['name', 'email', 'password']));

        //sign in
//        \Auth::login($user);
        auth()->login($user);

        //redirect
        return redirect()->home();
    }
}
