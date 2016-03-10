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
            display: block;
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
    <div class="content">
        <h1>Catégorie de film</h1>
        <hr />
        <p>
            <a href="{{route('categories_creer')}}">Créer une catégorie</a>
        </p>









        @foreach($categories as $category)
        <div class="title"><a href="{{route("categories_voir",
        [
            'id' => $category->id

        ])}}">{{$category->title}}</a></div>

        <p>{!! $category->description !!}</p>

        <p><a href="{{route('categories_supprimer',['id' => $category->id])}}">Delete</a></p>
    @endforeach


    </div>
</div>
</body>
</html>
