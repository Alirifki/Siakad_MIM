@extends('layouts.app')

@section('group', 'Warga Sekolah')
@section('title', 'Index Guru')

@section('content')

<div class="flex flex-row-reverse">

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
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <?php $i=1;?>
                @foreach ($gurus as $guru)
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$i}}
                        </th>
                        <td class="px-6 py-4">
                           {{$guru->nip}}
                        </td>
                        <td class="px-6 py-4">
                            {{$guru->user_id}}
                         </td>
                         <td class="px-6 py-4">
                            {{$guru->mapel_id}}
                         </td>
                        <td class="px-6 py-4 text-right">
                            <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> /
                            <form action="{{route('delete_guru', $guru)}}" method="post">
                                @method('delete')
                                @csrf
                                   <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</button>
                                </form>
                        </td>
                    </tr>
                </tbody>
                <?php $i++ ?>
                @endforeach
            </table>
        </div>
@endsection