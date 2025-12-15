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
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
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
                            500: '#10837E', 
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>
<script>
function openMenu() {
  const sidebar = document.getElementById("sidebar");
  sidebar.classList.toggle("left-0");
  sidebar.classList.toggle("-left-full");
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
</script>
            
</body>
</html>