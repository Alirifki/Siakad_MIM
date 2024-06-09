<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\Cast\String_;

class UserController extends Controller
{
    
   public function index ():View {
      $users = User::all();
      return view('admin.user.index', compact('users'));
   }

   public function tambah(String $id){

      $user = Guru::find($id);
   
      return view('admin.user.tambah',compact('user'));
   }
     public function store(Request $request) {

      $this->validate($request, [
        'name' => 'required',
         'email' => 'required',
         'password' => 'required',
         'role' => 'required',
         'nomor_id' => 'required', 
     ]);

    //  dd($request->name,$request->nomor_id,$request->role);
     User::create([
        'name' => $request->name,
        'email'=> $request->email,
        'role' => $request->role,
        'nip' => $request->nomor_id,
        'password' =>$request->password,
    ]);
      
         return Redirect::route('view_users');
         }
}

//

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Siswa;
// use App\Models\Guru;

// class UserController extends Controller
// {
//     public function create(Request $request)
//     {
//         $user = null;
//         $role = $request->role;

//         if ($role === 'siswa') {
//             $user = Siswa::create([
//                 'NIS' => $request->nis,
//                 'nama_siswa' => $request->name,
//                 'email' => $request->email,
//                 'password' => bcrypt($request->nis)
//             ]);
//         } elseif ($role === 'guru') {
//             $user = Guru::create([
//                 'nip' => $request->nip,
//                 'nama_guru' => $request->name,
//                 'email' => $request->email,
//                 'password' => bcrypt($request->nip)
//             ]); 
//         }

//         $user->username = $user->nip ?? $user->NIS;
//         $user->email = $request->email;
//         $user->role = $role;
//         $user->save();

//         return redirect()->back();

// if ($request->input('role') == 'siswa') {
//    $siswa = Siswa::create([
//        'user_id' => $user->id,
//        'nis' => $request->input('nis'),
//        'nama' => $request->input('nama'),
//        'tempat_lahir' => $request->input('tempat_lahir'),
//        'tanggal_lahir' => $request->input('tanggal_lahir'),
//        'jenis_kelamin' => $request->input('jenis_kelamin'),
//        'agama' => $request->input('agama'),
//        'alamat' => $request->input('alamat'),
//        'no_telp' => $request->input('no_telp'),
//    ]);
// } elseif ($request->input('role') == 'guru') {
//    $guru = Guru::create([
//        'user_id' => $user->id,
//        'nip' => $request->input('nip'),
//        'nama' => $request->input('nama'),
//        'tempat_lahir' => $request->input('tempat_lahir'),
//        'tanggal_lahir' => $request->input('tanggal_lahir'),
//        'jenis_kelamin' => $request->input('jenis_kelamin'),
//        'agama' => $request->input('agama'),
//        'alamat' => $request->input('alamat'),
//        'no_telp' => $request->input('no_telp'),
//    ]);
// }