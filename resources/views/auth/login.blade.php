@extends('layouts.app')

@section('content')

        <form method="post" action="{{ url('/login') }}" id="contact">
            {!! csrf_field() !!}
            <div class="panel-body bg-light p30">
                <div class="row">
                    <div class="col-sm-7 pr30">

                                <div class="section row hidden">
                                    <div class="col-md-4">
                                        <a href="#" class="button btn-social facebook span-left mr5 btn-block">
                                                          <span>
                                                            <i class="fa fa-facebook"></i>
                                                          </span>Facebook</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="button btn-social twitter span-left mr5 btn-block">
                                                          <span>
                                                            <i class="fa fa-twitter"></i>
                                                          </span>Twitter</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="#" class="button btn-social googleplus span-left btn-block">
                                                          <span>
                                                            <i class="fa fa-google-plus"></i>
                                                          </span>Google+</a>
                                    </div>
                                </div>
                        {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">--}}
                            {{--{!! csrf_field() !!}--}}

                                <div class="section {{ $errors->has('email') ? ' has-error' : '' }}">

                                        <label for="email" class="field-label text-muted fs18 mb10">Email</label>
                                        <label for="email" class="field prepend-icon">

                                        <input type="email" name="email" class="gui-input" value="{{ old('email') }}">

                                            <label for="email" class="field-icon">
                                                <i class="fa fa-lock"></i>
                                            </label>

                                            @if ($errors->has('email'))
                                                <span class="">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif

                                        </label>
                                </div>


                                <div class="section {{ $errors->has('password') ? ' has-error' : '' }}">

                                        <label for="password" class="field-label text-muted fs18 mb10">Password</label>
                                        <label for="password" class="field prepend-icon">

                                            <input type="password" name="password" class="gui-input" placeholder="Password">

                                            <label for="password" class="field-icon">
                                            <i class="fa fa-lock"></i>

                                             </label>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </label>

                                </div>
                    </div>
                        <div>
                            <h3 class="mb25"> You'll Have Access To Your:</h3>
                            <p class="mb15">
                                <span class="fa fa-check text-success pr5"></span> Unlimited Email Storage</p>
                            <p class="mb15">
                                <span class="fa fa-check text-success pr5"></span> Unlimited Photo Sharing/Storage</p>
                            <p class="mb15">
                                <span class="fa fa-check text-success pr5"></span> Unlimited Downloads</p>
                            <p class="mb15">
                                <span class="fa fa-check text-success pr5"></span> Unlimited Service Tickets</p>
                        </div>

                </div>
            </div>
                            <div class="panel-footer clearfix p10 ph15">
                                <button type="submit" class="button btn-primary mr10 pull-right">Sign In</button>
                                <label class="switch ib switch-primary pull-left input-align mt10">
                                    <input type="checkbox" name="remember" id="remember" checked>
                                    <label for="remember" data-on="YES" data-off="NO"></label>
                                    <span>Remember me</span>
                                </label>
                            </div>

                        {{--<div class="form-group">--}}
                        {{--<div class="col-md-6 col-md-offset-4">--}}
                        {{--<button type="submit" class="btn btn-primary">--}}
                        {{--<i class="fa fa-btn fa-sign-in"></i>Login--}}
                        {{--</button>--}}

                        {{--<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</form>--}}



    </form>
@endsection
