<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = ['no_induk', 'nis', 'nama_siswa', 'kelas_id', 'jk', 'telp', 'tmp_lahir', 'tgl_lahir', 'foto'];

    public function kelas()
    {
        return $this->belongsTo('App\Kelas')->withDefault();
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

    public function user ()  {
        return $this->belongsTo(User::class); 
    }
    public function nilai ()  {
        return $this->belongsTo(Nilai::class); 
    }

    protected $table = 'siswa';

}
