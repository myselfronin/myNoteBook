<div class="jumbotron">
    <div class="container">
        @if(count($electricals)>0)
            @foreach($electricals as $electrical)
                <p style="font-size:20px;"><b>{{$electrical->user->name}}</b>  <span style="font-size:14px">{{$electrical->created_at->diffForHumans()}}</span></p>
                <p style="font-size:20px;">{{$electrical->comment}}<p>

                <hr>


                @if(count($replies)>0)
                    @foreach($replies as $reply)
                        @if($reply->comment_id==$electrical->id)
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
                        {{ Form::hidden('comment_id',$electrical->id) }}
                        {{ Form::hidden('faculty',$electrical->faculty) }}

                    </div>

                    {{Form::submit('Reply',['class'=> 'btn btn-alert'])}}
                    {!! Form::close() !!}
                </div>
            @endforeach
                {{$electricals->links()}}
        @endif

    </div>
