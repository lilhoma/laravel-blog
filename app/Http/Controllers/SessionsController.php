<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;


class SessionsController extends Controller
{
    //

    public function create()
    {
        return view('sessions.create');

    }

    public function store()
    {
        // validate the request
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // attemp to auth and log the user in
        // based on the provided credentials

        if (! auth()->attempt($attributes)) {
            // auth failed
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified'
            ]);

            // return back()
            //     ->withInput() 
            //     -> withErrors(['email' => 'Your provided credentials could not be verified']); // $errors 

        }

        // session fixation
        session()->regenerate();
        // redirect with a success flash message
        return redirect('/')->with('success', 'Welcome Back! :D');

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye! :)');
    }
}
