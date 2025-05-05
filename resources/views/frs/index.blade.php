@extends('layout.master')

@section('title')
FRS
@endsection

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50 flex items-center justify-between">
        <h2 class="text-xl font-semibold text-gray-700">FRS</h2>
        <a href="{{ route('frs.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm px-4 py-2 rounded">
            Tambah FRS
        </a>
    </div>
    <div class="overflow-x-auto p-4">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-900 text-white text-sm font-semibold uppercase">
                <tr>
                    <th class="px-6 py-3 text-left">No</th>
                    <th class="px-6 py-3 text-left">Kode Mata Kuliah</th>
                    <th class="px-6 py-3 text-left">Mata Kuliah - Hari - Jam</th>
                    <th class="px-6 py-3 text-left">Dosen</th>
                    <th class="px-6 py-3 text-left">SKS</th>
                    <th class="px-6 py-3 text-left">Kelas</th>
                    <th class="px-6 py-3 text-left">Disetujui</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700 divide-y divide-gray-200">
                @foreach($frses as $frs)
                <tr class="hover:bg-gray-100 transition-colors duration-200">
                    <td class="px-6 py-3">{{ $loop->iteration }}</td>
                    <td class="px-6 py-3">
                        <p> {{ $frs->nama_matkul }} </p>
                        <p> Hari : {{ $frs->hari }} </p>
                        <p> Jam  : {{ $frs->jam_awal }} - {{ $frs->jam_akhir }}</p>
                    </td>
                    <td class="px-6 py-3">{{ $frs->nama_matkul }}</td>
                    <td class="px-6 py-3">{{ $frs->dosen }}</td>
                    <td class="px-6 py-3">{{ $frs->sks }}</td>

                    <td class="px-6 py-3 flex gap-2">
                        <a href="{{ route('mataKuliah.edit', $frs->id_matkul) }}" class="text-indigo-600 hover:underline">Edit</a>
                        <form action="{{ route('mataKuliah.destroy', $frs->id_matkul) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
