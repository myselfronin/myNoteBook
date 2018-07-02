@extends('layouts.topmain')


@section('form')
    <div class="jumbotron">
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'post','enctype'=>'multipart/form-data']) !!}

    <div class="container">

        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}

    </div>

    <div class="container">

        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Body','id'=>'summary-ckeditor'])}}

    </div>
        <div class="container">
            {{Form::file('cover_image')}}
            {{Form::submit('Submit',['class'=> 'btn btn-default','name'=>'form1'])}}
            {!! Form::close() !!}
        </div>

    </div>

@endsection