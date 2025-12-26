@extends('layouts.app')

@section('title', 'Dashboard - HSL LABS')
@section('page-title', 'Daily Operations Dashboard')

@section('content')
<div class="flex">

    <!-- Sidebar -->
    <aside id="sidebar" class="bg-white basis-[18%] h-screen fixed lg:static lg:left-0 -left-full z-[99] lg:w-[100%] w-[60%] transition-all duration-300">
        <x-layout.sidebar />
</aside>

    <!-- Main Content -->
    <div class="flex-1">
        <x-layout.header />

        <main class="p-[20px] lg:p-[40px] !pb-[150px] overflow-y-auto h-screen">

            <!-- KPI SECTION -->
            <section aria-labelledby="kpi-section-title">
                <h2 id="kpi-section-title" class="sr-only">
                    Key Performance Indicators
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <x-kpi-card
                        title="Total Orders"
                        value="120"
                        icon="assets/images/icons/heart.svg"
                        trend="5% Patients"
                        trendUp="↑ 3% from last week"
                        background="#4A90E2"
                    />

                    <x-kpi-card
                        title="Revenue Today"
                        value="62"
                        icon="assets/images/icons/order.svg"
                        trend="New orders"
                        trendUp="↑ 3% from last week"
                        background="#4A90E2"
                    />

                    <x-kpi-card
                        title="Active Users"
                        value="1250"
                        icon="assets/images/icons/inventory.svg"
                        trend="Current Stock"
                        trendUp="↓ 2% from last week"
                        background="#E74C3C"
                    />

                    <x-kpi-card
                        title="Pending Tasks"
                        value="25"
                        icon="assets/images/icons/tasks.svg"
                        trend="Tasks Completed"
                        trendUp="↑ 2% from last week"
                        background="#10847E"
                    />
                </div>
            </section>

            <!-- ANALYTICS -->
            <section aria-labelledby="analytics-section-title">
                <h2 id="analytics-section-title" class="sr-only">
                    Analytics Overview
                </h2>

                <div class="grid grid-cols-12 gap-6 mb-8">

                    <x-analytics-card
                        class="col-span-12 md:col-span-6 lg:col-span-4"
                        title="Sales Overview"
                        chartType="line"
                    />

                    <x-analytics-card
                        class="col-span-12 md:col-span-6 lg:col-span-4"
                        title="Top Products"
                        chartType="bar"
                    />

                    <x-analytics-card
                        class="col-span-12 md:col-span-6 lg:col-span-4"
                        title="Customer Distribution"
                        chartType="doughnut"
                    />

                    <!-- ACTION TABLE -->
                    <div class="col-span-12 lg:col-span-8 order-1 lg:order-none">
                        <x-action-table />
                    </div>

                    <x-analytics-card
                        class="col-span-12 md:col-span-6 lg:col-span-4"
                        title="Customer Distribution"
                        chartType="pie"
                        description="Customers by region"
                    />

                </div>
            </section>

        </main>
    </div>

    <!-- Quick Actions -->
    <x-quick-actions />

</div>
@endsection
