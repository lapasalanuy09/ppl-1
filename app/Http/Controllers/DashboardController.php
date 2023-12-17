<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_pendaftar = Pendaftaran::count();
        $last_user = User::orderBy('updated_at', 'desc')->first();
        $time_ago = $last_user->created_at->diffForHumans();
        $data = [
            'jumlah_pendaftar' => $jumlah_pendaftar,
            'jumlah_user' =>User::count(),
            'time_ago' => $time_ago,
        ];
        
        return view('dashboards.index')->with('data',$data);
    }
    
    
    public function create(Request $request)
    {
        
    }
    public function profil($id)
    {
        $profil = User::find($id);
        // dd($profil->pendaftaran->profil);
        // $foto = Pendaftaran::find($id);
        // $foto = Pendaftaran::where('no_pendaftaran',$id);
        if (!$profil) {
            // Handle kasus jika data pendaftaran tidak ditemukan
            abort(404); // Menampilkan halaman 404 Not Found
        }
        return view('dashboards/profile', compact('profil',));
    }
    
    public function updateView($id) {
        $profil = User::find($id);
        
        if (!$profil) {
            // Handle kasus jika data pendaftaran tidak ditemukan
            abort(404); // Menampilkan halaman 404 Not Found
        }
        return view('dashboards/editprofile', compact('profil'));
    }
    
    public function update(Request $request, User $id, Pendaftaran $user_id)
    {
        // Lakukan validasi data
        $validatedData = $request->validate([
            'email' => 'email',
            'nama' => '', // Pastikan menyesuaikan aturan validasi sesuai kebutuhan
            
        ]);
        
        $fotoValidated = $request->validate([
            'profil' => 'image|mimes:jpeg,png,jpg'
        ]);
        
        // Cek apakah ada file profil yang diunggah
        if ($request->hasFile('profil')) {
            // Hapus foto lama jika ada
            if ($id->profil != null) {
                Storage::delete($id->profil);
            }
            
            // Simpan foto yang baru di direktori 'profil'
            $profilFileName = $request->file('profil')->getClientOriginalName();
            $request->file('profil')->move('images/', $profilFileName);
            $user_id->profil = $profilFileName;
        }
        $user_id->save();
        // Update data profil pada instance model
        $id->update($validatedData);
        toast('Data Berhasil Di Update', 'success');
        return redirect(route('myprofil', $id));
    }
    
    public function delete($no_pendaftaran)
    {
        $pendaftaran= Pendaftaran::find($no_pendaftaran);
        $pendaftaran->delete($pendaftaran);
        toast('Data Berhasil Dihapus','success');
        return redirect ('/pendaftaran-mahasiswa');
    }
}
