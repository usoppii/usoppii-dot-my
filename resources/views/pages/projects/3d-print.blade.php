<x-layouts.app title="3D Print Cost Calculator — Usoppii">

    {{-- Hero background fade --}}
    <div class="relative overflow-hidden">
        <div
            class="absolute inset-0 bg-center bg-cover bg-no-repeat pointer-events-none"
            style="
                background-image: url('/images/backgrounds/3d-print-bg-page.webp');
                mask-image: linear-gradient(to bottom, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.2) 65%, rgba(0,0,0,0) 100%);
                -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.2) 65%, rgba(0,0,0,0) 100%);
            "
            aria-hidden="true"
        ></div>

    <section class="relative z-10 py-24 lg:py-36 border-b border-primary/20">
        <div class="container mx-auto px-6 lg:px-9 xl:px-12">

            {{-- Header --}}
            <div class="flex flex-col gap-4 mb-12">
                <p class="reveal font-body text-accent tracking-widest uppercase text-base" style="transition-delay: 0ms">Project</p>
                <h1 class="reveal font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight" style="transition-delay: 80ms">3D Print Cost Calculator.</h1>
                <p class="reveal font-body text-base text-text-300 leading-relaxed max-w-2xl" style="transition-delay: 160ms">
                    A web-based tool to accurately calculate the cost of 3D printing jobs — filament, electricity, machine wear, labor, and profit margin. Built for makers, hobbyists, and small businesses.
                </p>

                {{-- Stack tags --}}
                <div class="reveal flex flex-wrap gap-2 mt-2" style="transition-delay: 240ms">
                    @foreach (['HTML', 'CSS', 'JavaScript', 'BeerCSS'] as $tag)
                        <span class="px-3 py-1 rounded-full text-base font-body text-accent border border-accent/30 bg-accent/5">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>
            </div>

            {{-- iframe --}}
            <div class="reveal w-full rounded-2xl overflow-hidden border border-primary/20" style="height: 90vh; transition-delay: 320ms">
                <iframe
                    src="/projects/3d-print-calculator/index.html"
                    title="3D Print Cost Calculator"
                    class="w-full h-full"
                    loading="lazy"
                ></iframe>
            </div>

        </div>
    </section>
    </div>

</x-layouts.app>
