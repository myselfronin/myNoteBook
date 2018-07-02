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
<div class="top-pic">
    @include('inc.navbar')
    <h1 class="text-center">"A person who never made a mistake never tried anything new."</h1>
    <h4 class="text-right"> -Albert Einstein</h4></div>
@include('inc.nav')
@include('inc.messages')
@yield('content')
@yield('form')

<script src="{{asset('css/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('css/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );

</script>

</body>

</html>
