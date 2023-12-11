@extends('layout.default')

@section('content')
    <form method="POST" action="{{ 'createmovie' }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Director</label>
            <input type="text" class="form-control" name="director" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Genre</label>
            <input type="number" class="form-control" name="genre" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Year</label>
            <input type="number" class="form-control" name="year" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Storyline</label>
            <textarea class="form-control" name="storyline" cols="30" rows="10" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @include('components.errors')
    @include('components.status')
@endsection
