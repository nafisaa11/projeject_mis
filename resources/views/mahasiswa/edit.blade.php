@extends('layout.master')
@section('title')
Edit Mahasiswa
@endsection

@section('content')
<div class="max-w-5xl mx-auto bg-white rounded-lg shadow-md p-8">
    <h2 class="text-center text-xl font-semibold mb-6 border-b pb-2">Edit Data Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id_mahasiswa) }}" method="post">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label for="nama" class="block mb-1 text-sm font-medium text-gray-700">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" value="{{ old('nama', $mahasiswa->nama) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
            </div>
            <div>
                <label for="nrp" class="block mb-1 text-sm font-medium text-gray-700">NRP</label>
                <input type="text" name="nrp" id="nrp" value="{{ old('nrp', $mahasiswa->nrp) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
            </div>
            <div>
                <label for="prodi" class="block mb-1 text-sm font-medium text-gray-700">Program Studi</label>
                <input type="text" name="prodi" id="prodi" value="{{ old('prodi', $mahasiswa->prodi) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
            </div>
            <div>
                <label for="kelas" class="block mb-1 text-sm font-medium text-gray-700">Kelas</label>
                <input type="text" name="kelas" id="kelas" value="{{ old('kelas', $mahasiswa->kelas) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
            </div>
        </div>

        <h3 class="font-semibold text-gray-800 mb-4">Data Pribadi</h3>
        <div class="grid grid-cols-3 gap-6 mb-6">
            <div>
                <label for="jenis_kelamin" class="block mb-1 text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
                    <option value="">Pilih</option>
                    <option value="Laki-laki" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div>
                <label for="agama" class="block mb-1 text-sm font-medium text-gray-700">Agama</label>
                <select name="agama" id="agama" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
                    <option value="">Pilih</option>
                    <option value="Islam" {{ old('agama', $mahasiswa->agama) == 'Islam' ? 'selected' : '' }}>Islam</option>
                    <option value="Kristen" {{ old('agama', $mahasiswa->agama) == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                    <option value="Katolik" {{ old('agama', $mahasiswa->agama) == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                    <option value="Hindu" {{ old('agama', $mahasiswa->agama) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                    <option value="Buddha" {{ old('agama', $mahasiswa->agama) == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                    <option value="Konghucu" {{ old('agama', $mahasiswa->agama) == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                </select>
            </div>
            <div>
                <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $mahasiswa->email) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400" required>
            </div>
            <div>
                <label for="tempat_lahir" class="block mb-1 text-sm font-medium text-gray-700">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400">
            </div>
            <div>
                <label for="tanggal_lahir" class="block mb-1 text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400">
            </div>
            <div>
                <label for="no_telp" class="block mb-1 text-sm font-medium text-gray-700">Nomer Telepon (aktif)</label>
                <input type="tel" name="no_telp" id="no_telp" value="{{ old('no_telp', $mahasiswa->no_telp) }}" class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:ring-yellow-400">
            </div>
        </div>

        <div class="flex justify-center gap-6 mt-8">
            <button type="button" onclick="window.history.back()" class="bg-gray-400 text-white font-semibold py-2 px-6 rounded shadow hover:bg-gray-500">
                Kembali
            </button>
            <button type="submit" class="bg-yellow-400 text-black font-semibold py-2 px-6 rounded shadow hover:bg-yellow-500">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection
