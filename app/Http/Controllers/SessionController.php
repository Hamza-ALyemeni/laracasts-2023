<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //
    public function create(){
        return view('auth.login');
    }

    public function store(){
        $validated = request()->validate([
            'email' => ['required' , 'email' , 'max:245'],
            'password' => ['required' , 'min:8' , 'max:245']
        ]);

       // dd($validated);

        //Auth::attempt($validated);
        if(!Auth::attempt($validated)){
            // return back()->withErrors([
            //     'email' => 'The provided credentials do not match our records.'
            // ])->onlyInput('email');
            throw ValidationException::withMessages([
                'email' => 'The provided credentials do not match our records.'
            ]);
        }

        request()->session()->regenerate();

        return redirect('/jobs');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/');
    }
}
