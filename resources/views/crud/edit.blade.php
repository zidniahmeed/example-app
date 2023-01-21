@extends('main')
@section('title', 'crud')

@section('content')
    <form action="/update/{{$data->id}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" value="{{$data->email}}" >
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}" >
        </div>

        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="number" class="form-control" name="umur" value="{{$data->umur}}">
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection
