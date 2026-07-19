<section id="contact" class="py-24 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-brand-primary/5 to-transparent"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="text-center mb-16" x-data="{ show: false }" x-intersect.once="show = true">
            <h3 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white relative inline-block mt-4"
                x-show="show" x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                Contact Me
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-gradient-to-r from-[#3B82F6] to-[#EC4899] rounded-full"></div>
            </h3>
        </div>

@php
    $email = \App\Models\Setting::where('key', 'contact_email')->value('value') ?? 'parweshk394@gmail.com';
    $phone = \App\Models\Setting::where('key', 'contact_phone')->value('value') ?? '078389 00306';
    $location = \App\Models\Setting::where('key', 'contact_location')->value('value') ?? 'Haryana, Haryana';
@endphp

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <!-- Contact Info -->
            <div class="lg:col-span-5 space-y-8" x-data="{ show: false }" x-intersect.once="show = true">
                <div x-show="show" 
                     x-transition:enter="transition ease-out duration-1000"
                     x-transition:enter-start="opacity-0 -translate-x-12"
                     x-transition:enter-end="opacity-100 translate-x-0">
                     
                    <h4 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 drop-shadow-sm">Let's talk about your project</h4>
                    <p class="text-gray-600 dark:text-[#E2E8F0] text-lg leading-[1.8] font-medium mb-8">
                        Whether you have a question, a project in mind, or just want to say hi, I'll try my best to get back to you!
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg bg-blue-500/10 flex items-center justify-center text-blue-500 shrink-0 border border-blue-500/20 shadow-[0_0_15px_rgba(59,130,246,0.2)]">
                                <i class="fa-solid fa-envelope text-xl"></i>
                            </div>
                            <div>
                                <h5 class="text-gray-900 dark:text-white font-bold mb-1">Email</h5>
                                <a href="mailto:{{ $email }}" class="text-gray-500 dark:text-[#94A3B8] hover:text-gray-900 dark:hover:text-white transition-colors">{{ $email }}</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg bg-purple-500/10 flex items-center justify-center text-purple-500 shrink-0 border border-purple-500/20 shadow-[0_0_15px_rgba(168,85,247,0.2)]">
                                <i class="fa-solid fa-phone text-xl"></i>
                            </div>
                            <div>
                                <h5 class="text-gray-900 dark:text-white font-bold mb-1">Phone</h5>
                                <a href="tel:{{ preg_replace('/[^0-9]/', '', $phone) }}" class="text-gray-500 dark:text-[#94A3B8] hover:text-gray-900 dark:hover:text-white transition-colors">{{ $phone }}</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-lg bg-pink-500/10 flex items-center justify-center text-pink-500 shrink-0 border border-pink-500/20 shadow-[0_0_15px_rgba(236,72,153,0.2)]">
                                <i class="fa-solid fa-location-dot text-xl"></i>
                            </div>
                            <div>
                                <h5 class="text-gray-900 dark:text-white font-bold mb-1">Location</h5>
                                <p class="text-gray-500 dark:text-[#94A3B8]">{{ $location }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="lg:col-span-7" x-data="{ show: false }" x-intersect.once="show = true">
                <div x-show="show" 
                     x-transition:enter="transition ease-out duration-1000 delay-300"
                     x-transition:enter-start="opacity-0 translate-x-12"
                     x-transition:enter-end="opacity-100 translate-x-0"
                     class="bg-white/80 dark:bg-[#0f172a]/60 backdrop-blur-xl border border-gray-200 dark:border-white/10 rounded-2xl p-8 shadow-[0_0_15px_rgba(0,0,0,0.05)] dark:shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                     
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-[#E2E8F0] mb-2">Your Name</label>
                                <input type="text" id="name" name="name" class="w-full bg-gray-100/50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:outline-none focus:border-[#3B82F6] focus:ring-1 focus:ring-[#3B82F6] transition-colors placeholder-gray-400 dark:placeholder-[#94A3B8]" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-[#E2E8F0] mb-2">Your Email</label>
                                <input type="email" id="email" name="email" class="w-full bg-gray-100/50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:outline-none focus:border-[#3B82F6] focus:ring-1 focus:ring-[#3B82F6] transition-colors placeholder-gray-400 dark:placeholder-[#94A3B8]" placeholder="john@example.com">
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-[#E2E8F0] mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full bg-gray-100/50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:outline-none focus:border-[#3B82F6] focus:ring-1 focus:ring-[#3B82F6] transition-colors placeholder-gray-400 dark:placeholder-[#94A3B8]" placeholder="Project Inquiry">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-[#E2E8F0] mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" class="w-full bg-gray-100/50 dark:bg-white/5 border border-gray-200 dark:border-white/10 rounded-lg px-4 py-3 text-gray-900 dark:text-white focus:outline-none focus:border-[#3B82F6] focus:ring-1 focus:ring-[#3B82F6] transition-colors resize-none placeholder-gray-400 dark:placeholder-[#94A3B8]" placeholder="How can I help you?"></textarea>
                        </div>
                        
                        <button type="submit" class="w-full py-4 rounded-lg bg-gradient-to-r from-blue-600 to-indigo-600 text-white font-bold hover:shadow-[0_0_30px_rgba(59,130,246,0.5)] transition-all duration-300 flex items-center justify-center gap-2 group">
                            Send Message <i class="fa-solid fa-paper-plane group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform"></i>
                        </button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</section>
