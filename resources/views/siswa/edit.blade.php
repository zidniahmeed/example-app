@extends('main')
@section('title', 'crud')

@section('content')
    <form action="/siswa/update/{{$data->id}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">nama</label>
            <input type="text" class="form-control" name="nama" value="{{$data->nama}}" >
        </div>

        <div class="mb-3">
            <label class="form-label">kelas</label>
            <select name="id_kelas" class="form-select" " >
                <option value="{{$data->id_kelas}}">{{$data->Kelas->kelas}}</option>
                @foreach (App\Models\Kelas::get() as $item)
                    <option value="{{$item->id}}">{{$item->kelas}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin"  class="form-select" >
                <option value="">pilih Jenis Kelamin</option>
                @php
                    $sel = $data->jenis_kelamin
                @endphp
                <option value="laki-laki" {{ $sel === 'laki-laki' ? 'selected="selected"' : '' }} >laki-laki</option>
                <option value="perempuan" {{ $sel === 'perempuan' ? 'selected="selected"' : '' }}>perempuan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection
