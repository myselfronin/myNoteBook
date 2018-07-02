<ul class="nav nav-pills categories">
    <li class="active"><a href="{{url('/')}}">Home </a></li>
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Notes<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li role="presentation"><a href="{{url('/notes/bce')}}">Civil Engineering</a></li>
            <li role="presentation"><a href="{{url('/notes/bct')}}">Computer Engineering</a></li>
            <li role="presentation"><a href="{{url('/notes/bel')}}">Electrical Engineering</a></li>
            <li role="presentation"><a href="{{url('/notes/bex')}}">Electronics Engineering</a></li>
            <li role="presentation"><a href="{{url('/notes/bme')}}">Mechanical Engineering</a></li>
            <li role="presentation"><a href="{{url('/notes/bge')}}">Geomatics Engineering</a></li>
        </ul>
    </li>

    <li><a href="{{route('syllabus')}}">Syllabus </a></li>
    <li><a href="{{route('posts.index')}}">BLog </a></li>
</ul>