<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\KelasSiswa;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    public function index () {
        $kelas = Kelas::all();
        $siswa = Siswa::all();
        return view('admin.siswa.index', compact('siswa','kelas'));
    }

    public function tambah () {
        $kelas = Kelas::all();

        // dd($kelas);
        return view('admin.siswa.tambah', compact('kelas'));
    }

    public function store(Request $request){
       
        $this->validate($request, [
            'no_induk' => 'required',
            'nis' => 'required',
            'nama_siswa' => 'required',
            'jk' => 'required',
            'telp' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'kelas_id' => 'required',
        ]);
        // dd($request->no_induk);
        $file = $request-> file('foto');
        $path = time().'-'.$request->nama_siswa.'.'.$file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'.$path,file_get_contents($file));

         Siswa::create([
            'no_induk' => $request->no_induk,
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'foto' => $path,
            'kelas_id' => $request->kelas_id,
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