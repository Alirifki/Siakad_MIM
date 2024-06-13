<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Hari;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Ruang;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index (){
            $hari = Hari::all();
            $kelas = Kelas::OrderBy('nama_kelas', 'asc')->get();
            $ruang = Ruang::all();
            // $guru = Guru::OrderBy('kode', 'asc')->get();

            return view('admin.jadwal.index', compact('hari', 'kelas', 'ruang'));
    }

    public function buat(){

        $hari = Hari::all();
        $mapel = Mapel::all();
        $guru = Guru::all();

        // Get mapel based on guru
        $mapel = [];
        foreach ($guru as $g) {
            $mapel[$g->id] = $g->mapel;
        }
        // dd($hari);
        return view('admin.jadwal.tambah', compact('hari', 'mapel', 'guru'));
    }
}
