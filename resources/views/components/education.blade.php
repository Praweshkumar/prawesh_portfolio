<section id="education" class="py-24 relative overflow-hidden transition-colors duration-300">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-16" x-data="{ show: false }" x-intersect.once="show = true">
            <div class="flex items-center justify-center gap-2 mb-4"
                 x-show="show" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="w-1.5 h-1.5 rounded-full bg-blue-500"></div>
                <span class="text-gray-500 dark:text-gray-400 font-medium text-sm tracking-widest uppercase">Education</span>
                <div class="w-1.5 h-1.5 rounded-full bg-blue-500"></div>
            </div>
            
            <h3 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300"
                x-show="show" x-transition:enter="transition ease-out duration-700 delay-100" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                My <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-600 dark:from-blue-400 dark:to-purple-500">Education</span>
            </h3>
            
            <p class="text-gray-600 dark:text-gray-400 text-lg transition-colors duration-300"
               x-show="show" x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                My academic journey that built the foundation of my knowledge.
            </p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-20" x-data="{ show: false }" x-intersect.once="show = true">
            <!-- Stat 1 -->
            <div x-show="show" x-transition:enter="transition ease-out duration-700 delay-100" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                 class="bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl p-6 flex items-center gap-4 hover:border-purple-400 dark:hover:border-purple-500/30 transition-colors shadow-sm dark:shadow-none">
                <div class="w-12 h-12 rounded-full bg-purple-50 dark:bg-purple-500/10 flex items-center justify-center text-purple-600 dark:text-purple-400 shrink-0 border border-purple-100 dark:border-purple-500/20">
                    <i class="fa-solid fa-graduation-cap text-lg"></i>
                </div>
                <div>
                    <div class="text-2xl font-bold text-gray-900 dark:text-white mb-1">2+</div>
                    <div class="text-xs text-gray-500 dark:text-gray-400">Degrees</div>
                </div>
            </div>
            
            <!-- Stat 2 -->
            <div x-show="show" x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                 class="bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl p-6 flex items-center gap-4 hover:border-blue-400 dark:hover:border-blue-500/30 transition-colors shadow-sm dark:shadow-none">
                <div class="w-12 h-12 rounded-full bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-blue-400 shrink-0 border border-blue-100 dark:border-blue-500/20">
                    <i class="fa-regular fa-calendar text-lg"></i>
                </div>
                <div>
                    <div class="text-2xl font-bold text-gray-900 dark:text-white mb-1">5+</div>
                    <div class="text-xs text-gray-500 dark:text-gray-400">Years of Study</div>
                </div>
            </div>
            
            <!-- Stat 3 -->
            <div x-show="show" x-transition:enter="transition ease-out duration-700 delay-300" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                 class="bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl p-6 flex items-center gap-4 hover:border-teal-400 dark:hover:border-teal-500/30 transition-colors shadow-sm dark:shadow-none">
                <div class="w-12 h-12 rounded-full bg-teal-50 dark:bg-teal-500/10 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0 border border-teal-100 dark:border-teal-500/20">
                    <i class="fa-solid fa-trophy text-lg"></i>
                </div>
                <div>
                    <div class="text-2xl font-bold text-gray-900 dark:text-white mb-1">7.2 CGPA</div>
                    <div class="text-xs text-gray-500 dark:text-gray-400">BCA Score</div>
                </div>
            </div>
            
            <!-- Stat 4 -->
            <div x-show="show" x-transition:enter="transition ease-out duration-700 delay-400" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                 class="bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl p-6 flex items-center gap-4 hover:border-orange-400 dark:hover:border-orange-500/30 transition-colors shadow-sm dark:shadow-none">
                <div class="w-12 h-12 rounded-full bg-orange-50 dark:bg-orange-500/10 flex items-center justify-center text-orange-600 dark:text-orange-400 shrink-0 border border-orange-100 dark:border-orange-500/20">
                    <i class="fa-solid fa-book-open text-lg"></i>
                </div>
                <div>
                    <div class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mb-1">Strong</div>
                    <div class="text-xs text-gray-500 dark:text-gray-400">Academic Background</div>
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div class="relative">
            <!-- Vertical Line -->
            <div class="absolute left-[8.5rem] md:left-40 top-0 bottom-0 w-px bg-gradient-to-b from-blue-300 via-purple-300 to-transparent dark:from-blue-500/50 dark:via-purple-500/50 hidden sm:block"></div>

            <!-- Education 1: BCA -->
            <div class="relative flex flex-col sm:flex-row items-start gap-6 sm:gap-12 mb-12" x-data="{ show: false }" x-intersect.once="show = true">
                <!-- Date column -->
                <div class="sm:w-32 shrink-0 sm:text-right pt-4 relative sm:static"
                     x-show="show" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 -translate-x-8" x-transition:enter-end="opacity-100 translate-x-0">
                    
                    <div class="flex flex-col items-center sm:items-end mb-4 sm:mb-0">
                        <div class="w-12 h-12 rounded-full bg-white dark:bg-[#0A0F1C] border border-blue-100 dark:border-blue-900 shadow-sm flex items-center justify-center text-blue-600 dark:text-blue-400 mb-3 transition-colors">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="text-blue-600 dark:text-blue-400 font-bold text-sm tracking-wide transition-colors">2023 - 2026</div>
                        <div class="text-gray-500 dark:text-gray-400 font-medium text-xs mt-1 transition-colors">(Expected)</div>
                    </div>
                </div>
                
                <!-- Dot -->
                <div class="absolute left-[8.5rem] md:left-40 transform -translate-x-1/2 mt-[2.5rem] w-3 h-3 rounded-full bg-blue-500 shadow-[0_0_10px_rgba(59,130,246,0.5)] z-10 hidden sm:block transition-colors"
                     x-show="show" x-transition:enter="transition ease-out duration-500 delay-200" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100">
                </div>

                <!-- Card -->
                <div class="flex-grow bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 border-l-4 border-l-blue-500 rounded-2xl p-6 sm:p-8 hover:shadow-xl transition-all duration-300 group shadow-md shadow-gray-200/50 dark:shadow-none"
                     x-show="show" x-transition:enter="transition ease-out duration-700 delay-300" x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0">
                    
                    <div class="flex flex-col md:flex-row gap-6 md:gap-8">
                        <!-- Logo Placeholder -->
                        <div class="w-24 h-24 sm:w-32 sm:h-32 bg-gray-50 dark:bg-gray-800 rounded-2xl flex flex-col items-center justify-center p-4 shadow-inner border border-gray-100 dark:border-gray-700 shrink-0 transition-colors">
                            <i class="fa-solid fa-university text-4xl text-gray-400 dark:text-gray-500 mb-2 transition-colors"></i>
                            <span class="text-xs font-bold text-gray-400 dark:text-gray-500 text-center mt-2 transition-colors">DAV College</span>
                        </div>
                        
                        <div class="flex-grow">
                            <!-- Header -->
                            <div class="flex flex-wrap items-start justify-between gap-4 mb-2">
                                <h4 class="text-xl sm:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">Bachelor of Computer Applications (BCA)</h4>
                                <span class="bg-blue-50 text-blue-600 border border-blue-100 dark:bg-blue-500/10 dark:text-blue-400 dark:border-blue-500/20 text-xs font-medium px-3 py-1 rounded-full whitespace-nowrap transition-colors">UG Degree</span>
                            </div>
                            
                            <!-- Subtitle -->
                            <div class="text-blue-600 dark:text-blue-400 font-medium mb-1 transition-colors">DAV Centenary College</div>
                            <div class="flex items-center gap-1.5 text-gray-500 dark:text-gray-400 text-sm mb-6 transition-colors">
                                <i class="fa-solid fa-location-dot"></i> MDU Rohtak, Haryana
                            </div>
                            
                            <!-- Divider Info -->
                            <div class="flex flex-wrap items-center gap-4 sm:gap-8 text-sm text-gray-600 dark:text-gray-400 py-3 border-y border-gray-100 dark:border-gray-800/60 mb-6 transition-colors">
                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-calendar text-blue-500 transition-colors"></i>
                                    <span>2023 - 2026 (Expected)</span>
                                </div>
                                <div class="hidden sm:block w-px h-4 bg-gray-300 dark:bg-gray-700 transition-colors"></div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-star text-blue-500 transition-colors"></i>
                                    <span>CGPA: 7.2 / 10.0</span>
                                </div>
                            </div>
                            
                            <!-- Coursework -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3 transition-colors">Relevant Coursework</div>
                                <div class="flex flex-wrap gap-2 mb-6">
                                    <span class="bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-400 text-xs font-medium px-3 py-1.5 rounded-md border border-blue-100 dark:border-blue-500/20 transition-colors">Data Structures</span>
                                    <span class="bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-400 text-xs font-medium px-3 py-1.5 rounded-md border border-blue-100 dark:border-blue-500/20 transition-colors">DBMS</span>
                                    <span class="bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-400 text-xs font-medium px-3 py-1.5 rounded-md border border-blue-100 dark:border-blue-500/20 transition-colors">Operating System</span>
                                    <span class="bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-400 text-xs font-medium px-3 py-1.5 rounded-md border border-blue-100 dark:border-blue-500/20 transition-colors">Web Development</span>
                                    <span class="bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-400 text-xs font-medium px-3 py-1.5 rounded-md border border-blue-100 dark:border-blue-500/20 transition-colors">OOPs</span>
                                    <span class="bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-400 text-xs font-medium px-3 py-1.5 rounded-md border border-blue-100 dark:border-blue-500/20 transition-colors">Computer Networks</span>
                                    <span class="bg-blue-50 text-blue-600 dark:bg-blue-500/10 dark:text-blue-400 text-xs font-medium px-3 py-1.5 rounded-md border border-blue-100 dark:border-blue-500/20 transition-colors">Software Engineering</span>
                                </div>
                            </div>
                            
                            <!-- Callout -->
                            <div class="bg-blue-50 dark:bg-blue-500/10 rounded-xl p-4 flex items-start gap-3 border border-blue-100 dark:border-blue-500/20 transition-colors">
                                <i class="fa-solid fa-sparkles text-blue-500 mt-0.5 shrink-0 transition-colors"></i>
                                <p class="text-sm text-gray-700 dark:text-gray-300 leading-relaxed transition-colors">
                                    Focused on building a strong foundation in software development, problem solving, and modern web technologies.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Education 2: 12th -->
            <div class="relative flex flex-col sm:flex-row items-start gap-6 sm:gap-12 mb-12" x-data="{ show: false }" x-intersect.once="show = true">
                <!-- Date column -->
                <div class="sm:w-32 shrink-0 sm:text-right pt-4 relative sm:static"
                     x-show="show" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 -translate-x-8" x-transition:enter-end="opacity-100 translate-x-0">
                    
                    <div class="flex flex-col items-center sm:items-end mb-4 sm:mb-0">
                        <div class="w-12 h-12 rounded-full bg-white dark:bg-[#0A0F1C] border border-purple-100 dark:border-purple-900 shadow-sm flex items-center justify-center text-purple-600 dark:text-purple-400 mb-3 transition-colors">
                            <i class="fa-solid fa-school"></i>
                        </div>
                        <div class="text-purple-600 dark:text-purple-400 font-bold text-sm tracking-wide transition-colors">2020 - 2021</div>
                        <div class="text-gray-500 dark:text-gray-400 font-medium text-xs mt-1 transition-colors">(Completed)</div>
                    </div>
                </div>
                
                <!-- Dot -->
                <div class="absolute left-[8.5rem] md:left-40 transform -translate-x-1/2 mt-[2.5rem] w-3 h-3 rounded-full bg-purple-500 shadow-[0_0_10px_rgba(168,85,247,0.5)] z-10 hidden sm:block transition-colors"
                     x-show="show" x-transition:enter="transition ease-out duration-500 delay-200" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100">
                </div>

                <!-- Card -->
                <div class="flex-grow bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 border-l-4 border-l-purple-500 rounded-2xl p-6 sm:p-8 hover:shadow-xl transition-all duration-300 group shadow-md shadow-gray-200/50 dark:shadow-none"
                     x-show="show" x-transition:enter="transition ease-out duration-700 delay-300" x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0">
                    
                    <div class="flex flex-col md:flex-row gap-6 md:gap-8">
                        <!-- Logo Placeholder -->
                        <div class="w-24 h-24 sm:w-32 sm:h-32 bg-gray-50 dark:bg-gray-800 rounded-2xl flex flex-col items-center justify-center p-4 shadow-inner border border-gray-100 dark:border-gray-700 shrink-0 transition-colors">
                            <i class="fa-solid fa-book text-4xl text-gray-400 dark:text-gray-500 mb-2 transition-colors"></i>
                            <span class="text-xs font-bold text-gray-400 dark:text-gray-500 text-center mt-2 transition-colors">CBSE Board</span>
                        </div>
                        
                        <div class="flex-grow">
                            <!-- Header -->
                            <div class="flex flex-wrap items-start justify-between gap-4 mb-2">
                                <h4 class="text-xl sm:text-2xl font-bold text-gray-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">Senior Secondary (XII)</h4>
                                <span class="bg-purple-50 text-purple-600 border border-purple-100 dark:bg-purple-500/10 dark:text-purple-400 dark:border-purple-500/20 text-xs font-medium px-3 py-1 rounded-full whitespace-nowrap transition-colors">Higher Secondary</span>
                            </div>
                            
                            <!-- Subtitle -->
                            <div class="text-purple-600 dark:text-purple-400 font-medium mb-1 transition-colors">CBSE Board</div>
                            <div class="flex items-center gap-1.5 text-gray-500 dark:text-gray-400 text-sm mb-6 transition-colors">
                                <i class="fa-solid fa-location-dot"></i> Faridabad, Haryana
                            </div>
                            
                            <!-- Divider Info -->
                            <div class="flex flex-wrap items-center gap-4 sm:gap-8 text-sm text-gray-600 dark:text-gray-400 py-3 border-y border-gray-100 dark:border-gray-800/60 mb-6 transition-colors">
                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-calendar text-purple-500 transition-colors"></i>
                                    <span>2020 - 2021</span>
                                </div>
                                <div class="hidden sm:block w-px h-4 bg-gray-300 dark:bg-gray-700 transition-colors"></div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-regular fa-star text-purple-500 transition-colors"></i>
                                    <span>Percentage: 72%</span>
                                </div>
                            </div>
                            
                            <!-- Coursework -->
                            <div>
                                <div class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-3 transition-colors">Subjects</div>
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-purple-50 text-purple-600 dark:bg-purple-500/10 dark:text-purple-400 text-xs font-medium px-3 py-1.5 rounded-md border border-purple-100 dark:border-purple-500/20 transition-colors">Physics</span>
                                    <span class="bg-purple-50 text-purple-600 dark:bg-purple-500/10 dark:text-purple-400 text-xs font-medium px-3 py-1.5 rounded-md border border-purple-100 dark:border-purple-500/20 transition-colors">Chemistry</span>
                                    <span class="bg-purple-50 text-purple-600 dark:bg-purple-500/10 dark:text-purple-400 text-xs font-medium px-3 py-1.5 rounded-md border border-purple-100 dark:border-purple-500/20 transition-colors">Mathematics</span>
                                    <span class="bg-purple-50 text-purple-600 dark:bg-purple-500/10 dark:text-purple-400 text-xs font-medium px-3 py-1.5 rounded-md border border-purple-100 dark:border-purple-500/20 transition-colors">Computer Science</span>
                                    <span class="bg-purple-50 text-purple-600 dark:bg-purple-500/10 dark:text-purple-400 text-xs font-medium px-3 py-1.5 rounded-md border border-purple-100 dark:border-purple-500/20 transition-colors">English</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom CTA -->
            <div class="mt-16 sm:ml-40" x-data="{ show: false }" x-intersect.once="show = true">
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 border border-blue-100 dark:border-blue-800/50 rounded-2xl p-6 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-8 shadow-sm transition-colors"
                     x-show="show" x-transition:enter="transition ease-out duration-700 delay-500" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0">
                    <div class="flex items-start gap-6">
                        <div class="w-14 h-14 rounded-2xl bg-blue-600 flex items-center justify-center text-white shrink-0 shadow-lg shadow-blue-500/30 transition-colors">
                            <i class="fa-solid fa-bullseye text-2xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2 transition-colors">Always Learning, Always Growing</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed max-w-xl transition-colors">
                                Education is not just about degrees, it's about continuous learning and applying knowledge to create impactful solutions.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Decorative Element -->
                    <div class="hidden md:flex shrink-0 w-32 h-32 items-center justify-center relative">
                        <div class="absolute inset-0 bg-blue-500/10 rounded-full blur-2xl transition-colors"></div>
                        <i class="fa-solid fa-book-open-reader text-6xl text-blue-500/50 dark:text-blue-400/50 relative z-10 transform -rotate-12 group-hover:rotate-0 transition-all duration-500"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
