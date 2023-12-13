@extends('layout.default')

@section('content')
    <div class="container">
        @if ($movie)
            <h1>{{ $movie->title }}</h1>
            @foreach ($movie->genres as $genre)
                <p><a href="/genres/{{ $genre->name }}">{{ $genre->name }}</a></p>
            @endforeach
            <p><b>Director: </b>{{ $movie->director }}</p>
            <p><b>Year: </b>{{ $movie->year }}</p>
            <p><b>Plot: </b> {{ $movie->storyline }}</p>

            @include('components.createcomment')
            @include('components.comments')
        @else
            <p>Post not found.</p>
        @endif
    </div>
@endsection
