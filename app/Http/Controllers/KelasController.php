<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(){
        $data = Kelas::get();
        return view('kelas.index', compact('data'));
    }
    
    public function create(){
        return view('kelas.create');
    }

    public function store(Request $request){
        
        $data = new Kelas;
        
        $kelas = $request->kelas;
        $kode =  $request->kode;
        

        return $request->all();

        $data->kelas = $kelas.$kode;
        

        $data->save();

        return redirect()->route('kelas')->with('sukses', 'data berhasil ditambahkan');;

    }

    public function delete($id){   
        Kelas::find($id)->delete();
        return redirect()->route('kelas')->with('sukses', 'data berhasil dihapus');
    }

    public function edit($id){
        $data = Kelas::find($id);
        return view('kelas.edit', compact('data'));
    }

    public function detail($id){
        $data = Kelas::find($id);
        return view('kelas.detail', compact('data'));
    }


    public function update(Request $request, $id){
        $data = Kelas::find($id);

        $kelas = $request->kelas;
        $kode =  $request->kode;
        
        $data->kelas = $kelas .$kode;
        $data->save();

        return redirect()->route('kelas')->with('sukses', 'data berhasil di update');;

    }
}

