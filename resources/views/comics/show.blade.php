@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="d-flex">
            <img class="comic-cover" src="{{ $comic->thumb }}">
            <div>
                <h1 class="fs-4">{{ $comic->title }}</h1>
                <p>{{ $comic->description }}</p>
                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-secondary">Modifica</a>
            </div>
        </div>
    </div>
    </div>
@endsection