@extends('layouts.app')

@section('content')
<div id="comics">
    
    <div class="jumbo"></div>

    <div class="container">
        <h2 class="page-title">Comics</h2>

        <div class="comics-list">
            @foreach ($comics as $comic)
            <div class="comic">
                <img class="comic-cover" src="{{ $comic->thumb }}">
                <div class="comic-body flex-fill">
                    <h3 class="comic-title">{{ $comic->title }}</h3>
                    <span class="price">{{ $comic->price }}</span>
                </div>
                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Visualizza</a>
            </div>
            @endforeach
        </div>
        <div class="d-grid gap-2 d-md-block">
            <a href="{{ route('comics.create') }}" class="btn btn-secondary">Aggiungi</a>
            {{-- <a href="#" class="btn btn-danger">Elimina</a> --}}
        </div>
    </div>
</div>
@endsection