{{-- Design System — Cards & Layout --}}
<section class="py-24 lg:py-36" id="ds-cards" aria-label="Design System Cards">
    <div class="container mx-auto px-6 lg:px-9 xl:px-12">

        <div class="flex flex-col gap-2 mb-12 lg:mb-16">
            <p class="font-body text-accent tracking-widest uppercase text-base">05</p>
            <h2 class="font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight">Cards &amp; Layout.</h2>
        </div>

        <div class="flex flex-col gap-16">

            {{-- Project card --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Project Card</h3>
                    <p class="font-body text-base text-text-300">Used in the Projects section. Hover lifts border opacity and background tint. Image scales on hover.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <article class="group flex flex-col rounded-2xl overflow-hidden border border-primary/20 bg-primary/5
                        hover:border-primary/40 hover:bg-primary/10
                        active:border-accent/40 active:scale-[0.99]
                        transition-all duration-300 cursor-pointer"
                    >
                        <div class="relative overflow-hidden aspect-video bg-primary/10 flex items-center justify-center">
                            <span class="font-body text-base text-text-300">Thumbnail</span>
                        </div>
                        <div class="flex flex-col flex-1 gap-4 p-6">
                            <h3 class="font-heading text-2xl font-bold text-text leading-tight">Project Name</h3>
                            <p class="font-body text-base text-text-300 leading-relaxed flex-1">
                                Short description explaining the project and the problem it solves.
                            </p>
                            <div class="flex flex-wrap gap-2">
                                @foreach (['Laravel', 'Vue.js', 'MySQL'] as $tag)
                                <span class="px-3 py-1 rounded-full text-base font-body text-accent border border-accent/30 bg-accent/5">{{ $tag }}</span>
                                @endforeach
                            </div>
                            <div class="flex items-center gap-4 pt-2">
                                <a href="#"
                                    class="inline-flex items-center gap-2 font-heading font-bold text-base text-text
                                        hover:text-accent active:text-accent-600 transition-colors duration-200 cursor-pointer
                                        focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                                >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 256 256" aria-hidden="true">
                                        <path d="M224,104a8,8,0,0,1-16,0V59.32l-66.33,66.34a8,8,0,0,1-11.32-11.32L196.68,48H152a8,8,0,0,1,0-16h64a8,8,0,0,1,8,8Zm-40,24a8,8,0,0,0-8,8v72H48V80h72a8,8,0,0,0,0-16H48A16,16,0,0,0,32,80V208a16,16,0,0,0,16,16H176a16,16,0,0,0,16-16V136A8,8,0,0,0,184,128Z"/>
                                    </svg>
                                    Live Demo
                                </a>
                                <a href="#"
                                    class="inline-flex items-center gap-2 font-heading font-bold text-base text-text
                                        hover:text-accent active:text-accent-600 transition-colors duration-200 cursor-pointer
                                        focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                                >
                                    <svg role="img" class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                                    </svg>
                                    GitHub
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            {{-- Info card variants --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Info Card Variants</h3>
                    <p class="font-body text-base text-text-300">Three surface levels using primary/accent tints.</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    @foreach ([
                        ['label' => 'Surface',      'borderClass' => 'border-primary/20',  'bgClass' => 'bg-primary/5'],
                        ['label' => 'Elevated',     'borderClass' => 'border-primary/30',  'bgClass' => 'bg-primary/10'],
                        ['label' => 'Highlighted',  'borderClass' => 'border-accent/20',   'bgClass' => 'bg-accent/5'],
                    ] as $card)
                    <div class="p-6 rounded-2xl border {{ $card['borderClass'] }} {{ $card['bgClass'] }} flex flex-col gap-3">
                        <span class="font-body text-base text-accent tracking-widest uppercase">{{ $card['label'] }}</span>
                        <p class="font-heading text-xl font-bold text-text leading-tight">Card Title</p>
                        <p class="font-body text-base text-text-300 leading-relaxed">Supporting body text with additional context.</p>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Border / divider --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Dividers</h3>
                    <p class="font-body text-base text-text-300">Section and card separators.</p>
                </div>
                <div class="flex flex-col gap-6">
                    @foreach ([
                        ['label' => 'border-primary/20', 'class' => 'border-primary/20'],
                        ['label' => 'border-primary/30', 'class' => 'border-primary/30'],
                        ['label' => 'border-primary/40', 'class' => 'border-primary/40'],
                        ['label' => 'border-accent/30',  'class' => 'border-accent/30'],
                    ] as $divider)
                    <div class="flex items-center gap-6">
                        <hr class="flex-1 border-t {{ $divider['class'] }}">
                        <code class="font-body text-base text-text-300 shrink-0">{{ $divider['label'] }}</code>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Spacing scale --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Spacing Reference</h3>
                    <p class="font-body text-base text-text-300">Common spacing tokens used for padding, gap, and margin.</p>
                </div>
                <div class="flex flex-col gap-4">
                    @foreach ([
                        ['class' => 'w-2',  'label' => 'space-2',  'px' => '8px'],
                        ['class' => 'w-4',  'label' => 'space-4',  'px' => '16px'],
                        ['class' => 'w-6',  'label' => 'space-6',  'px' => '24px'],
                        ['class' => 'w-8',  'label' => 'space-8',  'px' => '32px'],
                        ['class' => 'w-12', 'label' => 'space-12', 'px' => '48px'],
                        ['class' => 'w-16', 'label' => 'space-16', 'px' => '64px'],
                        ['class' => 'w-24', 'label' => 'space-24', 'px' => '96px'],
                        ['class' => 'w-36', 'label' => 'space-36', 'px' => '144px — section padding'],
                    ] as $s)
                    <div class="flex items-center gap-4">
                        <div class="h-5 rounded {{ $s['class'] }} bg-accent/40 shrink-0"></div>
                        <code class="font-body text-base text-accent w-24 shrink-0">{{ $s['label'] }}</code>
                        <span class="font-body text-base text-text-300">{{ $s['px'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
