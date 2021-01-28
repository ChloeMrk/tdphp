<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profil(){
        $email = request('email');
        $user = User::all()->where('email',$email)->firstOrFail();
        

        if($user == auth()->user()){
            return redirect('/dashboard');
        }
    }
}
