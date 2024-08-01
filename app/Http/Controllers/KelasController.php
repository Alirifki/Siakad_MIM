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

// namespace App\Http\Controllers;

// use App\Models\Kelas;
// use Illuminate\Http\Request;

// class KelasController extends Controller
// {
//     public function index()
//     {
//         $kelas = Kelas::with('guru', 'siswa')->paginate(10);
//         return view('kelas.index', compact('kelas'));
//     }

//     public function create()
//     {
//         $guru = Guru::all();
//         return view('kelas.create', compact('guru'));
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'kd_kelas' => 'required|unique:kelas',
//             'nama_kelas' => 'required',
//             'nip' => 'required',
//         ]);

//         $kelas = Kelas::create($request->all());
//         $kelas->guru()->attach($request->nip);

//         return redirect()->route('kelas.index')->with('success', 'Kelas created successfully.');
//     }

//     public function show(Kelas $kelas)
//     {
//         return view('kelas.show', compact('kelas'));
//     }

//     public function edit(Kelas $kelas)
//     {
//         $guru = Guru::all();
//         return view('kelas.edit', compact('kelas', 'guru'));
//     }

//     public function update(Request $request, Kelas $kelas)
//     {
//         $request->validate([
//             'kd_kelas' => 'required|unique:kelas,kd_kelas,'.$kelas->kd_kelas,
//             'nama_kelas' => 'required',
//             'nip' => 'required',
//         ]);

//         $kelas->update($request->all());
//         $kelas->guru()->sync($request->nip);

//         return redirect()->route('kelas.index')->with('success', 'Kelas 
