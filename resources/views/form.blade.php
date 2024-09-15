<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Form</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;"">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FORM BUKU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
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

    <div class="container-fluid mt-3">
        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('book.store') }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-5">
                    <label class="form-label" for="title">Title</label>
                    <input class="form-control" type="text" id="title" name="title" placeholder="Book title">
                </div>
                <div class="col-7">
                    {{-- grid kosong --}}
                </div>

                <div class="col-8">
                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" type="text" name="description" rows="3" placeholder="Describe your book..."></textarea>
                </div>
                <div class="col-4">
                    {{-- grid kosong --}}
                </div>

                <div class="col-1">
                    <label class="form-label" for="page_count">Page Count</label>
                    <input class="form-control" type="number" name = "page_count" placeholder="? page(s)">
                </div>
                <div class="col-11">
                    {{-- grid kosong --}}
                </div>

                <div class="col-3">
                    <label class="form-label" for="author_name">Author Name</label>
                    <input class="form-control" type="text" id="author_name" name="author_name"
                        placeholder="Who made this book?">
                </div>
                <div class="col-3">
                    <label class="form-label" for="author_email">Author Email</label>
                    <input class="form-control" type="text" name="author_email" placeholder="author@gmail.com">
                </div>
                <div class="col-2">
                    <label class="form-label" for="published_date">Published Date</label>
                    <input class="form-control" type="date" name="published_date">
                </div>
                <div class="col-4">
                    {{-- grid kosong --}}
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Kirim</button>
            <button type="reset" class="btn btn-danger mt-4">Reset</button>

    </div>
    </form>

    @vite(['resources/js/app.js'])
</body>

</html>
