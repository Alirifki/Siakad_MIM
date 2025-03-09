<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Mapel extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_mapel'];

    public function sikap($id)
    {
        $siswa = Siswa::where('no_induk', Auth::user()->no_induk)->first();
        $nilai = Sikap::where('siswa_id',$siswa->id)->where('mapel_id',$id)->first();
    }

    public function cekSikap($id)
    {
        $data = json_decode($id, true);
        $sikap = Sikap::where('siswa_id',$data['siswa'])->where('mapel_id',$data['mapel'])->first();
    
    }
    protected $table = 'mapel';

}
