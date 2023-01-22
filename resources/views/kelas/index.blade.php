@extends('main')
@section('title', 'crud')
@section('card-title', 'All Data')
@section('content')

    @if ($message = Session::get('sukses'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-6">
        <a href="/kelas/create" class="btn btn-primary">Create Data</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">Kelas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $item->kelas }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="kelas/delete/{{ $item->id }}" class="btn btn-danger">delete</a>
                            <a href="kelas/edit/{{ $item->id }}" class="btn btn-warning">edit</a>
                            <a href="kelas/detail/{{ $item->id }}" class="btn btn-info">detail</a>
                          </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
