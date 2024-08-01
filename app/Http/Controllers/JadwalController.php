<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Hari;
use App\Models\Jadwal;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class JadwalController extends Controller
{
    public function index (){
       
       
        // $kelas = Kelas::all(); 
        $hari = Hari::all();

            return view('admin.jadwal.index', compact('hari'));
    }

    public function buat(){

        $hari = Hari::all();
        $guru = Guru::all();
        $kelas = Kelas::all();
        return view('admin.jadwal.tambah', compact('hari', 'kelas', 'guru'));
    }

    public function store (Request $request) {

        
        $this->validate($request, [
            'hari' => 'required',
            'kelas' => 'required',
            'mapel' => 'required',
            'mulai' => 'required',
            'akhir' => 'required',
        ]);
        //   $mapel_id = Guru::whare('mapel_id',$request->mapel);
        $guru = Guru::find($request->mapel);
        $mapel_id = $guru->mapel_id;
    //    dd($mapel_id);
        Jadwal::create([
            'hari_id' => $request->hari,
            'kelas_id' => $request->kelas,
            'mapel_id' => $mapel_id,
            'guru_id' => $request->mapel,
            'jam_mulai' => $request->mulai,
            'jam_selesai' => $request->akhir,
        ]);
        return Redirect::route('jadwal');
    }

    public function show ($hari){
        
        $kelas = Kelas::all();
        $senin=Jadwal::where('hari_id',$hari)
                        ->get();

        return view('admin.jadwal.show', compact('kelas','senin','hari'));
    }

}


// public function show(Request $request)
// {
//     $kelasOptions = ['MIM 1 K.Ks', 'MIM 2', 'MIM 3', 'MIM 4', 'MIM 5', 'MIM 6'];
//     $hariOptions = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

//     if ($request->isMethod('post')) {
//         $kelas = $request->input('kelas');
//         $hari = $request->input('hari');

//         $jadwal = Jadwal::where('kelas', $kelas)->where('hari', $hari)->get();

//         return view('jadwal.show', compact('kelasOptions', 'hariOptions', 'jadwal'));
//     }

//     return view('jadwal.show', compact('kelasOptions', 'hariOptions'));
// }