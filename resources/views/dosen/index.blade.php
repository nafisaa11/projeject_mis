@extends('layout.master')
@section('title')
Mahasiswa
@endsection

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50">
        <h2 class="text-xl font-semibold text-gray-700">Data Dosen</h2>
        <a href="{{ route('dosen.create') }}">Tambah</a>
    </div>
    <div class="overflow-x-auto p-4">
        <table class="min-w-full table-auto">
            <thead class="bg-gray-900 text-white text-sm font-semibold uppercase">
                <tr>
                    <th class="px-6 py-3 text-left">No</th>
                    <th class="px-6 py-3 text-left">NIP</th>
                    <th class="px-6 py-3 text-left">Nama</th>
                    <th class="px-6 py-3 text-left">Alamat</th>
                    <th class="px-6 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700 divide-y divide-gray-200">
                @foreach ($dosen as $item)
                <tr class="hover:bg-gray-100 transition-colors duration-200">
                    <td class="px-6 py-3">{{ $loop->iteration }}</td>
                    <td class="px-6 py-3">{{ $item->nip }}</td>
                    <td class="px-6 py-3">{{ $item->nama }}</td>
                    <td class="px-6 py-3">{{ $item->alamat }}</td>
                    <td>
                        <a href="{{ route('dosen.edit', $item->id_dosen) }}">Edit</a>
                        <a href="{{ route('dosen.show', $item->id_dosen) }}">Detail</a>
                        <form action="{{ route('dosen.destroy', $item->id_dosen) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                        </form> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   
</div>
@endsection