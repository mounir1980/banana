@extends('layout')
@section('content')



    <style>


        .container
        {
            margin-left: 25%;
            margin-top: 25%;

        }

    </style>
<div class="container">
    <div class="row">
       <div class="col-md-6">
        <form method="post"
              action="{{route('actors_enregistrer')}}">
            {{--champ caché--}}
            {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lastname"></label>
                                <input name="lastname" id="lastname" placeholder="Lastname" class="form-control" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstname"></label>
                                <input name="firstname" id="firstname" placeholder="Firstname" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="biography"></label>
                                <input name="biography" id="biography" placeholder="Biography" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="city"></label>
                                <input name="city" id="city" placeholder="City" class="form-control"/>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="image"></label>
                                <input type="file" capture="capture" accept="image/*" name="image" id="image"   />
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" style="width: 100%" class="form-control">VALIDER</button>
                            </div>
                        </div>
                    </div>



        </form>
       </div>
    </div>
</div>
@endsection