@extends('layouts.app')


@section('content')

    <h1>Create Post</h1>
    {{-- Creating a form with Laravel. This form will be used to create a new post in the databse.--}}
    <form method="post" action="/posts"> {{-- Using the post method to store the information inputed into the form.--}}
        {{csrf_field()}}
        <input type="text" name="title" placeholder="Enter title"> {{-- Creating parts of the form where the information will be entered, along with a placeholder to say what information needs to be entered--}}
        <input type="text" name="body" placeholder="Enter body">

        <input type="submit" name="submit"> {{-- This is what will be used to submit the information entered and add it to the database.--}}

    </form>


    @endsection


