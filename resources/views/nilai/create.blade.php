@extends('layout.master')

@section('title')
Tambah Nilai
@endsection

@section('content')
<div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
    <h2 class="text-xl font-semibold text-gray-700 mb-4">Tambah Nilai Mahasiswa</h2>
    <form action="{{ route('nilai.store') }}" method="post" class="space-y-4">
        @csrf
        <div>
            <label for="id_mahasiswa" class="block text-gray-700 text-sm font-bold mb-2">Nama Mahasiswa</label>
            <select name="id_mahasiswa" id="id_mahasiswa" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">Pilih Mahasiswa</option>
                @foreach($mahasiswas as $mhs)
                <option value="{{ $mhs->id_mahasiswa }}">{{ $mhs->nama }} - {{ $mhs->npm }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="id_matkul" class="block text-gray-700 text-sm font-bold mb-2">Mata Kuliah</label>
            <select  name="id_matkul" id="id_matkul" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">Pilih Mata Kuliah</option>
                @foreach($matkuls as $mk)
                <option value="{{ $mk->id_matkul }}">{{ $mk->nama_matkul }} ({{ $mk->kode_matkul }})</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="nilai_angka" class="block text-gray-700 text-sm font-bold mb-2">Nilai Angka</label>
            <input type="number" name="nilai_angka" id="nilai_angka" step="0.01" value="{{ old('nilai_angka') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <div>
            <label for="nilai_huruf" class="block text-gray-700 text-sm font-bold mb-2">Nilai Huruf</label>
            <input type="text" name="nilai_huruf" id="nilai_huruf" maxlength="2" value="{{ old('nilai_huruf') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>

        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Simpan Nilai
        </button>
    </form>
</div>
@endsection