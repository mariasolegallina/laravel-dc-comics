@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1 class="fs-4 mb-4">Modifica un fumetto</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" name="title" id="title" required value="{{$comic->title}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" name="description" id="description" required>{{$comic->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" name="thumb" id="thumb" required value="{{$comic->thumb}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" name="price" id="price" required value="{{$comic->price}}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" name="series" id="series" required value="{{$comic->series}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control" name="sale_date" id="sale_date" required value="{{$comic->sale_date}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" name="type" id="type" required value="{{$comic->type}}">
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control" name="artists" id="artists" value="{{$comic->artists}}">
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control" name="writers" id="writers" value="{{$comic->writers}}">
        </div>

        <button type="submit" class="btn btn-primary">Salva le modifiche</button>
      </form>
</div>

@endsection