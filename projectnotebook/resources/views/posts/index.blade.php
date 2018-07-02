@extends('layouts.topmain')

@section('content')
    <div class="jumbotron">
    @if(count($posts)>0)
        @foreach($posts as $post)

                <div class="row">
                    <div class="col-md-4"><img src="{{asset('storage/noimage.jpg')}}"></div>
                    <div class="col-md-7">
                        <h3>{{$post->title}}</h3>
                        <p><small>written by{{$post->user->name}}  {{$post->created_at->diffForHumans()}}</p>
                        <a href ="/posts/{{$post->id}}" class="btn btn-default" role="button">Read</a>
                    </div>


        </div>

        @endforeach
        {{$posts->links()}}
    @endif
    </div>
@endsection
