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
    </style>
</head>
<body>

<div class="container">
        <h1>Réalisateur</h1>
    @foreach($directors as $director)
        <div class="title"><a href="{{route("directors_voir",
        [
            "id" => $director->id
        ]
        )}}">{{ $director->lastname }}</a></div>

        <p>{{ $director->dob }}</p>
    @endforeach
</div>
</body>
</html>
