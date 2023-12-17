<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    protected $table = 'pendaftaran';
    protected $guarded = ['id'];
    
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
