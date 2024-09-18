@extends('layouts.app')

@section('content')
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
@endsection
