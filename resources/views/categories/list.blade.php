@extends('layout')

    @section('content')
<div class="container">
        <style>
            .container{
                margin-left: 30%;

            }

        </style>

            <div class="col-md-5">

                <div class="panel">

                            <div class="panel-heading">

                                    <span class="panel-icon">
                                      <i class="fa fa-film"> </i>
                                    </span>
                                    <span class="panel-title">Categories de films</span>


                                    <a class="btn btn-primary" href="{{route('categories_creer')}}">Créer une catégorie</a>

                            </div>

                    @foreach($categories as $category)

                            <div class="panel-body ptn pbn p10">
                                <ol class="timeline-list">
                                    <li class="timeline-item">
                                        <div class="timeline-icon bg-dark light">
                                            <span class="fa fa-film"></span>
                                        </div>
                                        <div class="timeline-desc">
                                            <a href="{{route("categories_voir",
                                                    [
                                                'id' => $category->id

                                                ])}}">{{$category->title}}</a>
                                        </div>

                                        {{--<div class="timeline-date">--}}
                                                {{--{!! $category->description !!}--}}
                                        {{--</div>--}}
                                        <div>
                                            <a class="btn btn-danger btn-xs" href="{{route('categories_supprimer',['id' => $category->id])}}">Delete</a>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                    @endforeach
                </div>
            </div>
</div>
    @endsection