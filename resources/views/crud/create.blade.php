@extends('main')
@section('title', 'crud')

@section('content')
    <form action="/store" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="number" class="form-control" name="umur">
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection
