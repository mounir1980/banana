@extends('layout')
@section('content')

    <h1>Page de contact</h1>
    <hr>
<div class="row">
    <div class="col-md-6">
        <form action="{{ route('submitemail') }}" method="post">
            {{ csrf_field() }}


            <label for="nom"></label>
            <input placeholder="Nom" class="form-control" name="nom" id="nom">

            @if($errors->has('nom'))
                <p class="help-block text-danger">
                    {{ $errors->first('nom') }}
                </p>
            @endif

            <label for="email"></label>
            <input placeholder="Email" class="form-control" name="email" id="email">

            @if($errors->has('email'))
                <p class="help-block text-danger">
                    {{ $errors->first('email') }}
                </p>
            @endif


            <label for="message"></label>
            <textarea placeholder="Message" class="form-control" name="message" id="message" ></textarea>

            @if($errors->has('message'))
                <p class="help-block text-danger">
                    {{ $errors->first('message') }}
                </p>
            @endif


            {{--{{ $errors->first('message') }}--}}

            <hr>
            <button class="btn btn-primary"
                    type="submit"><i class="fa fa-envelope"> Envoyer cet email</i></button>

        </form>
    </div>
</div>
@endsection