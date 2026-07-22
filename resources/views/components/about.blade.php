@php
    $about_img = \App\Models\Setting::where('key', 'about_image')->value('value');
    $about_img_url = $about_img ? asset('storage/' . $about_img) : asset('images/prawesh_aboutt.png');
    
    $about_text_main = \App\Models\Setting::where('key', 'about_text_main')->value('value') ?? '<p>Hello! I\'m <strong>Prawesh Kumar</strong>, a passionate Full Stack Developer with experience in building modern web and mobile applications. I specialize in PHP, Laravel, React.js, Next.js, React Native, Node.js, MySQL, and MongoDB, creating scalable and user-friendly digital solutions.</p>
<p>I completed my Bachelor\'s degree in <strong>Bachelor of Computer Applications (BCA)</strong> from <strong>Maharshi Dayanand University</strong>. During my academic journey and professional experience, I developed strong problem-solving skills and gained hands-on experience in developing responsive websites, REST APIs, admin dashboards, and cross-platform mobile applications.</p>
<p>Currently, I focus on writing clean, maintainable code and continuously learning new technologies to build high-performance applications that deliver real business value.</p>';
    
    $about_degree_title = \App\Models\Setting::where('key', 'about_degree_title')->value('value') ?? 'Bachelor of Computer Applications (BCA)';
    $about_university = \App\Models\Setting::where('key', 'about_university')->value('value') ?? 'Maharshi Dayanand University';
    $about_quote = \App\Models\Setting::where('key', 'about_quote_text')->value('value') ?? 'Passionate about building scalable web and mobile applications with modern technologies and delivering clean, efficient, and user-focused solutions.';
@endphp

