<!DOCTYPE html>
<html>
<head>
    <title>creer</title>


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

        form{
            width: 15%;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="content">
        <div class="title">Acteur</div>
        <form method="post"
              action="{{route('actors_enregistrer')}}">
            {{--champ caché--}}
            {{csrf_field()}}

            <label for="biography">Biography:</label>
            <input name="biography" id="biography" />
            <br/>

            <label for="lastname">Lastname:</label>
            <input name="lastname" id="lastname" />

            <br>
            <label for="firstname">Firstname:</label>
            <input name="firstname" id="firstname" />
            <br>

            <label for="city">City:</label>
            <input name="city" id="city" />
            <br>

            <label for="image">Image:</label>
            <input name="image" id="image" />
            <br>

            <p><button type="submit">Ok!</button></p>

        </form>
    </div>
</div>
</body>
</html>
