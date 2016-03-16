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
                        <h1 class="fs35 mbn">{{ $nbUserActif }}</h1>
                        <h6 class="text-white">Nb d'utilisateurs actifs</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-danger">
                        <i class="fa fa-group text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">{{ $ageMoyenActeur }}</h1>
                        <h6 class="text-white">Age moyen d'acteurs</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-system">
                        <i class="fa fa-euro text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">{{ $budgetTotal }}</h1>
                        <h6 class="text-white">Budget total</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-dark">
                        <i class="fa fa-clock-o text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">{{ $dureeMoy }}</h1>
                        <h6 class="text-white">Durée moyenne de films</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel panel-tile text-center">
                    <div class="panel-body bg-alert">
                        <i class="fa fa-certificate text-muted fs45 br64 bg-none p15 ph20 mt10"></i>
                        <h1 class="fs35 mbn">{{ $moyNote }}</h1>
                        <h6 class="text-white">Moyenne des notes</h6>
                    </div>
                </div>
            </div>

        </div>

             <div class="col-md-6">

                 <!-- User Group Widget -->
                 <div class="panel user-group-widget">
                     <div class="panel-heading">
                    <span class="panel-icon">
                      <i class="fa fa-users"></i>
                    </span>
                         <span class="panel-title">12 derniers utilisateurs</span>
                     </div>
                     <div class="panel-menu">
                         <div class="input-group ">
                      <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                      </span>
                             <input type="text" class="form-control" placeholder="Search user...">
                         </div>
                     </div>
                     <div class="panel-body panel-scroller pn" style="max-height: 513px;">
                         <div class="row">

                             @foreach($lastUser as $user )

                             <div class="col-md-3">

                                 <img src="{{ $user->avatar }}" class="user-avatar">
                                 <div class="caption">
                                     <h5>{{ $user->username }}
                                         <br>
                                         <small>{{ $user->work }}</small>
                                     </h5>
                                 </div>

                             </div>
                             @endforeach
                         </div>
                     </div>
                 </div>
             </div>


             <div class="col-md-6">
                 <div class="panel">
                     <div class="panel-heading">
                            <span class="panel-icon">
                              <i class="fa fa-clock-o"></i>
                            </span>
                         <span class="panel-title"> 10 prochaines sessions</span>
                     </div>
                     <div class="panel-body ptn pbn p10">
                         <ol class="timeline-list">
                             <li class="timeline-item">
                                 <div class="timeline-icon bg-dark light">
                                     <span class="fa fa-film"></span>
                                 </div>
                                 <div class="timeline-desc">
                                     <b>Michael</b> Added to his store:
                                     <a href="#">Ipod</a>
                                 </div>
                                 <div class="timeline-date">1:25am</div>
                             </li>
                         </ol>
                     </div>
                 </div>
             </div>

             <div class="col-md-4">
                 <div class="panel listgroup-widget">
                     <div class="panel-heading">
                            <span class="panel-icon">
                              <i class="fa fa-tag"></i>
                            </span>
                         <span class="panel-title"> Tag Group</span>
                     </div>
                     <ul class="list-group">
                         <li class="list-group-item">
                             <span class="badge badge-primary">14</span>
                             Entertainment
                         </li>
                         <li class="list-group-item">
                             <span class="badge badge-success">9</span>
                             Movies
                         </li>
                         <li class="list-group-item">
                             <span class="badge badge-info">11</span>
                             TV Shows
                         </li>
                         <li class="list-group-item">
                             <span class="badge badge-warning">18</span>
                             Celebs &amp; Gossip
                         </li>
                         <li class="list-group-item">
                             <span class="badge badge-danger">22</span>
                             Video Games
                         </li>
                         <li class="list-group-item">
                             <span class="badge badge-alert">9</span>
                             Sports &amp; Events
                         </li>
                     </ul>
                 </div>
             </div>







@endsection