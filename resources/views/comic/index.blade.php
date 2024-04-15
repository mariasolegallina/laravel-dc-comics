@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row row-cols-4 row-gap-3">
            @foreach ($comics as $comic)
            <div class="col d-flex align-items-stretch">
                <div class="card card-body">
                    <h2 class="fs-5 fw-bold flex-grow-1 pb-1">{{ $comic->title }}</h2>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Visualizza</a>
                </div>
            </div>
            @endforeach
            <div class="d-grid gap-2 d-md-block">
                <a href="{{ route('comics.create') }}" class="btn btn-secondary">Aggiungi</a>
                <a href="#" class="btn btn-danger">Elimina</a>
            </div>
        </div>
    </div>
@endsection