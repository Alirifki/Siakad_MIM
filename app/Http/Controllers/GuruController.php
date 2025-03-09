<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
   
    public function index() {
        // $id = Crypt::decrypt($id);
        // // $mapel = Mapel::find($id);
        $mapel = Mapel::orderBy('nama_mapel')->get();
        // $guru = Guru::where('mapel_id',$id)->get();

        $guru = Guru::all();
        return view('admin.guru.show', compact('guru','mapel'));
    }

    
    public function tambah () {
        $mapels = Mapel::all();
        return view('admin.guru.tambah', compact('mapels'));
    }

    public function store(Request $request){
       
        $this->validate($request, [
            'nip' => 'required',
            'nama_guru' => 'required',
            'id_card' => 'required',
            'mapel' => 'required',
            'jk' => 'required',
            'telp' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
        ]);
        
        $file = $request-> file('foto');
        $path = time().'-'.$request->nama_guru.'.'.$file->getClientOriginalExtension();

        Storage::disk('local')->put('public/'.$path,file_get_contents($file));

         Guru::create([
            'nip' => $request->nip,
            'nama_guru' => $request->nama_guru,
            'mapel_id' => $request->mapel,
            'id_card' => $request->id_card,
            'jk' => $request->jk,
            'telp' => $request->telp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'foto' => $path,
        ]);

       return Redirect::route('view_guru');
    }

    public function edit(){

    }
    public function hapus($id){
        $guru = Guru::findorfail($id);
        $guru->delete();
        return Redirect::back();
    }
}
