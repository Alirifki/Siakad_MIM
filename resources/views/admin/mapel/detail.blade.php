@extends('layouts.app')

@section('group', 'Mapel')
@section('title', 'Index Mapel')

@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   No
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        ID CARD
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        NAMA
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        NIP
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    <div class="flex items-center">
                        FOTO
                    </div>
                </th>
                
            </tr>
        </thead>
        @foreach ($guru as $data)
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$loop->iteration}}
                </th>
                 <td class="px-6 py-4">
                    {{$data->id_card}}
                 </td>
                 <td class="px-6 py-4">
                    {{$data->nama_guru}}
                 </td>
                 <td class="px-6 py-4">
                    {{$data->nip}}
                 </td>
                 <td class="px-6 py-4">
                    {{-- {{$data->foto}} --}}
                   <img src="{{url('storage/'. $data ->foto)}}" class="w-20 h-20"/>
                 </td>
               
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection