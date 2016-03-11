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
            display: block;
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
        <div class="title">Film</div>


    <form method="post"
          action="{{route('categories_enregistrer')}}">
        {{--champ caché--}}
        {{csrf_field()}}
        <label for="title">Titre:</label>
        <input name="title" id="title" />
        <br/>
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="27" rows="5" ></textarea>
        <br>


        <br/><input type="radio" name="langue" id="fr"> <label for="fr">Fr</label><br/>

        <br/><input type="radio" name="langue" id="en"> <label for="en">En</label><br/>

        <br/><input type="radio" name="langue" id="es"> <label for="es">Es</label><br/>

        <br/>
        <label for="annee">Annee:</label>
        <input name="annee" id="annee" />
        <br/>

        <label for="budget">Budget:</label>
        <input name="budget" id="budget" />
        <br/>

        <label for="duree">Duree:</label>
        <input name="duree" id="duree" />
        <br/>

        <label for="date_release">Date_release:</label>
        <input name="date_release" id="date_release" />
        <br/>

        <label for="slug">slug:</label>
        <input name="slug" id="slug" />
        <br>

        <br/><input type="checkbox" name="visible" id="visible"> <label for="visible">Visible</label><br/>

        <br/><input type="checkbox" name="cover" id="cover"> <label for="cover">Cover</label><br/>

        <p><button type="submit">OK!</button></p>

    </form>

    </div>
</div>
</body>
</html>
