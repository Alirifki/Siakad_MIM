@extends('layouts.app')

@section('group', 'Warga Sekolah')
@section('title', 'Index Guru')

@section('content')

<div class="flex flex-row-reverse">
    <div>
        <a href="{{route('tambah_guru')}}" class=" mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">Tambah</a>
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
                            <div class="flex items-center">
                               NIP
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                NAMA GURU
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                MATAPELAJARAN
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
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
                           {{$data->nip}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->nama_guru}}
                         </td>
                         <td class="px-6 py-4">
                            {{$data->mapel->nama_mapel}}
                         </td>
                         <td class="px-6 py-4">
                            {{$data->jk}}
                         </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{route('tambah_user',['id' => $data->id, 'table' => 'guru'])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buatkan User</a> /
                            <form action="{{route('delete_guru',$data)}}" method="post">
                                @method('delete')
                                @csrf
                                   <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</button>
                                </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
@endsection