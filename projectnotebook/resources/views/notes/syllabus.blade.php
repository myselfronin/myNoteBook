

        <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Page</title>
    <link rel="stylesheet" href="{{asset('css/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/assets/css/user.css')}}">
</head>

<body>
@include('inc.nav')
<img src="{{asset('css/assets/img/pexels-photo-669988.jpg')}}">
<p></p>
<div class="container">
    <div class="col-md-4"><img src="{{asset('css/assets/img/civil.jpg')}}">
        <h3> <a href="{{route('bce')}}">CIVIL</a></h3></div>
    <div class="col-md-4"><img src="{{asset('css/assets/img/pexels-photo-574071.jpg')}}">
        <h3> <a href="{{route('bct')}}">COMPUTER </a></h3></div>
    <div class="col-md-4"><img src="{{asset('css/assets/img/electrical.jpg')}}">
        <h3> <a href="{{route('bel')}}">ELECTRICAL </a></h3></div>
    <div class="col-md-4"><img src="{{asset('css/assets/img/electronics.jpg')}}">
        <h3> <a href="{{route('bex')}}">ELECTRONICS</a></h3></div>
    <div class="col-md-4"><img src="{{asset('css/assets/img/geomatics.jpg')}}">
        <h3> <a href="{{route('bge')}}">GEOMATICS</a></h3></div>
    <div class="col-md-4"><img src="{{asset('css/assets/img/mechanical.jpg')}}">
        <h3> <a href="{{route('bme')}}">MECHANICAL </a></h3></div>
</div>
<footer>
    <h5>myNoteBook© 2018</h5></footer>
<script src="{{asset('css/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('css/assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>