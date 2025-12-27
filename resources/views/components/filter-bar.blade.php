@props([
    'title' => 'Smart Filter',
])  
<header class="flex flex-wrap px-[15px] gap-5 pb-0 items-center justify-between mb-6">
        <h2
            id="action-table-title"
            class="text-lg font-bold text-black"
        >
            {{ $title }}
        </h2>

        <div class="flex items-center gap-2 lg:ml-auto">
            <div class="relative grow-0 shrink-0 basis-[260px]">
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
                    class="pl-10 pr-4 py-2 bg-[#FAFAFB] border border-gray-200 rounded-lg w-full text-sm
                           focus:outline-none focus:ring-2 focus:ring-teal-500"
                />
            </div>

            <div class="relative">
                <button
                    id="filter-button"
                    class="px-4 py-2 border border-white-200 rounded-lg text-sm font-medium
                           text-white bg-primary-color-500  flex items-center gap-2
                           focus:outline-none focus:ring-2 focus:ring-teal-500"
                    aria-label="Open filters"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                    </svg>
                    Filter
                    <span id="filter-count" class="hidden ml-1 px-2 py-0.5 bg-white text-primary-color-500 rounded-full text-xs">
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
