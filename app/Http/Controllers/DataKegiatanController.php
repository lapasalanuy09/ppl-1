<?php

namespace App\Http\Controllers;

use App\Models\Data_Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $request->validate([
            'timeline' => 'image|mimes:jpeg,png,jpg', // sesuaikan dengan jenis file dan batas ukuran yang diinginkan
            // tambahkan validasi atau aturan lain sesuai kebutuhan
        ]);

        $input = $request->all();

        // Upload gambar jika ada
        if ($request->hasFile('timeline')) {
            $imageName = time().'.'.$request->timeline->extension();
            $request->timeline->storeAs('public/timeline_images', $imageName);
            $input['timeline'] = $imageName;
        }

        Data_Kegiatan::create($input);

        toast('Data Berhasil Ditambahkan','success');
        return redirect('/data-kegiatan');
    }
    public function edit($id)
    {
        $data = Data_kegiatan::find($id);
        return view('data_kegiatan.edit', compact('data'));
    }
     public function update(Request $request, $id)
    {
        $data = Data_Kegiatan::find($id);

        $request->validate([
            'timeline' => 'image|mimes:jpeg,png,jpg', // sesuaikan dengan jenis file dan batas ukuran yang diinginkan
            // tambahkan validasi atau aturan lain sesuai kebutuhan
        ]);

        $input = $request->all();

        // Upload gambar jika ada
        if ($request->hasFile('timeline')) {
            // Hapus file lama jika ada
            if ($data->timeline) {
                Storage::delete('public/timeline_images/' . $data->timeline);
            }

            // Simpan file baru
            $imageName = time().'.'.$request->timeline->extension();
            $request->timeline->storeAs('public/timeline_images', $imageName);
            $input['timeline'] = $imageName;
        }

        $data->update($input);

        toast('Data Berhasil Di Update','success');
        return redirect('/data-kegiatan');
    }
    public function delete($id)
    {
        // \App\Models\Data_kegiatan::create($request->all());
        $data = \App\Models\Data_kegiatan::find($id);
        $data->delete();

        toast('Data Berhasil Dihapus','success');
        return redirect('/data-kegiatan');
    }
}
