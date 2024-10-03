<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\KelasSiswa;
use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index () {
        $kelas = Kelas::all();
        return view('layouts.pages.kelas.index', compact('kelas'));
    }

    public function show (String $kelas_id): View {
        
    
        $siswa = Siswa::Where('kelas_id', $kelas_id)->get();
    // ->with('siswa','kelas')->get();
     return view('layouts.pages.kelas.show', compact('siswa'));
        
        
    }
}