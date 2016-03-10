<!DOCTYPE html>
<html>
<head>
    <title>voir</title>


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
    </style>
</head>
<body>

<div class="container">
    <div class="content">
        <div class="title">Voir le film {{ $movie->title }}</div>
        <p><span>description</span><br/>{!! $movie->description !!}}</p>
        <p><span>synopsis</span><br/>{!! $movie->synopsis !!}}</p>
        <p><span>date_release</span><br/>{{ $movie->date_release }}</p>
        <p><span>image</span><br/><img src="{!! $movie->image !!}}" alt=""></p>
        <p><span>durée</span><br/>{{ $movie->durée }}</p>
        <p><span>budget</span><br/>{{ $movie->budget }}</p>

    </div>
</div>
</body>
</html>
