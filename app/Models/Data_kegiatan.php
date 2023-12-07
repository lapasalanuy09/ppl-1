<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_kegiatan extends Model
{
    protected $table = 'Data_kegiatan';
    protected $guarded = [];
    protected $primaryKey = 'id';
    // protected $fillable = ['nama kegiatan','lokasi','waktu','timeline', 'pemateri'];
}
