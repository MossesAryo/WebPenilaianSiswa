<aside id="sidebar"
           class="fixed inset-y-0 left-0 z-30 w-64 border-r border-blue-300 shadow-lg overflow-y-auto transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out rounded-tr-xl rounded-br-xl">
      <div class="flex flex-col h-full p-6">
        <a href="#" class="text-3xl font-extrabold text-soft-blue mb-8 select-none tracking-tight">
          PenilaianSiswa
        </a>
        <nav class="flex-1 space-y-2 text-soft-blue text-sm font-semibold tracking-wide">
          <a href="#" class="block px-4 py-3 rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
            Dashboard
          </a>
          <a href="#" class="block px-4 py-3 rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
            Siswa
          </a>
          <a href="#" class="block px-4 py-3 rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
            Nilai
          </a>
          <a href="#" class="block px-4 py-3 rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
            Kelas
          </a>
          <a href="#" class="block px-4 py-3 rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
            Guru
          </a>
          <a href="{{ route('get.mapel') }}" class="block px-4 py-3 rounded-lg hover:bg-blue-200 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
            Mata Pelajaran
          </a>
        </nav>
        <div class="pt-6 border-t border-blue-300">
          <button class="w-full text-left px-4 py-3 rounded-lg font-semibold text-soft-blue hover:bg-blue-200 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-300 transition">
            Logout
          </button>
        </div>
      </div>
    </aside>