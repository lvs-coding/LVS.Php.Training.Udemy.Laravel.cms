<?php

//Route::get('/post/{id}','PostsController@index');

//Route::resource('posts','PostsController');
//
//Route::get('post/{id}/{firstName}/{lastName}','PostsController@showPost');
//
//
//Route::get('/contact','PostsController@contact');

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

Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('/about', function () {
//    return "Hi about page";
//});
//
//Route::get('/contact', function () {
//    return "hi i'm contact";
//});
//
//Route::get('/post/{id}', function ($id) {
//    return "This is post number " . $id;
//});
//
//Route::get('/admin/posts/example', array('as'=>'admin.home',function() {
//    $url = route('admin.home');
//    return "this is url " . $url;            
//}));
