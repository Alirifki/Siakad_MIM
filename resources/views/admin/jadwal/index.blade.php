@extends('layouts.app')

@section('group', 'Jadwal')
@section('title', 'Index')

@section('content')

<div class="flex flex-row-reverse">
    <div>
        <a href="{{route('buat_jadwal')}}" class=" mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">Input Jadwal</a>
    </div>
</div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                           hari
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kelas
                         </th><th scope="col" class="px-6 py-3">
                            Mapel
                         </th><th scope="col" class="px-6 py-3">
                            Guru
                         </th><th scope="col" class="px-6 py-3">
                            Jam
                         </th>
                        
                    </tr>
                </thead>
                @foreach ($jadwal as $item)
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           {{$loop->iteration}}
                        </th>
                            <td class="px-6 py-4">
                               {{$item->hari}}
                            </td>
                            <td class="px-6 py-4">
                                {{$item->kelas->nama_kelas}}
                             </td>
                             <td class="px-6 py-4">
                                {{$item->mapel->nama_mapel}}
                             </td>
                             <td class="px-6 py-4">
                                {{$item->guru->nama_guru}}
                             </td>
                             <td class="px-6 py-4">
                                {{$item->jam_mulai}} - {{$item->jam_selesai}}
                             </td>
                </tbody>
                @endforeach
            </table>            
        </div>
        


@endsection