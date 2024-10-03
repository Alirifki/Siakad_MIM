@extends('layouts.app')

@section('group', 'Jadwal')
@section('title', 'Index')

@section('content')

       
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-6">
        <table class="w-1/4 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                       No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                          NAMA KELAS
                        </div>
                    </th>
                </tr>
            </thead>
            <?php $i=1;?>
            @foreach ($kelas as $item)
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$i}}
                    </th>
                    <td class="px-6 py-4">
                        <a href="{{ route('input',$item) }}" class="text-decoration-none">
                            {{ $item->nama_kelas }}
                        </a>
                    </td>
                   
                </tr>
            </tbody>
            <?php $i++ ?>
            @endforeach
        </table>
</div>
@endsection