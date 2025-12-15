@extends('layouts.app')

@section('title', 'Dashboard - HSL LABS')
@section('page-title', 'Daily Operations Dashboard')

@section('content')
<div class="grid   grid-cols-12">
    <div class="lg:col-span-2">
        @include('components.layout.sidebar')
    </div>

    <div class="col-span-12 lg:col-span-10">
        @include('components.layout.header')

        <div class="p-[20px] lg:p-[40px] !pb-[150px]  overflow-y-auto h-screen">
            <!-- KPI Cards Section -->
            <section class="kpi-cards">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    @include('components.kpi-card', [
                        'title' => 'Total Orders',
                        'value' => '120',
                        'icon' => 'assets/images/icons/heart.svg',
                        'trend' => '5% Patients',
                        'trend_up' => '(↑ #3% from last week)',
                        'color' => '#4A90E2'
                    ])

                    @include('components.kpi-card', [
                        'title' => 'Revenue Today',
                        'value' => '62',
                        'icon' => 'assets/images/icons/order.svg',
                        'trend' => 'New orders',
                        'trend_up' => '(↑ #3% from last week)',
                        'color' => '#4A90E2'
                    ])

                    @include('components.kpi-card', [
                        'title' => 'Active Users',
                        'value' => '1250',
                        'icon' => 'assets/images/icons/inventory.svg',
                        'trend' => 'Current Stock',
                        'trend_up' => '↓ #2% from last week',
                        'color' => '#E74C3C'
                    ])

                    @include('components.kpi-card', [
                        'title' => 'Pending Tasks',
                        'value' => '25',
                        'icon' => 'assets/images/icons/tasks.svg',
                        'trend' => 'Tasks Completed',
                    'trend_up' => '↑ #2% from last week',
                        'color' => '#10847E'
                    ])
                </div>
            </section>

            <!-- Analytics Cards Section -->
            <section class="analytics-cards">
                <div class="grid grid-cols-12 gap-6 mb-8">
                    @include('components.analytics-card', [
                        'title' => 'Sales Overview',
                        'chartType' => 'line',
                    ])

                    @include('components.analytics-card', [
                        'title' => 'Top Products',
                        'chartType' => 'bar',
                    ])

                    @include('components.analytics-card', [
                        'title' => 'Customer Distribution',
                        'chartType' => 'bar-1',
                    ])
          
                        <div class="col-span-12 lg:order-[inherit] order-1 lg:col-span-8">
                    @include('components.action-table')
                        </div>
               @include('components.analytics-card', [
                        'title' => 'Customer Distribution',
                        'chartType' => 'pie',
                        'description' => 'Customers by region'
                    ])
                  </div>
            </section>
        </div>
    </div>

     @include('components.quick-actions')

</div>
@endsection

@push('scripts')
@endpush