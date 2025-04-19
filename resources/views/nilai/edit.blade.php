@extends('layout.master')

@section('title')
Edit Nilai
@endsection

@section('content')
<div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
    <h2 class="text-xl font-semibold text-gray-700 mb-4">Edit Nilai Mahasiswa</h2>
    <form action="{{ route('nilai.update', $nilai->id_nilai) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="id_mahasiswa" class="block text-gray-700 text-sm font-bold mb-2">Nama Mahasiswa</label>
            <select name="id_mahasiswa" id="id_mahasiswa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">Pilih Mahasiswa</option>
                @foreach($mahasiswas as $mhs)
                    <option value="{{ $mhs->id_mahasiswa }}" {{ $mhs->id_mahasiswa == $nilai->id_mahasiswa ? 'selected' : '' }}>
                        {{ $mhs->nama }} - {{ $mhs->npm }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="id_matakuliah" class="block text-gray-700 text-sm font-bold mb-2">Mata Kuliah</label>
            <select name="id_matakuliah" id="id_matakuliah" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">Pilih Mata Kuliah</option>
                @foreach($mataKuliahs as $mk)
                    <option value="{{ $mk->id_matakuliah }}" {{ $mk->id_matakuliah == $nilai->id_matakuliah ? 'selected' : '' }}>
                        {{ $mk->nama_matakuliah }} ({{ $mk->kode_matakuliah }})
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="nilai_angka" class="block text-gray-700 text-sm font-bold mb-2">Nilai Angka</label>
            <input type="number" name="nilai_angka" id="nilai_angka" step="0.01" value="{{ $nilai->nilai_angka }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div>
            <label for="nilai_huruf" class="block text-gray-700 text-sm font-bold mb-2">Nilai Huruf</label>
            <input type="text" name="nilai_huruf" id="nilai_huruf" maxlength="2" value="{{ $nilai->nilai_huruf }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Update Nilai
        </button>
        <a href="{{ route('nilai.index') }}" class="inline-block text-sm text-gray-600 ml-4 hover:underline">Kembali</a>
    </form>
</div>
@endsection
