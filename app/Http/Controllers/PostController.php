<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;


if (version_compare(PHP_VERSION, '5.5.9', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}
class PostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all(); // Creating a variable  which will bring all the data in the posts table in the database.

        return view('posts.index', compact('posts')); // Returns to the index view and uses the compact function which will take any name it finds and make it a variable. (It will add the $ sign to them)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->all(); // This code would get all the data that is passed in the form once it has been submitted and display it.

       // return $request->get('title'); // Gets the data from only the title input from the form and displays it.



        Post::create($request->all()); // Takes all the data that was entered in the form and creates a new entry in the database.

        return redirect('/posts');

//        $input = $request->all();
//
//        $input['title'] = $request->title;  // These 4 lines of code achieve the same goal of saving the forms information to the database.
//        $input['body'] = $request->body;
//
//        Post::create($request->all());

//        $post = new Post; // Creating a new object called $post
//
//        $post->title = $request->title; // Using this object and its title field in the database and assigning it the value of what was submitted in the form under 'title'.
//        $post->body = $request->body;
//
//        $post->save(); // Saves it to the database
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id); // Finding a post with an id that is entered into the browser

        return view('posts.show', compact('post')); // Returning the information found to the posts.show view so that the text boxes will be populated with the information of the posts ready to be edited, using the compact function to tell the view that it needs a $ sign before posts because it is dealing with a variable.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id); // Finds the id of the post

        $post->update($request->all()); // Updates all the information that was passed to it via the $request variable

        return redirect('posts'); // Once it has successfully updated, redirects to the posts index page.
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::whereId($id)->delete(); //  Looks at the post id is what passed and then deletes it from the database.

        return redirect('posts');
    }

    public function contact(){

        $people = ['name1', 'name2', 'name3']; // Creating an array

        return view('contact', compact('people')); // Returning the created array to the contact view.
    }

    public function show_posts($id, $name){ // This method passes the $id and $name values.

        return view('post', compact('id', 'name')); // Returning the values of id and name to the post view where they can be used.
    }
}
