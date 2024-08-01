<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Mapel extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama_mapel'];

    public function guru(){
        return $this->belongsTo(Guru::class);
    }
    public function jadwal(){
        return $this->hasMany(Guru::class);
    }

    public function nilai(){
        return $this->hasMany(Nilai::class);
    }

    protected $table = 'mapel';

}
