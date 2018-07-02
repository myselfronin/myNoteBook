@extends('layouts.main')

@section('header')
    <header>
        @include('inc.navbar')
        <h4>Practice like you've never won.</h4>
        <h4>Perform like you've never lost.</h4></header>
@endsection

@section('content')
    <div class="container post">
        <div class="row">
            <div class="col-md-6 post-title">
                <h1>myNoteBook </h1></div>
            <div class="col-md-6 col-md-offset-0 post-body">
              <p> </p>
                <figure></figure>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail"><img class="thumbnail-notes">
                    <div class="caption">
                        <h3>Notes </h3>
                        <p>here alre all the notes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail"><img class="thumbnail-syllabus">
                    <div class="caption">
                        <h3>Syllabus </h3>
                        <p>here are the syllabus</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail"><img class="thumbnail-blog">
                    <div class="caption">
                        <h3>Blog </h3>
                        <p>here are the blogs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
