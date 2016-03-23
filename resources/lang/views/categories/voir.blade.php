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
        <div class="title">Voir la catégorie {{ $category->title }}</div>
        <p><span>description</span><br/>{{ $category->description }}</p>
        <p><span>image</span><br/><img src="{{ $category->image }}" alt=""></p>
        <p><span>slug</span><br/>{{ $category->slug }}</p>

    </div>
</div>
</body>
</html>
