<table class="w-full border-collapse" role="table" aria-describedby="action-table-title">
    <thead>
        <tr>
            <th scope="col" class="text-left whitespace-nowrap py-3 px-4 text-sm font-semibold text-black-600 sortable" data-sort="sn">
                SN
                <span class="sort-icon">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                        <path d="M6 2l3 4H3l3-4zm0 8l-3-4h6l-3 4z"/>
                    </svg>
                </span>
            </th>
            <th scope="col" class="text-left whitespace-nowrap py-3 px-4 text-sm font-semibold text-black-600 sortable" data-sort="action">
                Action Tracker
                <span class="sort-icon">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                        <path d="M6 2l3 4H3l3-4zm0 8l-3-4h6l-3 4z"/>
                    </svg>
                </span>
            </th>
            <th scope="col" class="text-left whitespace-nowrap py-3 px-4 text-sm font-semibold text-black-600 sortable" data-sort="assignee">
                Assigned To
                <span class="sort-icon">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                        <path d="M6 2l3 4H3l3-4zm0 8l-3-4h6l-3 4z"/>
                    </svg>
                </span>
            </th>
            <th scope="col" class="text-left whitespace-nowrap py-3 px-4 text-sm font-semibold text-black-600 sortable" data-sort="priority">
                Priority
                <span class="sort-icon">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                        <path d="M6 2l3 4H3l3-4zm0 8l-3-4h6l-3 4z"/>
                    </svg>
                </span>
            </th>
            <th scope="col" class="text-center py-3 px-4 text-sm font-semibold text-black-600 sortable" data-sort="status">
                Status
                <span class="sort-icon">
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                        <path d="M6 2l3 4H3l3-4zm0 8l-3-4h6l-3 4z"/>
                    </svg>
                </span>
            </th>
        </tr>
    </thead>

    <tbody id="table-body">
        <tr class="hover:bg-gray-50 table-row" data-priority="high" data-status="pending" data-action="Patient intake" data-assignee="Laura" data-sn="1">
            <th scope="row" class="py-4 px-4 text-start text-sm text-gray-600">1</th>
            <td class="py-4 px-4 text-sm font-medium whitespace-nowrap text-primary-color-500">Patient intake</td>
            <td class="py-4 px-4 text-sm text-black-600">Laura</td>
            <td class="py-4 px-4 text-sm text-[#D32F2F]">High</td>
            <td class="py-4 px-4 text-center">
                <span class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-orange-100 text-orange-600" aria-label="Status pending">Pending</span>
            </td>
        </tr>

        <tr class="bg-[#FAFAFB] hover:bg-gray-50 table-row" data-priority="medium" data-status="in-progress" data-action="Patient Sample" data-assignee="Alex" data-sn="2">
            <th scope="row" class="py-4 text-start px-4 text-sm text-black-600">2</th>
            <td class="py-4 px-4 text-sm font-medium whitespace-nowrap text-primary-color-500">Patient Sample</td>
            <td class="py-4 px-4 text-sm text-black-600">Alex</td>
            <td class="py-4 px-4 text-sm text-[#FFA000]">Medium</td>
            <td class="py-4 px-4 text-center">
                <span class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-blue-100 text-blue-600" aria-label="Status in progress">In Progress</span>
            </td>
        </tr>

        <tr class="hover:bg-gray-50 table-row" data-priority="low" data-status="completed" data-action="Checkup" data-assignee="Sophia" data-sn="3">
            <th scope="row" class="py-4 px-4 text-start text-sm text-black-600">3</th>
            <td class="py-4 px-4 text-sm font-medium text-primary-color-500">Checkup</td>
            <td class="py-4 px-4 text-sm text-black-600">Sophia</td>
            <td class="py-4 px-4 text-sm text-[#4CAF50]">Low</td>
            <td class="py-4 px-4 text-center">
                <span class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-green-100 text-green-600" aria-label="Status completed">Completed</span>
            </td>
        </tr>

        <tr class="hover:bg-gray-50 table-row" data-priority="low" data-status="completed" data-action="Patient Sample" data-assignee="Alex" data-sn="4">
            <th scope="row" class="py-4 px-4 text-sm text-start text-black-600">4</th>
            <td class="py-4 px-4 text-sm font-medium text-primary-color-500">Patient Sample</td>
            <td class="py-4 px-4 text-sm text-black-600">Alex</td>
            <td class="py-4 px-4 text-sm text-[#4CAF50]">Low</td>
            <td class="py-4 px-4 text-center">
                <span class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-green-100 text-green-600" aria-label="Status completed">Completed</span>
            </td>
        </tr>

        <tr class="hover:bg-gray-50 table-row" data-priority="low" data-status="completed" data-action="Checkup" data-assignee="Sophia" data-sn="5">
            <th scope="row" class="py-4 px-4 text-sm text-start text-black-600">5</th>
            <td class="py-4 px-4 text-sm font-medium text-primary-color-500">Checkup</td>
            <td class="py-4 px-4 text-sm text-black-600">Sophia</td>
            <td class="py-4 px-4 text-sm text-[#4CAF50]">Low</td>
            <td class="py-4 px-4 text-center">
                <span class="px-6 py-2 inline-block rounded-[5px] text-xs font-medium bg-green-100 text-green-600" aria-label="Status completed">Completed</span>
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
