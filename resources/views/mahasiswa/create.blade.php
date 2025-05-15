@extends('layout.master')
@section('title')
Tambah Mahasiswa
@endsection

@section('content')
<div class="max-w-5xl mx-auto bg-white rounded-lg shadow-md p-8">
    <h2 class="text-center text-xl font-semibold mb-6 border-b pb-2">Tambah Data Mahasiswa</h2>
    <form action="{{ route('mahasiswa.store') }}" method="post">
        @csrf
        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label for="nama" class="block mb-1 text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
            </div>
            <div>
                <label for="nrp" class="block mb-1 text-sm font-medium text-gray-700">NRP</label>
                <input type="text" name="nrp" id="nrp" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
            </div>
            <div>
                <label for="prodi" class="block mb-1 text-sm font-medium text-gray-700">Program Studi</label>
                <select name="prodi" id="prodi" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
                    <option value="">Pilih</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <!-- Tambahkan lainnya -->
                </select>
            </div>
            <div>
                <label for="kelas" class="block mb-1 text-sm font-medium text-gray-700">Kelas</label>
                <select name="kelas" id="kelas" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
                    <option value="">Pilih</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <!-- Tambahkan lainnya -->
                </select>
            </div>
        </div>

        <h3 class="font-semibold text-gray-800 mb-4">Data Pribadi</h3>
        <div class="grid grid-cols-3 gap-6 mb-6">
            <div>
                <label for="jenis_kelamin" class="block mb-1 text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
                    <option value="">Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="agama" class="block mb-1 text-sm font-medium text-gray-700">Agama</label>
                <select name="agama" id="agama" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
                    <option value="">Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <div>
                <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
            </div>
            <div>
                <label for="tempat_lahir" class="block mb-1 text-sm font-medium text-gray-700">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400">
            </div>
            <div>
                <label for="tanggal_lahir" class="block mb-1 text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400">
            </div>
            <div>
                <label for="no_telp" class="block mb-1 text-sm font-medium text-gray-700">Nomer Telepon (aktif)</label>
                <input type="tel" name="no_telp" id="no_telp" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400">
            </div>
        </div>

        <div class="flex justify-center gap-6 mt-8">
            <button type="button" onclick="window.history.back()" class="bg-gray-400 text-white font-semibold py-2 px-6 rounded shadow hover:bg-gray-500">
                Kembali
            </button>
            <button type="submit" class="bg-yellow-400 text-black font-semibold py-2 px-6 rounded shadow hover:bg-yellow-500">
                Tambah Data
            </button>
        </div>
    </form>
</div>
@endsection
