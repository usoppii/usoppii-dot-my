{{-- Design System — Page Header --}}
<section class="py-24 lg:py-36 border-b border-primary/20" aria-label="Design System Header">
    <div class="container mx-auto px-6 lg:px-9 xl:px-12">
        <div class="flex flex-col gap-4">
            <p class="font-body text-accent tracking-widest uppercase text-base">Design System</p>
            <h1 class="font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight">
                Usoppii Design System.
            </h1>
            <p class="font-body text-text-300 text-xl leading-relaxed max-w-2xl mt-2">
                Colors, typography, components, and interaction patterns used across this portfolio.
            </p>

            {{-- Section index --}}
            <div class="flex flex-wrap gap-x-6 gap-y-2 pt-4">
                @foreach ([
                    ['#ds-colors',     '01 — Colors'],
                    ['#ds-typography', '02 — Typography'],
                    ['#ds-buttons',    '03 — Buttons'],
                    ['#ds-badges',     '04 — Badges'],
                    ['#ds-cards',      '05 — Cards'],
                ] as [$href, $label])
                <a href="{{ $href }}"
                    class="relative font-body text-base text-text-300
                        after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-accent after:transition-all after:duration-200
                        hover:text-accent hover:after:w-full
                        transition-colors duration-200 cursor-pointer"
                >{{ $label }}</a>
                @endforeach
            </div>
        </div>
    </div>
</section>
