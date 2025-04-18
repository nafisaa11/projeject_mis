@extends('layout.master')
@section('title')
Tambah Mahasiswa
@endsection

@section('content')
<div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
    <h2 class="text-xl font-semibold text-gray-700 mb-4">Tambah Data Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="post" class="space-y-4">
        @csrf
        <div>
            <label for="nrp" class="block text-gray-700 text-sm font-bold mb-2">NRP</label>
            <input type="text" name="nrp" id="nrp" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div>
            <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div>
            <label for="prodi" class="block text-gray-700 text-sm font-bold mb-2">Program Studi</label>
            <input type="text" name="prodi" id="prodi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div>
            <label for="jenis_kelamin" class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="">Pilih</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div>
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" name="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div>
            <label for="no_telp" class="block text-gray-700 text-sm font-bold mb-2">Nomor HP</label>
            <input type="tel" name="no_telp" id="no_telp" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div>
            <label for="tanggal_lahir" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div>
            <label for="tempat_lahir" class="block text-gray-700 text-sm font-bold mb-2">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div>
            <label for="agama" class="block text-gray-700 text-sm font-bold mb-2">Agama</label>
            <select name="agama" id="agama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option value="">Pilih</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Simpan Mahasiswa
        </button>
    </form>
</div>
@endsection