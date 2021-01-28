<?php

namespace App\Http\Controllers;
use App\Models\User as User;

// use Illuminate\Support\Facades\Mail;
// use App\Mail\SignUp as SignUp;

use Illuminate\Http\Request;

class InscriptionsController extends Controller
{
    public function inscription(){
        return view('inscription');
    }

    public function form(){
        request()->validate([
            'email' =>['required','email'],
            'name' => ['required'],
            'surname'=>['required'],
            'password' => ['required','confirmed'],
            'password' => ['required'],
            
        ]);

        $user = User::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'name' => request('name'),
            'surname' => request('surname'),
            'profil_img' => cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath(),
        ]);

        // Mail::to($user->email)->send(new SignUp($user));
    }

   
}
