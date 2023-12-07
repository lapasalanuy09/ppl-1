<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    public function pendaftaran()
    {
        return $this->hasOne(Pendaftaran::class);
    }
    protected $table = 'pendaftaran';
    protected $guarded = [];
    protected $primaryKey = 'no_pendaftaran';
    //protected $fillable = ['nama','npm', 'jenis_kelamin', 'agama', 'angkatan', 'jurusan', 'alamat_domisili','profil','user_id'];
    public static $rules = [
        'pembelian_merchandise' => 'in:Ya,Tidak', // Hanya menerima nilai "Ya" atau "Tidak"
    ];

    public function getProfil()
    {
        if(!$this->profil){
            return asset('images/dafault.jpg');
        }

        return asset('images/'.$this->profil);
    }

}
