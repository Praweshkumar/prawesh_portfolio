@php
    $experiences = \App\Models\Experience::orderBy('id', 'desc')->get();
@endphp

<section id="experience" class="py-24 relative overflow-hidden transition-colors duration-300">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-16" x-data="{ show: false }" x-intersect.once="show = true">
            <div class="flex items-center justify-center gap-2 mb-4"
                 x-show="show" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                <div class="w-1.5 h-1.5 rounded-full bg-blue-500"></div>
                <span class="text-gray-500 dark:text-gray-400 font-medium text-sm tracking-widest uppercase">Experience</span>
                <div class="w-1.5 h-1.5 rounded-full bg-blue-500"></div>
            </div>
            
            <h3 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-4 transition-colors duration-300"
                x-show="show" x-transition:enter="transition ease-out duration-700 delay-100" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                Work <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-600 dark:from-blue-400 dark:to-purple-500">Experience</span>
            </h3>
            
            <p class="text-gray-600 dark:text-gray-400 text-lg transition-colors duration-300"
               x-show="show" x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                My professional journey and the impact I've created
            </p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-20" x-data="{ show: false }" x-intersect.once="show = true">
            <!-- Stat 1 -->
            <div x-show="show" x-transition:enter="transition ease-out duration-700 delay-100" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                 class="bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl p-6 flex items-center gap-4 hover:border-blue-400 dark:hover:border-blue-500/30 transition-colors shadow-sm dark:shadow-none">
                <div class="w-12 h-12 rounded-xl bg-blue-50 dark:bg-blue-500/10 flex items-center justify-center text-blue-600 dark:text-blue-400 shrink-0 border border-blue-100 dark:border-blue-500/20">
                    <i class="fa-solid fa-briefcase text-lg"></i>
                </div>
                <div>
                    <div class="text-2xl font-bold text-gray-900 dark:text-white mb-1">2+</div>
                    <div class="text-xs text-gray-500 dark:text-gray-400">Years Experience</div>
                </div>
            </div>
            
            <!-- Stat 2 -->
            <div x-show="show" x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                 class="bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl p-6 flex items-center gap-4 hover:border-purple-400 dark:hover:border-purple-500/30 transition-colors shadow-sm dark:shadow-none">
                <div class="w-12 h-12 rounded-xl bg-purple-50 dark:bg-purple-500/10 flex items-center justify-center text-purple-600 dark:text-purple-400 shrink-0 border border-purple-100 dark:border-purple-500/20">
                    <i class="fa-solid fa-code text-lg"></i>
                </div>
                <div>
                    <div class="text-2xl font-bold text-gray-900 dark:text-white mb-1">15+</div>
                    <div class="text-xs text-gray-500 dark:text-gray-400">Projects Completed</div>
                </div>
            </div>
            
            <!-- Stat 3 -->
            <div x-show="show" x-transition:enter="transition ease-out duration-700 delay-300" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                 class="bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl p-6 flex items-center gap-4 hover:border-teal-400 dark:hover:border-teal-500/30 transition-colors shadow-sm dark:shadow-none">
                <div class="w-12 h-12 rounded-xl bg-teal-50 dark:bg-teal-500/10 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0 border border-teal-100 dark:border-teal-500/20">
                    <i class="fa-solid fa-layer-group text-lg"></i>
                </div>
                <div>
                    <div class="text-2xl font-bold text-gray-900 dark:text-white mb-1">10+</div>
                    <div class="text-xs text-gray-500 dark:text-gray-400">Technologies</div>
                </div>
            </div>
            
            <!-- Stat 4 -->
            <div x-show="show" x-transition:enter="transition ease-out duration-700 delay-400" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0"
                 class="bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl p-6 flex items-center gap-4 hover:border-orange-400 dark:hover:border-orange-500/30 transition-colors shadow-sm dark:shadow-none">
                <div class="w-12 h-12 rounded-xl bg-orange-50 dark:bg-orange-500/10 flex items-center justify-center text-orange-600 dark:text-orange-400 shrink-0 border border-orange-100 dark:border-orange-500/20">
                    <i class="fa-solid fa-user-group text-lg"></i>
                </div>
                <div>
                    <div class="text-2xl font-bold text-gray-900 dark:text-white mb-1">100%</div>
                    <div class="text-xs text-gray-500 dark:text-gray-400">Commitment</div>
                </div>
            </div>
        </div>

        <!-- Timeline -->
        <div class="relative">
            <!-- Vertical Line -->
            <div class="absolute left-[8.5rem] md:left-40 top-0 bottom-0 w-px bg-gradient-to-b from-blue-300 via-purple-300 to-transparent dark:from-blue-500/50 dark:via-purple-500/50 hidden sm:block"></div>

            @foreach($experiences as $index => $exp)
            <!-- Job {{ $index + 1 }} -->
            <div class="relative flex flex-col sm:flex-row items-start gap-6 sm:gap-12 mb-12" x-data="{ show: false }" x-intersect.once="show = true">
                <!-- Date column -->
                <div class="sm:w-32 shrink-0 sm:text-right pt-4 relative sm:static"
                     x-show="show" x-transition:enter="transition ease-out duration-700" x-transition:enter-start="opacity-0 -translate-x-8" x-transition:enter-end="opacity-100 translate-x-0">
                    <div class="text-{{ $exp->theme_color }}-600 dark:text-{{ $exp->theme_color }}-400 font-bold text-sm tracking-wide">{{ $exp->start_date }}</div>
                    <div class="text-gray-900 dark:text-white font-bold text-xs mt-1 tracking-wide">{{ $exp->end_date ?? 'PRESENT' }}</div>
                </div>
                
                <!-- Dot -->
                <div class="absolute left-[8.5rem] md:left-40 transform -translate-x-1/2 mt-5 w-5 h-5 rounded-full bg-white dark:bg-[#0A0F1C] border-2 border-{{ $exp->theme_color }}-500 shadow-[0_0_10px_rgba(59,130,246,0.2)] dark:shadow-[0_0_10px_rgba(59,130,246,0.5)] z-10 hidden sm:flex items-center justify-center transition-colors"
                     x-show="show" x-transition:enter="transition ease-out duration-500 delay-200" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100">
                     <div class="w-2 h-2 rounded-full bg-{{ $exp->theme_color }}-500 dark:bg-{{ $exp->theme_color }}-400"></div>
                </div>

                <!-- Card -->
                <div class="flex-grow bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl p-6 sm:p-8 hover:border-{{ $exp->theme_color }}-300 dark:hover:border-{{ $exp->theme_color }}-500/30 transition-colors group shadow-lg shadow-gray-200/50 dark:shadow-none"
                     x-show="show" x-transition:enter="transition ease-out duration-700 delay-300" x-transition:enter-start="opacity-0 translate-x-12" x-transition:enter-end="opacity-100 translate-x-0">
                    
                    <div class="flex items-start justify-between mb-6">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-gray-50 dark:bg-white rounded-xl flex items-center justify-center p-2 shadow-inner border border-gray-100 dark:border-none">
                                @if($exp->logo_path)
                                    <img src="{{ asset('storage/' . $exp->logo_path) }}" onerror="this.src='{{ asset($exp->logo_path) }}'" alt="{{ $exp->company }}" class="w-full h-full object-contain mix-blend-multiply dark:mix-blend-normal">
                                @else
                                    <span class="text-2xl font-bold text-{{ $exp->theme_color }}-600">{{ substr($exp->company, 0, 1) }}</span>
                                @endif
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-1 group-hover:text-{{ $exp->theme_color }}-600 dark:group-hover:text-{{ $exp->theme_color }}-400 transition-colors">{{ $exp->company }}</h4>
                                <div class="text-{{ $exp->theme_color }}-600 dark:text-{{ $exp->theme_color }}-400 font-medium mb-3">{{ $exp->role }}</div>
                                <div class="flex flex-wrap gap-3 text-xs text-gray-600 dark:text-gray-400">
                                    <span class="flex items-center gap-1.5 bg-gray-100 dark:bg-white/5 px-3 py-1.5 rounded-md"><i class="fa-solid fa-briefcase"></i> {{ $exp->type ?? 'Full-time' }}</span>
                                    <span class="flex items-center gap-1.5 bg-gray-100 dark:bg-white/5 px-3 py-1.5 rounded-md"><i class="fa-solid fa-location-dot"></i> {{ $exp->location ?? 'Remote' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="text-gray-600 dark:text-gray-400 text-sm leading-[1.8] mb-6">
                        {{ $exp->description }}
                    </p>

                    <!-- Badges -->
                    <div class="flex flex-wrap gap-2 mb-8">
                        @if($exp->technologies)
                            @foreach($exp->technologies as $tag)
                            <span class="bg-gray-50 text-gray-600 border border-gray-200 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-700 text-xs font-medium px-3 py-1.5 rounded-md transition-colors hover:bg-{{ $exp->theme_color }}-50 hover:text-{{ $exp->theme_color }}-600 dark:hover:bg-{{ $exp->theme_color }}-500/10 dark:hover:text-{{ $exp->theme_color }}-400">{{ $tag }}</span>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            
            <!-- Bottom Indicator -->
            <div class="flex justify-center mt-16 pb-8">
                <div class="bg-white dark:bg-[#111827]/80 backdrop-blur-md border border-blue-200 dark:border-blue-500/30 px-6 py-3 rounded-full text-blue-600 dark:text-blue-400 text-sm font-medium flex items-center gap-2 shadow-md shadow-blue-100 dark:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-colors">
                    <i class="fa-solid fa-sparkles"></i> Continuing to learn, build and create impact.
                </div>
            </div>

        </div>
    </div>
</section>
