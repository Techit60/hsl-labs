@props([
    'title' => 'Smart Filter',
])

<section
    class="lg:col-span-8 h-full bg-white rounded-2xl lg:p-6 shadow-sm focus:outline-none"
    role="region"
    aria-labelledby="action-table-title"
    id="smart-filter-section"
>

    <header class="flex flex-wrap p-6 gap-5 pb-0 items-center justify-between mb-6">
        <h2
            id="action-table-title"
            class="text-lg font-bold text-gray-800"
        >
            {{ $title }}
        </h2>

        <div class="flex items-center gap-2 lg:ml-auto">
            <div class="relative grow-0 shrink-0 basis-[165px]">
                <label for="action-search" class="sr-only">
                    Search actions
                </label>

                <svg
                    class="w-4 h-4 absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>

                <input
                    id="action-search"
                    type="text"
                    placeholder="Search"
                    class="pl-10 pr-4 py-2 border border-gray-200 rounded-lg w-full text-sm
                           focus:outline-none focus:ring-2 focus:ring-teal-500"
                />
            </div>

            <div class="relative">
                <button
                    id="filter-button"
                    class="px-4 py-2 border border-gray-200 rounded-lg text-sm font-medium
                           text-gray-700 bg-white hover:bg-gray-50 flex items-center gap-2
                           focus:outline-none focus:ring-2 focus:ring-teal-500"
                    aria-label="Open filters"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    Filter
                    <span id="filter-count" class="hidden ml-1 px-2 py-0.5 bg-teal-500 text-white rounded-full text-xs">
                        0
                    </span>
                </button>

                <div
                    id="filter-dropdown"
                    class="hidden absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-lg border border-gray-200 z-50"
                >
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-sm font-semibold text-gray-700">Filters</h3>
                          
                        </div>

                        <!-- Priority Filters -->
                        <div class="mb-4">
                            <p class="text-xs font-medium text-gray-500 mb-2">Priority</p>
                            <label class="flex items-center py-2 cursor-pointer hover:bg-gray-50 rounded px-2">
                                <input
                                    type="checkbox"
                                    value="high"
                                    data-label="High Priority"
                                    data-category="priority"
                                    class="filter-checkbox w-4 h-4 text-teal-500 border-gray-300 rounded focus:ring-teal-500"
                                />
                                <span class="ml-2 text-sm text-gray-700">High Priority</span>
                            </label>
                            <label class="flex items-center py-2 cursor-pointer hover:bg-gray-50 rounded px-2">
                                <input
                                    type="checkbox"
                                    value="medium"
                                    data-label="Medium Priority"
                                    data-category="priority"
                                    class="filter-checkbox w-4 h-4 text-teal-500 border-gray-300 rounded focus:ring-teal-500"
                                />
                                <span class="ml-2 text-sm text-gray-700">Medium Priority</span>
                            </label>
                            <label class="flex items-center py-2 cursor-pointer hover:bg-gray-50 rounded px-2">
                                <input
                                    type="checkbox"
                                    value="low"
                                    data-label="Low Priority"
                                    data-category="priority"
                                    class="filter-checkbox w-4 h-4 text-teal-500 border-gray-300 rounded focus:ring-teal-500"
                                />
                                <span class="ml-2 text-sm text-gray-700">Low Priority</span>
                            </label>
                        </div>

                        <!-- Status Filters -->
                        <div>
                            <p class="text-xs font-medium text-gray-500 mb-2">Status</p>
                            <label class="flex items-center py-2 cursor-pointer hover:bg-gray-50 rounded px-2">
                                <input
                                    type="checkbox"
                                    value="pending"
                                    data-label="Pending"
                                    data-category="status"
                                    class="filter-checkbox w-4 h-4 text-teal-500 border-gray-300 rounded focus:ring-teal-500"
                                />
                                <span class="ml-2 text-sm text-gray-700">Pending</span>
                            </label>
                            <label class="flex items-center py-2 cursor-pointer hover:bg-gray-50 rounded px-2">
                                <input
                                    type="checkbox"
                                    value="in-progress"
                                    data-label="In Progress"
                                    data-category="status"
                                    class="filter-checkbox w-4 h-4 text-teal-500 border-gray-300 rounded focus:ring-teal-500"
                                />
                                <span class="ml-2 text-sm text-gray-700">In Progress</span>
                            </label>
                            <label class="flex items-center py-2 cursor-pointer hover:bg-gray-50 rounded px-2">
                                <input
                                    type="checkbox"
                                    value="completed"
                                    data-label="Completed"
                                    data-category="status"
                                    class="filter-checkbox w-4 h-4 text-teal-500 border-gray-300 rounded focus:ring-teal-500"
                                />
                                <span class="ml-2 text-sm text-gray-700">Completed</span>
                            </label>
                            <label class="flex items-center py-2 cursor-pointer hover:bg-gray-50 rounded px-2">
                                <input
                                    type="checkbox"
                                    value="overdue"
                                    data-label="Overdue"
                                    data-category="status"
                                    class="filter-checkbox w-4 h-4 text-teal-500 border-gray-300 rounded focus:ring-teal-500"
                                />
                                <span class="ml-2 text-sm text-gray-700">Overdue</span>
                            </label>
                        </div>
                    </div>
                    
                </div>
                
            </div>
              <button
                                id="clear-all-btn"
                                class="hidden text-xs text-teal-600 hover:text-teal-700 font-medium"
                            >
                                Clear All
                            </button>
        </div>

        <div id="filter-pills-container" class="hidden w-full flex flex-wrap gap-2 mt-2">
        </div>

      
    </header>

    <div class="lg:overflow-hidden overflow-x-auto">
        <table
            class="w-full border-collapse"
            role="table"
            aria-describedby="action-table-title"
        >
            <thead>
                <tr>
                    <th scope="col" class="text-left whitespace-nowrap py-3 px-4 text-sm font-medium text-black-600">
                        SN
                    </th>
                    <th scope="col" class="text-left whitespace-nowrap py-3 px-4 text-sm font-medium text-black-600">
                        Action Tracker
                    </th>
                    <th scope="col" class="text-left whitespace-nowrap py-3 px-4 text-sm font-medium text-black-600">
                        Assigned To
                    </th>
                    <th scope="col" class="text-left whitespace-nowrap py-3 px-4 text-sm font-medium text-black-600">
                        Priority
                    </th>
                    <th scope="col" class="text-center py-3 px-4 text-sm font-medium text-black-600">
                        Status
                    </th>
                </tr>
            </thead>

            <tbody id="table-body">
                <tr class="hover:bg-gray-50 table-row" data-priority="high" data-status="pending" data-action="Patient intake" data-assignee="Laura">
                    <th scope="row" class="py-4 px-4 text-sm text-gray-600">
                        1
                    </th>
                    <td class="py-4 px-4 text-sm font-medium whitespace-nowrap text-primary-color-500">
                        Patient intake
                    </td>
                    <td class="py-4 px-4 text-sm text-black-600">
                        Laura
                    </td>
                    <td class="py-4 px-4 text-sm text-[#D32F2F]">
                        High
                    </td>
                    <td class="py-4 px-4 text-center">
                        <span
                            class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium
                                   bg-orange-100 text-orange-600"
                            aria-label="Status pending"
                        >
                            Pending
                        </span>
                    </td>
                </tr>

                <tr class="bg-[#FAFAFB] hover:bg-gray-50 table-row" data-priority="medium" data-status="in-progress" data-action="Patient Sample" data-assignee="Alex">
                    <th scope="row" class="py-4 px-4 text-sm text-black-600">
                        2
                    </th>
                    <td class="py-4 px-4 text-sm font-medium whitespace-nowrap text-primary-color-500">
                        Patient Sample
                    </td>
                    <td class="py-4 px-4 text-sm text-black-600">
                        Alex
                    </td>
                    <td class="py-4 px-4 text-sm text-[#FFA000]">
                        Medium
                    </td>
                    <td class="py-4 px-4 text-center">
                        <span
                            class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium
                                   bg-blue-100 text-blue-600"
                            aria-label="Status in progress"
                        >
                            In Progress
                        </span>
                    </td>
                </tr>

                <tr class="hover:bg-gray-50 table-row" data-priority="low" data-status="completed" data-action="Checkup" data-assignee="Sophia">
                    <th scope="row" class="py-4 px-4 text-sm text-black-600">
                        3
                    </th>
                    <td class="py-4 px-4 text-sm font-medium text-primary-color-500">
                        Checkup
                    </td>
                    <td class="py-4 px-4 text-sm text-black-600">
                        Sophia
                    </td>
                    <td class="py-4 px-4 text-sm text-[#4CAF50]">
                        Low
                    </td>
                    <td class="py-4 px-4 text-center">
                        <span
                            class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium
                                   bg-green-100 text-green-600"
                            aria-label="Status completed"
                        >
                            Completed
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <div id="no-results" class="hidden text-center py-12">
            <svg class="w-16 h-16 mx-auto text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-gray-500 text-lg font-medium">No Results Found</p>
            <p class="text-gray-400 text-sm mt-2">Try adjusting your filters or search query</p>
        </div>
        </table>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButton = document.getElementById('filter-button');
    const filterDropdown = document.getElementById('filter-dropdown');
    const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
    const filterPillsContainer = document.getElementById('filter-pills-container');
    const filterCount = document.getElementById('filter-count');
    const clearAllBtn = document.getElementById('clear-all-btn');
    const tabButtons = document.querySelectorAll('.tab-button');
    const searchInput = document.getElementById('action-search');
    const tableRows = document.querySelectorAll('.table-row');
    
    let selectedFilters = [];
    let currentTab = 'all';
    let searchQuery = '';

    filterButton.addEventListener('click', function(e) {
        e.stopPropagation();
        filterDropdown.classList.toggle('hidden');
    });

    document.addEventListener('click', function(e) {
        if (!filterDropdown.contains(e.target) && !filterButton.contains(e.target)) {
            filterDropdown.classList.add('hidden');
        }
    });

    filterCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const filterId = this.value;
            const filterLabel = this.getAttribute('data-label');
            const filterCategory = this.getAttribute('data-category');

            if (this.checked) {
                selectedFilters.push({
                    id: filterId,
                    label: filterLabel,
                    category: filterCategory
                });
            } else {
                selectedFilters = selectedFilters.filter(f => f.id !== filterId);
            }

            updateUI();
        });
    });

    clearAllBtn.addEventListener('click', function() {
        selectedFilters = [];
        filterCheckboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
        updateUI();
    });

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            tabButtons.forEach(btn => {
                btn.classList.remove('bg-secondary-color', 'text-primary-color-500');
                btn.classList.add('text-[#666666]', 'bg-gray-100');
                btn.setAttribute('aria-selected', 'false');
            });

            this.classList.remove('text-[#666666]', 'bg-gray-100');
            this.classList.add('bg-secondary-color', 'text-primary-color-500');
            this.setAttribute('aria-selected', 'true');
            
            currentTab = this.getAttribute('data-tab');
            filterTable();
        });
    });

    searchInput.addEventListener('input', function() {
        searchQuery = this.value.toLowerCase();
        filterTable();
    });

    function updateUI() {
        filterPillsContainer.innerHTML = '';
        
        if (selectedFilters.length > 0) {
            filterPillsContainer.classList.remove('hidden');
            clearAllBtn.classList.remove('hidden');
            filterCount.classList.remove('hidden');
            filterCount.textContent = selectedFilters.length;

            selectedFilters.forEach(filter => {
                const pill = document.createElement('span');
                pill.className = 'inline-flex items-center gap-1 px-3 py-1 bg-teal-50 text-teal-700 rounded-full text-sm';
                pill.innerHTML = `
                    <span>${filter.label}</span>
                    <button
                        class="ml-1 hover:text-teal-900 remove-filter"
                        data-filter-id="${filter.id}"
                        aria-label="Remove filter"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                `;
                filterPillsContainer.appendChild(pill);
            });

            document.querySelectorAll('.remove-filter').forEach(btn => {
                btn.addEventListener('click', function() {
                    const filterId = this.getAttribute('data-filter-id');
                    removeFilter(filterId);
                });
            });
            
        } else {
            filterPillsContainer.classList.add('hidden');
            clearAllBtn.classList.add('hidden');
            filterCount.classList.add('hidden');
        }
        
        filterTable();
    }

    function removeFilter(filterId) {
        selectedFilters = selectedFilters.filter(f => f.id !== filterId);
        
        const checkbox = document.querySelector(`.filter-checkbox[value="${filterId}"]`);
        if (checkbox) {
            checkbox.checked = false;
        }
        
        updateUI();
    }
    
    function filterTable() {
        tableRows.forEach(row => {
            let showRow = true;
            
            const rowPriority = row.getAttribute('data-priority');
            const rowStatus = row.getAttribute('data-status');
            const rowAction = row.getAttribute('data-action').toLowerCase();
            const rowAssignee = row.getAttribute('data-assignee').toLowerCase();
            
            if (currentTab !== 'all') {
                if (rowStatus !== currentTab) {
                    showRow = false;
                }
            }
            
            if (selectedFilters.length > 0 && showRow) {
                const priorityFilters = selectedFilters.filter(f => f.category === 'priority').map(f => f.id);
                const statusFilters = selectedFilters.filter(f => f.category === 'status').map(f => f.id);
                
                if (priorityFilters.length > 0) {
                    if (!priorityFilters.includes(rowPriority)) {
                        showRow = false;
                    }
                }
                
                if (statusFilters.length > 0) {
                    if (!statusFilters.includes(rowStatus)) {
                        showRow = false;
                    }
                }
            }
            
            if (searchQuery && showRow) {
                const matchesSearch = rowAction.includes(searchQuery) || rowAssignee.includes(searchQuery);
                if (!matchesSearch) {
                    showRow = false;
                    document.querySelector('#no-results').classList.remove('hidden');
                }
            }
            
            if (showRow) {
                                    document.querySelector('#no-results').classList.add('hidden');

                row.style.display = '';
            } else {
                                    document.querySelector('#no-results').classList.remove('hidden');

                row.style.display = 'none';
            }
        });
    }
});
</script> 