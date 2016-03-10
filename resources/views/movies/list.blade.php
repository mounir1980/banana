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

        h1{
            font-size: 5rem;
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
            <h1>liste de film</h1>

        <p>
            <a href="{{route('movies_creer')}}">Création de film</a>
        </p>
        @foreach($movies as $movie)
        <div class="title"><a href="{{ route("movies_voir",
        [
            "id" => $movie->id
        ]) }}">{!! $movie->title !!}</a></div>

        <p>{!! $movie->description !!}</p>

            <p>
            @if($movie->visible == 1)
            <a href="{{route('movies_invisible',['id' => $movie->id])}}">rendre mon film invisible</a>

            @else

            <a href="{{route('movies_visible',['id' => $movie->id])}}">rendre mon film visible</a>
            @endif
            </p>

        <p>
        @if($movie->cover == 0)
            <a href="{{route('movies_cover',['id' => $movie->id])}}">To change cover on 1</a>

        @else

            <a href="{{route('movies_cover',['id' => $movie->id])}}">To change cover on 0</a>
        @endif
        </p>


    @endforeach
</div>
</body>
</html>
