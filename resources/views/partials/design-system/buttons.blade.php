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
                        <svg role="img" class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                        </svg>
                        <span class="font-heading font-bold text-base">GitHub Page</span>
                    </a>
                    <a href="#"
                        class="inline-flex items-center gap-2 font-heading font-bold text-base text-text
                            hover:text-accent active:text-accent-600
                            transition-colors duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 shrink-0" fill="currentColor" viewBox="0 0 256 256" aria-hidden="true">
                            <path d="M224,104a8,8,0,0,1-16,0V59.32l-66.33,66.34a8,8,0,0,1-11.32-11.32L196.68,48H152a8,8,0,0,1,0-16h64a8,8,0,0,1,8,8Zm-40,24a8,8,0,0,0-8,8v72H48V80h72a8,8,0,0,0,0-16H48A16,16,0,0,0,32,80V208a16,16,0,0,0,16,16H176a16,16,0,0,0,16-16V136A8,8,0,0,0,184,128Z"/>
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
