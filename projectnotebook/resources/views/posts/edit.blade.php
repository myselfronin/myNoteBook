@extends('layouts.topmain')


@section('form')
    <div class="jumbotron">
        {!! Form::open(['action' => ['PostsController@update',$post->id] ,'method' => 'post']) !!}

        <div class="container">

            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}

        </div>

        <div class="container">

            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body','id'=>'summary-ckeditor'])}}
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit',['class'=> 'btn btn-default'])}}

        </div>


        {!! Form::close() !!}
    </div>

@endsection