@extends('layout')

@section('content')

<div class="container">
    <div class="content">
        <div class="title">Film</div>


    <form method="post"
          enctype="multipart/form-data"
          action="{{route('categories_enregistrer')}}">
        {{--champ caché--}}
        {{csrf_field()}}
        <label for="title">Titre:</label>
        <input name="title" id="title" />
        <br/>
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="27" rows="5" ></textarea>
        <br>

        <label for="image">Image</label>
        <input type="file" capture="capture" accept="image/*" name="image" id="image" />

        <label for="slug">slug:</label>
        <input name="slug" id="slug" />
        <br>

        <p><button type="submit">OK!</button></p>

    </form>

    </div>
</div>

@endsection

