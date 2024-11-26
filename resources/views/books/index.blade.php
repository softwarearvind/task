<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Book List</title>
</head>
<body>
@include ('layouts.header');
<div class="container mt-4">
    <h1 class="mb-4">Book List</h1>

    <!-- Search Form -->
    <form method="GET" action="/">
        <input type="text" name="search" placeholder="Search by title or author">
        <button type="submit">Search</button>
    </form>
    <br>

    <!-- Books Table -->
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Sn</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Rating</th>
                    <th>Add Rating & Comments</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <td>{{ $loop->iteration + ($books->currentPage() - 1) * $books->perPage() }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->rating }}</td>
                        <td>
                            <a href="/books/{{ $book->id }}">View Details</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">No books found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $books->links('pagination::bootstrap-5') }}
    </div>
</div>

</body>
</html>
