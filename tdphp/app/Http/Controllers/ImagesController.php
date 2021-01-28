<?php

namespace App\Http\Controllers;

use App\Models\Image as Image;


use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function new_img(){

         if(auth()->guest()){
            flash("Vous devez être connecté pour accéder à cet page")->error();
             return redirect('/connexion');
        }

        request()->validate([
            'title' =>['required'],
        ]);

        Image::create([
            'title' => request('title'),
            'url_image'=>cloudinary()->upload(request()->file('file')->getRealPath())->getSecurePath(),
            'user_id'=>auth()->id(),

        ]);

       

        flash("Votre talent est en ligne")->success();
        return back();

        
    }

    public function image(){
        $images = Image::orderBy('created_at','desc')
            ->simplepaginate(5);
       
        return view('homepage',[
            'images'=>$images,
            
        ]);
    }
   
}
