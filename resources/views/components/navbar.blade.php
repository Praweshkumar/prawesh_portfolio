<nav class="fixed top-6 left-1/2 -translate-x-1/2 z-50 w-[95%] max-w-max" x-data="{ mobileMenuOpen: false }">
    <div class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-xl border border-gray-200 dark:border-gray-700 shadow-[0_8px_30px_rgb(0,0,0,0.08)] dark:shadow-[0_8px_30px_rgb(0,0,0,0.4)] rounded-full px-4 sm:px-6 py-3 flex items-center justify-between gap-4">
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-1 sm:space-x-2">
            <a href="#home" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800">Home</a>
            <a href="#about" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800">About</a>
            <a href="#skills" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800">Skills</a>
            <a href="#experience" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800">Experience</a>
            <a href="#education" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800">Education</a>
            <a href="#projects" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800">Projects</a>
            <a href="#contact" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-3 py-2 rounded-full text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800 whitespace-nowrap">Contact Me</a>
        </div>

        <!-- Mobile Branding -->
        <div class="md:hidden flex items-center pl-2">
            <a href="#home" class="text-gray-900 dark:text-white font-bold tracking-wider">PRAWESH</a>
        </div>

        <!-- Right Side: Dark Mode & Hamburger -->
        <div class="flex items-center space-x-1">
            <!-- Dark Mode Toggle -->
            <button @click="darkMode = !darkMode" class="p-2 w-10 h-10 flex items-center justify-center rounded-full text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                <i class="fa-solid fa-moon" x-show="!darkMode"></i>
                <i class="fa-solid fa-sun" x-show="darkMode" x-cloak></i>
            </button>
            
            <!-- Mobile Menu Toggle -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 w-10 h-10 flex items-center justify-center rounded-full text-gray-500 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline-none hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                <i class="fa-solid fa-bars" x-show="!mobileMenuOpen"></i>
                <i class="fa-solid fa-xmark" x-show="mobileMenuOpen" x-cloak></i>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div x-show="mobileMenuOpen" 
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4 scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0 scale-100"
         x-transition:leave-end="opacity-0 -translate-y-4 scale-95"
         @click.outside="mobileMenuOpen = false"
         class="md:hidden absolute top-full left-0 right-0 mt-3 bg-white/95 dark:bg-gray-900/95 backdrop-blur-xl border border-gray-200 dark:border-gray-700 shadow-2xl rounded-2xl p-3 flex flex-col space-y-1 z-50 origin-top">
        
        <a @click="mobileMenuOpen = false" href="#home" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4 py-3 rounded-xl text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800 text-center">Home</a>
        <a @click="mobileMenuOpen = false" href="#about" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4 py-3 rounded-xl text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800 text-center">About</a>
        <a @click="mobileMenuOpen = false" href="#skills" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4 py-3 rounded-xl text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800 text-center">Skills</a>
        <a @click="mobileMenuOpen = false" href="#experience" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4 py-3 rounded-xl text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800 text-center">Experience</a>
        <a @click="mobileMenuOpen = false" href="#education" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4 py-3 rounded-xl text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800 text-center">Education</a>
        <a @click="mobileMenuOpen = false" href="#projects" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4 py-3 rounded-xl text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800 text-center">Projects</a>
        <a @click="mobileMenuOpen = false" href="#contact" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white px-4 py-3 rounded-xl text-sm font-medium transition-colors hover:bg-gray-100 dark:hover:bg-gray-800 text-center">Contact Me</a>
    </div>
</nav>
