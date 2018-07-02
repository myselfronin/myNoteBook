@extends('layouts.syllabusmain')

@section('content')
    <img src="{{asset('css/assets/img/mechanical.jpg')}}">

    <div>
        @include('inc.tab')
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1">
                <div class="jumbotron">
                    <p></p>
                    <ol>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                        <li>Item 4</li>
                    </ol>
                </div>
                <footer></footer>
                <p> </p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-2">
                <p>Second tab content.</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-3">
                <p>Third tab content.</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-4">
                <p>Tab content.</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-5">
                <p>Tab content.</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-6">
                <p>Tab content.</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-7">
                <p>Tab content.</p>
            </div>
            <div class="tab-pane" role="tabpanel" id="tab-8">
                <p>Tab content.</p>
            </div>
        </div>
    </div>
    <div class="container">
        {{ csrf_field() }}
        @include('inc.messages')
        {!! Form::open(['action' => 'MechanicalController@store', 'method' => 'post']) !!}

        <div class="container">
            {{Form::text('comment','',['class'=>'form-control','placeholder'=>'Join the conversation'])}}

        </div>

        {{Form::submit('Submit',['class'=> 'btn btn-default'])}}
        {!! Form::close() !!}
    </div>
    @include('forum.mechanical');

@endsection