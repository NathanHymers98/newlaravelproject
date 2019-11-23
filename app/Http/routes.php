<?php

use App\Country;
use App\Post; // Importing the Post model so that I can use Eloquent ORM
use App\User;
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


/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
|
|
*/


//Route::get('/insert', function(){
//
//    DB::insert('insert into posts(title, body) values(?, ?)', ['Laravel is made in PHP', 'This is a body of text so there should be a lot of it. YEEE boi']);
//
//});

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
//   $delete = DB::delete('delete from posts where id = ?', [1]); //Creating the $delete variable and giving it a raw SQL query to delete en entry from the table posts.
//
//    return $delete;
//
//});


/*
|--------------------------------------------------------------------------
| ELOQUENT ORM
|--------------------------------------------------------------------------
|
|
*/

//Route::get('/read', function(){
//
//   $posts = Post::all(); // Creating a variable and calling everything from the table posts in the database.
//
//    foreach($posts as $post){ //Looping through the $posts variable which is calling everything from the database
//        return $post->title; // We can call any column from the database table posts because we are looping through all the values.
//                            // In this instance we are returning what is in the title column of the database table posts.
//    }
//
//});

//Route::get('/find', function(){
//
//    $post = Post::find(1); // This code is similar to that above, however this code looks at a specific database entry in the posts table.
//                            // This example if looking for the entry with the id of 1.
//    return $post->body;  // If it finds the entry with the id of 1, it will return the values, in this case the text that is in the body column.
//
////    foreach($posts as $post){
////        return $post->body;
////    }
//
//});


//Route::get('/findwhere', function(){
//
//    //Using the where method that takes 2 parameters, the first is what it is looking for, and the second is a specific value
//    // In this example, I am looking in the id column for the a entry that has the id of 2.
//    // Then I am chaining methods together, first I am ordering the output by the id and in descending order.
//    // Then I am telling it to take 1 entry and finally using the get method to bring it to the page.
//    $posts = Post::where('id',2)->orderBy('id', 'desc')->take(1)->get();
//
//    return $posts;
//
//});

//Route::get('/findmore', function(){
//
////   $posts = Post::findOrFail(4); // find or fail method means that if the program cannot find what you are looking for it will display an error message.
//////
//////   return $posts;
//
//    $posts = Post::where('users_count', '<', 50)->firstOrFail(); // This code uses the where method with the values users_count and less than 50.
//                                                                    // The first or fail method means that it takes out the first or it fails.
//
//});


//Route::get('/basicinsert', function (){
//
//   $post = new Post; // In order to update a record, I would have change this code to $post = new Post::find(the id of record I want to update);
//
//   $post->title = "New Eloquent title insert2"; // Targeting the title column in the posts database table and creating a new entry there.
//   $post->body = "Look at this content2"; // Same as above, but targeting the body column.
//
//   $post->save(); // This save method will insert the record and will also update it if needs be.
//
//});

//Route::get('/basicupdate', function (){
//
//   $post = Post::find(1); // Does not need the "new" attached to it because it is static.
//
//   $post->title = "This title has been updated";
//   $post->body = "This body has been updated";
//
//   $post->save();
//
//});

//Route::get('/create', function (){
//
//    Post::create(['title'=>'the create method', 'body'=>'I\' am learning PHP']); // Creating a new entry in the posts database table.
//
//});

//Route::get('/update', function (){
//
//    Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'New title', 'body'=>'New bodytext']);
//
//
//});

//Route::get('/delete', function(){ // This is one way to delete data from a database table.
//
//    $post = Post::find(1); // Create a static post variable from the model and telling it to find the entry which has the id as 1.
//
//    $post->delete(); // Using the delete method to execute the code above.
//
//});

//Route::get('/delete2', function(){ // This is another way to delete a record from the database
//
//   Post::destroy(2); // Using the model Post and the destroy method and passing it an id, the entry that has this id will be deleted.
//
//});
//
//
//Route::get('/delete3', function(){
//
//   Post::destroy([3,4]); // Does the same as the code above, except this time I am deleting two entries at the same time, with the ids 3 and 4.
//
////   Post::where('is_admin', 0)->destroy(); // This code uses the where method to find all entries that have the is_admin column as 0 and deletes them.
//
//});


