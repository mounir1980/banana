<!DOCTYPE html>
<html>
<head>
    <title>lister</title>


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
    <h1>Acteur</h1>
    @foreach($actors as $actor)
        <div class="title"><a href="{{route("actors_voir",
        [
            'id' => $actor->id

        ])}}">{{ $actor->lastname }}</a></div>

        <p>{{ $actor->dob }}</p>
    @endforeach
</div>
</body>
</html>
