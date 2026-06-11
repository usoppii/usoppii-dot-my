{{-- Design System — Typography --}}
<section class="py-24 lg:py-36 border-b border-primary/20" id="ds-typography" aria-label="Design System Typography">
    <div class="container mx-auto px-6 lg:px-9 xl:px-12">

        <div class="flex flex-col gap-2 mb-12 lg:mb-16">
            <p class="font-body text-accent tracking-widest uppercase text-base">02</p>
            <h2 class="font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight">Typography.</h2>
        </div>

        <div class="flex flex-col gap-16">

            {{-- Font families --}}
            <div class="flex flex-col gap-6">
                <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Font Families</h3>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-4 p-8 rounded-2xl border border-primary/20 bg-primary/5">
                        <code class="font-body text-base text-accent">font-heading</code>
                        <p class="font-heading text-4xl font-bold text-text leading-none tracking-tight">Plus Jakarta Sans</p>
                        <p class="font-heading text-base text-text-300 leading-loose tracking-wide">
                            A B C D E F G H I J K L M<br>
                            N O P Q R S T U V W X Y Z<br>
                            0 1 2 3 4 5 6 7 8 9
                        </p>
                        <p class="font-body text-base text-text-300">Used for: headings, labels, CTAs, nav</p>
                    </div>
                    <div class="flex flex-col gap-4 p-8 rounded-2xl border border-primary/20 bg-primary/5">
                        <code class="font-body text-base text-accent">font-body</code>
                        <p class="font-body text-4xl font-bold text-text leading-none">Miranda Sans</p>
                        <p class="font-body text-base text-text-300 leading-loose tracking-wide">
                            A B C D E F G H I J K L M<br>
                            N O P Q R S T U V W X Y Z<br>
                            0 1 2 3 4 5 6 7 8 9
                        </p>
                        <p class="font-body text-base text-text-300">Used for: body copy, captions, code</p>
                    </div>
                </div>
            </div>

            {{-- Type scale --}}
            <div class="flex flex-col gap-6">
                <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Type Scale</h3>
                <div class="flex flex-col border border-primary/20 rounded-2xl overflow-hidden">
                    @foreach ([
                        ['class' => 'text-sm',   'label' => 'text-sm',   'size' => '0.75rem',  'px' => '~12px'],
                        ['class' => 'text-base', 'label' => 'text-base', 'size' => '1rem',     'px' => '16px'],
                        ['class' => 'text-xl',   'label' => 'text-xl',   'size' => '1.333rem', 'px' => '~21px'],
                        ['class' => 'text-2xl',  'label' => 'text-2xl',  'size' => '1.777rem', 'px' => '~28px'],
                        ['class' => 'text-3xl',  'label' => 'text-3xl',  'size' => '2.369rem', 'px' => '~38px'],
                        ['class' => 'text-4xl',  'label' => 'text-4xl',  'size' => '3.158rem', 'px' => '~51px'],
                        ['class' => 'text-5xl',  'label' => 'text-5xl',  'size' => '4.210rem', 'px' => '~67px'],
                    ] as $index => $size)
                    <div class="flex items-center gap-6 px-6 py-4 {{ $index > 0 ? 'border-t border-primary/10' : '' }} flex-wrap">
                        <span class="font-heading font-bold text-text {{ $size['class'] }} leading-none shrink-0 min-w-12">Aa</span>
                        <div class="flex items-center gap-4 ml-auto flex-wrap justify-end">
                            <code class="font-body text-base text-accent shrink-0">{{ $size['label'] }}</code>
                            <span class="font-body text-base text-text-300 shrink-0">{{ $size['size'] }}</span>
                            <span class="font-body text-sm text-text-300/60 shrink-0">{{ $size['px'] }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Font weights --}}
            <div class="flex flex-col gap-6">
                <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Font Weights</h3>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach ([
                        ['weight' => 'font-normal',   'label' => 'Normal',   'num' => '400'],
                        ['weight' => 'font-medium',   'label' => 'Medium',   'num' => '500'],
                        ['weight' => 'font-semibold', 'label' => 'Semibold', 'num' => '600'],
                        ['weight' => 'font-bold',     'label' => 'Bold',     'num' => '700'],
                    ] as $w)
                    <div class="flex flex-col gap-3 p-6 rounded-2xl border border-primary/20 bg-primary/5">
                        <span class="font-heading {{ $w['weight'] }} text-3xl text-text leading-none">Ag</span>
                        <div class="flex flex-col gap-0.5 pt-2 border-t border-primary/20">
                            <span class="font-body text-base text-text-300">{{ $w['label'] }}</span>
                            <code class="font-body text-sm text-accent">{{ $w['num'] }}</code>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Common text styles --}}
            <div class="flex flex-col gap-6">
                <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Common Styles</h3>
                <div class="flex flex-col border border-primary/20 rounded-2xl overflow-hidden">
                    @foreach ([
                        ['sample' => 'Section Heading', 'class' => 'font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight', 'desc' => 'h2 — Section titles'],
                        ['sample' => 'Subsection Title', 'class' => 'font-heading text-2xl font-bold text-text leading-tight', 'desc' => 'h3 — Card/subsection titles'],
                        ['sample' => 'EYEBROW LABEL', 'class' => 'font-body text-accent tracking-widest uppercase text-base', 'desc' => 'Section eyebrow'],
                        ['sample' => 'Body copy — used for descriptions and supporting text across all sections.', 'class' => 'font-body text-text-300 text-xl leading-relaxed', 'desc' => 'Body text'],
                        ['sample' => 'Small caption or meta text', 'class' => 'font-body text-base text-text-300', 'desc' => 'Secondary body'],
                    ] as $index => $style)
                    <div class="px-6 py-5 {{ $index > 0 ? 'border-t border-primary/10' : '' }} flex flex-col gap-2">
                        <p class="{{ $style['class'] }}">{{ $style['sample'] }}</p>
                        <code class="font-body text-sm text-text-300/60">{{ $style['desc'] }}</code>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
