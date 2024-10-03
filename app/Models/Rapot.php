<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapot extends Model
{
    use HasFactory;
    protected $fillable = ['nilai_id', 'na', 'kkm', 'predikat', 'deskripsi'];

    protected $table = 'rapot';
}
