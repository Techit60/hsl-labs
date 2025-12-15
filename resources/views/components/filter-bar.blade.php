<div class='bg-white p-3 rounded-lg shadow-sm flex flex-col md:flex-row gap-3 items-start md:items-center'>
	<div class="flex gap-2 items-center w-full md:w-auto">
		<label class="sr-only">Search</label>
		<input type="search" placeholder="Search patients, packages..." class="border rounded px-3 py-2 w-full md:w-64 focus:outline-none focus:ring"/>
	</div>
	<div class="flex gap-2 items-center">
		<select class="px-3 py-2 rounded border">
			<option>All status</option>
			<option>Due today</option>
			<option>Overdue</option>
		</select>
		<input type="date" class="px-3 py-2 rounded border"/>
		<button class="px-3 py-2 rounded bg-indigo-600 text-white">Apply</button>
	</div>
</div>