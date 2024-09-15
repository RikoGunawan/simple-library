<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Daftar Buku</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;"">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DATA BUKU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('book.form') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="pointer-events: none;">Riko Gunawan - 2022130016</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </nav>

    <div class="container-fluid">
        <table class="table table-striped table-hover table-bordered border-primary mt-3">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Page Count</th>
                <th>Author</th>
                <th>Author Email</th>
                <th>Published Date</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->page_count }}</td>
                    <td>{{ $book->author_name }}</td>
                    <td>{{ $book->author_email }}</td>
                    <td>{{ $book->published_date }}</td>
                </tr>
            @endforeach
    </div>
    </table>
    <a class="btn btn-primary" href="{{ route('book.form') }}">Tambah Buku</a>

    @vite(['resources/js/app.js'])
</body>

</html>
