<?php

namespace App\Http\Controllers;

use App\Models\Data_Kegiatan;
use App\Models\Data_kegiatan as ModelsData_kegiatan;
use Illuminate\Http\Request;
use Illuminate\Console\View\Components\Alert;

class DataKegiatanController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_kegiatan = data_kegiatan::where('nama_kegiatan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_kegiatan = data_kegiatan::all();

        }

        return view('data_kegiatan.index', ['data_kegiatan' => $data_kegiatan]);

    }
    public function create(Request $request)
    {
        Data_kegiatan::create($request->all());
        return redirect('/data-kegiatan')->with('success','Data Berhasil ditambahkan');
    }
    public function edit($id)
    {
        // $data= Data_kegiatan::find($id);

        // $data = \App\Models\Data_kegiatan::where('id', $id)->first();
        // return redirect()->route('/data-kegiatan/{id}/edit', ['id' => $id]);
            // $data= Data_kegiatan::find($id);
            // $data = \App\Models\Data_kegiatan::where('id', $id)->first();
            $data = Data_kegiatan::find($id);


        return view('data_kegiatan.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        // \App\Models\Data_kegiatan::create($request->all());
        $data = Data_kegiatan::find($id);
        $data->update($request->all());

        return redirect('/data-kegiatan')->with('success','Data Berhasil ditambahkan');
    }
    public function delete($id)
    {
        // \App\Models\Data_kegiatan::create($request->all());
        $data = \App\Models\Data_kegiatan::find($id);
        $data->delete();

        return redirect('/data-kegiatan')->with('success','Data Berhasil ditambahkan');
    }
}
