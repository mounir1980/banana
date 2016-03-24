
@extends('layout')

@section('content')


    <div id="spy3" class="panel">
        <div class="panel-heading">

            <a href="{{route('actors_creer')}}">Créer un acteur</a>

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
                        <th>Nom</th>
                        <th>Année</th>
                        <th>Ville</th>
                        <th>Biographie</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($actors as $actor)

                        <tr>
                            <td>{{$actor->id}}</td>
                            <td><a  href="{{ route("actors_panier", ['id' => $actor->id]) }}">
                                    @if(!array_key_exists($actor->id, session('id_actors',[])))
                                        <i class="fa fa-heart-o"></i>
                                    @else
                                        <i class="fa fa-heart"></i>
                                    @endif
                                </a>
                            </td>
                            <td><img class="w50" src="{{$actor->image}}"></td>
                            <td>{{ $actor->lastname }} {{ $actor->firstname }}</td>
                            <td>{{ $actor->dob }}</td>
                            <td>{{ $actor->city }}</td>
                            <td>{{ str_limit(strip_tags($actor->biography), 25, '...') }}</td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
                <div class="btn btn-primary btn-xs" id="source-button" style="display: none;">&lt; &gt;</div></div>
        </div>
    </div>


@endsection