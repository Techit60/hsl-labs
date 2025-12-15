<div class="col-span-12 md:col-span-6 lg:col-span-4">
	<div class="bg-white rounded-2xl p-6 shadow-sm">
		 @if($chartType === 'pie')
		<div class="flex items-center justify-between mb-6">
			<div>
				<h3 class="text-lg font-bold text-gray-800">{{ $title }}</h3>
				 @if(isset($description))
				<p class="text-sm text-gray-500 mt-1">
					{{ $description }}
				</p>
				 @endif
			</div>
			<svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
			</svg>
		</div>
		<div class="flex flex-col items-center">
			<div class="relative w-[145px] h-[145px] lg:w-[220px] lg:h-[220px]">
				<svg class="w-full h-full transform -rotate-90" viewbox="0 0 200 200">
				<circle cx="100" cy="100" r="80" fill="none" stroke="#f3f4f6" stroke-width="20"/>
				<circle cx="100" cy="100" r="80" fill="none" stroke="#f97316" stroke-width="20" stroke-dasharray="200 300" stroke-linecap="round"/>
				<circle cx="100" cy="100" r="80" fill="none" stroke="#a78bfa" stroke-width="20" stroke-dasharray="100 400" stroke-dashoffset="-200" stroke-linecap="round"/>
				<circle cx="100" cy="100" r="80" fill="none" stroke="#10847E" stroke-width="20" stroke-dasharray="150 350" stroke-dashoffset="-300" stroke-linecap="round"/>
				</svg>
				<div class="absolute inset-0 flex flex-col items-center justify-center">
					<div class="text-2xl lg:text-3xl font-bold text-gray-800">
						80%
					</div>
					<div class="text-sm text-gray-600">
						Transactions
					</div>
				</div>
			</div>
			<div class="lg:mt-6 flex justify-center gap-4 items-center w-full">
				<div class="flex items-center gap-2">
					<div class="w-3 h-3 bg-purple-400 rounded-full">
					</div>
					<span class="text-sm text-gray-600">Sale</span>
				</div>
				<div class="flex items-center gap-2">
					<div class="w-3 h-3 bg-teal-600 rounded-full">
					</div>
					<span class="text-sm text-gray-600">Distribute</span>
				</div>
				<div class="flex items-center gap-2">
					<div class="w-3 h-3 bg-orange-500 rounded-full">
					</div>
					<span class="text-sm text-gray-600">Return</span>
				</div>
			</div>
		</div>
		 @else
		<div class="flex items-center justify-between mb-6">
			<div>
				<h3 class="text-lg font-bold text-gray-800">{{ $title }}</h3>
				 @if(isset($description))
				<p class="text-sm text-gray-500 mt-1">
					{{ $description }}
				</p>
				 @endif
			</div>
			<svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
			</svg>
		</div>
		<div class="relative h-48">
			<canvas id="chart-{{ $chartType }}-{{ Str::slug($title) }}"></canvas>
		</div>
		 @endif
	</div>
