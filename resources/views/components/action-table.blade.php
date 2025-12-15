<div class="lg:col-span-2 h-full bg-white rounded-2xl lg:p-6 shadow-sm">
	<div class="flex flex-wrap p-6 gap-5 pb-0 items-center justify-between mb-6">
		<h3 class="text-lg font-bold text-gray-800">Smart Filter</h3>
		<div class="relative ml-auto me-2 grow-0 shrink-0 basis-[165px]">
			<svg class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
			</svg>
			<input type="text" placeholder="Search" class="pl-10 pr-4 py-2 border border-gray-200 rounded-lg w-full text-sm focus:outline-none focus:ring-2 focus:ring-teal-500">
		</div>
		<div class="flex gap-2">
			<button class="lg:px-4 px-2 py-[10px] lg:py-2 rounded-lg text-sm font-medium bg-secondary-color text-primary-color-500">All</button>
			<button class="lg:px-4 px-2 py-[10px] lg:py-2 rounded-lg text-sm font-medium text-[#666666] bg-gray-100">Pending</button>
			<button class="lg:px-4 px-2 py-[10px] lg:py-2 rounded-lg text-sm font-medium text-[#666666] bg-gray-100">Completed</button>
			<button class="lg:px-4 px-2 py-[10px] lg:py-2 rounded-lg text-sm font-medium text-[#666666] bg-gray-100">Overdue</button>
		</div>
	</div>
	<div class="lg:overflow-hidden overflow-scroll">
		<table class="w-full ">
		<thead>
		<tr class="">
			<th class="text-left whitespace-nowrap py-3 px-4 text-sm font-medium text-black-600">
				SN
			</th>
			<th class="text-left whitespace-nowrap py-3 px-4 text-sm font-medium text-black-600">
				Action Tracker
			</th>
			<th class="text-left whitespace-nowrap py-3 px-4 text-sm font-medium text-black-600">
				Assigned To
			</th>
			<th class="text-left whitespace-nowrap py-3 px-4 text-sm font-medium text-black-600">
				Priority
			</th>
			<th class="text-center py-3 px-4 text-sm font-medium text-black-600">
				Status
			</th>
		</tr>
		</thead>
		<tbody>
		<tr class="hover:bg-gray-50">
			<td class="py-4 px-4 text-sm text-gray-600">
				1
			</td>
			<td class="py-4 px-4 text-sm whitespace-nowrap text-primary-color-500 font-medium">
				Patient intake
			</td>
			<td class="py-4 px-4 text-sm text-black-600">
				Laura
			</td>
			<td class="py-4 px-4 text-sm text-[#D32F2F]">
				High
			</td>
			<td class="py-4 px-4 text-center">
				<span class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-orange-100 text-orange-600">
				Pending </span>
			</td>
		</tr>
		<tr class="bg-[#FAFAFB] hover:bg-gray-50">
			<td class="py-4 px-4 text-sm text-black-600">
				2
			</td>
			<td class="py-4 px-4 text-sm text-primary-color-500 font-medium whitespace-nowrap">
				Patient Sample
			</td>
			<td class="py-4 px-4 text-sm text-black-600">
				Alex
			</td>
			<td class="py-4 px-4 text-sm text-[#FFA000]">
				Medium
			</td>
			<td class="py-4 px-4 text-center">
				<span class="px-6 py-2 inline-block whitespace-nowrap rounded-[5px] text-xs font-medium bg-blue-100 text-blue-600">
				In Progress </span>
			</td>
		</tr>
		<tr class="over:bg-gray-50">
			<td class="py-4 px-4 text-sm text-black-600">
				3
			</td>
			<td class="py-4 px-4 text-sm text-primary-color-500 font-medium">
				Checkup
			</td>
			<td class="py-4 px-4 text-sm text-black-600">
				Sophia
			</td>
			<td class="py-4 px-4 text-sm text-[#4CAF50]">
				Low
			</td>
			<td class="py-4 px-4 text-center">
				<span class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-green-100 text-green-600">
				Completed </span>
			</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>