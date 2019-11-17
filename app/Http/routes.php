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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('posts', 'PostController');

//Route::get('/contact', 'PostController@contact');
//
//Route::get('/post/{id}/{name}', 'PostController@show_posts');
//
//Route::get('/insert', function(){
//
//    DB::insert('insert into posts(title, body) values(?, ?)', ['Laravel is made in PHP', 'This is a body of text so there should be a lot of it.']);
//
//});
//
//Route::get('/read', function(){
//
//  $results = DB::select('select * from posts where id = ?', [1]);
//
//   foreach($results as $post) {
//
//        return $post->title;
//}});
//
//Route::get('/update', function(){
//
//    $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
//
//    return $updated;
//
//});
//
//Route::get('/delete', function(){
//
//    DB::delete('delete from posts where id = ?', [1]);
//
//    return "Post has been deleted";
//
//});
