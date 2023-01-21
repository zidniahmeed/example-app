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
        <a href="/create" class="btn btn-primary">Create Data</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Umur</th>
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
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>
                        <a href="/delete/{{ $item->id }}" class="btn btn-danger">delete</a>
                        <a href="/edit/{{ $item->id }}" class="btn btn-warning">edit</a>
                        <a href="/detail/{{ $item->id }}" class="btn btn-info">detail</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
