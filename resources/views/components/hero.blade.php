@php
    $hero_title = \App\Models\Setting::where('key', 'hero_title_text')->value('value') ?? 'I am <br class="md:hidden">
<span class="text-transparent bg-clip-text bg-gradient-to-r from-[#3B82F6] via-[#8B5CF6] to-[#EC4899]">Prawesh</span>,<br>
a Full Stack Developer.';
    $hero_desc = \App\Models\Setting::where('key', 'hero_description_text')->value('value') ?? 'I build exceptional and accessible digital experiences for the web. Transforming complex problems into elegant, modern, and scalable solutions.';
    $hero_cv = \App\Models\Setting::where('key', 'hero_cv_link')->value('value') ?? '#';
    $hero_github = \App\Models\Setting::where('key', 'hero_github_link')->value('value') ?? '#';
    $hero_linkedin = \App\Models\Setting::where('key', 'hero_linkedin_link')->value('value') ?? '#';
    
    $hero_img = \App\Models\Setting::where('key', 'hero_image')->value('value');
    $hero_img_url = $hero_img ? asset('storage/' . $hero_img) : asset('images/profile-new.jpg');
@endphp

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
                        <span class="mr-2">📂</span> Explore My Developer Journey
                    </div>
                    
                    <!-- Soft Radial Glow Behind Heading -->
                    <div class="absolute -top-20 -left-10 w-72 h-72 bg-blue-500/20 rounded-full blur-[100px] pointer-events-none"></div>
                    <div class="absolute top-0 right-10 w-72 h-72 bg-purple-500/20 rounded-full blur-[100px] pointer-events-none"></div>

                    <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-[1.1] tracking-tight text-gray-900 dark:text-white drop-shadow-md relative z-10">
                        I am <br class="md:hidden">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#3B82F6] via-[#8B5CF6] to-[#EC4899]">Prawesh</span>,<br>
                        a <span x-data="{
                            text: '',
                            texts: ['Full Stack Developer.', 'Software Developer.', 'Php Laravel Developer.', 'UI/UX Enthusiast.'],
                            textIndex: 0,
                            charIndex: 0,
                            isDeleting: false,
                            typeSpeed: 100,
                            type() {
                                const currentText = this.texts[this.textIndex];
                                if (this.isDeleting) {
                                    this.text = currentText.substring(0, this.charIndex - 1);
                                    this.charIndex--;
                                    this.typeSpeed = 40; // deleting speed
                                } else {
                                    this.text = currentText.substring(0, this.charIndex + 1);
                                    this.charIndex++;
                                    this.typeSpeed = 120; // typing speed
                                }

                                if (!this.isDeleting && this.charIndex === currentText.length) {
                                    this.isDeleting = true;
                                    this.typeSpeed = 2000; // pause at the end of word
                                } else if (this.isDeleting && this.charIndex === 0) {
                                    this.isDeleting = false;
                                    this.textIndex = (this.textIndex + 1) % this.texts.length;
                                    this.typeSpeed = 500; // pause before typing next
                                }
                                setTimeout(() => this.type(), this.typeSpeed);
                            }
                        }" x-init="type()">
                            <span x-text="text"></span><span class="animate-[pulse_1s_ease-in-out_infinite] border-r-4 border-[#3B82F6] ml-1"></span>
                        </span>
                    </h1>
                    
                    <p class="text-gray-600 dark:text-[#E2E8F0] text-lg max-w-xl leading-[1.8] font-medium mt-8 relative z-10">
                        {{ $hero_desc }}
                    </p>
                    
                    <div class="pt-10 relative z-10">
                        <a href="{{ $hero_cv }}" target="_blank" class="inline-flex items-center gap-3 px-8 py-4 rounded-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-semibold hover:shadow-[0_0_30px_rgba(59,130,246,0.5)] hover:scale-105 transition-all duration-300">
                            Download My CV <i class="fa-solid fa-download"></i>
                        </a>
                    </div>
                    
                    <div class="flex gap-6 pt-10">
                        @if($hero_github)
                        <a href="{{ $hero_github }}" class="text-gray-400 dark:text-[#94A3B8] hover:text-gray-900 dark:hover:text-white transition-colors"><i class="fa-brands fa-github text-3xl"></i></a>
                        @endif
                        @if($hero_linkedin)
                        <a href="{{ $hero_linkedin }}" class="text-gray-400 dark:text-[#94A3B8] hover:text-[#3B82F6] dark:hover:text-[#3B82F6] transition-colors"><i class="fa-brands fa-linkedin text-3xl"></i></a>
                        @endif
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
                     
                    <!-- Premium Liquid Profile Image -->
                    <style>
                        @keyframes morph {
                            0% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
                            50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
                            100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
                        }
                        .animate-morph {
                            animation: morph 8s ease-in-out infinite;
                        }
                    </style>
                    <div class="relative w-full aspect-square group flex items-center justify-center cursor-pointer">
                        <!-- Vibrant Glow Behind -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-[#3B82F6] to-[#EC4899] blur-[50px] opacity-40 group-hover:opacity-70 group-hover:scale-110 transition-all duration-700 animate-pulse pointer-events-none"></div>
                        
                        <!-- Rotating Liquid Gradient Border -->
                        <div class="absolute inset-0 bg-gradient-to-br from-[#3B82F6] via-[#8B5CF6] to-[#EC4899] animate-[spin_6s_linear_infinite] animate-morph opacity-80 group-hover:opacity-100 transition-opacity duration-500 scale-[1.03]"></div>

                        <!-- Inner Image Container -->
                        <div class="absolute inset-[5px] bg-white dark:bg-[#0f172a] animate-morph overflow-hidden z-10 transition-transform duration-500 group-hover:scale-[1.02]">
                            <!-- Image with Grayscale-to-Color Effect -->
                            <img src="{{ $hero_img_url }}" alt="Prawesh" class="w-full h-full object-cover contrast-125 grayscale-[60%] group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                            
                            <!-- Sweeping Glass Shimmer Overlay -->
                            <div class="absolute top-0 -left-[150%] h-full w-[100%] z-20 transform -skew-x-12 bg-gradient-to-r from-transparent via-white/30 to-transparent group-hover:left-[200%] transition-all duration-[1500ms] ease-in-out pointer-events-none"></div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
</section>
