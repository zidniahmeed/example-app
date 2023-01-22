@extends('main')
@section('title', 'crud')

@section('content')
    <form action="/siswa/store" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">nama</label>
            <input type="text" class="form-control" name="nama" required>
        </div>

        <div class="mb-3">
            <label class="form-label">kelas</label>
            <select name="id_kelas" class="form-select" required>
                <option value="">Pilih Kelas</option>
                
                @foreach (App\Models\Kelas::get() as $item)
                    <option value="{{$item->id}}">{{$item->kelas}}</option>
                @endforeach
                
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin"  class="form-select" required>
                <option value="">pilih Jenis Kelamin</option>
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
            </select>
        </div>

       
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection
