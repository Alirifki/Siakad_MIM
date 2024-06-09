<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\KelasSiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SiswaController extends Controller
{
    public function index () {
        $siswas = Siswa::all();
        //         return view('siswa.index', compact('siswa'));
        return view('.admin.siswa.index', compact('siswas'));
    }

    public function tambah () {
        $kelas = Kelas::all();
        return view('layouts.pages.siswa.tambah', compact('kelas'));
    }
    public function store(Request $request){
        
       return Redirect::route('view_siswa');
    }
}

// namespace App\Http\Controllers;

// use App\Models\Siswa;
// use Illuminate\Http\Request;

// class SiswaController extends Controller
// {
//     public function index()
//     {
//         $siswa = Siswa::with('kelas')->paginate(10);
//         return view('siswa.index', compact('siswa'));
//     }

//     public function create()
//     {
//         $kelas = Kelas::all();
//         return view('siswa.create', compact('kelas'));
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'NIS' => 'required|unique:siswa',
//             'nama_siswa' => 'required',
//         ]);

//         $siswa = Siswa::create($request->all());
//         $siswa->kelas()->attach($request->kd_kelas);

//         return redirect()->route('siswa.index')->with('success', 'Siswa created successfully.');
//     }

//     public function show(Siswa $siswa)
//     {
//         return view('siswa.show', compact('siswa'));
//     }

//     public function edit(Siswa $siswa)
//     {
//         $kelas = Kelas::all();
//         return view('siswa.edit', compact('siswa', 'kelas'));
//     }

//     public function update(Request $request, Siswa $siswa)
//     {
//         $request->validate([
//             'NIS' => 'required|unique:siswa,NIS,'.$siswa->NIS,
//             'nama_siswa' => 'required',
//         ]);

//         $siswa->update($request->all());
//         $siswa->kelas()->sync($request->kd_kelas);

//         return redirect()->route('siswa.index')->with('success', 'Siswa updated successfully.');
//     }

//     public function destroy(Siswa $siswa)
//     {
//         $siswa->delete();
//         return redirect()->route('siswa.index')->with('success', 'Siswa deleted successfully.');
//     }
// }