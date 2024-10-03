<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Nilai;
use App\Models\Rapot;
use App\Models\Semester;
use App\Models\Siswa;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NilaiController extends Controller
{

    public function index(){
       
        
        $kelas = Kelas::all();

        return view('admin.nilai.index', compact('kelas'));
          }

    public function input($kelas){
    
        $user = Auth::user();
        $guru = $user->nip;
        $guru_id = Guru::where('nip',$guru)->first();
        $mapel=$guru_id->mapel->nama_mapel;
        $smt = Semester::all();
        
        // dd($smt);
        
        $siswa = Siswa::Where('kelas_id', $kelas)->get();
        $id = $siswa->pluck('id');
        // dd($id);
        return view('admin.nilai.input', compact('siswa', 'mapel', 'kelas','smt','id'));
    }

    public function store(Request $request, $id){
        // $user = Auth::user();
        // $guru = $user->nip;
        // $guru_id = Guru::where('nip',$guru)->first();
        // $mapel=$guru_id->mapel_id;
        
        
        // $nama_siswa = $request->input('siswa_id'); // assuming the request has a field named "nama_siswa"
        // $siswa = Siswa::where('nama_siswa', $nama_siswa)->first();
        // // Validate the input data
        // $this->validate($request, [
        //     '*.siswa_id' => $siswa,
        //     '*.mapel_id' => $mapel,
        //     '*.smt_id' => 'required|integer',
        //     '*.uh1' => 'required|integer',
        //     '*.uh2' => 'required|integer',
        //     '*.uts' => 'required|integer',
        //     '*.uh3' => 'required|integer',
        //     '*.uas' => 'integer',
        // ]);
    
        // // Get the input data
        // $data = $request->all();
    // dd($request);
        // Process the grades
        // $averageGrades = [];
        // foreach ($data as $student) {
        //     $averageGrade = ($student['uh1'] + $student['uh2'] + $student['uts'] + $student['uh3'] + $student['uas']) / 5;
        //     $averageGrades[$student['siswa_id']] = $averageGrade;
        // }
    
        // Return the processed data
        return view('');
    }
   
    public function show (){

        $nilai = Nilai::all();
        return view('admin.nilai.show', compact('nilai'));
    }

public function delete_nilai(Nilai $nilai)
    {

    $nilai ->delete();
       return Redirect::route('show_nilai');
   }

public function getsiswa(Request $request)
    {
    
        $siswa_id = $request->input('siswa_id');

        // Retrieve student information using the siswa_id
        $student = Siswa::find($siswa_id);
    
        // Return the student data as HTML
        return view('admin.nilai.modal', compact('student'))->render();
  
   }
}