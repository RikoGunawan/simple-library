@extends('layouts.app')

@section('content')
    <div class="container-fluid mt-3">
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
            </table>
            <button class="btn btn-primary" href="{{ route('book.form') }}">Tambah Buku</button>
        </div>
    </div>
@endsection


</html>
