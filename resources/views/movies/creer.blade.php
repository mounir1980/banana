@extends('layout')
@section('content')
        @if(count($errors->all()))
            <div class="danger alert-danger">
                {{--<ul>--}}
                    {{--@foreach($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            </div>
        @endif




        <form method="post"
              enctype="multipart/form-data"
              action="{{route('movies_enregistrer')}}">
            {{--champ caché--}}
            {{csrf_field()}}
            <label for="title">Title:</label>
            <input name="title" id="title" />
            <br/>

            {{ $errors->first('title') }}

            <label for="description">Description:</label>
        <textarea name="description" id="description" cols="27" rows="5" ></textarea>
            <br>
            <label for="synopsis">Synopsis:</label>
            <input name="synopsis" id="synopsis" />
            <br>

            <label for="image">Image</label>
            <input type="file" capture="capture" accept="image/*" name="image" id="image" />

            <label for="budget">budget:</label>
            <input name="budget" id="budget" />
            <br>

            <label for="annee">annee:</label>
            <input name="annee" id="annee" />
            <br>

            <label for="date_release">date_release:</label>
            <input name="date_release" id="date_release" />
            <br>

            <P>
                <label for="bo"></label>
                <select name="bo" id="bo">
                <option value="VO">VO</option>
                <option value="VOST">VOST</option>
                <option value="VOSTFR">VOSTFR</option>
            </select>
            </P>

                <input type="checkbox" name="visible" id="visible" /> <label for="visible">visible:</label>

            <br>

                <input type="checkbox" name="cover" id="cover" /> <label for="cover">cover:</label>

            <br>

            <p><button type="submit">Ok!</button></p>

        </form>

@endsection