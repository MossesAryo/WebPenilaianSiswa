<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Web Penilaian Siswa - Admin Panel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Custom scrollbar for sidebar */
    ::-webkit-scrollbar {
      width: 6px;
    }
    ::-webkit-scrollbar-track {
      background: #f0f4f8; /* pastel light background */
    }
    ::-webkit-scrollbar-thumb {
      background-color: #9ca3af; /* gray-400 */
      border-radius: 3px;
    }

    /* Sidebar open overlay for mobile */
    #sidebarOverlay {
      background-color: #cbd5e1; /* gray-300 solid */
      touch-action: none;
    }

    /* Gradients for sidebar and navbar */
    #sidebar {
      background: linear-gradient(180deg, #dbeafe 0%, #bfdbfe 100%);
    }
    header {
      background: linear-gradient(90deg, #dbeafe 0%, #bfdbfe 100%);
    }

    /* Soft blue background for cards */
    .soft-blue-bg {
      background: #dbeafe;
    }

    /* Text colors */
    .text-soft-blue {
      color: #1e40af; /* blue-900 */
    }

    /* Hamburger icon animation */
    .hamburger-line {
      transition: all 0.3s ease-in-out;
      stroke: #1e40af; /* blue-900 */
      stroke-width: 3;
      stroke-linecap: round;
      stroke-linejoin: round;
    }

    .hamburger-line.open:nth-child(1) {
      transform: rotate(45deg) translate(6px, 6px);
    }
    .hamburger-line.open:nth-child(2) {
      opacity: 0;
    }
    .hamburger-line.open:nth-child(3) {
      transform: rotate(-45deg) translate(6px, -6px);
    }

    /* Input autofill background override */
    input:-webkit-autofill {
      box-shadow: 0 0 0px 1000px #dbeafe inset !important;
      -webkit-text-fill-color: #1e40af !important; /* blue-900 */
    }
  </style>
</head>
<body class="bg-[#f0f4f8] text-gray-700 min-h-screen flex flex-col font-sans">
  <div class="flex flex-1 overflow-hidden relative">
    <!-- Sidebar overlay (mobile only) -->
    <div id="sidebarOverlay" class="fixed inset-0 z-20 opacity-0 pointer-events-none md:hidden transition-opacity duration-300"></div>
    <!-- Sidebar -->
    @include('back.layout.sidebar')

    <!-- Main content area -->
    <div class="flex flex-col flex-1 min-w-0 md:pl-64">
        
        <!-- Navbar -->
        @include('back.layout.navbar')

      <!-- Content -->
      <main class="flex-1 p-6 overflow-auto max-w-full min-h-0 select-text text-gray-700">
        @yield('main')
      </main>

      <!-- Footer -->
      <footer class="h-16 flex items-center justify-center bg-[#dbeafe] border-t border-blue-300 text-soft-blue text-sm select-none font-medium tracking-wide rounded-b-md">
        &copy; 2024 Web Penilaian Siswa — All Rights Reserved
      </footer>
    </div>
  </div>

  <script>
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    const hamburgerIcon = sidebarToggle.querySelector('svg');

    // Toggle sidebar open/close on mobile
    sidebarToggle.addEventListener('click', () => {
      const isOpen = !sidebar.classList.contains('-translate-x-full');
      if (isOpen) {
        closeSidebar();
      } else {
        openSidebar();
      }
    });

    function openSidebar() {
      sidebar.classList.remove('-translate-x-full');
      sidebarOverlay.classList.remove('pointer-events-none', 'opacity-0');
      sidebarOverlay.classList.add('opacity-100');
      sidebarToggle.setAttribute('aria-expanded', 'true');
      // Animate hamburger
      hamburgerIcon.classList.add('open');
    }

    function closeSidebar() {
      sidebar.classList.add('-translate-x-full');
      sidebarOverlay.classList.add('opacity-0');
      sidebarOverlay.classList.remove('opacity-100');
      sidebarOverlay.classList.add('pointer-events-none');
      sidebarToggle.setAttribute('aria-expanded', 'false');
      hamburgerIcon.classList.remove('open');
    }

    // Close sidebar if clicking outside on mobile
    sidebarOverlay.addEventListener('click', closeSidebar);

    // Close sidebar when resizing above md breakpoint
    window.addEventListener('resize', () => {
      if (window.innerWidth >= 768) {
        sidebar.classList.remove('-translate-x-full');
        sidebarOverlay.classList.add('opacity-0', 'pointer-events-none');
        sidebarOverlay.classList.remove('opacity-100');
        sidebarToggle.setAttribute('aria-expanded', 'true');
        hamburgerIcon.classList.remove('open');
      } else {
        sidebarToggle.setAttribute('aria-expanded', 'false');
        sidebar.classList.add('-translate-x-full');
        sidebarOverlay.classList.add('opacity-0', 'pointer-events-none');
        sidebarOverlay.classList.remove('opacity-100');
        hamburgerIcon.classList.remove('open');
      }
    });

    // Initialize on page load for proper states
    if (window.innerWidth >= 768) {
      sidebar.classList.remove('-translate-x-full');
      sidebarOverlay.classList.add('opacity-0', 'pointer-events-none');
      sidebarToggle.setAttribute('aria-expanded', 'true');
      hamburgerIcon.classList.remove('open');
    } else {
      sidebar.classList.add('-translate-x-full');
      sidebarOverlay.classList.add('opacity-0', 'pointer-events-none');
      sidebarToggle.setAttribute('aria-expanded', 'false');
      hamburgerIcon.classList.remove('open');
    }
  </script>
</body>
</html>
</content>
</create_file>
