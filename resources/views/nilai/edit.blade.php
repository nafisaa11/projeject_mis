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
            <label for="id_matkul" class="block text-gray-700 text-sm font-bold mb-2">Mata Kuliah</label>
            <select name="id_matkul" id="id_matkul" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">Pilih Mata Kuliah</option>
                @foreach($matkuls as $mk)
                <option value="{{ $mk->id_matkul }}" {{ $mk->id_matkul == $nilai->id_matkul ? 'selected' : '' }}>
                    {{ $mk->nama_matkul }} ({{ $mk->kode_matkul }})
                </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="nilai_angka" class="block text-gray-700 text-sm font-bold mb-2">Nilai Angka</label>
            <select name="nilai_angka" id="nilai_angka" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                @php
                $nilaiOptions = [0, 1, 2, 2.5, 2.75, 3, 3.25, 3.5, 3.75, 4];
                @endphp
                @foreach($nilaiOptions as $opt)
                <option value="{{ $opt }}" {{ $nilai->nilai_angka == $opt ? 'selected' : '' }}>{{ $opt }}</option>
                @endforeach
            </select>
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

{{-- Script otomatis konversi angka ke huruf --}}
<script>
    document.getElementById('nilai_angka').addEventListener('change', function () {
        const nilai = parseFloat(this.value);
        const nilaiHuruf = document.getElementById('nilai_huruf');

        if (nilai === 4) {
            nilaiHuruf.value = 'A';
        } else if (nilai === 3.75) {
            nilaiHuruf.value = 'AB';
        } else if (nilai >= 3.5) {
            nilaiHuruf.value = 'A-';
        } else if (nilai >= 3.25) {
            nilaiHuruf.value = 'B+';
        } else if (nilai >= 3) {
            nilaiHuruf.value = 'B';
        } else if (nilai >= 2.75) {
            nilaiHuruf.value = 'B-';
        } else if (nilai >= 2.5) {
            nilaiHuruf.value = 'C+';
        } else if (nilai >= 2) {
            nilaiHuruf.value = 'C';
        } else if (nilai >= 1) {
            nilaiHuruf.value = 'D';
        } else {
            nilaiHuruf.value = 'E';
        }
    });
</script>
@endsection