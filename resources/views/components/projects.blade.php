<section id="projects" class="py-32 relative overflow-hidden" x-data="{ filter: 'All' }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="text-center mb-20" x-data="{ show: false }" x-intersect.once="show = true">
            <h3 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white relative inline-block mt-4 mb-6"
                x-show="show" x-transition:enter="transition ease-out duration-700 delay-200" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                Featured Projects
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-gradient-to-r from-[#3B82F6] to-[#EC4899] rounded-full"></div>
            </h3>
            <p class="text-gray-600 dark:text-[#E2E8F0] max-w-2xl mx-auto text-lg leading-[1.8] font-medium"
               x-show="show" x-transition:enter="transition ease-out duration-700 delay-300" x-transition:enter-start="opacity-0 translate-y-4" x-transition:enter-end="opacity-100 translate-y-0">
                A collection of web and mobile applications I've designed and developed for businesses and clients.
            </p>
        </div>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-3 mb-16" x-data="{ show: false }" x-intersect.once="show = true">
            <template x-for="cat in ['All', 'Laravel', 'PHP', 'React', 'React Native', 'Full Stack']" :key="cat">
                <button @click="filter = cat" 
                        class="px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 border backdrop-blur-md"
                        :class="filter === cat 
                            ? 'bg-brand-primary border-brand-primary text-white shadow-[0_0_20px_rgba(99,102,241,0.5)]' 
                            : 'bg-white/50 dark:bg-gray-800/50 border-gray-200 dark:border-gray-700/50 text-gray-600 dark:text-gray-300 hover:text-brand-primary dark:hover:text-white hover:border-brand-primary/50 hover:bg-white dark:hover:bg-gray-700/50'">
                    <span x-text="cat"></span>
                </button>
            </template>
        </div>

        @php
            $dbProjects = \App\Models\Project::orderBy('id', 'desc')->get();
            $projects = $dbProjects->map(function($p) {
                return [
                    'id' => $p->id,
                    'title' => $p->title,
                    'category' => isset($p->tags[0]) ? $p->tags[0] : 'Other',
                    'image' => $p->image_path ? asset('storage/' . $p->image_path) : 'https://images.unsplash.com/photo-1557821552-17105176677c?q=80&w=800&auto=format&fit=crop',
                    'description' => $p->description,
                    'tags' => $p->tags ?? [],
                    'github' => $p->github_link,
                    'demo' => $p->demo_link,
                ];
            });
        @endphp
        <!-- Project Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" x-data='{ projects: {!! json_encode($projects, JSON_HEX_APOS) !!}, modalOpen: false, selectedProject: null }'>
            <template x-for="project in projects" :key="project.id">
                <div x-show="filter === 'All' || filter === project.category || (filter === 'Full Stack' && project.category === 'Full Stack')"
                     x-transition:enter="transition ease-out duration-700"
                     x-transition:enter-start="opacity-0 translate-y-12"
                     x-transition:enter-end="opacity-100 translate-y-0"
                     class="group relative bg-white dark:bg-[#0c0c16] border border-gray-200 dark:border-white/5 rounded-2xl overflow-hidden hover:-translate-y-2 transition-all duration-500 flex flex-col h-full z-10 hover:z-20 shadow-lg dark:shadow-none">
                     
                    <!-- Project Image -->
                    <div class="relative w-full h-48 sm:h-56 overflow-hidden bg-gray-100 dark:bg-gray-800">
                        <img :src="project.image" :alt="project.title" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700">
                    </div>
                    
                    <!-- Project Content -->
                    <div class="p-6 flex-1 flex flex-col relative">
                        
                        <h4 class="text-xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-pink-500 mb-3" x-text="project.title"></h4>
                        <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed mb-6 line-clamp-4" x-text="project.description"></p>
                        
                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-8 mt-auto">
                            <template x-for="tag in project.tags">
                                <span class="px-3 py-1.5 rounded-full bg-indigo-500/10 dark:bg-[#4F46E5] text-indigo-600 dark:text-white text-xs font-semibold" x-text="tag"></span>
                            </template>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="flex items-center gap-4 mt-auto">
                            <template x-if="project.demo">
                                <a :href="project.demo" target="_blank" class="inline-flex items-center justify-center gap-2 py-2 px-5 bg-gradient-to-r from-blue-500 to-pink-500 text-white text-sm font-semibold rounded-full hover:opacity-90 transition-opacity">
                                    Live Demo <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                                </a>
                            </template>
                            <template x-if="project.github">
                                <a :href="project.github" target="_blank" class="inline-flex items-center justify-center gap-2 py-2 px-5 bg-transparent border border-gray-300 dark:border-white/20 text-gray-700 dark:text-gray-300 text-sm font-semibold rounded-full hover:bg-gray-100 dark:hover:bg-white/10 transition-colors">
                                    GitHub <i class="fa-brands fa-github text-sm"></i>
                                </a>
                            </template>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        
        <!-- View All Button -->
        <div class="mt-20 text-center">
            <a href="javascript:void(0)" class="inline-flex items-center gap-3 px-8 py-4 rounded-full border border-gray-300 dark:border-gray-700 bg-white/50 dark:bg-gray-800/50 backdrop-blur-md text-gray-900 dark:text-white font-semibold hover:border-brand-primary hover:text-brand-primary dark:hover:border-brand-primary dark:hover:text-brand-primary transition-all duration-300 group shadow-sm hover:shadow-xl hover:shadow-brand-primary/10">
                View All Projects
                <i class="fa-solid fa-arrow-right transform group-hover:translate-x-1 transition-transform"></i>
            </a>
        </div>

    </div>
</section>
