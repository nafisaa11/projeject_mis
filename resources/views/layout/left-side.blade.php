<aside class="w-64 bg-gray-900 text-white flex-shrink-0 fixed top-0 left-0 h-full">
  <!-- Logo -->
  <div class="flex justify-center items-center px-6 py-5 border-b border-gray-700">
    <img src="/build/assets/simak.png" alt="Logo" style="width: 100px; height: 40px; object-fit: contain;">
  </div>

  <!-- Menu -->
  <nav class="px-4 py-6 space-y-6">
    <ul class="space-y-2">
      <li>
        <a href="{{ route('home.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-800 transition duration-200 {{ Request::is('dashboard') ? 'bg-gray-800' : '' }}">
<<<<<<< HEAD
=======
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M4 6h16M4 12h8m-8 6h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
          </svg>
>>>>>>> 9e6a76d43ce05e86723b0f8bc6e982a3a8e5b9a4
          Dashboard
        </a>
      </li>
      <li><a href="{{ route('mahasiswa.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-800 {{ Request::is('mahasiswa*') ? 'bg-gray-800' : '' }}">Mahasiswa</a></li>
      <li><a href="{{ route('dosen.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-800 {{ Request::is('dosen*') ? 'bg-gray-800' : '' }}">Dosen</a></li>
      <li><a href="{{ route('mataKuliah.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-800 {{ Request::is('mataKuliah*') ? 'bg-gray-800' : '' }}">Mata Kuliah</a></li>
      {{-- <li><a href="{{ route('frs.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-800 {{ Request::is('frs*') ? 'bg-gray-800' : '' }}">FRS</a></li> --}}
      {{-- <li><a href="{{ route('nilai.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-800 {{ Request::is('nilai*') ? 'bg-gray-800' : '' }}">Nilai</a></li> --}}
      {{-- <li><a href="{{ route('jadwal.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-800 {{ Request::is('jadwal*') ? 'bg-gray-800' : '' }}">Jadwal</a></li> --}}
    </ul>
  </nav>
</aside>
