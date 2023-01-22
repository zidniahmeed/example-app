@extends('main')
@section('title', 'crud')

@section('content')
    <form action="/kelas/update/{{$data->id}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" class="form-control" name="kelas" value="{{$data->kelas[0]}}" >
        </div>

        <div class="mb-3">
            <label class="form-label">Kode</label>
            <input type="text" class="form-control" name="kode" value="{{$data->kelas[1]}}" >
        </div>

        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection
