@foreach ($movie->comments as $comment)
    <div>
        <p>{{ $comment->content }}</p>
        <p>{{ $comment->created_at->diffForHumans() }}</p>
    </div>
@endforeach
