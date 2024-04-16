@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1 class="fs-4 mb-4">Modifica un fumetto</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{$comic->title}}">
            <span>@error('title') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{$comic->description}}</textarea>
            <span>@error('description') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" value="{{$comic->thumb}}">
            <span>@error('thumb') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{$comic->price}}">
            <span>@error('price') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="price" value="{{$comic->series}}">
            <span>@error('series') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="price" value="{{$comic->sale_date}}">
            <span>@error('sale_date') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="price" value="{{$comic->type}}">
            <span>@error('type') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists" id="price" value="{{$comic->artists}}">
            <span>@error('artists') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers" id="price" value="{{$comic->writers}}">
            <span>@error('writers') {{$message}} @enderror</span>
        </div>

        {{-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>   
        </div>
        @endif --}}

        <button type="submit" class="btn btn-primary">Salva le modifiche</button>
      </form>
</div>

@endsection