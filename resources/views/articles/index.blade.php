@extends('layouts.app')

@section('content')
    <h3>List of articles:</h3>
    <ul>
        @foreach($articles as $article)
            <li>
                {{--<h3><a href="articles/{{ $article->id }}">{{$article->title}}</a></h3>--}}

                <h3><a href="{{url('/articles', $article->id)}}">{{$article->title}}</a></h3>

                <p>Time: {{$article->published_at}}</p>

                <a href={{route('articles.edit', $article->id)}}>Edit this article</a>


            </li>
        @endforeach
    </ul>
   @stop

