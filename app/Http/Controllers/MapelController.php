<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MapelController extends Controller
{
    public function index() {
        $mapel = Mapel::orderBy('nama_mapel')->get();
        return view('admin.mapel.index', compact('mapel')); 
       }

    public function mapel($id) {
        $id = Crypt::decrypt($id);
        $mapel = Mapel::find($id);
        $guru = Guru::where('mapel_id',$id)->get();

       
        return view('admin.mapel.detail', compact('guru'));
    }
}
