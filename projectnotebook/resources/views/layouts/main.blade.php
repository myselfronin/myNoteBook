<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myNoteBook</title>
    <link rel="stylesheet" href="{{asset('css/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/css/user.css')}}">
</head>

<body>
@yield('header')


@include('inc.nav')
@yield('content')
@include('inc.footer')
</body>


</html>
