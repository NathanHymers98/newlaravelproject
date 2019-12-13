@extends('layouts.app')


@section('content')

    <h1>Edit Post</h1>
    {{-- Creating a form with Laravel. This form will be used to create a new post in the databse.--}}
    <form method="post" action="/posts/{{$post->id}}"> {{-- The action part determines where the information is sent to using the URI, since these posts need to goto the update page along with the update method, I am following the URI for the posts.update page.
                                                        Using the post method to store the information inputed into the form.--}}

        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">{{-- Since Laravel doesn't understand what is being put in the action field above, I am creating this input to solve that.
                                                                The name is a superglobal and the value is PUT because that is the method that Laravel wants in order to put the information in the database--}}


        <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}"> {{-- Creating parts of the form where the information will be entered, along with a placeholder to say what information needs to be entered--}}
        <input type="text" name="body" placeholder="Enter body" value="{{$post->body}}"> {{-- Here I have added the value function to the end of the code, this is to add the information that was found in the PostController method "edit" to the form so that when a user comes to this page with an id in the url, the information about the title and body of that post is already placed in the text boxes for editing.--}}

        <input type="submit" name="submit" value="UPDATE"> {{-- This is what will be used to submit the information entered and add it to the database.--}}

    </form>

    <h1>Delete a post</h1>

    <form method="post" action="/posts/{{$post->id}}">

        {{csrf_field()}}
        <input  type="hidden" name="_method" value="DELETE">

        <input type="submit" value="DELETE">

    </form>


@endsection