<section id="about" class="py-24 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center mb-16" x-data="{ show: false }" x-intersect.once="show = true">
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white relative inline-block mt-4"
                x-show="show" x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                About Me
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-gradient-to-r from-[#3B82F6] to-[#EC4899] rounded-full"></div>
            </h3>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start">
            
            <div class="relative" x-data="{ show: false }" x-intersect.once="show = true">
                <div x-show="show" 
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 -translate-x-12"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     class="relative rounded-3xl overflow-hidden shadow-sm">
                    
                    <img src="{{ $about_img_url }}" alt="Prawesh Profile" class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700">
                
                </div>
            </div>
            
            <div class="" x-data="{ show: false }" x-intersect.once="show = true">
                <div x-show="show" 
                     x-transition:enter="transition ease-out duration-1000 delay-300"
                     x-transition:enter-start="opacity-0 translate-x-12"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     class="pt-8">
                     
                    <!-- Premium Minimal Code UI -->
                    <!-- Safelist for Tailwind JIT: text-pink-600 dark:text-pink-400 text-gray-400 dark:text-gray-500 from-blue-600 to-cyan-600 dark:from-cyan-400 dark:to-blue-400 text-yellow-600 dark:text-yellow-400 bg-gray-900 bg-gray-800 bg-gray-950 text-gray-700 dark:text-gray-200 bg-gray-100 bg-white -->
                    <div class="relative w-full rounded-2xl shadow-xl dark:shadow-[0_20px_50px_rgba(0,0,0,0.5)] mb-12 group z-10 border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 overflow-hidden transition-colors duration-300">
                        
                        <!-- Subtle Glow behind (Only visible in dark mode for contrast) -->
                        <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-pink-500 rounded-2xl blur opacity-0 dark:opacity-20 group-hover:dark:opacity-40 transition duration-1000 -z-10"></div>
                        
                        <div class="relative bg-gray-50 dark:bg-gray-900 rounded-2xl overflow-hidden transition-colors duration-300">
                            <!-- Minimal Header -->
                            <div class="flex items-center px-5 h-12 bg-gray-200 dark:bg-gray-800 border-b border-gray-300 dark:border-gray-700 relative transition-colors duration-300">
                                <!-- Mac Buttons -->
                                <div class="flex gap-2.5 absolute left-5">
                                    <div class="w-3.5 h-3.5 rounded-full bg-[#ff5f56] shadow-sm hover:scale-110 transition-transform"></div>
                                    <div class="w-3.5 h-3.5 rounded-full bg-[#ffbd2e] shadow-sm hover:scale-110 transition-transform"></div>
                                    <div class="w-3.5 h-3.5 rounded-full bg-[#27c93f] shadow-sm hover:scale-110 transition-transform"></div>
                                </div>
                                <!-- Center Title -->
                                <div class="w-full text-center flex items-center justify-center gap-2 text-[13px] font-medium text-gray-500 dark:text-gray-400 tracking-wider font-sans select-none">
                                    <i class="fa-regular fa-id-badge text-blue-500 dark:text-blue-400 text-[14px]"></i> Introduction
                                </div>
                            </div>
                            
                            <!-- Editor Body -->
                            @php
                                $raw_html = $about_text_main;
                                $code_text = htmlspecialchars($raw_html);
                                
                                // Highlight HTML Tags (<p>, <strong>)
                                $code_text = preg_replace('/&lt;(\/?)([a-z0-9]+)&gt;/', '<span class="text-gray-400 dark:text-gray-500">&lt;</span><span class="text-pink-600 dark:text-pink-400 font-bold">$1$2</span><span class="text-gray-400 dark:text-gray-500">&gt;</span>', $code_text);
                                
                                // Highlight Skills/Keywords (Unique Vibrant Gradient)
                                $skills = ['Full Stack Developer', 'PHP', 'Laravel', 'React.js', 'Next.js', 'React Native', 'Node.js', 'MySQL', 'MongoDB', 'Prawesh Kumar'];
                                foreach($skills as $skill) {
                                    $code_text = str_replace($skill, '<span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-600 dark:from-cyan-400 dark:to-blue-400 font-bold tracking-wide drop-shadow-sm">' . $skill . '</span>', $code_text);
                                }
                                
                                // Highlight University/Degree (Bright Yellow)
                                $edu = ['Bachelor of Computer Applications (BCA)', 'Maharshi Dayanand University', 'Maharshi Dayanand Universtiy'];
                                foreach($edu as $ed) {
                                    $code_text = str_replace($ed, '<span class="text-yellow-600 dark:text-yellow-400 font-bold tracking-wide drop-shadow-sm">' . $ed . '</span>', $code_text);
                                }
                            @endphp
                            
                            <div class="p-6 sm:p-8 md:p-10 font-mono text-[15px] sm:text-[16px] leading-[2.4] text-gray-700 dark:text-gray-200 whitespace-pre-wrap break-words selection:bg-pink-200 dark:selection:bg-pink-500/30 transition-colors duration-300">
                                {!! $code_text !!}
                                <!-- Blinking Cursor -->
                                <div class="mt-2 inline-block"><span class="inline-block w-3 h-5 bg-pink-500 animate-pulse align-middle shadow-[0_0_8px_rgba(236,72,153,0.8)]"></span></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Premium Bottom Info Section -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2 w-full">
                        
                        <!-- Education Card -->
                        <div class="group relative bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl p-4 hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md overflow-hidden">
                            <div class="absolute -inset-px bg-gradient-to-r from-blue-500 to-cyan-400 rounded-xl opacity-0 group-hover:opacity-10 dark:group-hover:opacity-20 transition duration-300"></div>
                            <div class="relative flex gap-3 items-start z-10">
                                <div class="w-10 h-10 rounded-lg bg-blue-50 dark:bg-gray-800 flex items-center justify-center shrink-0 text-blue-500 dark:text-blue-400 group-hover:scale-105 transition-transform duration-300 border border-blue-100 dark:border-gray-700">
                                    <i class="fa-solid fa-user-graduate text-lg"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-gray-900 dark:text-white text-sm font-bold mb-1 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors truncate">
                                        {{ $about_degree_title }}
                                    </p>
                                    <p class="text-gray-500 dark:text-gray-400 text-xs leading-relaxed break-words">
                                        {{ $about_university }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Quote / Mission Card -->
                        <div class="group relative bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-800 rounded-xl p-4 hover:-translate-y-1 transition-all duration-300 shadow-sm hover:shadow-md overflow-hidden">
                            <div class="absolute -inset-px bg-gradient-to-r from-pink-500 to-purple-500 rounded-xl opacity-0 group-hover:opacity-10 dark:group-hover:opacity-20 transition duration-300"></div>
                            <div class="relative flex gap-3 items-start z-10">
                                <div class="w-10 h-10 rounded-lg bg-pink-50 dark:bg-gray-800 flex items-center justify-center shrink-0 text-pink-500 dark:text-pink-400 group-hover:scale-105 transition-transform duration-300 border border-pink-100 dark:border-gray-700">
                                    <i class="fa-solid fa-rocket text-lg"></i>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-gray-600 dark:text-gray-300 text-xs leading-relaxed italic break-words">
                                        "{{ $about_quote }}"
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
