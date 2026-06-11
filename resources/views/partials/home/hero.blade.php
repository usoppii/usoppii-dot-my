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
                        href="{{ route('home') }}#projects"
                        title="View my projects"
                        class="inline-flex items-center px-6 py-3 rounded-md bg-accent text-background font-heading font-bold
                            hover:bg-accent-400
                            active:bg-accent-600 active:scale-95
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        View Projects
                    </a>
                    <a
                        href="{{ route('home') }}#contact"
                        title="Contact me"
                        class="inline-flex items-center px-6 py-3 rounded-md border border-primary/60 text-text font-heading font-bold
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
