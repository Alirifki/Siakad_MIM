<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = ['nip', 'nama_guru', 'mapel_id', 'jk', 'telp', 'tmp_lahir', 'tgl_lahir'];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
    public function jadwal()
    {
        return $this->Hasmany(Jadwal::class);
    }
    public function dsk($id)
    {
        $dsk = Nilai::where('guru_id', $id)->first();
        return $dsk;
    }
    public function user()
    {
       return $this->belongsTo(User::class); 
    }

    protected $table = 'guru';

}

