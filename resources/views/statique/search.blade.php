@extends('layout')

@section('content')
    <div class="panel-body ph20">
        <div class="tab-content">
            <!-- Classic Search Pane -->
                <div id="search" class="tab-pane active">
                    <!-- Search Pane Title -->
                    <h3>Résultat: <b class="text-primary">{{ count($result) }}</b> films trouvés </h3>
                    <hr class="alt">

                    @foreach($result as $movie)
                            <!-- Begin Search Result Entries -->
                    <div class="search-result">
                        <h3><a href="http://themeforest.net/user/AdminDesigns">{{ $movie->mtitle }}</a> {{ $movie->ctitle }}</h3>
                        <ul class="result-meta">
                            {{--<li><b>{{ $movie->budget }}</b> €</li>--}}
                            {{--<li><b>{{ $movie->duree }}</b> h.</li>--}}
                            <li>
                                {{--{!! str_repeat('<i class="fa fa-star-o text-warning"></i>', $movie->not_presse) !!}--}}
                            </li>
                        </ul>

                                    <p>{{ strip_tags($movie->msynopsis) }}</p>
                                </div>
                    </div>
                        <hr class="alt">
                    @endforeach
                </div>
         </div>

@endsection




