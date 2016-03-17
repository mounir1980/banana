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

        <div class="row">
                <div class="user col-md-6">
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
                         <span class="panel-title"> 4 prochaines sessions</span>
                     </div>
                     @foreach($sessionCinema as $affiche)
                     <div class="panel-body ptn pbn p10">
                         <ol class="timeline-list">
                             <li class="timeline-item">
                                 <div class="timeline-icon bg-dark light">
                                     <span class="fa fa-film"></span>
                                 </div>
                                 <div class="timeline-desc">
                                     <b>{{ $affiche->film }}</b> diffusion:
                                     <a href="#">{{ $affiche->cine }}</a>
                                 </div>
                                 <div class="timeline-date">{{ $affiche->date_session }}</div>
                             </li>
                         </ol>
                     </div>
                     @endforeach
                 </div>
             </div>



             <div class="col-md-4">
                 <div class="panel listgroup-widget">
                     <div class="panel-heading">
                            <span class="panel-icon badge badge-primary">
                              <i class="fa fa-bar-chart-o"></i>
                            </span>
                         <span class="panel-title" style="color: steelblue">Nombres</span>
                     </div>
                     <ul class="list-group">
                         <li class="list-group-item">
                             <span class="badge badge-primary">{{ $nbTotal }}</span>
                             Films
                         </li>
                         <li class="list-group-item">
                             <span class="badge badge-success">{{ $nbCategories }}</span>
                             Categories
                         </li>
                         <li class="list-group-item">
                             <span class="badge badge-info">{{ $nbActors }}</span>
                             Acteurs
                         </li>
                         <li class="list-group-item">
                             <span class="badge badge-warning">{{ $nbDirectors }}</span>
                             Réalisateurs
                         </li>
                         <li class="list-group-item">
                             <span class="badge badge-danger">{{ $nbSessions }}</span>
                             Séances
                         </li>
                         <li class="list-group-item">
                             <span class="badge badge-alert">{{ $nbMedias }}</span>
                             Médias
                         </li>
                     </ul>
                 </div>
             </div>
        </div>


        <div class="row">
             <div class="col-md-6">
                 <!-- Pie Chart -->
                 <div class="panel">
                     <div class="panel-heading">
                         <span class="panel-title fw600 text-info">Pie Chart</span>
                     </div>
                     <div class="panel-body pn">
                         <div data-highcharts-chart="6" id="high-pie" style="width: 100%; height: 210px; margin: 0 auto"><div style="position: relative; overflow: hidden; width: 405px; height: 210px; text-align: left; line-height: normal; z-index: 0; left: 0px; top: 0.266663px;" id="highcharts-14" class="highcharts-container"><svg height="210" width="405" xmlns="http://www.w3.org/2000/svg" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" version="1.1"><desc>Created with Highcharts 4.0.4</desc><defs><clipPath id="highcharts-15"><rect height="185" width="385" y="0" x="0"></rect></clipPath></defs><rect class=" highcharts-background" fill="#FFFFFF" strokeWidth="0" height="210" width="405" y="0" x="0"></rect><path d="M 0 0" fill="rgba(150,122,220,0.25)"></path><g zIndex="3" class="highcharts-series-group"><g style="cursor:pointer;" transform="translate(10,10) scale(1 1)" zIndex="0.1" visibility="visible" class="highcharts-series highcharts-tracker"><path transform="translate(0,0)" stroke-linejoin="round" stroke-width="1" stroke="#FFFFFF" d="M 123.48319696069515 10.000001711164444 A 82.5 82.5 0 0 1 177.07557313652492 155.23681505378536 L 123.5 92.5 A 0 0 0 0 0 123.5 92.5 Z" fill="#f6bb42"></path><path transform="translate(0,0)" stroke-linejoin="round" stroke-width="1" stroke="#FFFFFF" d="M 177.01280954414293 155.2903592495877 A 82.5 82.5 0 0 1 44.26804194481666 69.5098537903373 L 123.5 92.5 A 0 0 0 0 0 123.5 92.5 Z" fill="#4a89dc"></path><path visibility="hidden" transform="translate(-10,-3)" stroke-linejoin="round" stroke-width="1" stroke="#FFFFFF" d="M 44.29107170317036 69.4306333405596 A 82.5 82.5 0 0 1 44.26804194481666 69.5098537903373 L 123.5 92.5 A 0 0 0 0 0 123.5 92.5 Z" fill="#3bafda"></path><path transform="translate(0,0)" stroke-linejoin="round" stroke-width="1" stroke="#FFFFFF" d="M 44.29107170317036 69.4306333405596 A 82.5 82.5 0 0 1 123.38540915510909 10.000079582230697 L 123.5 92.5 A 0 0 0 0 0 123.5 92.5 Z" fill="#967adc"></path></g><g transform="translate(10,10) scale(1 1)" zIndex="0.1" visibility="visible" class="highcharts-markers"></g></g><g transform="translate(255,53)" zIndex="7" class="highcharts-legend"><g zIndex="1"><g><g transform="translate(8,3)" zIndex="1" class="highcharts-legend-item"><text y="25" zIndex="2" text-anchor="start" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" x="21">Firefox</text><rect fill="#f6bb42" zIndex="3" height="12" width="16" y="14" x="0"></rect></g><g transform="translate(8,27)" zIndex="1" class="highcharts-legend-item"><text zIndex="2" text-anchor="start" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" y="25" x="21">IE</text><rect fill="#4a89dc" zIndex="3" height="12" width="16" y="14" x="0"></rect></g><g transform="translate(8,51)" zIndex="1" class="highcharts-legend-item"><text zIndex="2" text-anchor="start" style="color:#CCC;font-size:12px;font-weight:bold;cursor:pointer;fill:#CCC;" y="25" x="21">Chrome</text><rect fill="#CCC" zIndex="3" height="12" width="16" y="14" x="0"></rect></g><g transform="translate(8,75)" zIndex="1" class="highcharts-legend-item"><text zIndex="2" text-anchor="start" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" y="25" x="21">Safari</text><rect fill="#967adc" zIndex="3" height="12" width="16" y="14" x="0"></rect></g></g></g></g><g visibility="visible" opacity="0" transform="translate(53,36)" style="cursor:default;padding:0;white-space:nowrap;" zIndex="8" class="highcharts-tooltip"><path height="45" width="136" transform="translate(1, 1)" stroke-width="5" stroke-opacity="0.049999999999999996" stroke="black" isShadow="true" d="M 3.5 0.5 L 133.5 0.5 C 136.5 0.5 136.5 0.5 136.5 3.5 L 136.5 42.5 C 136.5 45.5 136.5 45.5 133.5 45.5 L 3.5 45.5 C 0.5 45.5 0.5 45.5 0.5 42.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" fill="none"></path><path height="45" width="136" transform="translate(1, 1)" stroke-width="3" stroke-opacity="0.09999999999999999" stroke="black" isShadow="true" d="M 3.5 0.5 L 133.5 0.5 C 136.5 0.5 136.5 0.5 136.5 3.5 L 136.5 42.5 C 136.5 45.5 136.5 45.5 133.5 45.5 L 3.5 45.5 C 0.5 45.5 0.5 45.5 0.5 42.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" fill="none"></path><path height="45" width="136" transform="translate(1, 1)" stroke-width="1" stroke-opacity="0.15" stroke="black" isShadow="true" d="M 3.5 0.5 L 133.5 0.5 C 136.5 0.5 136.5 0.5 136.5 3.5 L 136.5 42.5 C 136.5 45.5 136.5 45.5 133.5 45.5 L 3.5 45.5 C 0.5 45.5 0.5 45.5 0.5 42.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" fill="none"></path><path stroke-width="1" stroke="#967adc" d="M 3.5 0.5 L 133.5 0.5 C 136.5 0.5 136.5 0.5 136.5 3.5 L 136.5 42.5 C 136.5 45.5 136.5 45.5 133.5 45.5 L 3.5 45.5 C 0.5 45.5 0.5 45.5 0.5 42.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" fill="rgba(249, 249, 249, .85)"></path><text y="21" style="font-size:12px;color:#333333;fill:#333333;" zIndex="1" x="8"><tspan style="font-size: 10px">Safari</tspan><tspan dy="16" x="8">Browser share: </tspan><tspan dx="0" style="font-weight:bold">20.5%</tspan></text></g></svg></div></div>
                     </div>
                 </div>
             </div>
             <div class="col-md-6">
                 <!-- Circle Stats -->
                 <div class="panel">
                     <div class="panel-heading">
                         <span class="panel-title fw600 text-info">Circulars</span>
                         <div class="widget-menu pull-right mr10 hidden">
                    <span class="fs11 text-muted">
                      <i class="fa fa-circle text-warning fs12 pr5"></i> Twitter</span>
                    <span class="fs11 text-muted ml10">
                      <i class="fa fa-circle text-info fs12 pr5"></i> Facebook</span>
                    <span class="fs11 text-muted ml10">
                      <i class="fa fa-circle text-primary fs12 pr5"></i> Google+</span>
                         </div>
                     </div>
                     <div class="panel-body">
                         <div class="mb20 text-right">
                            <span class="fs11 text-muted">
                              <i class="fa fa-circle text-warning fs12 pr5"></i> Twitter</span>
                            <span class="fs11 text-muted ml10">
                              <i class="fa fa-circle text-info fs12 pr5"></i> Facebook</span>
                            <span class="fs11 text-muted ml10">
                              <i class="fa fa-circle text-primary fs12 pr5"></i> Google+</span>
                         </div>

                             <div class="col-md-4 text-center">
                                 <div class="info-circle" id="c1" title="Twitter" value="80" data-circle-color="primary"><div style="position: relative; display: inline-block;" class="circles-wrp"><svg height="167" width="167" xmlns="http://www.w3.org/2000/svg"><path d="M 83.48441899991732 7.000001586716124 A 76.5 76.5 0 1 1 83.39374303473753 7.000073794432097 Z" stroke-width="14" stroke="#DDD" fill="transparent"></path><path d="M 83.48441899991732 7.000001586716124 A 76.5 76.5 0 1 1 10.726421858897496 59.91491309024179 " stroke-width="14" stroke="#4a89dc" fill="transparent"></path></svg><div class="circle-text"><h2 style="font-size: 41.75px;" class="circle-text-value">80</h2><p>Twitter</p></div></div></div>
                             </div>
                             <div class="col-md-4">
                                 <div class="info-circle" id="c2" title="Facebook" value="30" data-circle-color="info"><div style="position: relative; display: inline-block;" class="circles-wrp"><svg height="167" width="167" xmlns="http://www.w3.org/2000/svg"><path d="M 83.48441899991732 7.000001586716124 A 76.5 76.5 0 1 1 83.39374303473753 7.000073794432097 Z" stroke-width="14" stroke="#DDD" fill="transparent"></path><path d="M 83.48441899991732 7.000001586716124 A 76.5 76.5 0 0 1 156.28317940362413 107.05544089801468 " stroke-width="14" stroke="#3bafda" fill="transparent"></path></svg><div class="circle-text"><h2 style="font-size: 41.75px;" class="circle-text-value">30</h2><p>Facebook</p></div></div></div>
                             </div>
                             <div class="col-md-4">
                                 <div class="info-circle" id="c3" title="Behance" value="55" data-circle-color="warning"><div style="position: relative; display: inline-block;" class="circles-wrp"><svg height="167" width="167" xmlns="http://www.w3.org/2000/svg"><path d="M 83.48441899991732 7.000001586716124 A 76.5 76.5 0 1 1 83.39374303473753 7.000073794432097 Z" stroke-width="14" stroke="#DDD" fill="transparent"></path><path d="M 83.48441899991732 7.000001586716124 A 76.5 76.5 0 1 1 59.92973560723357 156.27838028188788 " stroke-width="14" stroke="#f6bb42" fill="transparent"></path></svg><div class="circle-text"><h2 style="font-size: 41.75px;" class="circle-text-value">55</h2><p>Behance</p></div></div></div>
                             </div>

                     </div>
                 </div>
             </div>
        </div>





@endsection