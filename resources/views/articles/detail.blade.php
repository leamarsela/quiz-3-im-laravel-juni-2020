@extends('layouts.master')

@section('content')

    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title">Judul: {{ $article->head }}</h5>
            <h6 class="card-text">Slug: {{ $article->slug }}</h6>
            <p class="card-text">{{ $article->body }}</p>
            <a href="#" class="btn btn-primary">Info</a>
            <a href="#" class="btn btn-primary">web</a>
            <a href="#" class="btn btn-primary">phplaravel</a>
        </div>
    </div>
    <div>
        <a class="btn btn-secondary mt-5 col-2" href="{{ '/artikel' }}" role="button">Back</a>
    </div>

@endsection