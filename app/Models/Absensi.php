<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $fillable = ['guru_id', 'tanggal', 'kehadiran_id'];

    public function guru()
    {
        return $this->belongsTo(Guru::class)->withDefault();
    }

    public function kehadiran()
    {
        return $this->belongsTo(Kehadiran::class)->withDefault();
    }

    protected $table = 'absensi_guru';
}
