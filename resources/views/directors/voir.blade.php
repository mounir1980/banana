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
        <div class="title">Voir le réalisateur {{ $director->lastname }}</div>
        <p><span>année de naissance</span><br/>{{ $director->dob }}</p>
        <p><span>biographie</span><br/>{!! $director->biography !!}</p>
        <p><span>photo</span><br/><img src="{{ $director->image }}" alt=""></p>
        <p><span>note</span><br/>{{ $director->note }}</p>
    </div>
</div>
</body>
</html>
