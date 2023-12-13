<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PendaftaranpkkmbController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        return view('pendaftaran_pkkmb.index',[
        ]);
    }
    
    public function create(Request $request)
    {
        
        return view('pendaftaran_pkkmb.daftar');    
    }
        
    public function store(Request $request)
    {
       
        
       $data = $request->validate([
            'no_pendaftaran' => '',
            'nama' => '',
            'npm' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'email' => 'email',
            'angkatan' => 'required',
            'jurusan' => 'required',
            'alamat_domisili' => 'required',
            'profil' => 'required|file|mimes:jpeg,jpg,png', // Sesuaikan dengan jenis file yang diizinkan
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'pekerjaan_ayah' => 'required',
            'bukti_pembayaran' => 'required|file|mimes:jpeg,jpg,png',
            'jalur_pendaftaran' => 'required',
            'pembelian_merchandise' => 'required',
        ]);
            
        if ($request->hasFile('profil') && $request->hasFile('bukti_pembayaran')) {
            // Menangani file profil
            $profilFile = $request->file('profil');
            $profilFileName = time() . '_' . $profilFile->getClientOriginalName();
            $profilFilePath = $profilFile->storeAs('profil', $profilFileName, 'public'); // Sesuaikan direktori penyimpanan
        
            // Menangani file bukti pembayaran
            $buktiPembayaranFile = $request->file('bukti_pembayaran');
            $buktiPembayaranFileName = time() . '_' . $buktiPembayaranFile->getClientOriginalName();
            $buktiPembayaranFilePath = $buktiPembayaranFile->storeAs('bukti_pembayaran', $buktiPembayaranFileName, 'public'); // Sesuaikan direktori penyimpanan
        } else {
            // Jika salah satu atau kedua file tidak diunggah, Anda mungkin ingin memberikan pesan kesalahan atau melakukan tindakan lain sesuai kebutuhan aplikasi Anda.
            return redirect('/pendaftaran_pkkmb.daftar')->with('error', 'File profil dan bukti pembayaran harus diunggah.');
        }
        
        $data = $request->except(['profil', 'bukti_pembayaran']); // Menghapus 'profil' dan 'bukti_pembayaran' dari array $data karena kita telah menyimpannya secara terpisah
        
        // Tambahkan kolom 'profil' dan 'bukti_pembayaran' ke array $data
        // $data['profil'] = $profilFilePath;
        // $data['bukti_pembayaran'] = $buktiPembayaranFilePath;
        
        // Simpan data ke database
        Pendaftaran::create([
            'no_pendaftaran' => Auth::user()->id,
            'nama' =>Auth::user()->nama,
            'npm' => $request->npm,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'email' => Auth::user()->email,
            'angkatan' => $request->angkatan,
            'jurusan' => $request->jurusan,
            'alamat_domisili' => $request->alamat_domisili,
            'profil' => $profilFilePath, 
            'nama_ibu' => $request->nama_ibu,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'bukti_pembayaran' => $buktiPembayaranFilePath,
            'jalur_pendaftaran' => $request->jalur_pendaftaran,
            'pembelian_merchandise' => $request->pembelian_merchandise,
        ]);        
            
        Alert::toast('Data Berhasil Ditambahkan','success');
        return redirect('/pendaftaranpkkmb');
    }
        
    public function show(string $id)
    {
        //
    }
        
    public function edit(string $id)
    {
        //
    }
        
    public function update(Request $request, string $id)
    {
        //
    }
        
    public function destroy(string $id)
    {
        //
    }
}
    