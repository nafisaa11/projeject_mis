@extends('layout.master')

@section('title')
Dashboard
@endsection

@section('content')
<div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-semibold text-gray-800">Dashboard</h1>
        <span class="text-lg text-gray-600">Halo, {{ Auth::user()->name ?? 'YAN-MIS' }}</span>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">

      <div class="bg-white p-6 rounded-lg shadow-xl border-l-4 border-blue-500 transform transition duration-300 hover:scale-105">
        <h3 class="text-xl font-semibold mb-3 text-gray-800">Manajemen Mahasiswa</h3>
        <p class="text-sm text-gray-600 mb-5">Kelola, update, dan perbarui data mahasiswa yang terdaftar di sistem.</p>
        <a href="{{ route('mahasiswa.index') }}" class="text-blue-500 hover:underline font-medium">Lihat Data Mahasiswa →</a>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-xl border-l-4 border-green-500 transform transition duration-300 hover:scale-105">
        <h3 class="text-xl font-semibold mb-3 text-gray-800">Manajemen Dosen</h3>
        <p class="text-sm text-gray-600 mb-5">Kelola data dosen aktif, termasuk informasi kontak dan jadwal mengajar.</p>
        <a href="{{ route('dosen.index') }}" class="text-green-500 hover:underline font-medium">Lihat Data Dosen →</a>
      </div>

      <div class="bg-white p-6 rounded-lg shadow-xl border-l-4 border-yellow-500 transform transition duration-300 hover:scale-105">
        <h3 class="text-xl font-semibold mb-3 text-gray-800">Manajemen Nilai Mahasiswa</h3>
        <p class="text-sm text-gray-600 mb-5">Input, kelola, dan review data nilai mahasiswa untuk evaluasi akademik.</p>
        <a href="{{ route('nilai.index') }}" class="text-yellow-500 hover:underline font-medium">Lihat Nilai Mahasiswa →</a>
      </div>

      <!-- Anda bisa menambahkan lebih banyak box di sini sesuai kebutuhan -->
    </div>
  </section>
</div>
@endsection

@section('username')
YAN-MIS
@endsection
