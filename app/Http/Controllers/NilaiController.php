<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NilaiController extends Controller
{

    public function index(){
       
        
        $kelas = Kelas::all();

        return view('admin.nilai.index', compact('kelas'));
          }

    public function input($kelas){
    
        $user = Auth::user();
        $guru = $user->nip;
        $guru_id = Guru::where('nip',$guru)->first();
        $mapel=$guru_id->mapel->nama_mapel;
        // dd($mapel);
        
        $siswa = Siswa::Where('kelas_id', $kelas)->get();
    // dd($siswa);
        return view('admin.nilai.input', compact('siswa', 'mapel', 'kelas'));
    }

    public function store(Request $request){
        $user = Auth::user();
        $guru = $user->nip;
        $guru_id = Guru::where('nip',$guru)->first();
        $mapel=$guru_id->mapel_id;
        
        $nama_siswa = $request->input('siswa_id'); // assuming the request has a field named "nama_siswa"
        $siswa = Siswa::where('nama_siswa', $nama_siswa)->first();
        $siswa_id = $siswa->id;

        
        $request->validate([
            'uh1' => 'nullable|string',
            'uh2' => 'nullable|string',
            'uts' => 'nullable|string',
            'uh3' => 'nullable|string',
            'uas' => 'nullable|string',
        ]);
        
        $nilai = new Nilai();
        $nilai->mapel_id = $mapel;
        $nilai->siswa_id = $siswa_id;
        $nilai->uh1 = $request->input('uh1');
        $nilai->uh2 = $request->input('uh2');
        $nilai->uts = $request->input('uts');
        $nilai->uh3 = $request->input('uh3');
        $nilai->uas = $request->input('uas');
        $nilai->save();
 
        return Redirect::route('input_nilai');
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