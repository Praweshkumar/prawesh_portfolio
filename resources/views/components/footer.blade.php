@php
    $settings = \App\Models\Setting::pluck('value', 'key');
@endphp

<footer class="bg-white dark:bg-[#111827] border-t border-gray-200 dark:border-white/5 pt-16 pb-8 z-10 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
            <div>
                <a href="#home" class="text-2xl font-poppins font-bold text-gray-900 dark:text-white flex items-center gap-2 mb-4">
                    <span class="text-brand-primary">&lt;</span>{{ $settings['footer_copyright_name'] ?? 'Prawessh' }} <span class="text-brand-primary">/&gt;</span>
                </a>
                <p class="text-gray-600 dark:text-gray-400 mb-6 max-w-sm">
                    {{ $settings['footer_description'] ?? 'Building premium digital experiences. Full Stack Developer specializing in Laravel, Vue, and modern frontend technologies.' }}
                </p>
                <div class="flex space-x-4">
                    @if(!empty($settings['github_link']))
                    <a href="{{ $settings['github_link'] }}" target="_blank" rel="noopener noreferrer" aria-label="GitHub Profile" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-white/5 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:text-brand-primary dark:hover:text-brand-primary hover:bg-brand-primary/10 transition-colors">
                        <i class="fa-brands fa-github text-xl"></i>
                    </a>
                    @endif
                    @if(!empty($settings['linkedin_link']))
                    <a href="{{ $settings['linkedin_link'] }}" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn Profile" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-white/5 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:text-brand-primary dark:hover:text-brand-primary hover:bg-brand-primary/10 transition-colors">
                        <i class="fa-brands fa-linkedin-in text-xl"></i>
                    </a>
                    @endif
                    @if(!empty($settings['twitter_link']))
                    <a href="{{ $settings['twitter_link'] }}" target="_blank" rel="noopener noreferrer" aria-label="Twitter Profile" class="w-10 h-10 rounded-full bg-gray-100 dark:bg-white/5 flex items-center justify-center text-gray-600 dark:text-gray-400 hover:text-brand-primary dark:hover:text-brand-primary hover:bg-brand-primary/10 transition-colors">
                        <i class="fa-brands fa-twitter text-xl"></i>
                    </a>
                    @endif
                </div>
            </div>
            
            <div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#home" class="text-gray-600 dark:text-gray-400 hover:text-brand-primary transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs"></i> Home</a></li>
                    <li><a href="#about" class="text-gray-600 dark:text-gray-400 hover:text-brand-primary transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs"></i> About Me</a></li>
                    <li><a href="#projects" class="text-gray-600 dark:text-gray-400 hover:text-brand-primary transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs"></i> Projects</a></li>
                    <li><a href="#services" class="text-gray-600 dark:text-gray-400 hover:text-brand-primary transition-colors flex items-center gap-2"><i class="fa-solid fa-angle-right text-xs"></i> Services</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">Get In Touch</h3>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <div class="mt-1 text-brand-primary"><i class="fa-solid fa-location-dot"></i></div>
                        <span class="text-gray-600 dark:text-gray-400">{{ $settings['contact_location'] ?? 'Haryana, India' }}</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="mt-1 text-brand-primary"><i class="fa-solid fa-envelope"></i></div>
                        <a href="mailto:{{ $settings['contact_email'] ?? 'parweshk394@gmail.com' }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">{{ $settings['contact_email'] ?? 'parweshk394@gmail.com' }}</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <div class="mt-1 text-brand-primary"><i class="fa-solid fa-phone"></i></div>
                        <a href="tel:{{ str_replace(' ', '', $settings['contact_phone'] ?? '07838900306') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">{{ $settings['contact_phone'] ?? '078389 00306' }}</a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-200 dark:border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-500 dark:text-gray-400 text-sm">
                &copy; {{ date('Y') }} {{ $settings['footer_copyright_name'] ?? 'Prawessh' }}. All rights reserved.
            </p>
            <p class="text-gray-500 dark:text-gray-400 text-sm mt-2 md:mt-0">
                Designed & Built with <i class="fa-solid fa-heart text-brand-primary text-xs mx-1"></i>
            </p>
        </div>
    </div>
</footer>
