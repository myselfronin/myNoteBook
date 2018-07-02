@extends('layouts.topmain')

@section('content')
    <div class="jumbotron">
        <a href="{{url('/posts')}}" class="btn btn-outline-secondary">Go Back</a>
        <hr>

        </div>
        <div class="col-md-8">
            <div class="thumbnail"><img>
                <div class="caption"></div>
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
                {!!Form::open(['action'=>['PostsController@destroy', $post->id],'method'=> 'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
                {!!Form::close()!!}
                <hr>
                <hr>
                <p>{!!$post->body!!}</p>

            </div>
        </div>
    <hr>
    <div class="container">
        <div class="card-block">
            {!! Form::open(['action' => 'PostsController@store', 'method' => 'post']) !!}

            <div class="container">
                {{Form::text('body','',['class'=>'form-control','placeholder'=>'Comment here'])}}
                {{ Form::hidden('post_id',$post->id) }}

            </div>

            {{Form::submit('Comment',['class'=> 'btn btn-alert','name'=>'form2'])}}
            {!! Form::close() !!}
        </div>
    </div>
    <div class="jumbotron">
        <div class="container">

            @if(count($comments)>0)
                @foreach($comments as $comment)
                    @if($comment->post_id==$post->id)
                    <p style="font-size:20px;"><b>{{$comment->user->name}}</b>  <span style="font-size:14px">{{$comment->created_at->diffForHumans()}}</span></p>
                    <p style="font-size:20px;">{{$comment->comment}}</p>

                    <hr>


                    @if(count($replies)>0)
                        @foreach($replies as $reply)
                            @if($reply->comment_id==$comment->id)
                                <p style="margin-left:50px ; font-size:14px;"><b style="font-size:20px;">{{$reply->user->name}}</b>{{$reply->created_at->diffForHumans()}}</p>
                                <p style=" margin-left:100px; font-size:20px;"> {{$reply->reply}}</p>
                            @endif
                        @endforeach
                    @endif



                    <div style="margin-left:150px; "class="container">
                        {{ csrf_field() }}
                        {!! Form::open(['action' => 'ReplyController@store', 'method' => 'post']) !!}

                        <div class="container">
                            {{Form::text('reply','',['class'=>'form-control','placeholder'=>'Reply'])}}
                            {{ Form::hidden('comment_id',$comment->id) }}
                            {{ Form::hidden('faculty',$comment->faculty) }}

                        </div>

                        {{Form::submit('Reply',['class'=> 'btn btn-alert'])}}
                        {!! Form::close() !!}
                    </div>
                    @endif
                @endforeach
            @endif



        </div>
    </div>
@endsection
