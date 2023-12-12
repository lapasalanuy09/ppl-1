<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Console\View\Components\Alert;

class PendaftaranController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pendaftaran = Pendaftaran::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_pendaftaran = Pendaftaran::all();

        }

        return view('pendaftaran.index-pdt', ['data_pendaftaran' => $data_pendaftaran]);

    }
    public function create(Request $request)
    {
        try {
            $user = new User;
            $user->role = 'user';
            $user->nama = $request->input('nama');
            $user->email = $request->email;
            $user->password = bcrypt('rahasia');
            $user->remember_token = bin2hex(random_bytes(30));
            $user->save();


            //Pendaftaran::create($request->all());
            $request->request->add(['user_id' => $user->id]);
            $pendaftaran = Pendaftaran::create($request->all());

            if ($request->hasFile('profil')) {
                $profilFileName = $request->file('profil')->getClientOriginalName();
                $request->file('profil')->move('images/', $profilFileName);
                $pendaftaran->profil = $profilFileName;
            }

            if ($request->hasFile('bukti_pembayaran')) {
                $buktiPembayaranFileName = $request->file('bukti_pembayaran')->getClientOriginalName();
                $request->file('bukti_pembayaran')->move('images/', $buktiPembayaranFileName);
                $pendaftaran->bukti_pembayaran = $buktiPembayaranFileName;
            }

            $pendaftaran->save(); //insert table user
        } catch (\Illuminate\Database\QueryException $e) {

            return "Gagal menambahkan user: " . $e->getMessage();
        }
        return redirect('/pendaftaran-mahasiswa')->with('success','Data Berhasil ditambahkan');




    }
    public function edit($no_pendaftaran)
    {
        $pendaftaran= Pendaftaran::find($no_pendaftaran);

        $pendaftaran = \App\Models\Pendaftaran::where('no_pendaftaran', $no_pendaftaran)->first();
        if (!$pendaftaran) {
            // Handle kasus jika data pendaftaran tidak ditemukan
            abort(404); // Menampilkan halaman 404 Not Found
        }
        return view('pendaftaran-mahasiswa/edit', compact('pendaftaran'));
    }
    public function update(Request $request, $no_pendaftaran)
    {
        $pendaftaran=Pendaftaran::find($no_pendaftaran);
        $pendaftaran->update($request->all());

        return redirect('/pendaftaran-mahasiswa')->with('success','Data Berhasil diupdate');

    }
    public function delete($no_pendaftaran)
    {
        $pendaftaran= Pendaftaran::find($no_pendaftaran);
        $pendaftaran->delete($pendaftaran);
        return redirect ('/pendaftaran-mahasiswa')->with('success','Data Berhasil dihapus');
    }
    public function profile($no_pendaftaran)
    {
        $pendaftaran= Pendaftaran::find($no_pendaftaran);
        return view('pendaftaran.profile',['pendaftaran'=>$pendaftaran]);
    }
}
