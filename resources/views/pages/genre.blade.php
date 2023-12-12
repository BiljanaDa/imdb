@extends('layout.default')

@section('content')
    <div class="container">
         <h1>{{ $genre->name }} Movies</h1>
    @foreach($movies as $movie)
        <div>
            <h2>{{ $movie->title }}</h2>
            <p><strong>Director:</strong> {{ $movie->director }}</p>
            <p><strong>Year:</strong> {{ $movie->year }}</p>
            <p><strong>Storyline:</strong> {{ $movie->storyline }}</p>
        </div>
        <hr>
    @endforeach
    </div>
@endsection