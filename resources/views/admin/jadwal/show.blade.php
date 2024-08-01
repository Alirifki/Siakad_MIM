@extends('layouts.app')

@section('group', 'Jadwal')
@section('title', 'Show')

@section('content')

<div class="flex flex-row-reverse">
    <div>
       <h1>Jadwal Hari : </h1>
    </div>
</div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        Kelas
                    </tr>
                    <tr>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">

                         </td>
                </tbody>
                
            </table>           
        </div>
        {{-- <h1>Jadwal : {{$senin->hari_id}}</h1> --}}

<table>
    <tr>
        <th>Kelas</th>
        <th>Jadwal</th>
    </tr>
    @foreach($kelas as $kelas)
        <tr>
            <td>{{ $kelas->nama_kelas }}</td>
            <td>
                @foreach($senin as $jadwal)
                    @if($jadwal->kelas_id == $kelas->id)
                        {{ $jadwal->mapel->nama_mapel }}
                    @endif
                @endforeach
            </td>
        </tr>
    @endforeach
</table>
        


@endsection