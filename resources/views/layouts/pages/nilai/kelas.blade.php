@extends('layouts.app')

@section('group', 'Nilia')
@section('title', 'Input Nilai')

@section('content')

<div class="flex flex-row-start">
    <div>
        <span>Kelas :  </span><br>
        <span> Mata Pelajaran : </span>
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
                               Nis
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Nama
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                NIS
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                UAS
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                              UTS
                            </div>
                        </th> <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                               NILAI HARIAN
                            </div>
                        </th>
                        
                    </tr>
                </thead>
                <?php $i=1;?>
                {{-- @foreach ($nilais as $guru) --}}
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{-- {{$i}} --}}
                        </th>
                        <td class="px-6 py-4">
                           {{-- {{$guru->nis}} --}}
                        </td>
                         <td class="px-6 py-4">
                            {{-- {{$guru->nama_siswa}} --}}
                         </td>
                        <td class="px-6 py-4 text-right">
                            <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> /
                            <form action="" method="post">
                                @method('delete')
                                @csrf
                                   <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</button>
                                </form>
                        </td>
                    </tr>
                </tbody>
                <?php $i++ ?>
                {{-- @endforeach --}}
            </table>
        </div>
@endsection