</div>
 @push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('chart-{{ $chartType }}-{{ Str::slug($title) }}');
    if (!ctx) return;
    @if($chartType === 'line')
    
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['10am', '11am', '12pm', '01pm', '02pm', '03pm', '04pm', '05pm'],
        datasets: [{
            data: [45, 38, 62, 50, 42, 55, 25, 45, 70, 88],
            borderColor:  function(context) {
                const ctx = context.chart.ctx;
                const gradient = ctx.createLinearGradient(0, 0, 0, 300);
                gradient.addColorStop(0, '#90F0EB');
                gradient.addColorStop(1, '#10847E');
                return gradient;
            },
            backgroundColor: function(context) {
                const ctx = context.chart.ctx;
                const gradient = ctx.createLinearGradient(0, 0, 0, 300);
                gradient.addColorStop(0, 'rgba(16, 132, 126, 0.04) ');
                gradient.addColorStop(0.5, 'rgba(16, 132, 126, 0.04) ');
                gradient.addColorStop(1, 'rgba(16, 132, 126, 0.04) ');
                return gradient;
            },
            borderWidth: 2.5,
            pointBackgroundColor: '#FFF',
            pointBorderColor: '#10847E',
               pointBorderWidth: 3,
            pointRadius: 3,
            pointHoverRadius: 6, 
            pointHoverBorderWidth: 3, 
            pointHoverBorderColor: '#10847E',
            pointHoverBackgroundColor: '#ffffff',  
            tension: 0.3,
            fill: true
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            legend: { display: false },
            tooltip: { 
                enabled: true,
                backgroundColor: '#0f172a',
                titleColor: '#94a3b8',
                bodyColor: '#ffffff',
                padding: 12,
                displayColors: false,
                borderColor: 'rgba(148, 163, 184, 0.2)',
                borderWidth: 1,
                cornerRadius: 6,
                titleFont: {
                    size: 11,
                    weight: 'normal'
                },
                bodyFont: {
                    size: 14,
                    weight: 'bold'
                },
                callbacks: {
                    title: function(context) {
                        return 'Sales';
                    },
                    label: function(context) {
                        return context.parsed.y.toLocaleString();
                    }
                }
            }
        },
        scales: {
             x: {
                grid: { 
                    display: false,
                    drawBorder: false
                },
                ticks: { color: '#9ca3af', font: { size: 10 }, padding: 8 }
            },
             y: {
                position: 'left',  // Right side par
                display: true,
                beginAtZero: true,
                min: 0,
                max: 100,
                ticks: {
                    color: '#9ca3af',
                    font: { size: 11 },
                    stepSize: 20,
                    padding: 8
                },
                grid: {
                    display: false,
                    drawBorder: false
                }
            }
        },
        interaction: {
            intersect: false,
            mode: 'index'
        }
    },
    plugins: [{
        afterDraw: function(chart) {
            if (chart.tooltip?._active?.length) {
                const activePoint = chart.tooltip._active[0];
                const ctx = chart.ctx;
                const x = activePoint.element.x;
                const topY = chart.scales.y.top;
                const bottomY = chart.scales.y.bottom;
                // Dotted vertical line
                ctx.save();
                ctx.beginPath();
                ctx.setLineDash([4, 4]);
                ctx.moveTo(x, topY);
                ctx.lineTo(x, bottomY);
                ctx.lineWidth = 1.5;
                ctx.strokeStyle = 'rgba(203, 213, 225, 0.6)';
                ctx.stroke();
                ctx.restore();
            }
        }
    }]
});
    @elseif($chartType === 'bar')
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [
    {
        data: [8000, 28000, 300000, 30000, 12000, 8000, 30000],
        backgroundColor: function(context) {
            const value = context.parsed.y;
            const threshold = 15000; 
            return value <= threshold ? '#8573E1' : '#10847E';
        },
        borderRadius: 0,
        barPercentage: 0.4,
        categoryPercentage: 0.8
    }
]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#1f2937',
                        padding: 10,
                        displayColors: true,
                        boxWidth: 8,
                        boxHeight: 8,
                        callbacks: {
                            label: function(context) {
                                return context.parsed.y ? context.parsed.y.toLocaleString() : '';
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: { display: false, drawBorder: false },
                        ticks: { color: '#9ca3af', font: { size: 10 } }
                    },
                    y: {
                        display: false,
                        beginAtZero: true,
                        max: 35000
                    }
                }
            }
        });
    @elseif($chartType === 'bar-1')
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
                datasets: [
    {
        data: [8000, 28000, 30000, 30000, 12000, 8000, 12000],
        backgroundColor: function(context) {
            const value = context.parsed.y;
            const threshold = 15000; 
            return value <= threshold ? '#8573E1' : '#10847E';
        },
        borderRadius: 0,
        barPercentage: 0.4,
        categoryPercentage: 0.8
    }
]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: '#1f2937',
                        padding: 10,
                        displayColors: false,
                        callbacks: {
                            label: function(context) {
                                return context.parsed.y.toLocaleString();
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        grid: { display: false, drawBorder: false },
                        ticks: { color: '#9ca3af', font: { size: 10 } }
                    },
                    y: {
                        display: false,
                        beginAtZero: true,
                        max: 35000
                    }
                }
            }
        });
    @endif
});
</script>
@endpush