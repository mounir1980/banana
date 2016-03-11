@extends('layout')


@section('content')
        <p>
            <a href="{{route('movies_creer')}}">Création de film</a>
        </p>

        @foreach($movies as $movie)
            <div class="title"><a href="{{ route("movies_voir",
            [
                "id" => $movie->id
            ]) }}">{!! $movie->title !!}</a></div>

            <p>{!! $movie->description !!}</p>

                <p>
                @if($movie->visible == 1)
                <a href="{{route('movies_invisible',['id' => $movie->id])}}">rendre mon film invisible</a>

                @else

                <a href="{{route('movies_visible',['id' => $movie->id])}}">rendre mon film visible</a>
                @endif
                </p>

            <p>
            @if($movie->cover == 0)
                <a href="{{route('movies_cover',['id' => $movie->id])}}">To change cover on 1</a>

            @else

                <a href="{{route('movies_cover',['id' => $movie->id])}}">To change cover on 0</a>
            @endif
            </p>


        @endforeach
@endsection