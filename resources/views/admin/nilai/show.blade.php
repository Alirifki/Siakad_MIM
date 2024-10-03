@extends('layouts.app')

@section('group', 'Jadwal')
@section('title', 'Index')

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
                               Nama Siswa
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                UH 1
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                UH 2
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                UTS
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                UH 3
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                UAS
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only"></span>
                        </th>
                    </tr>
                </thead>
              
                <tbody>
                    @foreach ($nilai as $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           {{$loop->iteration}}
                        </th>
                       
                            <td class="px-6 py-3">
                            {{$item->siswa->nama_siswa}}
                            </td>
                            <td class="px-6 py-3">
                                {{$item->uh1}}
                            </td>
                            <td class="px-6 py-3">
                                {{$item->uh2}}
                            </td>
                            <td class="px-6 py-3">
                                {{$item->uts}}
                            </td>
                            <td class="px-6 py-3">
                                {{$item->uh3}}
                            </td>
                            <td class="px-6 py-3">
                                {{$item->uas}}
                            </td>
                            <td class="flex flex-wrap ml-3 py-3 ">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">Raport</button>
                                <form action="{{route('delete_nilai',$item)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="" class="text-white bg-red-500 hover:bg-red-300 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Delete</button>
                                    </form>
                            </td>
                        </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection