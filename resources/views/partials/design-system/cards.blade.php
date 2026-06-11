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
                                    <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                                        <polyline points="15 3 21 3 21 9"/>
                                        <line x1="10" y1="14" x2="21" y2="3"/>
                                    </svg>
                                    Live Demo
                                </a>
                                <a href="#"
                                    class="inline-flex items-center gap-2 font-heading font-bold text-base text-text
                                        hover:text-accent active:text-accent-600 transition-colors duration-200 cursor-pointer
                                        focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                                >
                                    <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0 0 24 12c0-6.63-5.37-12-12-12z"/>
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
