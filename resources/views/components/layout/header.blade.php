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
      class="w-10 h-10 rounded-full bg-secondary-color flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-primary-color"
      aria-label="View notifications"
    >
      <svg
        class="w-5 h-5 text-primary-color-500"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
        aria-hidden="true"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
        />
      </svg>
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
