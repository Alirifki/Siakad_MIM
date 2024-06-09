@extends('layouts.app')

@section('group', 'Management')
@section('title', 'Index User')

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
                               Nama
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Email
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Level
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                @foreach ($users as $data)
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$loop->iteration}}
                        </th>
                        <td class="px-6 py-4">
                           {{$data->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{$data->email}}
                         </td>
                         <td class="px-6 py-4">
                            {{$data->role}}
                         </td>
                        <td class="px-6 py-4 text-right">
                            <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> /
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