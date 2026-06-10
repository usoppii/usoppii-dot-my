<div x-data="{ open: false }">
<header class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-md border-b border-primary/40">
    {{-- Main bar --}}
    <nav
        class="flex items-center justify-between py-4 px-6 lg:px-9 xl:px-12 container mx-auto"
        role="navigation"
        aria-label="Main navigation"
    >
        {{-- Logo --}}
        <a
            href="{{ route('home') }}"
            title="Usoppii — Home"
            class="font-heading text-2xl uppercase font-bold text-text hover:text-accent active:text-accent-600 transition-colors duration-200 cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background rounded-sm"
        >
            Usoppii
        </a>

        {{-- Desktop nav --}}
        <div class="hidden lg:flex items-center gap-8" role="list">

            @foreach ([['#about', 'About'], ['#projects', 'Projects'], ['#contact', 'Contact']] as [$href, $label])
            <a
                href="{{ $href }}"
                title="{{ $label }}"
                role="listitem"
                class="relative tracking-wide text-text-300
                       hover:text-accent
                       active:text-accent-600
                       transition-colors duration-200 cursor-pointer
                       focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background rounded-sm
                       after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-accent after:transition-all after:duration-200
                       hover:after:w-full"
            >
                {{ $label }}
            </a>
            @endforeach

            {{-- CTA --}}
            <a
                href="#"
                title="Download Resume"
                aria-label="Download resume PDF"
                class="inline-block px-5 py-2 rounded-md bg-accent text-background font-heading font-bold
                       hover:bg-accent-400
                       active:bg-accent-600 active:scale-95
                       transition-all duration-200 cursor-pointer
                       focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
            >
                Resume
            </a>
        </div>

        {{-- Hamburger (mobile only) --}}
        <button
            @click="open = !open"
            :aria-expanded="open.toString()"
            aria-controls="mobile-menu"
            aria-label="Toggle navigation menu"
            class="lg:hidden flex items-center justify-center w-11 h-11 text-text
                   hover:text-accent hover:bg-primary/10
                   active:bg-primary/20 active:scale-95
                   transition-all duration-200 cursor-pointer
                   focus:outline-none focus-visible:ring-2 focus-visible:ring-accent rounded-md"
        >
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </nav>
</header>

{{-- Mobile fullscreen overlay --}}
<div
    id="mobile-menu"
    x-show="open"
    x-transition:enter="transition duration-300 ease-out"
    x-transition:enter-start="opacity-0 -translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition duration-200 ease-in"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-4"
    role="dialog"
    aria-modal="true"
    aria-label="Mobile navigation menu"
    class="lg:hidden fixed inset-0 z-60 bg-background flex flex-col items-center justify-center gap-10"
>
    {{-- Close button --}}
    <button
        @click="open = false"
        aria-label="Close navigation menu"
        class="absolute top-5 right-6 flex items-center justify-center w-11 h-11 text-text-300
               hover:text-accent hover:bg-primary/10
               active:bg-primary/20 active:scale-95
               transition-all duration-200 cursor-pointer
               focus:outline-none focus-visible:ring-2 focus-visible:ring-accent rounded-md"
    >
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>

    @foreach ([['#about', 'About'], ['#projects', 'Projects'], ['#contact', 'Contact']] as [$href, $label])
    <a
        @click="open = false"
        href="{{ $href }}"
        title="{{ $label }}"
        class="relative font-heading text-3xl font-bold text-text
               hover:text-accent
               active:text-accent-600 active:scale-95
               transition-colors duration-200 cursor-pointer
               focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background rounded-sm
               after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-accent after:transition-all after:duration-200
               hover:after:w-full"
    >
        {{ $label }}
    </a>
    @endforeach

    <a
        href="#"
        title="Download Resume"
        aria-label="Download resume PDF"
        class="inline-block mt-4 px-8 py-3 rounded-md bg-accent text-background font-heading font-bold text-lg
               hover:bg-accent-400
               active:bg-accent-600 active:scale-95
               transition-all duration-200 cursor-pointer
               focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
    >
        Resume
    </a>
</div>
</div>
