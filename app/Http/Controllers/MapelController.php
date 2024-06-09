<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index() {
        $mapels = Mapel::all();
        return view('admin.mapel.index', compact('mapels')); 
       }
}
