<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = ['id','name'];

   
    protected $table = 'semester';
}