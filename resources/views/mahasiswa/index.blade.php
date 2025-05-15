@extends('layout.master')

@section('title')
Data Mahasiswa
@endsection

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200 bg-gray-50">
        <a href="{{ route('mahasiswa.create') }}" class="bg-yellow-400 hover:bg-yellow-500 text-black font-semibold py-2 px-4 rounded">
            Tambah Data
        </a>
    </div>

    <div class="overflow-x-auto p-4">
        <table class="min-w-full text-sm text-left text-gray-700">
            <thead>
                <tr class="bg-blue-900 text-white">
                    <th class="px-4 py-3">NO</th>
                    <th class="px-4 py-3">NRP</th>
                    <th class="px-4 py-3">NAMA</th>
                    <th class="px-4 py-3">PROGRAM STUDI</th>
                    <th class="px-4 py-3">JENIS KELAMIN</th>
                    <th class="px-4 py-3">Tindakan</th>
            </thead>
            <tbody class="divide-y divide-gray-300">
                @foreach ($mahasiswa as $mhs)
                <tr class="hover:bg-gray-100 transition-colors duration-200">
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3">{{ $mhs->nrp }}</td>
                    <td class="px-4 py-3">{{ $mhs->nama }}</td>
                    <td class="px-4 py-3">{{ $mhs->prodi }}</td>
                    <td class="px-4 py-3">{{ $mhs->jenis_kelamin }}</td>
                    <td class="px-4 py-3">
                        <div class="flex space-x-2">
                            <a href="{{ route('mahasiswa.edit', $mhs->id_mahasiswa) }}" class="bg-yellow-400 hover:bg-yellow-500 text-black p-2 rounded">
                                <i class="ph ph-pencil"></i>
                            </a>
                            <a href="{{ route('mahasiswa.show', $mhs->id_mahasiswa) }}" class="bg-indigo-500 hover:bg-indigo-600 text-black p-2 rounded">
                                <i class="ph ph-eye"></i>
                            </a>
                            <form action="{{ route('mahasiswa.destroy', $mhs->id_mahasiswa) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white p-2 rounded">
                                    <i class="ph ph-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
