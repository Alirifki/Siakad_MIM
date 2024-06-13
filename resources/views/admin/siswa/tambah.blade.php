@extends('layouts.app')

@section('group', 'Warga Sekolah')
@section('title', 'Tambah siswa')

@section('content')

<form action="{{route('store_siswa')}}" method="POST">
    @csrf
    <div class="grid gap-6 mb-6 w-1/2">
        <div>
            <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIS</label>
            <input type="text" name="nis" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        
        <div>
            <label for="nama_siswa" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input type="text" name="nama_siswa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required />
        </div>  
        <div>
            <label for="no_telpon" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Telpon</label>
            <input type="text" name="telp" id="telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required />
        </div>  
        <div>
            <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required />
        </div>  
        <div>
            <label for="nama_guru" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
            <input type="text" name="tmp_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required />
        </div>  
        <div>
            <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
           
            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                <input id="bordered-radio-1" type="radio" value="L" name="jk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki - Laki</label>
            </div>
            <div class="flex items-center ps-4 border border-gray-200 rounded dark:border-gray-700">
                <input checked id="bordered-radio-2" type="radio" value="P" name="jk" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
            </div>

        <div>
                <label for="mapel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kelas</label>
                <select id="mapel" name="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Kelas</option>
                    @foreach ($kelas as $item)
                    <option value='{{$item->id}}'>{{$item ->nama_kelas}}</option>
                    @endforeach
                </select>
        </div>
        
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>



@endsection