<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::group([
    'middleware'=>'App\Http\Middleware\Auth',
],function(){
    Route::get('/dashboard','App\Http\Controllers\UserAccountController@dashboard');

   
    Route::get('/signout','App\Http\Controllers\UserAccountController@signout');
    


    Route::get('/password_modification','App\Http\Controllers\UserAccountController@form_password_modification');
    Route::post('/password_modification','App\Http\Controllers\UserAccountController@password_modification');
});

//Inscription

Route::get('/inscription','App\Http\Controllers\InscriptionsController@inscription');

Route::post('/inscription','App\Http\Controllers\InscriptionsController@form');

//Connexion
Route::get('/connexion','App\Http\Controllers\ConnexionController@form');

Route::post('/connexion','App\Http\Controllers\ConnexionController@connexion' );


Route::post('/new_img','App\Http\Controllers\ImagesController@new_img');

Route::get('/homepage','App\Http\Controllers\ImagesController@image');

