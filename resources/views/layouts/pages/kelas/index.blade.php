@extends('layouts.app')

@section('group', 'Kelas')
@section('title', 'Index kelas')

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
                              NAMA KELAS
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <?php $i=1;?>
                @foreach ($kelas as $kelas)
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$i}}
                        </th>
                        {{-- <td class="px-6 py-4">
                            <form action="{{route('detail_kelas',$kelas)}}" method="get">
                                <button type="submit">
                                    {{$kelas->nama_kelas}}
                                </button>
                            </form>
                            </td> --}}
                            <td class="px-6 py-4">
                                <a href="{{ route('detail_kelas', $kelas) }}" class="text-decoration-none">
                                    {{ $kelas->nama_kelas }}
                                </a>
                            </td>
                    </tr>
                </tbody>
                <?php $i++ ?>
                @endforeach
            </table>
        </div>
@endsection