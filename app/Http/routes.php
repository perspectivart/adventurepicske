<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// show welcome page
Route::get('/', function () {
    return view('welcome');
});

// log in admin
Route::get('/admin/login',"UserAuth@authenticate");

//register admin
Route::get('/admin/register',"UserAuth@register");

//return admin home
//Route::get('/admin/home',"UserAuth@authenticate");

//send blogpost
//Route::get('/admin/send/post',"UserAuth@authenticate");

//view posts
//Route::get('/admin/view/post',"UserAuth@authenticate");

//send mails
//Route::get('/admin/send/mail',"UserAuth@authenticate");
