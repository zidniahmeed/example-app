<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::get();
        return view('siswa.index', compact('data'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $data = new Siswa;
        $data->nama = $request->nama;
        $data->id_kelas = $request->id_kelas;
        $data->jenis_kelamin = $request->jenis_kelamin;

        $request->validate([
            
            'foto' => 'required|file|image|max:1000',
            ]);

        $file = $request->file('foto');
        $name = $file->getClientOriginalName();
        $file->move('/foto_siswa', $name);
        // $image = $name;

        $data->foto = $name;
        $data->save();

        return redirect()->route('siswa')->with('sukses', 'data berhasil ditambahkan');;
    }

    public function delete($id)
    {
        Siswa::find($id)->delete();
        return redirect()->route('siswa')->with('sukses', 'data berhasil dihapus');
    }

    public function edit($id)
    {
        $data = Siswa::find($id);
        return view('siswa.edit', compact('data'));
    }

    public function detail($id)
    {
        $data = Siswa::find($id);
        return view('siswa.detail', compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = Siswa::find($id);

        $data->nama = $request->nama;
        $data->id_kelas = $request->id_kelas;
        $data->jenis_kelamin = $request->jenis_kelamin;


        $data->save();

        return redirect()->route('siswa')->with('sukses', 'data berhasil di update');;
    }
}
