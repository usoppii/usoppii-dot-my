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
                    class="inline-flex items-center px-8 py-3 rounded-full border border-primary/60 text-text font-heading font-bold text-base
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
