@extends('main')
@section('title', 'crud')

@section('content')
    <form action="/kelas/store" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">nama kelas</label>
            <input type="text" class="form-control" name="kelas">
        </div>

        <div class="mb-3">
            <label class="form-label">Kode</label>
            <input type="text" class="form-control" name="kode">
        </div>

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection
