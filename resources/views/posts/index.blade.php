@extends('layouts.app')


@section('content')

    <ul>

        @foreach($posts as $post) {{-- Loops through the $posts variable which is coming from the PostController under the index function since this is the index page.--}}

            <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li> {{-- Using the newly created $post variable to select what should be displayed in the list, in this case the posts title and body--}}

        {{-- What the a href part does is it creates a link to another route which in this case is the posts.show page, since the URI of this page takes an id, we need to add that into the link so that it takes the user to the ocrrect page with an id of one of the posts in the database--}}
{{--            <li><a href="{{route('posts.show', $post->id)}}">{{$post->body}}</a></li>                                            --}}{{-- They are entered in curly brackets to indicate that the information is being inputed from the database.--}}

            @endforeach

    </ul>

@endsection