@extends('layout')

        @section('content')
                    <p>
                        <a href="{{route('movies_creer')}}">Création de film</a>
                    </p>

                    <div id="spy3" class="panel">
                        <div class="panel-heading">

                            <div class="pull-right hidden-xs">
                                <code class="mr20"></code>
                            </div>

                        </div>
                        <div class="panel-body pn">

                            <div class="bs-component">

                                <table class="table table-bordered">


                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Photos</th>
                                            <th>Titre</th>
                                            <th>Categorie</th>
                                            <th>Description</th>
                                            <th>Statut</th>
                                            <th>Cover</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($movies as $movie)

                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                            <td><a href="{{ route("movies_voir",[ "id" => $movie->id ]) }}">{!! $movie->title !!}</a></td>
                                            <td></td>
                                            <td>{{ str_limit(strip_tags($movie->description), 25, '...') }} </td>
                                            <td>@if($movie->visible == 1)
                                                    <a href="{{route('movies_invisible',['id' => $movie->id])}}">rendre mon film invisible</a>

                                                @else

                                                    <a href="{{route('movies_visible',['id' => $movie->id])}}">rendre mon film visible</a>
                                                @endif</td>

                                            <td class="disabled active">

                                                            @if($movie->cover == 0)

                                                                <a class="btn active btn-dark btn-block" href="{{route('movies_cover',['id' => $movie->id])}}">disabled</a>


                                                            @else
                                                                <a class="btn active btn-dark btn-block" href="{{route('movies_cover',['id' => $movie->id])}}">active</a>


                                                            @endif


                                            </td>
                                            <td><a href="{{route('movies_supprimer',[ 'id' => $movie->id]) }}">Supprimer un film</a></td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                                <div class="btn btn-primary btn-xs" id="source-button" style="display: none;">&lt; &gt;</div></div>
                        </div>
                    </div>


        @endsection