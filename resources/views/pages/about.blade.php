@extends('app')

@section('content')
    <h1>About Me: Anand Prasad</h1>

    <h2>People I Like</h2>
    <ul>
        @foreach($people_arr as $person)
            <li>{{$person}}</li>

        @endforeach

    </ul>

@stop