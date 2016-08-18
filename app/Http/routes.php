<?php

use App\Post;

Route::get('/softdelete', function() {
   Post::find(6)->delete();
});
//Route::get('/delete', function()  {
//   $post = Post::find(1);
//   $post->delete();
//});
//
//Route::get('/delete2', function() {
//   Post::destroy([3,4]);
//});
//
//Route::get('/delete3', function() {
//   Post::where('title','new php title')->delete();
//});

//Route::get('/update',function() {
//   Post::Where('id',2)->Where('is_admin',0)->update(['title'=>'new php title','body' =>'i love my instructor']);
//});

//Route::get('/create', function() {
//    Post::create(['title'=>'the create method','body'=>'Now i am learning a lot']);
//});

//Route::get('/basicupdate',function() {
//    $post = Post::find(1);
//    $post->title = 'new eloquent title update';
//    $post->save();
//
//});

//Route::get('/findMore',function() {
//    $posts = Post::findOrFail(1);
//    return $posts;
//});

//Route::get('/findWhere',function() {
//    $posts = Post::where('id',2)->orderBy('id','desc')->take(1)->get();
//    return $posts;
//});

//Route::get('/find',function(){
//    $post = Post::find(1);
//    return $post->title;
//});


//
//use App\Post;
//
//Route::get('/read',function(){
//   $posts = Post::all();
//
//    foreach ($posts as $post) {
//        return $post->title;
//
//    }
//});



//Route::get('/post/{id}','PostsController@index');

//Route::resource('posts','PostsController');
//
//Route::get('post/{id}/{firstName}/{lastName}','PostsController@showPost');
//
//
//Route::get('/contact','PostsController@contact');

/*
|--------------------------------------------------------------------------
| Databaze raw SQL queries
|--------------------------------------------------------------------------
*/

//Route::get('/insert',function() {
//    DB::insert('insert into posts(title,body) values(?,?)',['PHP with Laravel','Larabel is good !!!']);
//});
//
//Route::get('/read',function() {
//    $results = DB::select("select * from posts where id = ?",[1]);
//
//    foreach ($results as $post)
//    {
//        return $post->title;
//    }
//
//});

//Route::get('/update',function(){
//   $updated = DB::update('update posts set title = "update title" where id = ?', [1]);
//    return $updated;
//});
//
//Route::get('/delete',function(){
//   $deleted = DB::delete('delete from posts where id = ?',[1]);
//    return $deleted;
//});



//Route::get('/', function () {
//    return view('welcome');
//});
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
