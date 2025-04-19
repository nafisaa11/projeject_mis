<aside class="w-64 bg-gray-900 text-white flex-shrink-0 fixed top-0 left-0 h-full">
   <div class="px-6 py-4 text-xl font-bold border-b border-gray-700">
     Dashboard
   </div>
   <!-- Isi sidebar (menu) -->
   <nav class="p-4">
     <ul>
      <li><a href="{{ route('mahasiswa.index') }}">Mahasiswa</a></li>
      <li><a href="{{ route('dosen.index') }}">Dosen</a></li>
      <li><a href="{{ route('mataKuliah.index') }}">Mata Kuliah</a></li>
      <li><a href="{{ route('frs.index') }}">FRS</a></li>
      <li><a href="{{ route('nilai.index') }}">Nilai</a></li>
     </ul>
   </nav>
 </aside>