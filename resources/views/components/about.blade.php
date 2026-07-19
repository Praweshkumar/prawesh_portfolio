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
                     
                    <div class="space-y-6 text-gray-600 dark:text-[#E2E8F0] text-lg leading-[1.8] font-medium mb-12">
                        {!! $about_text_main !!}
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="border-l border-gray-300 dark:border-white/20 pl-6">
                            <p class="text-gray-900 dark:text-white text-sm font-semibold mb-1">
                                {{ $about_degree_title }}
                            </p>
                            <p class="text-gray-500 dark:text-[#94A3B8] text-sm">
                                {{ $about_university }}
                            </p>
                        </div>
                    
                        <div class="border-l border-gray-300 dark:border-white/20 pl-6">
                            <p class="text-gray-500 dark:text-[#94A3B8] text-sm leading-relaxed">
                                {{ $about_quote }}
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>
