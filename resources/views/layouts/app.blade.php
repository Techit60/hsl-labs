<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'HSL LABS Dashboard')</title>    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="/assets/css/global.css" rel="stylesheet">  
    @stack('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            experimental: {
      optimizeUniversalDefaults: true  
    },
    corePlugins: {
    //   preflight: false 
    },
            theme: {
                extend: {
                    fontFamily: {
                        nunito: ['Nunito', 'sans-serif'],
                    },
                    colors: {
                        'primary-color': {
                            500: '#0066FF', 
                        },
                        'secondary-color':'#CFE6E5'
                    },
                },
            },
        }
    </script>
</head>
<body class="overflow-hidden bg-gray-50">
    <div class="flex  min-h-screen"> 
            <main class="flex-1">
                @yield('content')
            </main>
    </div>
    @stack('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.2.0/dist/chartjs-plugin-datalabels.min.js"></script>
<script>
function openMenu() {
  const sidebar = document.getElementById("sidebar");
    const asidebar = document.querySelector("aside");
let hideLable=document.querySelectorAll(".hide-label");
  if(window.innerWidth<1024){
    sidebar.classList.toggle("left-0");
    sidebar.classList.toggle("-left-full");
  }else{
    asidebar.classList.toggle("lg:!basis-[4%]");
    hideLable.forEach(element => {
      element.classList.toggle("hidden");
    });
    // asidebar.classList.toggle("-left-full");
    
  }
}

</script>
<script>
function toggleDropdown() {
const dropdown = document.getElementById('profile-dropdown');
if (dropdown.classList.contains('invisible')) {
dropdown.classList.remove('invisible', 'opacity-0');
dropdown.classList.add('opacity-100', 'visible');
} else {
dropdown.classList.remove('opacity-100', 'visible');
dropdown.classList.add('invisible', 'opacity-0');
}
}
document.addEventListener('click', function(event) {
const profileDiv = document.getElementById('profile-trigger');
const dropdown = document.getElementById('profile-dropdown');
if (!profileDiv.contains(event.target) && !dropdown.contains(event.target)) {
dropdown.classList.remove('opacity-100', 'visible');
dropdown.classList.add('invisible', 'opacity-0');
}
});

function toggleDropdown() {
  const dropdown = document.getElementById("profile-dropdown");
  const trigger = document.getElementById("profile-trigger");

  const isOpen = dropdown.classList.contains("opacity-100");

  dropdown.classList.toggle("opacity-100");
  dropdown.classList.toggle("visible");
  dropdown.classList.toggle("opacity-0");
  dropdown.classList.toggle("invisible");

  trigger.setAttribute("aria-expanded", !isOpen);
}

// Close dropdown on ESC
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape") {
    const dropdown = document.getElementById("profile-dropdown");
    const trigger = document.getElementById("profile-trigger");

    dropdown.classList.remove("opacity-100", "visible");
    dropdown.classList.add("opacity-0", "invisible");
    trigger.setAttribute("aria-expanded", "false");
  }
});



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
// Table filtering functionality end
</script>
            
</body>
</html>