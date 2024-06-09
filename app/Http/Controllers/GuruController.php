<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GuruController extends Controller
{
    public function index () {
     
        $guru = Guru::all();
        return view('admin.guru.index', compact('guru'));
    }

    public function tambah () {
        $mapels = Mapel::all();
        return view('admin.guru.tambah', compact('mapels'));
    }

    public function store(Request $request){
       
        $this->validate($request, [
            'nip' => 'required',
            'nama_guru' => 'required',
            'mapel' => 'required',
            'jk' => 'required',
            'telp' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
        ]);

         Guru::create([
            'nip' => $request->nip,
            'nama_guru' => $request->nama_guru,
            'mapel_id' => $request->mapel,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

       return Redirect::route('view_guru');
    }

    public function edit(){

    }
    public function hapus(Guru $guru){
        $guru->delete();
        return Redirect::back();
    }
}

// <?php

// namespace App\Http\Controllers;

// use App\Models\Guru;
// use Illuminate\Http\Request;

// class GuruController extends Controller
// {
//     public function index()
//     {
//         $gurus = Guru::all();
//         return view('guru.index', compact('gurus'));
//     }

//     public function create()
//     {
//         return view('guru.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'nip' => 'required',
//             'kd_mapel' => 'required',
//             'nama_guru' => 'required',
//         ]);

//         Guru::create($request->all());

//         return redirect()->route('guru.index')
//                         ->with('success','Guru created successfully.');
//     }

//     public function show(Guru $guru)
//     {
//         return view('guru.show',compact('guru'));
//     }

//     public function edit(Guru $guru)
//     {
//         return view('guru.edit',compact('guru'));
//     }

//     public function update(Request $request, Guru $guru)
//     {
//         $request->validate([
//             'nip' => 'required',
//             'kd_mapel' => 'required',
//             'nama_guru' => 'required',
//         ]);

//         $guru->update($request->all());

//         return redirect()->route('guru.index')
//                         ->with('success','Guru updated successfully');
//     }

//     public function destroy(Guru $guru)
//     {
//         $guru->delete();

//         return redirect()->route('guru.index')
//                         ->with('success','Guru deleted successfully');
//     }
// }