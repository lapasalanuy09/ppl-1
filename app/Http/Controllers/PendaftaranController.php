<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class PendaftaranController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pendaftaran = User::where('nama','LIKE','%'.$request->cari.'%')->get();
        } else {
            // Mengambil data pendaftaran dan mengurutkannya berdasarkan Nama dan NPM
            $data_pendaftaran = user::with('pendaftaran')->whereNotIn('role', ['admin'])->orderBy('id')->get();
        }

        return view('pendaftaran.index-pdt', ['data_pendaftaran' => $data_pendaftaran]);
    }

    public function cetak(Request $request)
    {
        if($request->has('cari')){
            $data_pendaftaran = Pendaftaran::where('nama','LIKE','%'.$request->cari.'%')->get();
        } else {
            // Mengambil data pendaftaran dan mengurutkannya berdasarkan Nama dan NPM
            $data_pendaftaran = user::with('pendaftaran')->whereNotIn('role', ['admin'])->orderBy('id')->get();
        }

        return view('pendaftaran.cetak', ['data_pendaftaran' => $data_pendaftaran]);
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
                $request->file('profil')->storeAs('profil', $profilFileName);
                $pendaftaran->profil = $profilFileName;
            }

            if ($request->hasFile('bukti_pembayaran')) {
                $buktiPembayaranFileName = $request->file('bukti_pembayaran')->getClientOriginalName();
                $request->file('bukti_pembayaran')->storeAs('bukti_pembayaran', $buktiPembayaranFileName);
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

    public function update(Request $request, $user_id,$id)
    {
        // dd($user_id,$request,$id,$request['nama']);
        $user=User::find($id);
        $pendaftaran=Pendaftaran::find($user_id);
        

        // dd($user,$pendaftaran);

        $rules = [
            'no_pendaftaran' => '',
            'nama' => '',
            'email' => '',
            'npm' => '',
            'jenis_kelamin' => '',
            'tempat_lahir' => '',
            'tanggal_lahir' => '',
            'agama' => '',
            'angkatan' => '',
            'jurusan' => '',
            'alamat_domisili' => '',
            'profil' => '', 
            'nama_ibu' => '',
            'nama_ayah' => '',
            'pekerjaan_ibu' => '',
            'pekerjaan_ayah' => '',
            'bukti_pembayaran' => '',
            'jalur_pendaftaran' => '',
            'pembelian_merchandise' => '',
        ];

        $validatedata = $request->validate($rules);

        $user->update([
            $user->nama = $validatedata['nama'],
            $user->email = $validatedata['email']
        ]);

        if ($request->file('profil')) {
            if ($pendaftaran->profil != null)
                Storage::delete($pendaftaran->profil);
                $profilFileName = time() . '_' .  $request->file('profil')->getClientOriginalName();
                $pendaftaran->profil =  $request->file('profil')->storeAs('profil', $profilFileName);
        };

        
        if ($request->file('bukti_pembayaran')) {
            if ($pendaftaran->bukti_pembayaran != null)
                Storage::delete($pendaftaran->bukti_pembayaran);
                $buktipembayaranFileName = time() . '_' .  $request->file('bukti_pembayaran')->getClientOriginalName();
                $pendaftaran->bukti_pembayaran =  $request->file('bukti_pembayaran')->storeAs('bukti_pembayaran', $buktipembayaranFileName);
        };


        $pendaftaran->update([
            $pendaftaran->user_id = $validatedata['no_pendaftaran'],
            $pendaftaran->npm = $validatedata['npm'],
            $pendaftaran->jenis_kelamin = $validatedata['jenis_kelamin'],
            $pendaftaran->tempat_lahir = $validatedata['tempat_lahir'],
            $pendaftaran->tanggal_lahir = $validatedata['tanggal_lahir'],
            $pendaftaran->agama = $validatedata['agama'],
            $pendaftaran->angkatan = $validatedata['angkatan'],
            $pendaftaran->jurusan = $validatedata['jurusan'],
            $pendaftaran->alamat_domisili = $validatedata['alamat_domisili'],
            // $pendaftaran->profil =  $validatedata['profil'],
            $pendaftaran->nama_ibu = $validatedata['nama_ibu'],
            $pendaftaran->nama_ayah = $validatedata['nama_ayah'],
            $pendaftaran->pekerjaan_ibu = $validatedata['pekerjaan_ibu'],
            $pendaftaran->pekerjaan_ayah = $validatedata['pekerjaan_ayah'],
            // $pendaftaran->bukti_pembayaran = $validatedata['bukti_pembayaran'],
            $pendaftaran->jalur_pendaftaran = $validatedata['jalur_pendaftaran'],
            $pendaftaran->pembelian_merchandise = $validatedata['pembelian_merchandise'],
        ]);

        $user->save();
        $pendaftaran->save();

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
