<?php

namespace App\Http\Controllers;

use App\Models\Data_kegiatan;
use Illuminate\Http\Request;

class DetailkegiatanController extends Controller
{
    public function index()
    {
        return view('detail_kegiatan.index', [
            "kegiatans" => Data_kegiatan::all()
        ]);
    }
}
