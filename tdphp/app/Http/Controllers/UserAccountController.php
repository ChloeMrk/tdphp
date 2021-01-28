<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public function dashboard(){
        return view('UserAccount/dashboard',[
            'user' => auth()->user(),
        ]);
    }

    public function signout(){
        auth()->logout();

        return redirect('/connexion');
    }

    public function form_password_modification(){
        return view('UserAccount/password_modification');

        flash('Vous devez être connecter pour accéder à cet page')->error();
        return redirect('/connexion');
    }

    public function password_modification()
    {
        request()->validate([
            'password' => ['required','confirmed'],
            'password_confirmation'=>['required']
        ]);

        $users = auth()->user();
        $users->password = bcrypt(request('password'));
        $users -> save();

        flash('Votre mot de passe a bien été modifier')->success();
        return redirect('/dashboard');
    }
}
