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

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="content">
        <div class="title">Liste d'acteurs</div>
    </div>
    @foreach($actors as $actor)
        <h3>{{ $actor->lastname }}</h3>
        <p>{{ $actor->dob }}</p>
    @endforeach
</div>
</body>
</html>
