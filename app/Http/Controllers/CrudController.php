<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(){
        $data = Crud::get();
        return view('crud.index', compact('data'));
    }

    public function create(){
        return view('crud.create');
    }

    public function store(Request $request){
        $data = new Crud;
        
        $data->name = $request->name;
        $data->email = $request->email;
        $data->umur = $request->umur;


        $data->save();

        return redirect()->route('crud')->with('sukses', 'data berhasil ditambahkan');;

    }

    public function delete($id){   
        Crud::find($id)->delete();
        return redirect()->route('crud')->with('sukses', 'data berhasil dihapus');
    }

    public function edit($id){
        $data = Crud::find($id);
        return view('crud.edit', compact('data'));
    }

    public function detail($id){
        $data = Crud::find($id);
        return view('crud.detail', compact('data'));
    }


    public function update(Request $request, $id){
        $data = Crud::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->umur = $request->umur;

        $data->save();

        return redirect()->route('crud')->with('sukses', 'data berhasil di update');;

    }

}
