@extends('layout')

@section('content')

    <div class="container">

        <style>
            .colorgraph {
                height: 5px;
                border-top: 0;
                background: #c4e17f;
                border-radius: 5px;
                background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
                background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
            }
            button {
                width: 100%;
            }
            .container{
                margin-left: 20%;
                margin-top: 10%;
            }

        </style>
        <div class="row">
            <div class="col-md-6">
                <form method="post"
                      enctype="multipart/form-data"
                      action="{{route('categories_enregistrer')}}">
                    {{--champ caché--}}
                    {{csrf_field()}}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title"></label>
                                <input name="title" id="title" class="form-control input-lg" placeholder="Firstname" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="description"></label>
                                <textarea name="description" id="description" class="form-control input-lg" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="slug"></label>
                                <input name="slug" id="slug" class="form-control input-lg" placeholder="City" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="image"></label>
                            <input type="file" capture="capture" accept="image/*" name="image" id="image"  placeholder="Image" style="width: 100%" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-block">VALIDER</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
@endsection