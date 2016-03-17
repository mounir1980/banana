@extends('layout')

        @section('content')


                    <div id="spy3" class="panel">
                        <div class="panel-heading">

                            <a href="{{route('movies_creer')}}">Créer de film</a>

                            <div class="pull-right hidden-xs">
                                <code class="mr20"></code>
                            </div>

                        </div>
                        <div class="panel-body pn">

                            <div class="bs-component">

                                <table class="table table-bordered">


                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Like</th>
                                            <th class="">Image</th>
                                            <th>Titre</th>
                                            <th>Categorie</th>
                                            <th>Description</th>
                                            <th>Date release</th>
                                            <th>Statut</th>
                                            <th>Cover</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($movies as $movie)

                                        <tr>
                                            <td>{{$movie->id}}</td>
                                            <td><a  href="{{ route("movies_panier", ['id' => $movie->id]) }}">
                                                    @if(!array_key_exists($movie->id, session('id_movies',[])))
                                                        <i class="fa fa-heart-o"></i>
                                                    @else
                                                        <i class="fa fa-heart"></i>
                                                    @endif
                                                </a></td>
                                            <td><img class="w50" src="{{$movie->image}}"></td>
                                            <td>
                                                <a href=" {{ route("movies_voir",[ "id" => $movie->id ]) }}">{!! $movie->title !!}</a>



                                               {!! str_repeat("<i class='fa fa-star'><i>",$movie->note_presse) !!}



                                            </td>
                                            <td>{{$movie->categories_id}}</td>
                                            <td>{{ str_limit(strip_tags($movie->description), 25, '...') }} </td>
                                            <td>{{$movie->date_release}}</td>
                                            <td>@if($movie->visible == 1)
                                                    <a class="btn btn-sm btn-dark btn-block" href="{{route('movies_invisible',['id' => $movie->id])}}">visible</a>

                                                @else

                                                    <a class="btn btn-sm btn-dark btn-block" href="{{route('movies_visible',['id' => $movie->id])}}">invisible</a>
                                                @endif</td>

                                            <td class="disabled active">

                                                            @if($movie->cover == 0)

                                                                <a class="btn btn-sm btn-dark btn-block" href="{{route('movies_cover',['id' => $movie->id])}}">disabled</a>


                                                            @else
                                                                <a class="btn btn-sm btn-dark btn-block" href="{{route('movies_cover',['id' => $movie->id])}}">active</a>


                                                            @endif

                                            </td>

                                            <td>

                                                <a  class="btn btn-xs btn-danger btn-block" href="{{route('movies_supprimer',[ 'id' => $movie->id]) }}">supprimer</a></br>
                                                <a  class="btn btn-xs btn-danger btn-block fa fa-eye" href="{{route('movies_voir',[ 'id' => $movie->id]) }}"></a>

                                            </td>
                                        </tr>

                                    @endforeach


                                    </tbody>
                                </table>
                                <div class="btn btn-primary btn-xs" id="source-button" style="display: none;">&lt; &gt;</div></div>
                        </div>
                    </div>


        @endsection