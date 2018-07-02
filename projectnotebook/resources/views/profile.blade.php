<!DOCTYPE html>
<html>
<head>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .title {
            color: grey;
            font-size: 18px;
        }

        button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        button:hover, a:hover {
            opacity: 0.7;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/assets/bootstrap/css/bootstrap.min.css')}}">
</head>
@include('inc.nav')
<body>

<h2 style="text-align:center">User Profile Card</h2>

<div class="card">
    <img src="/w3images/team2.jpg" alt="John" style="width:100%">
    <h1>John Doe</h1>
    <p class="title">CEO & Founder, Example</p>
    <p>Harvard University</p>

    <p><button>Contact</button></p>
</div>

</body>
</html>
