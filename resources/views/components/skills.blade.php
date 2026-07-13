<section id="skills" class="py-32 relative overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="text-center mb-24" x-data="{ show: false }" x-intersect.once="show = true">
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white relative inline-block mt-4"
                x-show="show" x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                Skills & Technologies
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-gradient-to-r from-[#3B82F6] to-[#EC4899] rounded-full"></div>
            </h3>
        </div>

@php
$skills = [
    ['name' => 'HTML5', 'icon' => 'fa-brands fa-html5', 'color' => 'text-[#F16529]'],
    ['name' => 'CSS3', 'icon' => 'fa-brands fa-css3-alt', 'color' => 'text-[#2965F1]'],
    ['name' => 'JavaScript', 'icon' => 'fa-brands fa-js', 'color' => 'text-[#F7DF1E]'],
    ['name' => 'TypeScript', 'icon' => 'fa-solid fa-code', 'color' => 'text-[#3178C6]'],

    ['name' => 'React.js', 'icon' => 'fa-brands fa-react', 'color' => 'text-[#61DAFB]'],
    ['name' => 'Next.js', 'icon' => 'fa-solid fa-n', 'color' => 'text-gray-900 dark:text-white'],
    ['name' => 'Redux', 'icon' => 'fa-solid fa-layer-group', 'color' => 'text-[#764ABC]'],
    ['name' => 'React Native', 'icon' => 'fa-brands fa-react', 'color' => 'text-[#61DAFB]'],

    ['name' => 'Node.js', 'icon' => 'fa-brands fa-node-js', 'color' => 'text-[#68A063]'],
    ['name' => 'Express.js', 'icon' => 'fa-solid fa-server', 'color' => 'text-gray-700 dark:text-gray-300'],

    ['name' => 'PHP', 'icon' => 'fa-brands fa-php', 'color' => 'text-[#777BB4]'],
    ['name' => 'Laravel', 'icon' => 'fa-brands fa-laravel', 'color' => 'text-[#FF2D20]'],

    ['name' => 'MongoDB', 'icon' => 'fa-solid fa-leaf', 'color' => 'text-[#47A248]'],
    ['name' => 'MySQL', 'icon' => 'fa-solid fa-database', 'color' => 'text-[#00758F]'],

    ['name' => 'Tailwind CSS', 'icon' => 'fa-solid fa-wind', 'color' => 'text-[#38B2AC]'],
    ['name' => 'Bootstrap', 'icon' => 'fa-brands fa-bootstrap', 'color' => 'text-[#7952B3]'],

    ['name' => 'Git', 'icon' => 'fa-brands fa-git-alt', 'color' => 'text-[#F05032]'],
    ['name' => 'GitHub', 'icon' => 'fa-brands fa-github', 'color' => 'text-gray-900 dark:text-white'],

    ['name' => 'AWS', 'icon' => 'fa-brands fa-aws', 'color' => 'text-[#FF9900]'],
    ['name' => 'Postman', 'icon' => 'fa-solid fa-paper-plane', 'color' => 'text-[#FF6C37]'],
    ['name' => 'VS Code', 'icon' => 'fa-solid fa-code', 'color' => 'text-[#007ACC]'],
    ['name' => 'Figma', 'icon' => 'fa-brands fa-figma', 'color' => 'text-[#F24E1E]'],
];
@endphp

        <div class="flex flex-wrap justify-center gap-10 md:gap-16 lg:gap-20" x-data="{ showCards: false }" x-intersect.once="showCards = true">
            @foreach($skills as $index => $skill)
                @php
                    // Create a slightly irregular vertical offset to mimic the scattered layout
                    $offsetClass = '';
                    if ($index % 3 == 1) $offsetClass = 'translate-y-8';
                    if ($index % 3 == 2) $offsetClass = '-translate-y-6';
                @endphp
                
                <div class="group cursor-default relative {{ $offsetClass }}" 
                     x-show="showCards" 
                     x-transition:enter="transition ease-out duration-700"
                     x-transition:enter-start="opacity-0 scale-50"
                     x-transition:enter-end="opacity-100 scale-100"
                     style="transition-delay: {{ ($index % 5) * 100 }}ms;">
                    
                    <div class="w-20 h-20 rounded-2xl bg-white/80 dark:bg-[#0f172a]/60 backdrop-blur-xl border border-gray-200 dark:border-white/10 flex items-center justify-center hover:-translate-y-2 hover:border-gray-400 dark:hover:border-white/30 hover:shadow-[0_0_20px_rgba(255,255,255,0.1)] transition-all duration-300 relative z-10">
                        <i class="{{ $skill['icon'] }} {{ $skill['color'] }} text-4xl group-hover:scale-110 transition-transform duration-300 drop-shadow-md"></i>
                    </div>
                    
                    <!-- Tooltip -->
                    <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity text-xs font-semibold text-gray-600 dark:text-[#94A3B8] whitespace-nowrap bg-white dark:bg-[#0f172a] px-3 py-1 rounded-md border border-gray-200 dark:border-white/10 shadow-sm">
                        {{ $skill['name'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
