<!DOCTYPE html>
<html>
<head>
    <title>lister</title>

    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Schoolbell' rel='stylesheet' type='text/css'>

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Schoolbell', cursive;
            color: purple;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }

        span {
            color: black;
            font-size: 3rem;
            text-transform: uppercase;
        }
        p{
            font-size: 2rem;
        }
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>

<div class="container">

        @foreach($movies as $movie)
        <div class="title"><a href="{{ route("movies_voir",
        [
            "id" => $movie->id
        ]) }}">{{ $movie->title }}</a></div>

        <p>{!! $movie->description !!}</p>
    @endforeach
</div>
</body>
</html>
