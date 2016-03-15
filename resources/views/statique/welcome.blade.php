@extends('layout')

@section('content')

             <h3><i class="fa fa-dashboard"></i>Dashboard</h3>
             <hr />


        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-alert">
                        <i class="fa fa-film text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">{{ $nb }} / {{ $nbTotal }}</h1>
                        <h6 class="text-white">Nb de films actifs</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-success">
                        <i class="fa fa-comments text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">{{ $nbCommentsActif }} / {{ $nbTotalComments }}</h1>
                        <h6 class="text-white">Nb de commentaires en cours</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-primary">
                        <i class="fa fa-eye text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">{{ $seanceFutur }}</h1>
                        <h6 class="text-white">Séances à venir</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-warning">
                        <i class="fa fa-group text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">18,020</h1>
                        <h6 class="text-white">Nb d'utilisateurs actifs</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-danger">
                        <i class="fa fa-group text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">18,020</h1>
                        <h6 class="text-white">Age moyen d'acteurs</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-tp">
                        <i class="fa fa-euro text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">18,020</h1>
                        <h6 class="text-white">Budget total</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-dark">
                        <i class="fa fa-clock-o text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">18,020</h1>
                        <h6 class="text-white">Durée moyenne de films</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-alert">
                        <i class="fa fa-certificate text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">18,020</h1>
                        <h6 class="text-white">Moyenne des notes</h6>
                    </div>
                </div>
            </div>

        </div>


@endsection