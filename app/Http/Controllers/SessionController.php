<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{


    /**
     * SessionController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }

    public function create()
    {
        return view('sessions.login');
    }

    public function store()
    {
//        dd(auth()->attempt(request(['email', 'password'])));

//        $user = User::first()->where(['email' => request('email')])->first();
//        auth()->login($user);

        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                                          'message' => 'Check your login data'
                                      ]);
        }

        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
