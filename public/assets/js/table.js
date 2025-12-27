
// Initialize table filtering when page loads
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
        document.querySelector('#no-results').classList.add('hidden')
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
                                    // document.querySelector('#no-results').classList.add('hidden');

                row.style.display = '';
            } else {
                                    // document.querySelector('#no-results').classList.remove('hidden');

                row.style.display = 'none';
            }
        });
    }
});
// Table filtering functionality end

// sort by logic
   let currentSort = { column: null, direction: 'asc' };

    document.querySelectorAll('.sortable').forEach(header => {
        header.addEventListener('click', function() {
            const sortBy = this.dataset.sort;
            const icon = this.querySelector('.sort-icon');
            
            // Toggle direction if clicking same column
            if (currentSort.column === sortBy) {
                currentSort.direction = currentSort.direction === 'asc' ? 'desc' : 'asc';
            } else {
                currentSort.direction = 'asc';
            }
            currentSort.column = sortBy;
            
            // Remove active class from all icons
            document.querySelectorAll('.sort-icon').forEach(i => i.classList.remove('active'));
            icon.classList.add('active');
            
            // Sort rows
            sortTable(sortBy, currentSort.direction);
        });
    });

    function sortTable(column, direction) {
        const tbody = document.getElementById('table-body');
        const rows = Array.from(tbody.querySelectorAll('.table-row'));
        
        rows.sort((a, b) => {
            let aVal = a.dataset[column];
            let bVal = b.dataset[column];
            
            // Handle priority sorting
            if (column === 'priority') {
                const priorityOrder = { 'high': 3, 'medium': 2, 'low': 1 };
                aVal = priorityOrder[aVal.toLowerCase()];
                bVal = priorityOrder[bVal.toLowerCase()];
            }
            // Handle serial number sorting
            else if (column === 'sn') {
                aVal = parseInt(aVal);
                bVal = parseInt(bVal);
            }
            // Handle status sorting
            else if (column === 'status') {
                const statusOrder = { 'pending': 1, 'in-progress': 2, 'completed': 3 };
                aVal = statusOrder[aVal.toLowerCase()];
                bVal = statusOrder[bVal.toLowerCase()];
            }
            
            if (direction === 'asc') {
                return aVal > bVal ? 1 : -1;
            } else {
                return aVal < bVal ? 1 : -1;
            }
        });
        
        // Re-append sorted rows
        rows.forEach(row => tbody.appendChild(row));
    }

