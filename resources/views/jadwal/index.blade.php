```blade
@extends('layout.master')

@section('title')
Jadwal Kuliah
@endsection

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50 flex items-center justify-between">
        <h2 class="text-xl font-semibold text-gray-700">Data Jadwal Kuliah</h2>
        <a href="{{ route('jadwal.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white text-sm px-4 py-2 rounded">
            Tambah Jadwal
        </a>
    </div>
    <div class="overflow-x-auto p-4">
        @if(session('success'))
        <div class="mb-4 bg-green-100 text-green-800 p-3 rounded">{{ session('success') }}</div>
        @endif
        
        <table class="min-w-full table-auto">
            <thead class="bg-gray-900 text-white text-sm font-semibold uppercase">
                <tr>
                    <th class="px-6 py-3 text-left">No</th>
                    <th class="px-6 py-3 text-left">Mata Kuliah</th>
                    <th class="px-6 py-3 text-left">Dosen</th>
                    <th class="px-6 py-3 text-left">Hari</th>
                    <th class="px-6 py-3 text-left">Tanggal</th>
                    <th class="px-6 py-3 text-left">Ruangan</th>
                    <th class="px-6 py-3 text-left">Jam</th>
                    <th class="px-6 py-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700 divide-y divide-gray-200">
                @foreach($jadwals as $key => $jd)
                <tr class="hover:bg-gray-100 transition-colors duration-200">
                    <td class="px-6 py-3">{{ $loop->iteration }}</td>
                    <td class="px-6 py-3">{{ $jd->matkul->nama_matkul }}</td>
                    <td class="px-6 py-3">{{ $jd->dosen->nama }}</td>
                    <td class="px-6 py-3">{{ $jd->hari }}</td>
                    <td class="px-6 py-3">{{ $jd->tanggal }}</td>
                    <td class="px-6 py-3">{{ $jd->ruangan }}</td>
                    <td class="px-6 py-3">{{ $jd->jam_awal }} - {{ $jd->jam_akhir }}</td>
                    <td class="px-6 py-3 flex gap-2">
                        <a href="{{ route('jadwal.edit', $jd->id_jadwal_kuliah) }}" class="text-indigo-600 hover:underline">Edit</a>
                        <form action="{{ route('jadwal.destroy', $jd->id_jadwal_kuliah) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?');">
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
```