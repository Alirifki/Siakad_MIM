<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
                            'no_induk',    
                            'nis', 
                            'nama_siswa', 
                             'jk', 
                             'telp', 
                             'tmp_lahir', 
                             'tgl_lahir', 
                             'foto',
                             'kelas_id',
                            ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class)->withDefault();
    }

    public function ulangan($id)
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $nilai = Ulangan::where('siswa_id', $id)->where('guru_id', $guru->id)->first();
        return $nilai;
    }

    public function sikap($id)
    {
        $guru = Guru::where('id_card', Auth::user()->id_card)->first();
        $nilai = Sikap::where('siswa_id', $id)->where('guru_id', $guru->id)->first();
        return $nilai;
    }
    public function nilai ($id)  
    {
      $guru = Guru::where('id_card',Auth::user()->id_card)->first();
      $nilai = Rapot::where('siswa_id',$id)->where('guru_id',$guru->$id)->first();
    }

    protected $table = 'siswa';

}
