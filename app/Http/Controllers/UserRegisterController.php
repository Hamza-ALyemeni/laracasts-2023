<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserRegisterController extends Controller
{
    //
    public function create(){
        return view('auth.register');
    }

    public function store(){
        $validated = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required' , 'email' , 'max:245'],
            'password' => ['required' , 'min:8' , 'max:245' , 'confirmed']
        ]);


        $user = User::create($validated);

        Auth::login($user);

        return redirect('/');
    }
}
