<nav class="bg-blue-500">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16">
      <div class="flex items-center">
        <a href="#" class="text-white font-bold text-lg">Logo</a>
      </div>
      <div class="hidden sm:block">
        <div class="ml-10 flex items-baseline space-x-4">
          <a href="#" class="text-white hover:text-gray-200 px-3 py-2 rounded-md text-sm font-medium">Home</a>
          <a href="#" class="text-white hover:text-gray-200 px-3 py-2 rounded-md text-sm font-medium">Shop</a>
          <a href="#" class="text-white hover:text-gray-200 px-3 py-2 rounded-md text-sm font-medium">About</a>
          <a href="#" class="text-white hover:text-gray-200 px-3 py-2 rounded-md text-sm font-medium">Contact</a>
          <a href="#" class="text-white hover:text-gray-200 px-3 py-2 rounded-md text-sm font-medium">Cart</a>
        </div>
      </div>
      <div class="-mr-2 flex sm:hidden">
        <button type="button" id="mobile-menu-toggle" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-blue-500 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <!-- Heroicon name: menu -->
          <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
          <!-- Heroicon name: x -->
          <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div class="hidden sm:hidden" id="mobile-menu">
    <div class="px-2 pt-2 pb-3 space-y-1">
      <a href="#" class="text-white hover:text-gray-200 block px-3 py-2 rounded-md text-base font-medium">Home</a>
      <a href="#" class="text-white hover:text-gray-200 block px-3 py-2 rounded-md text-base font-medium">Shop</a>
      <a href="#" class="text-white hover:text-gray-200 block px-3 py-2 rounded-md text-base font-medium">About</a>
      <a href="#" class="text-white hover:text-gray-200 block px-3 py-2 rounded-md text-base font-medium">Contact</a>
      <a href="#" class="text-white hover:text-gray-200 block px-3 py-2 rounded-md text-base font-medium">Cart</a>
    </div>
  </div>

  <script>
    document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
      var mobileMenu = document.getElementById('mobile-menu');
      var expanded = mobileMenu.getAttribute('aria-expanded') === 'true';

      mobileMenu.setAttribute('aria-expanded', !expanded);
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</nav>
