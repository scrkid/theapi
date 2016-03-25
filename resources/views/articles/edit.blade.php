@extends('layouts.app')

@section('content')

    <h1>Edit: {{$article->title}}</h1>

    <hr>

    {{--to fill up the form with article--}}
    {!! Form::model($article, ['method'=>'PATCH','url'=>'articles/'.$article->id]) !!}





    <div class="form-group">
        {!! Form::label('title', 'Title: ') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body', 'Body: ') !!}
        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Article', ['class'=>'btn btn-primary form-control']) !!}
    </div>



    {!! Form::close() !!}

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>

            @endforeach
        </ul>
@endif

@stop
