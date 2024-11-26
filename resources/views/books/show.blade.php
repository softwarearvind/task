<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>view</title>
</head>
<body>
<div class="container mt-5">
    <h1>{{ $book->title }}</h1>
    <p><strong>Author:</strong> {{ $book->author }}</p>
    <p><strong>Rating:</strong> {{ $book->rating }}/5</p>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Rate this Book</h5>
            <form method="POST" action="/books/{{ $book->id }}/rate">
                @csrf
                <div class="form-group">
                    <label for="rating">Rate this book:</label>
                    <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit Rating</button>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h3>Comments:</h3>
            @foreach ($book->comments as $comment)
                 <p>{{ $comment->comment }} - by User {{ $comment->user->name }}</p>
            @endforeach
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Add a Comment</h5>
            <form method="POST" action="/books/{{ $book->id }}/comment">
                @csrf
                <div class="form-group">
                    <textarea name="comment" class="form-control" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-success mt-3">Add Comment</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>