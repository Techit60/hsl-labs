<header class="bg-white px-8 py-4 flex items-center justify-between">
<div class="head flex gap-0 md:gap-4 lg:gap-2">
	<img src="assets/images/leftmenu.svg" onclick="openMenu()" class="lg:hidden h-7 w-7 block" alt=""/>
	<h1 class="text-2xl md:block hidden font-bold ">Daily Operations Dashboard</h1>
</div>
<div class="flex items-center gap-4">
	<button class="w-10 h-10 rounded-full bg-secondary-color flex items-center justify-center">
	<svg class="w-5 h-5 text-primary-color-500" fill="none" stroke="currentColor" viewbox="0 0 24 24">
	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
	</svg>
	</button>
	<div class="relative inline-block">
		<div class="w-10 h-10 rounded-full bg-gray-300 cursor-pointer hover:bg-gray-400 transition-colors" id="profile-trigger" onclick="toggleDropdown()">
			<img src="assets/images/profile.png" class="h-full w-full rounded-full object-cover" alt="profile"/>
		</div>
		<div id="profile-dropdown" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg opacity-0 invisible transition-all duration-200 z-50">
			<ul class="py-2">
				<li>
				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
				</li>
				<li>
				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
				</li>
				<li>
				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
				</li>
			</ul>
		</div>
	</div>
</div>
</header>