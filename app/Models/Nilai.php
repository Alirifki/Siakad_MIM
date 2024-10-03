<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = ['mapel_id', 'siswa_id','uh1', 'uh2', 'uts', 'uh3', 'uas'];

    public function guru()
    {
        return $this->belongsTo(Guru::class)->withDefault();
    }
    public function mapel(){
        return $this->belongsTo(Mapel::class);
    }
    public function siswa(){
        return $this->belongsTo(Siswa::class);
    }
    protected $table = 'nilai';
}