//Route::get('/softdelete', function (){
//
//    Post::find(5)->delete();
//
//});
//
//Route::get('/readsoftdelete', function (){

//   $post =  Post::find(1);
//
//    return $post;

//   $post =  Post::withTrashed()->where('is_admin', 0)->get(); // Show all the entries in the database table, this includes entries that are trashed and are not trashed.
//
//   return $post;

//    $post = Post::onlyTrashed()->where('is_admin', 0)->get(); // Show what entries in the database have been moved to trash.
//                                                                // Using where method to identify the trashed items that meet those values.
//
//    return $post;
//
//});

//Route::get('/restore', function(){
//
//    Post::withTrashed()->where('is_admin', 0)->restore();
//});


//Route::get('/forcedelete', function(){
//
//   Post::onlyTrashed()->where('is_admin', 0)->forcedelete();
//
//});


/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
|
|
*/

// This is a one to one relationship

//Route::get('/user/{id}/post', function($id){
//
//    return User::find($id)->post->title; // Finds a user via their id and shows a post which they are related to.
//                                    // Since I am using an id in the URL, I gave the function and the find method the parameter of $id.
//                                    // I did this so that when typed in the URL, you could put any id number so long as it exists and it will display the post that is related to that user id.
//
//});

// This is an inverse relationship. It is similar to one to one, however it works the other way around.

//Route::get('/post/{id}/user', function ($id){
//
//    return Post::find($id)->user->name; // Finds a post via their id and shows a user which is related to it.
                                            // Note: "return" only allows for one value to be returned.
//
//});

// This is a one to many relationship.

//Route::get('/posts', function (){
//
//   $user =  User::find(1); // Creating a variable $user which finds all the users with the id of 1 in the database.
//
//   foreach($user->posts as $post){ // Creating a foreach loop to get the user and pull out all the users posts and define them as $post
//
//       echo $post->title . "</br>"; // echoing the recently defined $post to show all the titles of the posts that it could find that is related to the user id of 1.
//                                    // By using "echo" instead of "return" it allows me to show multiple results in the browser.
//
//   }
//
//});

//Many to many relationship

//Route::get('/user/{id}/role', function ($id){
//
//    $user = User::find($id); // Creating a variable of $user which finds the users id.
//
//    foreach($user->roles as $role) { // Getting the user and pulling the roles of that user and defining it as $role
//
//        return $role->name; //Using the defined $role to show the name of the role which a user has.
//                            // For example the user with the id 1 is Nathan and the role that it has is admin.
//                            // So it will print "admin" in the browser because that is the role which is has pulled from the database.
//
//    }
//
//});

// Accessing the intermediate table / pivot table.

//Route::get('user/pivot', function (){
//
//   $user = User::find(1);
//
//   foreach($user->roles as $role){
//
//       return $role->pivot->created_at;
//
//   }
//
//});
//
//Route::get('/user/{id}/country', function($id){
//
//   $country =  Country::find($id); //Creating a variable which finds the country id.
//
//   foreach ($country->posts as $post){ // Using the function "posts" that is created in the Country model too pull the information that we need.
//
//       return $post->title; // Pulls the post that belongs the user that is from a specific country using the country_id
//   }
//
//});

// Polymorphic relates

Route::get('/user/photos', function (){

   $user = User::find(1);

    foreach ($user->photos as $photo){

       return $photo->path;

   }

});

Route::get('/post/{id}/photos', function ($id){

    $post = Post::find($id);

    foreach ($post->photos as $photo) {

        echo $photo->path . "</br>";

    }

});











/*
|--------------------------------------------------------------------------
| Web middleware
|--------------------------------------------------------------------------
|
|
*/

Route::group(['middleware' => ['web']], function(){



});
