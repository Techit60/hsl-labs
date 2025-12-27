<header
  class="bg-white px-6 lg:px-8 py-4 flex items-center justify-between"
  role="banner"
>
  <!-- Left Section -->
  <div class="head flex gap-0 md:gap-4 lg:gap-2 items-center">
    
    <!-- Menu Button -->
    <button
      type="button"
      onclick="openMenu()"
      class="h-10 w-10 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary-color rounded"
      aria-label="Open sidebar menu"
    >
      <img
        src="assets/images/leftmenu.svg"
        class="h-5 w-5"
        alt=""
        aria-hidden="true"
      />
    </button>

    <h1 class="text-2xl md:block hidden font-bold">
      Daily Operations Dashboard
    </h1>
  </div>

  <!-- Right Section -->
  <div class="flex items-center gap-4">
    
    <!-- Notification Button -->
   <button
  type="button"
  class="relative w-10 h-10 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary-color"
  aria-label="View notifications"
>
  <!-- Bell SVG (exact same as your code) -->
  <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M21.575 12.8273L19.821 6.71201C19.2552 4.74153 18.0272 3.01106 16.332 1.79554C14.6368 0.580018 12.5717 -0.0508368 10.4647 0.00320422C8.35779 0.0572452 6.32988 0.793082 4.7032 2.09381C3.07652 3.39453 1.94436 5.18554 1.4866 7.18227L0.131091 13.0984C-0.0477348 13.8795 -0.0435534 14.6896 0.143326 15.4689C0.330206 16.2482 0.695014 16.9768 1.21083 17.601C1.72664 18.2252 2.38029 18.729 3.12353 19.0752C3.86678 19.4215 4.68065 19.6013 5.50508 19.6014H5.90552C6.22411 20.6707 6.89206 21.6106 7.80877 22.2794C8.72548 22.9483 9.8413 23.31 10.9882 23.31C12.1351 23.31 13.2509 22.9483 14.1676 22.2794C15.0843 21.6106 15.7523 20.6707 16.0708 19.6014H16.2641C17.1129 19.6015 17.9503 19.4111 18.7108 19.0451C19.4714 18.6791 20.1344 18.1474 20.6481 17.4915C21.1618 16.8357 21.5123 16.0734 21.6722 15.2643C21.8322 14.4552 21.7972 13.6212 21.57 12.8273H21.575ZM18.2623 15.7266C18.0299 16.0261 17.7287 16.2688 17.3827 16.4355C17.0367 16.6021 16.6553 16.6881 16.2691 16.6866H5.50508C5.13036 16.6865 4.76045 16.6048 4.42264 16.4474C4.08483 16.2901 3.78773 16.0611 3.55327 15.7774C3.31882 15.4937 3.15299 15.1626 3.06802 14.8084C2.98305 14.4542 2.98112 14.086 3.06236 13.7309L4.41787 7.80411C4.72913 6.44003 5.50162 5.21621 6.61235 4.32747C7.72309 3.43872 9.10824 2.93613 10.5473 2.89971C11.9864 2.86328 13.3966 3.29512 14.5536 4.12646C15.7105 4.95781 16.5477 6.14088 16.9318 7.48736L18.6818 13.6027C18.7873 13.9639 18.8044 14.3442 18.7316 14.713C18.6587 15.0817 18.498 15.4289 18.2623 15.7266Z" fill="black"/>
  </svg>

  <!-- Red Badge with "2" (top-right corner) -->
  <span class="absolute -top-1 -right-1 flex items-center justify-center w-5 h-5 text-xs font-bold text-white bg-red-600 rounded-full ring-2 ring-white">
    2
  </span>
</button>
    <!-- Profile Dropdown -->
    <div class="relative inline-block">
      
      <!-- Profile Trigger -->
      <button
        id="profile-trigger"
        onclick="toggleDropdown()"
        class="w-10 h-10 rounded-full bg-gray-300 cursor-pointer hover:bg-gray-400 transition-colors focus:outline-none focus:ring-2 focus:ring-primary-color"
        aria-haspopup="true"
        aria-expanded="false"
        aria-label="Open user menu"
      >
        <img
          src="assets/images/profile.png"
          class="h-full w-full rounded-full object-cover"
          alt="User profile picture"
        />
      </button>

      <!-- Dropdown -->
      <div
        id="profile-dropdown"
        class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg opacity-0 invisible transition-all duration-200 z-50"
        role="menu"
        aria-labelledby="profile-trigger"
      >
        <ul class="py-2">
          <li>
            <a
              href="#"
              role="menuitem"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none"
            >
              Profile
            </a>
          </li>
          <li>
            <a
              href="#"
              role="menuitem"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none"
            >
              Settings
            </a>
          </li>
          <li>
            <a
              href="#"
              role="menuitem"
              class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none"
            >
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
