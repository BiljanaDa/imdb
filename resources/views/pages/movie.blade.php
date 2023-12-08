@extends('layout.default')

@section('content')
    <div class="container">
        @if ($movie)
            <h1>{{ $movie->title }}</h1>
            <p><b>Genre: </b>{{ $movie->genre }}</p>
            <p><b>Director: </b>{{ $movie->director }}</p>
            <p><b>Year of relace: </b>{{ $movie->year }}</p>
            <p><b>Plot: </b> {{ $movie->storyline }}</p>
        @else
            <p>Post not found.</p>
        @endif
    </div>
@endsection
