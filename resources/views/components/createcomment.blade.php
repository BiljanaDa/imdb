<form method="POST" action="{{ url('createcomment') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea class="form-control" name="content" cols="30" rows="10" required></textarea>
        <input type="hidden" name="movie_id" value="{{ $movie->id }}">
    </div>

    <button type="submit" class="btn btn-primary">Create Commnet</button>
</form>
@include('components.errors')
@include('components.status')
