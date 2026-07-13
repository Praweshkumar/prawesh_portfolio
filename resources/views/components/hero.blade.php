<section id="home" class="relative min-h-screen flex flex-col justify-center pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <div class="order-2 lg:order-1"
                 x-data="{ show: false }" x-init="setTimeout(() => show = true, 100)">
                <div x-show="show" 
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 translate-y-12"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="space-y-6">
                     
                    <div class="inline-flex items-center px-4 py-2 rounded-full border border-gray-200 dark:border-white/10 bg-white/50 dark:bg-[#0f172a]/50 backdrop-blur-md text-gray-500 dark:text-[#94A3B8] font-medium text-sm mb-6 shadow-sm">
                        <span class="mr-2">👋</span> Welcome to my portfolio
                    </div>
                    
                    <!-- Soft Radial Glow Behind Heading -->
                    <div class="absolute -top-20 -left-10 w-72 h-72 bg-blue-500/20 rounded-full blur-[100px] pointer-events-none"></div>
                    <div class="absolute top-0 right-10 w-72 h-72 bg-purple-500/20 rounded-full blur-[100px] pointer-events-none"></div>

                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-[1.1] tracking-tight text-gray-900 dark:text-white drop-shadow-md relative z-10">
                        I am <br class="md:hidden">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#3B82F6] via-[#8B5CF6] to-[#EC4899]">Prawesh</span>,<br>
                        a Full Stack Developer.
                    </h1>
                    
                    <p class="text-gray-600 dark:text-[#E2E8F0] text-lg max-w-xl leading-[1.8] font-medium mt-8 relative z-10">
                        I build exceptional and accessible digital experiences for the web. Transforming complex problems into elegant, modern, and scalable solutions.
                    </p>
                    
                    <div class="pt-10 relative z-10">
                        <a href="https://drive.google.com/file/d/1Ig-0ADk-4MdxbcOvTikTIb7H5DL5ANjy/view?usp=drivesdk" target="_blank" class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold hover:shadow-[0_0_30px_rgba(59,130,246,0.5)] hover:scale-105 transition-all duration-300">
                            Download My CV <i class="fa-solid fa-download"></i>
                        </a>
                    </div>
                    
                    <div class="flex gap-6 pt-10">
                        <a href="https://github.com/Praweshkumar" class="text-gray-400 dark:text-[#94A3B8] hover:text-gray-900 dark:hover:text-white transition-colors"><i class="fa-brands fa-github text-3xl"></i></a>
                        <a href="https://www.linkedin.com/in/prawesh-kumar-838674226/" class="text-gray-400 dark:text-[#94A3B8] hover:text-[#3B82F6] dark:hover:text-[#3B82F6] transition-colors"><i class="fa-brands fa-linkedin text-3xl"></i></a>
                        <!-- <a href="#" class="text-gray-400 dark:text-[#94A3B8] hover:text-[#EC4899] dark:hover:text-[#EC4899] transition-colors"><i class="fa-brands fa-twitter text-3xl"></i></a> -->
                    </div>
                </div>
            </div>
            <div class="order-1 lg:order-2 flex justify-center lg:justify-end"
                 x-data="{ show: false }" x-init="setTimeout(() => show = true, 400)">
                <div x-show="show"
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 scale-90 translate-x-12"
                     x-transition:enter-end="opacity-100 scale-100 translate-x-0"
                     class="relative w-full max-w-md">
                     
                    <!-- Large Profile Image Box -->
                    <div class="w-full aspect-square bg-brand-primary rounded-[2.5rem] flex items-center justify-center relative shadow-2xl overflow-hidden">
                        <img src="{{ asset('images/profile-new.jpg') }}" alt="Prawesh" class="w-full h-full object-cover">
                        
                        <!-- Floating Tech Badges -->
                        <div class="absolute -left-6 top-16 bg-white/60 dark:bg-gray-800/60 backdrop-blur-md border border-white/40 dark:border-gray-700/40 px-4 py-2 rounded-xl flex items-center gap-2 shadow-lg">
                            <i class="fa-brands fa-laravel text-red-500"></i> <span class="text-sm font-medium text-gray-800 dark:text-gray-200">Laravel</span>
                        </div>
                        <div class="absolute -right-6 bottom-24 bg-white/60 dark:bg-gray-800/60 backdrop-blur-md border border-white/40 dark:border-gray-700/40 px-4 py-2 rounded-xl flex items-center gap-2 shadow-lg">
                            <i class="fa-brands fa-js text-yellow-500"></i> <span class="text-sm font-medium text-gray-800 dark:text-gray-200">JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</section>
