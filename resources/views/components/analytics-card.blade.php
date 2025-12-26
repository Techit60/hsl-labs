<div class="col-span-12 md:col-span-6 lg:col-span-4">
    <div class="bg-white rounded-2xl h-full flex flex-col justify-between p-6 shadow-sm hover:shadow-md transition-shadow duration-200">
        
        <div class="flex items-start justify-between mb-6">
            <div class="flex-1">
                <h3 class="text-lg font-bold text-gray-800" id="chart-title-{{ $chartType }}-{{ Str::slug($title) }}">
                    {{ $title }}
                </h3>
                @if(isset($description))
                    <p class="text-sm text-gray-500 mt-1">{{ $description }}</p>
                @endif
            </div>
            <button 
                aria-label="More options for {{ $title }}" 
                class="p-1.5 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-1 transition-colors">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                </svg>
            </button>
        </div>

        @if($chartType === 'pie')
            <div class="flex flex-col items-center" role="img" aria-labelledby="chart-title-{{ $chartType }}-{{ Str::slug($title) }} chart-desc-{{ $chartType }}-{{ Str::slug($title) }}">
                <div class="relative w-[160px] h-[160px] lg:w-[220px] lg:h-[220px] mb-4">
                    <svg class="w-full h-full transform -rotate-90" viewBox="0 0 200 200" aria-hidden="true">
                        <title>Pie chart showing transaction distribution</title>
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#f3f4f6" stroke-width="25"/>
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#f97316" stroke-width="25" 
                                stroke-dasharray="201 302" stroke-linecap="round" aria-label="Return: 40%"
                                class="transition-all duration-1000 ease-out hover:stroke-width-22"/>
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#a78bfa" stroke-width="25" 
                                stroke-dasharray="100.5 402.5" stroke-dashoffset="-201" stroke-linecap="round" aria-label="Sale: 20%"
                                class="transition-all duration-1000 ease-out hover:stroke-width-22"/>
                        <circle cx="100" cy="100" r="80" fill="none" stroke="#10847E" stroke-width="25" 
                                stroke-dasharray="150.75 352.25" stroke-dashoffset="-301.5" stroke-linecap="round" aria-label="Distribute: 30%"
                                class="transition-all duration-1000 ease-out hover:stroke-width-22"/>
                    </svg>
                    <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
                        <div class="text-3xl lg:text-4xl font-bold text-gray-800" aria-hidden="true">80%</div>
                        <div class="text-sm text-gray-500 mt-1" aria-hidden="true">Success Rate</div>
                    </div>
                </div>

                <!-- Accessible description -->
                <div id="chart-desc-{{ $chartType }}-{{ Str::slug($title) }}" class="sr-only">
                    Pie chart showing transaction distribution: Sale represents 20%, Distribute represents 30%, and Return represents 40%. The overall success rate is 80%.
                </div>

                <!-- Legend -->
                <div class="mt-6 flex flex-wrap justify-center gap-2 w-full">
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="w-3 h-3 bg-purple-400 rounded-full flex-shrink-0" aria-hidden="true"></div>
                        <span class="text-sm font-medium text-gray-700">Sale</span>
                        <span class="text-sm text-gray-500">20%</span>
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="w-3 h-3 bg-teal-600 rounded-full flex-shrink-0" aria-hidden="true"></div>
                        <span class="text-sm font-medium text-gray-700">Distribute</span>
                        <span class="text-sm text-gray-500">30%</span>
                    </div>
                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition-colors cursor-pointer">
                        <div class="w-3 h-3 bg-orange-500 rounded-full flex-shrink-0" aria-hidden="true"></div>
                        <span class="text-sm font-medium text-gray-700">Return</span>
                        <span class="text-sm text-gray-500">40%</span>
                    </div>
                </div>
            </div>

        @else
            <!-- Canvas-based Charts -->
            <div class="relative">
                <canvas 
                    id="chart-{{ $chartType }}-{{ Str::slug($title) }}" 
                    aria-labelledby="chart-title-{{ $chartType }}-{{ Str::slug($title) }} chart-desc-{{ $chartType }}-{{ Str::slug($title) }}"
                    role="img" class="h-[auto] lg:h-[{{ $height }}] " >
                </canvas>

                <!-- Accessible description -->
       
            </div>
        @endif
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('chart-{{ $chartType }}-{{ Str::slug($title) }}');
    if (!canvas) return;

    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false }
        },
        animation: {
            duration: 1600,
            easing: 'easeOutQuart',
            animateRotate: true,
            animateScale: true
        }
    };

    @if($chartType === 'line')
        new Chart(canvas, {
            type: 'line',
            data: {
                labels: ['10am', '11am', '12pm', '01pm', '02pm', '03pm', '04pm', '05pm'],
                datasets: [{
                    label: 'Sales',
                    data: [40,22, 38, 20, 40, 55, 25, 60],
            borderColor: function(context) {
                const chart = context.chart;
                const { ctx, chartArea } = chart;

                if (!chartArea) {
                    return '#6C9EEA';
                }

                const gradient = ctx.createLinearGradient(
                    chartArea.left, 0,
                    chartArea.right, 0
                );
                gradient.addColorStop(0, '#6C9EEA');     
                gradient.addColorStop(1, '#0066FF');    

                return gradient;
            },

            backgroundColor: function(context) {
                const chart = context.chart;
                const { ctx, chartArea } = chart;

                if (!chartArea) return 'rgba(16, 132, 126, 0.15)';

                const gradient = ctx.createLinearGradient(0, chartArea.top, 0, chartArea.bottom);
                gradient.addColorStop(0, 'rgba(108, 158, 234, 0.2)'); 
                gradient.addColorStop(1, 'rgba(0, 102, 255, 0.02)');
                return gradient;
            },
                    borderWidth: 6,
                    pointBackgroundColor: '#ffffff',
                    pointBorderColor: '#10847E',
                    pointBorderWidth: 4,
                    pointRadius: 4,
                    pointHoverRadius: 7,
                    pointHoverBorderWidth: 6,
                    tension: 0.5,
                    fill: true
                }]
            },
            options: {
                ...commonOptions,
                animation: {
                    ...commonOptions.animation,
                    duration: 2000,
                    delay: (context) => context.dataIndex * 80
                },
                plugins: {
                    ...commonOptions.plugins,
                    tooltip: { 
                        enabled: true,
                        backgroundColor: '#0066FF',
                        titleColor: '#fff',
                        bodyColor: '#ffffff',
                        padding: 25,
                        displayColors: false,
                       boxShadow: '0px 4px 7px rgba(3, 2, 41, 0.07)',
                        cornerRadius: 10,
                        width: 100,
                        titleFont: { size: 11, weight: '600' },
                        bodyFont: { size: 13, weight: 'bold' },
                        callbacks: {
                            title: () => 'Sales',
                            label: context => context.parsed.y.toLocaleString() + ' units'
                        }
                    }
                },
                scales: {
                    x: {
                        grid: { display: false, drawBorder: false },
                        ticks: { color: '#374151', font: { size: 12, family: 'Nunito, sans-serif' }, padding: 8 }
                    },
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 100,
                        ticks: {
                            color: '#6b7280',
                            font: { size: 11, family: 'Nunito, sans-serif' },
                            stepSize: 20,
                            padding: 10
                        },
                        grid: { color: 'rgba(0, 0, 0, 0.04)', drawBorder: false }
                    }
                },
                interaction: { intersect: false, mode: 'index' }
            },
            plugins: [{
                afterDraw: function(chart) {
                    if (chart.tooltip?._active?.length) {
                        const activePoint = chart.tooltip._active[0];
                        const ctx = chart.ctx;
                        const x = activePoint.element.x;
                        const topY = chart.scales.y.top;
                        const bottomY = chart.scales.y.bottom;
                        ctx.save();
                        ctx.beginPath();
                        ctx.setLineDash([5, 5]);
                        ctx.moveTo(x, topY);
                        ctx.lineTo(x, bottomY);
                        ctx.lineWidth = 2;
                        ctx.strokeStyle = 'rgba(16, 132, 126, 0.3)';
                        ctx.stroke();
                        ctx.restore();
                    }
                }
            }]
        });

    @elseif($chartType === 'area')
        new Chart(canvas, {
            type: 'line',
            data: {
                labels: ['9am', '10am', '11am', '12pm', '1pm', '2pm', '3pm', '4pm'],
                datasets: [{
                    label: 'Revenue',
                    data: [120, 180, 260, 220, 300, 280, 340, 400],
                    borderColor: '#10847E',
                    backgroundColor: function(context) {
                        const ctx = context.chart.ctx;
                        const gradient = ctx.createLinearGradient(0, 0, 0, 200);
                        gradient.addColorStop(0, 'rgba(16, 132, 126, 0.2)');
                        gradient.addColorStop(1, 'rgba(16, 132, 126, 0.02)');
                        return gradient;
                    },
                    borderWidth: 3,
                    pointRadius: 0,
                    pointHoverRadius: 6,
                    pointHoverBorderWidth: 3,
                    pointHoverBackgroundColor: '#ffffff',
                    pointHoverBorderColor: '#10847E',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                ...commonOptions,
                animation: {
                    ...commonOptions.animation,
                    duration: 2200
                },
                plugins: {
                    ...commonOptions.plugins,
                    tooltip: {
                        backgroundColor: 'rgba(15, 23, 42, 0.95)',
                        titleColor: '#94a3b8',
                        bodyColor: '#ffffff',
                        padding: 14,
                        cornerRadius: 8,
                        displayColors: false,
                        borderColor: 'rgba(148, 163, 184, 0.1)',
                        borderWidth: 1,
                        callbacks: {
                            title: () => 'Revenue',
                            label: context => '$' + (context.parsed.y * 1000).toLocaleString()
                        }
                    }
                },
                scales: {
                    x: {
                        grid: { display: false, drawBorder: false },
                        ticks: { color: '#000', font: { size: 12, family: 'Nunito, sans-serif' }, padding: 8 }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: '#000',
                            font: { size: 11, family: 'Nunito, sans-serif' },
                            padding: 10,
                            callback: value => '$' + (value * 1000).toLocaleString()
                        },
                        grid: { color: 'rgba(0, 0, 0, 0.04)', drawBorder: false }
                    }
                },
                interaction: { mode: 'index', intersect: false }
            }
        });

    @elseif($chartType === 'doughnut')
   new Chart(canvas, {
    type: 'doughnut',
    data: {
        datasets: [{
            data: [35, 25, 20, 20],
            backgroundColor: [
                '#10847E',
                '#A78BFA',
                '#F97316',
                '#06B6D4'
            ],
            borderColor: '#ffffff',
            borderWidth: 3,
            hoverOffset: 8
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '40%',

        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    usePointStyle: true,
                    boxWidth: 10,
                    padding: 16
                }
            },

            tooltip: {
                backgroundColor: 'rgba(15, 23, 42, 0.95)',
                titleColor: '#ffffff',
                bodyColor: '#ffffff',
                padding: 12,
                cornerRadius: 8,
                callbacks: {
                    label: (context) => {
                        const value = context.parsed;
                        const total = context.dataset.data.reduce((a, b) => a + b, 0);
                        const percent = ((value / total) * 100).toFixed(1);
                        return `${context.label}: ${percent}%`;
                    }
                }
            },

            datalabels: {
                color: '#ffffff',
                font: {
                    size: 13,
                    weight: 'bold'
                },
                formatter: (value, ctx) => {
                    const total = ctx.dataset.data.reduce((a, b) => a + b, 0);
                    const percent = ((value / total) * 100).toFixed(0);
                    return percent + '%';
                },

                /* PERFECT POSITIONING */
                anchor: 'center',   // slice ke beech me
                align: 'center',    // exactly center
                clamp: true
            }
        }
    },
    plugins: [ChartDataLabels]
});

    @elseif(in_array($chartType, ['bar', 'bar-1']))
          new Chart(canvas, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Monthly Values',
            data: [23400, 15000, 30000, 22000, 10000, 23400, 5000],
            backgroundColor: function(context) {
                const value = context.parsed.y;
                return value <= 15000 ? '#0066FF' : '#207F22';
            },
            hoverBackgroundColor: function(context) {
                const value = context.parsed.y;
                return value <= 15000 ? '#0066FF' : '#207F22';
            },
            barPercentage: 0.6,
            categoryPercentage: 0.8,
            borderRadius: 4
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        layout: {
            padding: {
                top: 30  
            }
        },
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                enabled: true
            },
            datalabels: { 
                anchor: 'end',
                align: 'top', 
                offset: 4,
                color: '#1e293b',
                font: {
                    size: 13,
                    weight: 'bold',
                    family: 'Arial, sans-serif'
                },
                formatter: function(value) {
                    return value.toLocaleString();
                }
            }
        },
        scales: {
            x: {
                grid: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    color: '#374151',
                    font: {
                        size: 12
                    }
                }
            },
            y: {
                display: false,
                beginAtZero: true
            }
        }
    },
        plugins: [ChartDataLabels],
});  
    @endif
});
</script>
@endpush