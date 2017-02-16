<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\Welcome;
use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }

    public function store(RegistrationRequest $registrationRequest)
    {
        //validate
//        $this->validate(request(), [
//            'name'     => 'required',
//            'email'    => 'required|email',
//            'password' => 'required|confirmed',
//        ]);

        //create
        $user = User::create(request(['name', 'email', 'password']));

        //sign in
//        \Auth::login($user);
        auth()->login($user);

        \Mail::to($user)->send(new Welcome($user));

        session()->flash('message', 'Registration completed');

        //redirect
        return redirect()->home();
    }
}
