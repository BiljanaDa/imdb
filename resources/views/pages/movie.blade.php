@extends('layout.default')

@section('content')
    <div class="container">
        @if ($movie)
            <h1>{{ $movie->title }}</h1>
            <p>Genre: <a href="/genres/{{ $movie->genre->name }}">{{ $movie->genre->name }}</a></p>
            <p><b>Director: </b>{{ $movie->director }}</p>
            <p><b>Year of relace: </b>{{ $movie->year }}</p>
            <p><b>Plot: </b> {{ $movie->storyline }}</p>

            @include('components.createcomment')
            @include('components.comments')
        @else
            <p>Post not found.</p>
        @endif
    </div>
@endsection
