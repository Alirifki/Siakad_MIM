<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function view(){
        $nilais = Nilai::all();
         return view('layouts.pages.nilai.index', compact('nilais'));
    }

    public function index(){
        $kelas = Kelas::all();
        
        return view('layouts.pages.nilai.input', compact('kelas'));
          }

    public function input_nilai(Siswa $siswa){
        
        return view('layouts.pages.nilai.kelas', compact('siswa'));
    }

}

// // app/Http/Controllers/NilaiController.php

// namespace App\Http\Controllers;

// use App\Models\Nilai;
// use Illuminate\Http\Request;

// class NilaiController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $nilai = Nilai::all();
//         return view('nilai.index', compact('nilai'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         $siswa = Siswa::all();
//         $kelas = Kelas::all();
//         $mapel = Mapel::all();
//         return view('nilai.create', compact('siswa', 'kelas', 'mapel'));
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'nis' => 'required',
//             'ust' => 'required',
//             'uas' => 'required',
//             'kd_kelas' => 'required',
//             'kd_mapel' => 'required',
//         ]);

//         Nilai::create($request->all());

//         return redirect()->route('nilai.index')->with('success', 'Nilai created successfully');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Nilai  $nilai
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Nilai $nilai)
//     {
//         return view('nilai.show', compact('nilai'));
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Nilai  $nilai
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Nilai $nilai)
//     {
//         $siswa = Siswa::all();
//         $kelas = Kelas::all();
//         $mapel = Mapel::all();
//         return view('nilai.edit', compact('nilai', 'siswa', 'kelas', 'mapel'));
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Nilai  $nilai
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Nilai $nilai)
//     {
//         $request->validate([
//             'nis' => 'required',
//             'ust' => 'required',
//             'uas' => 'required',
//             'kd_kelas' => 'required',
//             'kd_mapel' => 'required',
//         ]);

//         $nilai->update($request->all());

//         return redirect()->route('nilai.index')->with('success', 'Nilai updated successfully');
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Nilai  $nilai
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Nilai $nilai)
//     {
//         $nilai->delete();
//         return redirect()->route('nilai.index')->with('success', 'Nilai deleted successfully');
//     }
// }