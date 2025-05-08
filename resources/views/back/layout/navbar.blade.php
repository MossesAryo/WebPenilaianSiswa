<header class="sticky top-0 z-20 border-blue-300 border-l border-b shadow flex items-center justify-between px-6 h-16 select-none rounded-tr-xl"
              style="border-top-left-radius: 0.5rem; background: linear-gradient(90deg, #dbeafe 0%, #bfdbfe 100%)">
        <div class="flex items-center gap-4">
          <button id="sidebarToggle" aria-label="Toggle sidebar" aria-expanded="false" aria-controls="sidebar"
                  class="md:hidden p-2 rounded-md text-soft-blue hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-300 transition">
            <span class="sr-only">Open sidebar</span>
            <svg class="hamburger-line w-6 h-6" fill="none" viewBox="0 0 24 24">
              <line x1="3" y1="6" x2="21" y2="6"/>
              <line x1="3" y1="12" x2="21" y2="12"/>
              <line x1="3" y1="18" x2="21" y2="18"/>
            </svg>
          </button>
          <h1 class="text-xl font-bold text-soft-blue tracking-tight">Admin Panel</h1>
        </div>

        <div class="flex-1 px-6 max-w-lg">
          <label for="search" class="sr-only">Search</label>
          <div class="relative text-soft-blue focus-within:text-blue-800">
            <input id="search" name="search" type="search" placeholder="Search..."
                   class="block w-full rounded-xl border border-blue-300 bg-[#dbeafe] py-2 pl-10 pr-4 text-sm placeholder-blue-600 focus:border-blue-500 focus:ring-2 focus:ring-blue-300 focus:outline-none transition text-soft-blue" />
            <div class="pointer-events-none absolute inset-y-0 left-3 flex items-center">
              <svg class="h-5 w-5 stroke-current" fill="none" viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <line x1="16.5" y1="16.5" x2="21" y2="21" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
        </div>

        <div class="flex items-center gap-5">
          <button title="Notifications" class="p-2 rounded-full hover:bg-blue-200 active:bg-blue-300 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-300 transition text-soft-blue">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-5-5.917V5a2 2 0 10-4 0v.083A6.002 6.002 0 004 11v3.159c0 .538-.214 1.055-.595 1.436L2 17h5m5 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
          </button>
          <div class="relative group">
            <button id="profileMenuButton" aria-haspopup="true" aria-expanded="false" class="flex items-center gap-2 focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-blue-300 rounded-md hover:bg-blue-200 transition px-2 py-1 text-soft-blue">
              <img src="https://i.pravatar.cc/32?u=admin" alt="User Avatar" class="rounded-full w-8 h-8 object-cover" />
              <span class="font-semibold whitespace-nowrap">Admin</span>
              <svg class="w-4 h-4 text-blue-500 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M6 9l6 6 6-6" />
              </svg>
            </button>
            <!-- Optional dropdown could be implemented here -->
          </div>
        </div>
      </header>