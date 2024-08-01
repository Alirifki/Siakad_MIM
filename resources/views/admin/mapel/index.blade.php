@extends('layouts.app')

@section('group', 'Mapel')
@section('title', 'Index Mapel')

@section('content')
<div class="flex flex-row-reverse">

</div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
            <table class=" text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                           No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                NAMA MATAPELAJARAN
                            </div>
                        </th>
                    </tr>
                </thead>
                <?php $i=1;?>
                @foreach ($mapels as $mapel)
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$i}}
                        </th>
                        <td class="px-6 py-4">
                            {{$mapel->nama_mapel}}
                         </td>
                    </tr>
                </tbody>
                <?php $i++ ?>
                @endforeach
            </table>
        </div>
@endsection