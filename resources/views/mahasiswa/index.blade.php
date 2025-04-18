@extends('layout.master')
@section('title')
Mahasiswa
@endsection

@section('content')
<div class="overflow-x-auto bg-white rounded-lg shadow-md p-4">
    <table class="min-w-full divide-y divide-gray-200 mt-4">
        <thead class="bg-indigo-600 text-white text-sm uppercase font-semibold">
            <tr>
                <th class="px-4 py-3 text-left">No</th>
                <th class="px-4 py-3 text-left">NRP</th>
                <th class="px-4 py-3 text-left">Nama</th>
                <th class="px-4 py-3 text-left">Prodi</th>
                <th class="px-4 py-3 text-left">Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody class="text-sm text-gray-700 divide-y divide-gray-100">
            @foreach ($mahasiswa as $mhs)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2">{{ $loop->iteration }}</td>
                <td class="px-4 py-2">{{ $mhs->nrp }}</td>
                <td class="px-4 py-2">{{ $mhs->nama }}</td>
                <td class="px-4 py-2">{{ $mhs->prodi }}</td>
                <td class="px-4 py-2">{{ $mhs->jenis_kelamin }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection
