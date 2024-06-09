@extends('layouts.app')

@section('group', 'Warga Sekolah')
@section('title', 'Data Siswa')

@section('content')

<div class="flex flex-row-reverse">
    <div>
        <a href="{{route('tambah_siswa')}}" class=" mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">Tambah</a>
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
                               NIM
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                Nama
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                              Alamat
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <div class="flex items-center">
                                TTL
                            </div>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <?php $i=1;?>
                @foreach ($siswas as $siswa)
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$i}}
                        </th>
                        <td class="px-6 py-4">
                           {{$siswa->nis}}
                        </td>
                         <td class="px-6 py-4">
                            {{$siswa->nama_siswa}}
                         </td>
                         <td class="px-6 py-4">
                           {{$siswa->alamat}}
                         </td>
                         <td class="px-6 py-4">
                            {{$siswa->tmp_lahir}}, {{$siswa->tgl_lahir}}
                          </td>
                        <td class="px-6 py-4 text-right">
                            <a href="" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a> /
                            <form action="{{route('create',$siswa)}}" method="post">
                                @csrf
                                   <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Buatkan Akun</button>
                                </form>
                        </td>
                    </tr>
                </tbody>
                <?php $i++ ?>
                @endforeach
            </table>
        </div>
@endsection


{{-- @foreach ($siswa as $s)
<tr>
    <td>{{ $s->nis }}</td>
    <td>{{ $s->nama_siswa }}</td>
    <td>
        @foreach ($s->kelas as $k)
        {{ $k->nama_kelas }}
        @endforeach
    </td>
    <td>
        <a href="{{ route('siswa.edit', $s->nis) }}" class="btn btn-primary btn-sm">Edit</a>
        <form action="{{ route('siswa.destroy', $s->nis) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus siswa ini?')">Hapus</button>
        </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
{{ $siswa->links() }} --}}