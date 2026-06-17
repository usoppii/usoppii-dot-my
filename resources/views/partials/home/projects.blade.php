{{-- Projects Section --}}
<section class="relative py-24 lg:py-36 overflow-hidden border-t border-primary/20 scroll-mt-18" id="projects" aria-label="Projects">
    {{-- Aurora background --}}
    <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
        <div class="aurora-base absolute inset-0 opacity-70"></div>
        <div class="aurora-wave-1 absolute inset-0 opacity-60"></div>
        <div class="aurora-wave-2 absolute inset-0 opacity-50"></div>
        <div class="aurora-wave-3 absolute inset-0 opacity-40"></div>
        <div class="aurora-wave-4 absolute inset-0 opacity-30"></div>
        <div class="aurora-depth absolute inset-0"></div>
    </div>
    <div class="relative z-10 container mx-auto px-6 lg:px-9 xl:px-12">

        {{-- Header --}}
        <div class="flex flex-col gap-4 mb-12 lg:mb-16">
            <p class="reveal font-body text-accent tracking-widest uppercase text-base" style="transition-delay: 0ms">My Work</p>
            <h2 class="reveal font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight" style="transition-delay: 80ms">Projects.</h2>
        </div>

        {{-- Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ([
                [
                    'name'        => 'Project Alpha',
                    'description' => 'A full-featured web application built with Laravel and Vue.js.',
                    'stack'       => ['Laravel', 'Vue.js', 'MySQL'],
                    'demo'        => '#',
                    'repo'        => '#',
                    'image'       => 'https://placehold.co/600x400/1a1a2e/6b7280?text=Project+Alpha',
                ],
                [
                    'name'        => 'Project Beta',
                    'description' => 'REST API service with authentication and real-time features.',
                    'stack'       => ['Laravel', 'TypeScript', 'PostgreSQL'],
                    'demo'        => '#',
                    'repo'        => '#',
                    'image'       => 'https://placehold.co/600x400/1a2e1a/6b7280?text=Project+Beta',
                ],
                [
                    'name'        => 'Project Gamma',
                    'description' => 'Responsive dashboard with data visualization and reporting.',
                    'stack'       => ['React', 'Tailwind CSS', 'Node.js'],
                    'demo'        => '#',
                    'repo'        => '#',
                    'image'       => 'https://placehold.co/600x400/2e1a2e/6b7280?text=Project+Gamma',
                ],
                [
                    'name'        => '3D Print Cost Calculator',
                    'description' => 'A web-based tool to calculate 3D printing job costs — filament, electricity, machine wear, labor, and profit margin.',
                    'stack'       => ['HTML', 'CSS', 'JavaScript', 'BeerCSS'],
                    'demo'        => route('projects.3d-print'),
                    'repo'        => '#',
                    'image'       => '/images/projects/3d-print.jpg',
                    'side'        => true,
                ],
                [
                    'name'        => 'MZ Video Downloader',
                    'description' => 'A lightweight Electron desktop app for downloading videos from YouTube, TikTok, Instagram, and 1000+ more sites.',
                    'stack'       => ['Electron', 'JavaScript', 'BeerCSS', 'yt-dlp'],
                    'demo'        => route('projects.video-downloader'),
                    'repo'        => '#',
                    'image'       => '/images/projects/video-download.jpg',
                    'side'        => true,
                ],
            ] as $index => $project)
            <article
                class="reveal group relative flex flex-col rounded-2xl overflow-hidden border border-primary/20 bg-primary/5
                    hover:border-primary/40 hover:bg-primary/10
                    active:border-accent/40 active:scale-[0.99]
                    transition-all duration-300 cursor-pointer"
                style="transition-delay: {{ $index * 80 }}ms"
            >
                <a
                    href="{{ $project['demo'] }}"
                    title="{{ $project['name'] }}"
                    class="absolute inset-0 z-10 focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-inset rounded-2xl"
                    aria-label="View {{ $project['name'] }}"
                ></a>
                {{-- Thumbnail --}}
                <div class="relative overflow-hidden aspect-video">
                    <img
                        src="{{ $project['image'] }}"
                        alt="{{ $project['name'] }} screenshot"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        loading="lazy"
                    >
                </div>

                {{-- Content --}}
                <div class="flex flex-col flex-1 gap-4 p-6">
                    <div class="flex items-start justify-between gap-2">
                        <h3 class="font-heading text-2xl font-bold text-text leading-tight">
                            {{ $project['name'] }}
                        </h3>
                        @if (!empty($project['side']))
                            <span class="shrink-0 px-2 py-0.5 rounded-full text-sm font-body text-text-300 border border-primary/30 bg-primary/5">Side Project</span>
                        @endif
                    </div>

                    <p class="font-body text-base text-text-300 leading-relaxed flex-1">
                        {{ $project['description'] }}
                    </p>

                    {{-- Stack tags --}}
                    <div class="flex flex-wrap gap-2">
                        @foreach ($project['stack'] as $tag)
                            <span class="px-3 py-1 rounded-full text-base font-body text-accent border border-accent/30 bg-accent/5">
                                {{ $tag }}
                            </span>
                        @endforeach
                    </div>

                    {{-- Links --}}
                    <div class="relative z-20 flex items-center gap-4 pt-2">
                        <span class="inline-flex items-center gap-2 font-heading font-bold text-base text-text group-hover:text-accent transition-colors duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 256 256" aria-hidden="true">
                                <path d="M224,104a8,8,0,0,1-16,0V59.32l-66.33,66.34a8,8,0,0,1-11.32-11.32L196.68,48H152a8,8,0,0,1,0-16h64a8,8,0,0,1,8,8Zm-40,24a8,8,0,0,0-8,8v72H48V80h72a8,8,0,0,0,0-16H48A16,16,0,0,0,32,80V208a16,16,0,0,0,16,16H176a16,16,0,0,0,16-16V136A8,8,0,0,0,184,128Z"/>
                            </svg>
                            View the Project
                        </span>
                    </div>
                </div>
            </article>
            @endforeach

        </div>
    </div>
</section>
