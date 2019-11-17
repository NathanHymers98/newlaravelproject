@extends('layouts.app')


@section('content')

    <h1>Contact page</h1>

    @if(count($people))

        @foreach($people as $person)
            <ul>

                <li>{{$person}}</li>

            </ul>

            @endforeach

    @endif

    @endsection