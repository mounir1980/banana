@extends('layout)

    @section('content')
        <p>
            <a href="{{route('categories_creer')}}">Créer une catégorie</a>
        </p>



        @foreach($categories as $category)
            <div class="title"><a href="{{route("categories_voir",
                [
                    'id' => $category->id

                ])}}">{{$category->title}}</a>

            </div>

            <p>{!! $category->description !!}</p>

            {{--<p><a href="{{route('categories_supprimer',['id' => $category->id])}}">Delete</a></p>--}}
        @endforeach

    @endsection