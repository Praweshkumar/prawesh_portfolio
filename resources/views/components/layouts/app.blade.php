<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prawessh - Full Stack Developer</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|jetbrains-mono:400|poppins:500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                darkMode: 'class',
            }
        </script>
    @endif
    
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-white dark:bg-black text-gray-900 dark:text-white font-inter antialiased selection:bg-brand-primary selection:text-white relative transition-colors duration-300" 
      x-data="{ 
          scrolled: false,
          darkMode: localStorage.getItem('darkMode') === 'true' || (!('darkMode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
      }" 
      x-init="
          $watch('darkMode', val => { 
              localStorage.setItem('darkMode', val); 
              if(val) document.documentElement.classList.add('dark'); 
              else document.documentElement.classList.remove('dark'); 
          }); 
          if(darkMode) document.documentElement.classList.add('dark');
      "
      @scroll.window="scrolled = (window.pageYOffset > 50)">
    
    <!-- Light Mode Background -->
    <div class="fixed inset-0 z-0 pointer-events-none transition-opacity duration-300"
         :class="darkMode ? 'opacity-0' : 'opacity-100'"
         style="
            background-image: 
                repeating-linear-gradient(0deg, rgba(75, 85, 99, 0.08), rgba(75, 85, 99, 0.08) 2px, transparent 2px, transparent 6px),
                repeating-linear-gradient(90deg, rgba(107, 114, 128, 0.06), rgba(107, 114, 128, 0.06) 2px, transparent 2px, transparent 6px),
                repeating-linear-gradient(0deg, rgba(55, 65, 81, 0.04), rgba(55, 65, 81, 0.04) 1px, transparent 1px, transparent 12px),
                repeating-linear-gradient(90deg, rgba(55, 65, 81, 0.04), rgba(55, 65, 81, 0.04) 1px, transparent 1px, transparent 12px);
         ">
    </div>

    <!-- Dark Mode Background -->
    <div class="fixed inset-0 z-0 pointer-events-none transition-opacity duration-300"
         :class="darkMode ? 'opacity-100' : 'opacity-0'"
         style="
            background: #000000;
            background-image: 
                linear-gradient(to right, rgba(75, 85, 99, 0.4) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(75, 85, 99, 0.4) 1px, transparent 1px);
            background-size: 40px 40px;
         ">
    </div>

    <div class="relative z-10">
        <x-navbar />

        <main>
            {{ $slot }}
        </main>

        <x-footer />
    </div>
</body>
</html>
