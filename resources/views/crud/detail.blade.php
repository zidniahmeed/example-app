@extends('main')
@section('title', 'crud')

@section('content')
    <form action="/update/{{$data->id}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" readonly value="{{$data->email}}" >
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" readonly value="{{$data->name}}" >
        </div>

        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="number" class="form-control" name="umur" readonly value="{{$data->umur}}">
        </div>
        <a href="/crud" class="btn btn-success">back</a>
    </form>
@endsection
