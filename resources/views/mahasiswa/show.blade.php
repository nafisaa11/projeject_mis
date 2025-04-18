@extends('layout.master')

@section('title')
Detail Mahasiswa
@endsection

@section('content')
<div class="max-w-xl mx-auto bg-white rounded-lg shadow-md p-6 mt-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Detail Mahasiswa</h2>

    <div class="space-y-4">
        <div>
            <span class="font-semibold text-gray-700">NRP:</span>
            <span class="text-gray-900">{{ $mahasiswa->nrp }}</span>
        </div>
        <div>
            <span class="font-semibold text-gray-700">Nama:</span>
            <span class="text-gray-900">{{ $mahasiswa->nama }}</span>
        </div>
        <div>
            <span class="font-semibold text-gray-700">Program Studi:</span>
            <span class="text-gray-900">{{ $mahasiswa->prodi }}</span>
        </div>
        <div>
            <span class="font-semibold text-gray-700">Jenis Kelamin:</span>
            <span class="text-gray-900">{{ $mahasiswa->jenis_kelamin }}</span>
        </div>
        <div>
            <span class="font-semibold text-gray-700">Email:</span>
            <span class="text-gray-900">{{ $mahasiswa->email }}</span>
        </div>
        <div>
            <span class="font-semibold text-gray-700">Nomor HP:</span>
            <span class="text-gray-900">{{ $mahasiswa->no_telp ?? '-' }}</span>
        </div>
        <div>
            <span class="font-semibold text-gray-700">Tempat, Tanggal Lahir:</span>
            <span class="text-gray-900">
                {{ $mahasiswa->tempat_lahir ?? '-' }},
                {{ $mahasiswa->tanggal_lahir ? \Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->format('d M Y') : '-' }}
            </span>
        </div>
        <div>
            <span class="font-semibold text-gray-700">Agama:</span>
            <span class="text-gray-900">{{ $mahasiswa->agama ?? '-' }}</span>
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ route('mahasiswa.index') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold">← Kembali ke Daftar</a>
    </div>
</div>
@endsection
