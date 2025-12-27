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
<script src="/assets/js/common.js"></script>
<script src="/assets/js/table.js"></script>
</body>
</html>