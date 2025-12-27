@extends('layouts.app')

@section('title', 'Dashboard - HSL LABS')
@section('page-title', 'Daily Operations Dashboard')

@section('content')
<div class="flex">

    <!-- Sidebar -->
    <aside id="sidebar" class="bg-white basis-[15%] h-screen fixed lg:static lg:left-0 -left-full z-[99] lg:w-[100%] w-[60%] transition-all duration-300">
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
                        title="Patients"
                        value="120"
                        icon="assets/images/icons/patient.svg"
                        trend="51"
                        background="linear-gradient(79.81deg,_#4188F2_7.62%,_#4188F2_41.63%,_#0066FF_94.59%)"
                    />

                    <x-kpi-card
                        title="Order"
                        value="64"
                        icon="assets/images/icons/order.svg"
                        trend="32"
                        background="linear-gradient(79.81deg,_#FDA090_7.62%,_#F98381_41.63%,_#F66C74_94.59%)"
                    />

                    <x-kpi-card
                        title="Inventory"
                        value="1680"
                        icon="assets/images/icons/inventory.svg"
                        trend="4"
                        background="linear-gradient(79.81deg,_#F0BD42_7.62%,_#FEBA3C_41.63%,_#EE9700_94.59%)"
                    />

                    <x-kpi-card
                        title="Completed"
                        value="25"
                        icon="assets/images/icons/tasks.svg"
                        trend="62"
                        background="linear-gradient(79.81deg,_#24ACA5_7.62%,_#259C96_41.63%,_#10847E_94.59%)"
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
                        height="280px"

                    />

                    <x-analytics-card
                        class="col-span-12 md:col-span-6 lg:col-span-4"
                        title="Top Products"
                        chartType="bar"
                        height="280px"

                    />

                    <x-analytics-card
                        class="col-span-12 md:col-span-6 lg:col-span-4"
                        title="Customer Distribution"
                        chartType="doughnut"
                        height="280px"

                    />

                    <!-- ACTION TABLE -->
                    <div class="col-span-12 lg:col-span-8 order-1  lg:order-none">
                        <div class=" bg-white rounded-2xl lg:p-6 shadow-sm focus:outline-none">
                        <x-filter-bar />
                        <x-Table />
</div>
                    </div>

                    <x-analytics-card
                        class="col-span-12 md:col-span-6 lg:col-span-4"
                        title="Customer Distribution"
                        chartType="pie"
                        description="Customers by region"
                        height="253px"
                    />

                </div>
            </section>

        </main>
    </div>

    <!-- Quick Actions -->
    <x-quick-actions />

</div>
@endsection
