@extends('layouts.app')

@section('content')
<div id="comics">
    <div class="container my-3">
        <h1>{{ $comic->title }}</h1>
        <img class="comic-cover" src="{{ $comic->thumb }}">
        <p>{{ $comic->description }}</p>
        {{-- <div class="row row-cols-3 row-gap-3">
            @foreach ($comics as $comic)
            <div class="col d-flex align-items-stretch">
                <div class="card">
                    <img class="comic-cover" src="{{ $comic->thumb }}">
                    <div class="card-body ">
                        <h2 class="fs-4 fw-bold">{{ $comic->title }}</h2>
                        <a href="" class="btn btn-primary">Visualizza</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div> --}}
    </div>
    </div>
</div>
@endsection