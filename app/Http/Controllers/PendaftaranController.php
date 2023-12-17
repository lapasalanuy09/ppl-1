<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PendaftaranController extends Controller
{
    public function index(Request $request)
{
    if($request->has('cari')){
        $data_pendaftaran = Pendaftaran::where('nama','LIKE','%'.$request->cari.'%')->get();
    } else {
        // Mengambil data pendaftaran dan mengurutkannya berdasarkan Nama dan NPM
        $data_pendaftaran = user::with('pendaftaran')->whereNotIn('role', ['admin'])->orderBy('id')->get();
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

        toast('Data Berhasil Ditambahkan','success');
        return redirect('/pendaftaran-mahasiswa');

    }
    public function edit($user_id)
    {
        $pendaftaran= Pendaftaran::find($user_id);

        $pendaftaran = Pendaftaran::where('user_id', $user_id)->first();
        if (!$pendaftaran) {
            // Handle kasus jika data pendaftaran tidak ditemukan
            abort(404); // Menampilkan halaman 404 Not Found
        }
        return view('pendaftaran/edit', compact('pendaftaran'));
    }

    public function update(Request $request, $user_id)
    {
        $pendaftaran=Pendaftaran::find($user_id);
        $pendaftaran->update($request->all());
        toast('Data Berhasil Di Update','success');
        return redirect('/pendaftaran-mahasiswa');
    }

    public function delete($user_id)
    {
        Pendaftaran::where('user_id', $user_id)->delete();
        $pendaftaran = User::find($user_id);
        $pendaftaran->delete($pendaftaran);
        toast('Data Berhasil Dihapus','success');
        return redirect ('/pendaftaran-mahasiswa');
    }

    public function profile($user_id)
    {
        $user= User::find($user_id);
        return view('pendaftaran.profile',['user'=>$user]);
    }
}
