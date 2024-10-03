<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Rapot;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RaportController extends Controller
{

public function raport(){

    $user = Auth::user();
    $nama = $user->name; 

    $raport = Rapot::all();
    // dd($nama);
    return view('siswa.raport',compact('raport','nama'));
}
public function store_raport(Request $request, $id){
         $user = Auth::user();
        $guru = $user->nip;
        $guru_id = Guru::where('nip',$guru)->first();
        $mapel=$guru_id->mapel_id;
        
        
        $nama_siswa = $request->input('siswa_id');
        $siswa = Siswa::where('nama_siswa', $nama_siswa)->first();
        dd($nama_siswa);
        return view('',compact('id'));
    }
}
