<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\Kategori;
use App\Models\Penilaian;
use App\Models\Normalisasi;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function penilaian(){
        return view('dashboard.penilaian.index',
        [
            'datanilai' => Penilaian::get()
        ]);
    }
    public function kategori(){
        return view('dashboard.kriteria.index',
        [
            'kategori' => Kategori::get()
        ]);
    }
    public function normalisasi(){
        return view('dashboard.normalisasi.index',
        [
            'normalisasi' => Normalisasi::get()
        ]);
    }
    public function hasil(){
        return view('dashboard.hasil.index',
        [
            'hasil' => Hasil::get()
        ]);
    }
}
