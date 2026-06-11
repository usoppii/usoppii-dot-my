{{-- Design System — Buttons --}}
<section class="py-24 lg:py-36 border-b border-primary/20" id="ds-buttons" aria-label="Design System Buttons">
    <div class="container mx-auto px-6 lg:px-9 xl:px-12">

        <div class="flex flex-col gap-2 mb-12 lg:mb-16">
            <p class="font-body text-accent tracking-widest uppercase text-base">03</p>
            <h2 class="font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight">Buttons.</h2>
        </div>

        <div class="flex flex-col gap-16">

            {{-- Primary filled --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Primary — Filled</h3>
                    <p class="font-body text-base text-text-300">Main CTA. Use once per view. Accent background.</p>
                </div>
                <div class="flex flex-wrap items-center gap-4">
                    <button type="button"
                        class="inline-block px-10 py-4 rounded-full bg-accent text-background font-heading font-bold text-xl
                            hover:bg-accent-400 active:scale-95 active:bg-accent-600
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        Primary Large
                    </button>
                    <button type="button"
                        class="inline-block px-8 py-3 rounded-full bg-accent text-background font-heading font-bold text-base
                            hover:bg-accent-400 active:scale-95 active:bg-accent-600
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        Primary Medium
                    </button>
                    <button type="button"
                        class="inline-block px-6 py-2 rounded-full bg-accent text-background font-heading font-bold text-sm
                            hover:bg-accent-400 active:scale-95 active:bg-accent-600
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        Primary Small
                    </button>
                </div>
            </div>

            {{-- Secondary outline --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Secondary — Outline</h3>
                    <p class="font-body text-base text-text-300">Supporting actions. Border with accent hover.</p>
                </div>
                <div class="flex flex-wrap items-center gap-4">
                    <button type="button"
                        class="inline-block px-10 py-4 rounded-full border border-primary/60 text-text font-heading font-bold text-xl
                            hover:border-accent hover:text-accent
                            active:scale-95 active:text-accent-600 active:border-accent-600
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        Secondary Large
                    </button>
                    <button type="button"
                        class="inline-block px-8 py-3 rounded-full border border-primary/60 text-text font-heading font-bold text-base
                            hover:border-accent hover:text-accent
                            active:scale-95 active:text-accent-600 active:border-accent-600
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        Secondary Medium
                    </button>
                    <button type="button"
                        class="inline-block px-6 py-2 rounded-full border border-primary/60 text-text font-heading font-bold text-sm
                            hover:border-accent hover:text-accent
                            active:scale-95 active:text-accent-600 active:border-accent-600
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        Secondary Small
                    </button>
                </div>
            </div>

            {{-- Ghost / text link --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Ghost — Text Link</h3>
                    <p class="font-body text-base text-text-300">Low-emphasis. Sliding underline on hover. Used in nav, project links.</p>
                </div>
                <div class="flex flex-wrap items-center gap-8">
                    <a href="#"
                        class="relative inline-block font-heading font-bold text-xl text-text
                            after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-accent after:transition-all after:duration-200
                            hover:text-accent hover:after:w-full
                            active:text-accent-600
                            transition-colors duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        Ghost Large
                    </a>
                    <a href="#"
                        class="relative inline-block font-heading font-bold text-base text-text
                            after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-accent after:transition-all after:duration-200
                            hover:text-accent hover:after:w-full
                            active:text-accent-600
                            transition-colors duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        Ghost Medium
                    </a>
                </div>
            </div>

            {{-- Icon + text (social / action) --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Icon + Text</h3>
                    <p class="font-body text-base text-text-300">Used for social links and external actions. Border card with accent hover.</p>
                </div>
                <div class="flex flex-wrap items-center gap-4">
                    <a href="#"
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
                    <a href="#"
                        class="inline-flex items-center gap-2 font-heading font-bold text-base text-text
                            hover:text-accent active:text-accent-600
                            transition-colors duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/>
                            <polyline points="15 3 21 3 21 9"/>
                            <line x1="10" y1="14" x2="21" y2="3"/>
                        </svg>
                        Live Demo
                    </a>
                </div>
            </div>

            {{-- States reference --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">States</h3>
                    <p class="font-body text-base text-text-300">Static reference showing default, hover, active, and disabled states.</p>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    @foreach ([
                        ['label' => 'Default', 'class' => 'bg-accent text-background', 'scale' => ''],
                        ['label' => 'Hover',   'class' => 'bg-accent-400 text-background', 'scale' => ''],
                        ['label' => 'Active',  'class' => 'bg-accent-600 text-background', 'scale' => 'scale-95'],
                        ['label' => 'Disabled','class' => 'bg-primary/20 text-text-300 opacity-50 cursor-not-allowed', 'scale' => ''],
                    ] as $state)
                    <div class="flex flex-col items-center gap-3">
                        <button type="button" class="inline-block w-full px-6 py-3 rounded-full font-heading font-bold text-base {{ $state['class'] }} {{ $state['scale'] }}">
                            Button
                        </button>
                        <span class="font-body text-base text-text-300">{{ $state['label'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
