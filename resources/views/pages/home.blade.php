<x-layouts.app title="Usoppii — Full Stack Developer">

    {{-- Hero Section --}}
    <section class="relative min-h-screen flex items-center overflow-hidden" aria-label="Hero" x-data x-init="$el.classList.add('hero-loaded')">
        <div id="ethereal-hero" class="absolute inset-0 pointer-events-none opacity-30" aria-hidden="true"></div>
        <div class="relative z-10 container mx-auto px-6 lg:px-9 xl:px-12 py-24 lg:py-36 xl:py-48">
            <div class="w-full flex flex-col lg:flex-row items-center gap-16 lg:gap-24">

                {{-- Text block --}}
                <div class="flex-1 flex flex-col gap-6 hero-text">
                    <p class="font-body text-accent tracking-widest uppercase text-base hero-fade" style="--delay: 0ms">
                        Full Stack Developer
                    </p>

                    <h1 class="font-heading text-5xl lg:text-6xl xl:text-7xl font-bold text-text leading-none tracking-tight hero-fade" style="--delay: 80ms">
                        Hi, I'm<br>
                        <span class="text-accent">Usoppii.</span>
                    </h1>

                    <p class="font-body text-text-300 text-xl leading-relaxed max-w-xl hero-fade" style="--delay: 160ms">
                        I build clean, fast, and thoughtful web experiences — from database to deployment.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2 hero-fade" style="--delay: 240ms">
                        <a
                            href="#projects"
                            title="View my projects"
                            class="inline-block px-6 py-3 rounded-md bg-accent text-background font-heading font-bold
                                hover:bg-accent-400
                                active:bg-accent-600 active:scale-95
                                transition-all duration-200 cursor-pointer
                                focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                        >
                            View Projects
                        </a>
                        <a
                            href="#contact"
                            title="Contact me"
                            class="inline-block px-6 py-3 rounded-md border border-primary/60 text-text font-heading font-bold
                                hover:border-accent hover:text-accent
                                active:scale-95 active:text-accent-600 active:border-accent-600
                                transition-all duration-200 cursor-pointer
                                focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                        >
                            Contact Me
                        </a>
                    </div>
                </div>

                {{-- Image block --}}
                <div class="shrink-0 w-full max-w-100 lg:w-100 hero-fade hero-image" style="--delay: 100ms">
                    <div
                        x-data="{ flipped: false }"
                        @click="flipped = !flipped"
                        @click.outside="flipped = false"
                        @scroll.window="flipped = false"
                        :class="flipped ? 'ring-accent/60' : 'ring-primary/30'"
                        class="group relative w-full aspect-4/5 rounded-2xl overflow-hidden cursor-pointer
                            ring-2 hover:ring-accent/60 transition-all duration-300"
                        aria-label="Profile photo — click to reveal"
                    >
                        {{-- Default image --}}
                        <img
                            src="https://placehold.co/400x512/1a1a2e/6b7280?text=Usoppii"
                            alt="Usoppii — profile photo"
                            :class="flipped ? 'opacity-0' : 'opacity-100'"
                            class="absolute inset-0 w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-0"
                        >
                        {{-- Hover / tap image --}}
                        <img
                            src="https://placehold.co/400x512/1a2e1a/84cc16?text=:)"
                            alt=""
                            aria-hidden="true"
                            :class="flipped ? 'opacity-100' : 'opacity-0'"
                            class="absolute inset-0 w-full h-full object-cover transition-opacity duration-300 group-hover:opacity-100"
                        >
                    </div>
                    {{-- Tooltip --}}
                    <p class="mt-2 text-center font-body text-base text-text-300/50 tracking-wide select-none" aria-hidden="true">
                        Hover / tap to reveal
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Tech Stack Ticker --}}
    <div class="relative overflow-hidden border-y border-primary/30 py-4 bg-primary/10" aria-label="Tech stack" aria-hidden="true">
        <div class="ticker-track flex gap-12 w-max">
            @foreach (['Laravel', 'PHP', 'Vue.js', 'React', 'TypeScript', 'JavaScript', 'MySQL', 'PostgreSQL', 'Docker', 'Tailwind CSS', 'Node.js', 'Git'] as $tech)
                <span class="flex items-center gap-12 font-heading font-bold text-base text-text-300 uppercase tracking-widest whitespace-nowrap">
                    {{ $tech }}
                    <span class="text-accent leading-none" aria-hidden="true">&#9679;</span>
                </span>
            @endforeach
            {{-- Duplicate for seamless loop --}}
            @foreach (['Laravel', 'PHP', 'Vue.js', 'React', 'TypeScript', 'JavaScript', 'MySQL', 'PostgreSQL', 'Docker', 'Tailwind CSS', 'Node.js', 'Git'] as $tech)
                <span class="flex items-center gap-12 font-heading font-bold text-base text-text-300 uppercase tracking-widest whitespace-nowrap">
                    {{ $tech }}
                    <span class="text-accent leading-none" aria-hidden="true">&#9679;</span>
                </span>
            @endforeach
        </div>
    </div>

    {{-- About Section --}}
    <section class="py-24 lg:py-36 border-t border-primary/20 scroll-mt-18" id="about" aria-label="About">
        <div class="container mx-auto px-6 lg:px-9 xl:px-12">
            <div class="mx-auto max-w-2xl flex flex-col items-center text-center gap-6">

                <p class="reveal font-body text-accent tracking-widest uppercase text-base" style="transition-delay: 0ms">About Me</p>

                <h2 class="reveal font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight" style="transition-delay: 80ms">
                    Who I Am.
                </h2>

                <p class="reveal font-body text-text-300 text-xl leading-relaxed" style="transition-delay: 160ms">
                    I'm a full stack developer passionate about building clean, performant web applications.
                    I enjoy working across the entire stack — from designing databases to shipping polished UIs.
                    Currently looking for opportunities where I can grow, contribute, and build things that matter.
                </p>

                <div class="reveal flex flex-wrap justify-center gap-x-6 gap-y-2 pt-2" style="transition-delay: 240ms">
                    @foreach (['Clean Code', 'Fast Delivery', 'Good UX', 'Always Learning'] as $pillar)
                        <span class="font-body text-base text-text-300 tracking-wide">{{ $pillar }}</span>
                        @if (!$loop->last)
                            <span class="text-primary/40" aria-hidden="true">·</span>
                        @endif
                    @endforeach
                </div>

                <div class="reveal pt-2" style="transition-delay: 320ms">
                    <a
                        href="#"
                        title="Download CV"
                        class="inline-block px-8 py-3 rounded-full border border-primary/60 text-text font-heading font-bold text-base lg:text-xl
                            hover:border-accent hover:text-accent
                            active:scale-95 active:text-accent-600 active:border-accent-600
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        Download CV
                    </a>
                </div>

            </div>
        </div>
    </section>

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
                        'name'        => 'Project Delta',
                        'description' => 'E-commerce platform with cart, payments, and order management.',
                        'stack'       => ['Laravel', 'Vue.js', 'Stripe'],
                        'demo'        => '#',
                        'repo'        => '#',
                        'image'       => 'https://placehold.co/600x400/1a2a2e/6b7280?text=Project+Delta',
                    ],
                    [
                        'name'        => 'Project Epsilon',
                        'description' => 'Mobile-first blog platform with markdown editor and SEO tools.',
                        'stack'       => ['Laravel', 'TypeScript', 'Tailwind CSS'],
                        'demo'        => '#',
                        'repo'        => '#',
                        'image'       => 'https://placehold.co/600x400/2e2a1a/6b7280?text=Project+Epsilon',
                    ],
                ] as $index => $project)
                <article
                    class="reveal group flex flex-col rounded-2xl overflow-hidden border border-primary/20 bg-primary/5
                        hover:border-primary/40 hover:bg-primary/10
                        active:border-accent/40 active:scale-[0.99]
                        transition-all duration-300"
                    style="transition-delay: {{ $index * 80 }}ms"
                >
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
                        <h3 class="font-heading text-2xl font-bold text-text leading-tight">
                            {{ $project['name'] }}
                        </h3>

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
                        <div class="flex items-center gap-4 pt-2">
                            <a
                                href="{{ $project['demo'] }}"
                                title="Live demo — {{ $project['name'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 font-heading font-bold text-base text-text
                                    hover:text-accent active:text-accent-600 transition-colors duration-200 cursor-pointer
                                    focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                            >
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                    <polyline points="15 3 21 3 21 9"/>
                                    <line x1="10" y1="14" x2="21" y2="3"/>
                                </svg>
                                Live Demo
                            </a>
                            <a
                                href="{{ $project['repo'] }}"
                                title="GitHub repo — {{ $project['name'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 font-heading font-bold text-base text-text
                                    hover:text-accent active:text-accent-600 transition-colors duration-200 cursor-pointer
                                    focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                            >
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/>
                                </svg>
                                GitHub
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach

            </div>
        </div>
    </section>

    {{-- Contact Section --}}
    <section class="py-24 lg:py-36 border-t border-primary/20 scroll-mt-18" id="contact" aria-label="Contact">
        <div class="container mx-auto px-6 lg:px-9 xl:px-12">
            <div class="mx-auto max-w-2xl flex flex-col items-center text-center gap-6">

                <p class="reveal font-body text-accent tracking-widest uppercase text-base" style="transition-delay: 0ms">Get In Touch</p>

                <h2 class="reveal font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight" style="transition-delay: 80ms">
                    Let's Work Together.
                </h2>

                <p class="reveal font-body text-text-300 text-xl leading-relaxed" style="transition-delay: 160ms">
                    Open to full-time roles and freelance work. Feel free to reach out anytime.
                </p>

                {{-- Email pill — primary CTA --}}
                <div class="reveal pt-2" style="transition-delay: 240ms">
                    <a
                        href="mailto:muhdyusuffrosli@gmail.com"
                        title="Send me an email"
                        class="inline-block px-10 py-4 rounded-full bg-accent text-background font-heading font-bold text-base lg:text-xl
                            hover:bg-accent-400
                            active:scale-95 active:bg-accent-600
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        muhdyusuffrosli@gmail.com
                    </a>
                </div>

                {{-- Social links --}}
                <div class="reveal flex flex-col lg:flex-row items-center gap-4 pt-2" style="transition-delay: 320ms">

                    <a
                        href="https://github.com/"
                        target="_blank"
                        rel="noopener noreferrer"
                        title="Visit my GitHub page"
                        aria-label="GitHub Page (opens in new tab)"
                        class="flex items-center gap-3 px-6 py-3 rounded-xl border border-primary/30 text-text-300
                            hover:border-accent hover:text-accent
                            active:scale-95 active:text-accent-600 active:border-accent-600
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/>
                        </svg>
                        <span class="font-heading font-bold text-base">GitHub Page</span>
                    </a>

                    {{-- Add more social links here when ready --}}
                    {{-- LinkedIn example:
                    <a href="https://linkedin.com/in/..." target="_blank" rel="noopener noreferrer"
                        class="flex items-center gap-3 px-6 py-3 rounded-xl border border-primary/30 text-text-300
                            hover:border-accent hover:text-accent active:scale-95 active:text-accent-600 active:border-accent-600
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background">
                        <svg class="w-5 h-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                        <span class="font-heading font-bold text-base">LinkedIn</span>
                    </a>
                    --}}

                </div>

            </div>
        </div>
    </section>

</x-layouts.app>
