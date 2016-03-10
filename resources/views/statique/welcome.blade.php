<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>


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

            p{
                font-size: 2rem;
            }
            a {
                text-decoration: none;
                float: left;
                text-transform: uppercase;

            }

            ul {
                width: 2%;
                margin-left: 30%;

            }

            li {

                float: left;
            }



        </style>
    </head>
    <body>

        <div class="container">
            <div class="content">
                <div class="title">Welcome Laravel 5</div>
                <ul>
                    <li><a href="">home</a></li>
                    <li><a href="{{route('movies_lister')}}">films</a></li>
                    <li><a href="{{route('categories_lister')}}">categories</a></li>
                    <li><a href="{{route('actors_lister')}}">acteurs</a></li>
                    <li><a href="{{route('directors_lister')}}">realisateurs</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
