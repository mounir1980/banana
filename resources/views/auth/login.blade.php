@extends('layouts.app')

@section('content')


                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {!! csrf_field() !!}

                        <div class="section {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label class="control-label">E-Mail Address</label>

                                    <input type="email" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                        </div>
                        <div class="section {{ $errors->has('password') ? ' has-error' : '' }}">

                                <label for="username" class="field-label text-muted fs18 mb10">Password</label>
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
                        </form>



@endsection
