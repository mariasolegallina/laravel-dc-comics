@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1 class="fs-4 mb-4">Aggiungi un fumetto</h1>

    <form action="{{route('comics.store')}}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{old('title')}}">
            <span>@error('title') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description">{{old('description')}}</textarea>
            <span>@error('description') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb" id="thumb" value="{{old('thumb')}}">
            <span>@error('thumb') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{old('price')}}">
            <span>@error('price') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" name="series" id="series" value="{{old('series')}}">
            <span>@error('series') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di pubblicazione</label>
            <input type="date" class="form-control  @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" value="{{old('sale_date')}}">
            <span>@error('sale_date') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control  @error('type') is-invalid @enderror" name="type" id="type" value="{{old('type')}}">
            <span>@error('type') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="artists" class="form-label">Artisti</label>
            <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists" id="artists" value="{{old('artists')}}">
            <span>@error('artists') {{$message}} @enderror</span>
        </div>

        <div class="mb-3">
            <label for="writers" class="form-label">Scrittori</label>
            <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers" id="writers" value="{{old('writers')}}">
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

        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
</div>
@endsection