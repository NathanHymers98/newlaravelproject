@extends('layouts.app')


@section('content')

    <h1><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></h1> {{-- Creating links so that once a post has been clicked on, it shows both the title and body and gives links to where they can be updated.--}}
    <h1><a href="{{route('posts.edit', $post->id)}}">{{$post->body}}</a></h1>


@endsection