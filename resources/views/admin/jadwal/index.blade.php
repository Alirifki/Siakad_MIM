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
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select tab</label>
                    <select id="tabs" class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
                        <option>Sabtu</option>
                    </select>
                </div>
                <ul class="hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse" id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                    <li class="w-full">
                        <button id="stats-tab" data-tabs-target="#senin" type="button" role="tab" aria-controls="stats" aria-selected="true" class="inline-block w-full p-4 rounded-ss-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Senin</button>
                    </li>
                    <li class="w-full">
                        <button id="about-tab" data-tabs-target="#selasa" type="button" role="tab" aria-controls="about" aria-selected="false" class="inline-block w-full p-4 bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Selasa</button>
                    </li>
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#rabu" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Rabu</button>
                    </li>
                    <li class="w-full">
                        <button id="kamis-tab" data-tabs-target="#kamis" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Kamis</button>
                    </li>
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#jumat" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Jumat</button>
                    </li>
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#sabtu" type="button" role="tab" aria-controls="faq" aria-selected="false" class="inline-block w-full p-4 rounded-se-lg bg-gray-50 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600">Sabtu</button>
                    </li>
                </ul>
                <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                    {{-- Senin --}}
                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="senin" role="tabpanel" aria-labelledby="stats-tab">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Jam
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        Kelas 1
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 2
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        <div class="flex items-center">
                                        Kelas 3
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 4
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        <div class="flex items-center">
                                        Kelas 5
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 6
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       Jam Ke-
                                    </th>
                                    <td class="px-6 py-4">
                                       
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                     </td>
                                     <td class="px-6 py-4">
                                        
                                     </td>
                                     <td class="px-6 py-4">
                                       
                                     </td>
                                     <td class="px-6 py-4">
                                         
                                      </td>
                                      <td class="px-6 py-4">
                                         
                                      </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- Selasa --}}
                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="selasa" role="tabpanel" aria-labelledby="about-tab">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Jam
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        Kelas 1
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 2
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        <div class="flex items-center">
                                        Kelas 3
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 4
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        <div class="flex items-center">
                                        Kelas 5
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 6
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       Jam Ke-
                                    </th>
                                    <td class="px-6 py-4">
                                       
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                     </td>
                                     <td class="px-6 py-4">
                                        
                                     </td>
                                     <td class="px-6 py-4">
                                       
                                     </td>
                                     <td class="px-6 py-4">
                                         
                                      </td>
                                      <td class="px-6 py-4">
                                         
                                      </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- Rabu --}}
                    <div class="hidden p-4 bg-white rounded-lg dark:bg-gray-800" id="rabu" role="tabpanel" aria-labelledby="faq-tab">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Jam
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        Kelas 1
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 2
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        <div class="flex items-center">
                                        Kelas 3
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 4
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        <div class="flex items-center">
                                        Kelas 5
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 6
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       Jam Ke-
                                    </th>
                                    <td class="px-6 py-4">
                                       
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                     </td>
                                     <td class="px-6 py-4">
                                        
                                     </td>
                                     <td class="px-6 py-4">
                                       
                                     </td>
                                     <td class="px-6 py-4">
                                         
                                      </td>
                                      <td class="px-6 py-4">
                                         
                                      </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- Kamis --}}
                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="kamis" role="tabpanel" aria-labelledby="kamis-tab">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Jam
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        Kelas 1
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 2
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        <div class="flex items-center">
                                        Kelas 3
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 4
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        <div class="flex items-center">
                                        Kelas 5
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 6
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       Jam Ke-
                                    </th>
                                    <td class="px-6 py-4">
                                       
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                     </td>
                                     <td class="px-6 py-4">
                                        
                                     </td>
                                     <td class="px-6 py-4">
                                       
                                     </td>
                                     <td class="px-6 py-4">
                                         
                                      </td>
                                      <td class="px-6 py-4">
                                         
                                      </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- Jumat --}}
                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="jumat" role="tabpanel" aria-labelledby="jumat-tab">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Jam
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        Kelas 1
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 2
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        <div class="flex items-center">
                                        Kelas 3
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 4
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                        <div class="flex items-center">
                                        Kelas 5
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                        Kelas 6
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       Jam Ke-
                                    </th>
                                    <td class="px-6 py-4">
                                       
                                    </td>
                                    <td class="px-6 py-4">
                                        
                                     </td>
                                     <td class="px-6 py-4">
                                        
                                     </td>
                                     <td class="px-6 py-4">
                                       
                                     </td>
                                     <td class="px-6 py-4">
                                         
                                      </td>
                                      <td class="px-6 py-4">
                                         
                                      </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {{-- sabtu --}}
                    <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="sabtu" role="tabpanel" aria-labelledby="sabtu-tab">         
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Jam
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            Kelas 1
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                            Kelas 2
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            <div class="flex items-center">
                                            Kelas 3
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                            Kelas 4
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                                            <div class="flex items-center">
                                            Kelas 5
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                            Kelas 6
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                           Jam Ke-
                                        </th>
                                        <td class="px-6 py-4">
                                           
                                        </td>
                                        <td class="px-6 py-4">
                                            
                                         </td>
                                         <td class="px-6 py-4">
                                            
                                         </td>
                                         <td class="px-6 py-4">
                                           
                                         </td>
                                         <td class="px-6 py-4">
                                             
                                          </td>
                                          <td class="px-6 py-4">
                                             
                                          </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
          
        </div>
        


@endsection