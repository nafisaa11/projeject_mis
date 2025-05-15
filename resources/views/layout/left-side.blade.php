<aside class="w-64 bg-[#0A1931] text-white flex-shrink-0 fixed top-0 left-0 h-full">
  <!-- Logo -->
  <div class="flex flex-row items-center px-6 py-5 border-b border-gray-700">
    <img src="/build/assets/logo.svg" alt="Logo" style="width: 40px; height: auto; object-fit: contain;">
    <h1 class="text-3xl font-bold ml-2">
      <span class="text-white">SIM</span><span style="color: #FCC823">AK</span>
    </h1>
  </div>

  <!-- Menu -->
  <nav class="px-4 py-6 space-y-6">
    <ul class="space-y-2">

      <li>
<!-- <<<<<<< HEAD
        <a href="{{ route('home.index') }}" class="flex items-center px-3 py-2 rounded hover:bg-gray-800 transition duration-200 {{ Request::is('dashboard') ? 'bg-gray-800' : '' }}">
          <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M4 6h16M4 12h8m-8 6h16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
======= -->
        <a href="{{ route('home.index') }}"
          class="flex items-center gap-3 px-3 py-2 rounded transition duration-200
          {{ Request::is('dashboard') ? 'bg-white text-gray-900 font-semibold' : 'hover:bg-gray-800' }}">
          <svg class="w-5 h-5 {{ Request::is('dashboard') ? 'text-gray-900' : 'text-white' }}" fill="currentColor"
            viewBox="0 0 24 24">
            <path d="M3 3h8v8H3V3zm0 10h8v8H3v-8zm10-10h8v8h-8V3zm0 10h8v8h-8v-8z" />
          </svg>
          Dashboard
        </a>
      </li>

      <li>
        <a href="{{ route('mahasiswa.index') }}"
          class="flex items-center gap-3 px-3 py-2 rounded transition duration-200
          {{ Request::is('mahasiswa*') ? 'bg-white text-gray-900 font-semibold' : 'hover:bg-gray-800' }}">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4s-4 1.79-4 4 1.79 4 4 4zm0 2c-3 0-8 1.5-8 4v2h16v-2c0-2.5-5-4-8-4z" />
          </svg>
          Mahasiswa
        </a>
      </li>

      <li>
        <a href="{{ route('dosen.index') }}"
          class="flex items-center gap-3 px-3 py-2 rounded transition duration-200
          {{ Request::is('dosen*') ? 'bg-white text-gray-900 font-semibold' : 'hover:bg-gray-800' }}">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
            <path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM3 5h18v12H3V5zm9 6c1.66 0 3-1.34 3-3S13.66 5 12 5 9 6.34 9 8s1.34 3 3 3zm-7 5c0-2 4-3.1 7-3.1 3 0 7 1.1 7 3.1V17H5v-.1z" />
          </svg>
          Dosen
        </a>
      </li>

      <li>
        <a href="{{ route('mataKuliah.index') }}"
          class="flex items-center gap-3 px-3 py-2 rounded transition duration-200
          {{ Request::is('mataKuliah*') ? 'bg-white text-gray-900 font-semibold' : 'hover:bg-gray-800' }}">
          <svg class="w-5 h-5 {{ Request::is('mataKuliah*') ? 'text-gray-900' : 'text-white' }}" fill="currentColor"
            viewBox="0 0 24 24">
            <path d="M4 6v16h16V6H4zm2 2h12v12H6V8zm8-6v2H10V2h4z" />
          </svg>
          Mata Kuliah
        </a>
      </li>

      <li>
        <a href="{{ route('frs.index') }}"
      class="flex items-center gap-3 px-3 py-2 rounded transition duration-200
      {{ Request::is('frs*') ? 'bg-white text-gray-900 font-semibold' : 'hover:bg-gray-800' }}">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M19 3H5c-1.1 0-2 .9-2 2v16l4-4h12c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-4 10H9v-2h6v2zm2-4H7V7h10v2z" />
      </svg>
      FRS
      </a>
      </li>

      <li>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit"
            class="flex items-center gap-3 px-3 py-2 rounded transition duration-200
            hover:bg-gray-800 text-white w-full text-left">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 3H5c-1.1 0-2 .9-2 2v16l4-4h12c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-4 10H9v-2h6v2zm2-4H7V7h10v2z" />
            </svg>
            Logout
          </button>
        </form>
      </li>


      {{-- <li>
        <a href="{{ route('nilai.index') }}"
      class="flex items-center gap-3 px-3 py-2 rounded transition duration-200
      {{ Request::is('nilai*') ? 'bg-white text-gray-900 font-semibold' : 'hover:bg-gray-800' }}">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-9 14l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z" />
      </svg>
      Nilai
      </a>
      </li> --}}

      {{-- <li>
        <a href="{{ route('jadwal.index') }}"
      class="flex items-center gap-3 px-3 py-2 rounded transition duration-200
      {{ Request::is('jadwal*') ? 'bg-white text-gray-900 font-semibold' : 'hover:bg-gray-800' }}">
      <svg class="w-5 h-5 {{ Request::is('jadwal*') ? 'text-gray-900' : 'text-white' }}" fill="currentColor"
        viewBox="0 0 24 24">
        <path
          d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.1 0-2 .9-2 2v14c0 
              1.1.9 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11zM5 7V6h14v1H5z" />
      </svg>
      Jadwal
      </a>
      </li> --}}
    </ul>
  </nav>
</aside>