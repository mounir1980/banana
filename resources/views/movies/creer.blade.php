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
              action="{{route('movies_enregistrer')}}">
            {{--champ caché--}}
            {{csrf_field()}}
            <label for="title">Titre:</label>
            <input name="title" id="title" />
            <br/>
            <label for="description">Description:</label>
        <textarea name="description" id="description" cols="27" rows="5" >

        </textarea>
            <br>
            <label for="synopsis">Synopsis:</label>
            <input name="synopsis" id="synopsis" />
            <br>

            <label for="budget">budget:</label>
            <input name="budget" id="budget" />
            <br>

            <label for="annee">annee:</label>
            <input name="annee" id="annee" />
            <br>

            <P>
            <select name="version" id="version">
                <option value="VO">VO</option>
                <option value="VOST">VOST</option>
                <option value="VOSTFR">VOSTFR</option>
            </select>
            </P>

                <input type="checkbox" name="visible" id="visible" /> <label for="visible">visible:</label>

            <br>

                <input type="checkbox" name="cover" id="cover" /> <label for="cover">cover:</label>

            <br>

            <p><button type="submit">Ok!</button></p>

        </form>
    </div>
</div>
</body>
</html>
