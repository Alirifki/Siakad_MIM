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
     
        $siswa = Siswa::all();
        return view('admin.siswa.index', compact('siswa'));
    }

    public function tambah () {
        $kelas = Kelas::all();

        // dd($kelas);
        return view('admin.siswa.tambah', compact('kelas'));
    }

    public function store(Request $request){
       
        $this->validate($request, [
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jk' => 'required',
            'telp' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kelas' => 'required',
        ]);

         Siswa::create([
            'nip' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'kelas_id' => $request->kelas,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
        ]);

       return Redirect::route('view_siswa');
    }

    public function edit(){

    }
    public function hapus($id){
        $siswa = Siswa::find($id);
        
        $siswa->delete();
        return Redirect::route('view_siswa');
    }   
}