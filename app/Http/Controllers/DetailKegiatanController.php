<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailkegiatanController extends Controller
{
    public function index()
    {
        return view('detail_kegiatan.index');
    }
}