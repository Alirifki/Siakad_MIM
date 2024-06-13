@extends('layouts.app')

@section('group', 'Jadwal')
@section('title', 'Buat Jadwal')

@section('content')

<form action="{{route('store_siswa')}}" method="POST">
    @csrf
    <div class="grid gap-6 mb-6 w-1/2">
                <label for="mapel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">kelas</label>
                <select id="mapel" name="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Hari</option>
                    @foreach ($hari as $item)
                    <option value='{{$item->id}}'>{{$item ->nama_hari}}</option>
                    @endforeach
                </select>
    </div>

    <div class="grid gap-6 mb-6 w-1/2">
            <label for="mapel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Mapel</label>
            <select id="mapel" name="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Pilih Hari</option>
                @foreach ($mapel as $item)
                <option value='{{$item->id}}'>{{$item ->nama_mapel}}</option>
                @endforeach
            </select>
    </div>

    <div class="grid gap-6 mb-6 w-1/2">
        <label for="mapel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Guru</label>
        <select id="mapel" name="kelas" class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Pilih Hari</option>
            @foreach ($guru as $item)
            <option value='{{$item->id}}'>{{$item ->nama_guru}}</option>
            @endforeach
        </select>
    </div>

    @foreach ($guru as $g)
        <optgroup label="{{ $g->nama }}">
            @foreach ($mapel[$g->id] as $m)
                <option value="{{ $m->id }}">{{ $m->nama }}</option>
            @endforeach
        </optgroup>
    @endforeach
        
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>



@endsection