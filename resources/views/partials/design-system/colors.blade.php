{{-- Design System — Colors --}}
<section class="py-24 lg:py-36 border-b border-primary/20" id="ds-colors" aria-label="Design System Colors">
    <div class="container mx-auto px-6 lg:px-9 xl:px-12">

        <div class="flex flex-col gap-2 mb-12 lg:mb-16">
            <p class="font-body text-accent tracking-widest uppercase text-base">01</p>
            <h2 class="font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight">Colors.</h2>
        </div>

        <div class="flex flex-col gap-16">

            {{-- Base tokens --}}
            <div class="flex flex-col gap-6">
                <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Base Tokens</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                    @foreach ([
                        ['label' => 'Background', 'swatch' => 'bg-background border border-primary/40', 'var' => '--color-background', 'light' => false],
                        ['label' => 'Text',        'swatch' => 'bg-text',                                'var' => '--color-text',       'light' => true],
                        ['label' => 'Primary',     'swatch' => 'bg-primary',                             'var' => '--color-primary',    'light' => true],
                        ['label' => 'Secondary',   'swatch' => 'bg-secondary',                           'var' => '--color-secondary',  'light' => false],
                        ['label' => 'Accent',      'swatch' => 'bg-accent',                              'var' => '--color-accent',     'light' => true],
                    ] as $swatch)
                    <div class="flex flex-col gap-3">
                        <div class="h-20 rounded-2xl {{ $swatch['swatch'] }}"></div>
                        <div class="flex flex-col gap-1">
                            <span class="font-heading font-bold text-base text-text">{{ $swatch['label'] }}</span>
                            <code class="font-body text-sm text-text-300">{{ $swatch['var'] }}</code>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Accent scale --}}
            <div class="flex flex-col gap-6">
                <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Accent Scale</h3>
                <div class="overflow-x-auto">
                    <div class="flex gap-2 min-w-max">
                        @foreach ([
                            ['shade' => '50',  'class' => 'bg-accent-50',  'dark' => true],
                            ['shade' => '100', 'class' => 'bg-accent-100', 'dark' => true],
                            ['shade' => '200', 'class' => 'bg-accent-200', 'dark' => true],
                            ['shade' => '300', 'class' => 'bg-accent-300', 'dark' => true],
                            ['shade' => '400', 'class' => 'bg-accent-400', 'dark' => true],
                            ['shade' => '500', 'class' => 'bg-accent-500', 'dark' => true],
                            ['shade' => '600', 'class' => 'bg-accent-600', 'dark' => false],
                            ['shade' => '700', 'class' => 'bg-accent-700', 'dark' => false],
                            ['shade' => '800', 'class' => 'bg-accent-800', 'dark' => false],
                            ['shade' => '900', 'class' => 'bg-accent-900', 'dark' => false],
                            ['shade' => '950', 'class' => 'bg-accent-950', 'dark' => false],
                        ] as $s)
                        <div class="flex flex-col gap-2 w-16 shrink-0">
                            <div class="h-16 rounded-xl {{ $s['class'] }}"></div>
                            <span class="font-body text-sm text-text-300 text-center">{{ $s['shade'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Primary scale --}}
            <div class="flex flex-col gap-6">
                <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Primary Scale</h3>
                <div class="overflow-x-auto">
                    <div class="flex gap-2 min-w-max">
                        @foreach ([
                            ['shade' => '50',  'class' => 'bg-primary-50'],
                            ['shade' => '100', 'class' => 'bg-primary-100'],
                            ['shade' => '200', 'class' => 'bg-primary-200'],
                            ['shade' => '300', 'class' => 'bg-primary-300'],
                            ['shade' => '400', 'class' => 'bg-primary-400'],
                            ['shade' => '500', 'class' => 'bg-primary-500'],
                            ['shade' => '600', 'class' => 'bg-primary-600'],
                            ['shade' => '700', 'class' => 'bg-primary-700'],
                            ['shade' => '800', 'class' => 'bg-primary-800'],
                            ['shade' => '900', 'class' => 'bg-primary-900'],
                            ['shade' => '950', 'class' => 'bg-primary-950'],
                        ] as $s)
                        <div class="flex flex-col gap-2 w-16 shrink-0">
                            <div class="h-16 rounded-xl {{ $s['class'] }}"></div>
                            <span class="font-body text-sm text-text-300 text-center">{{ $s['shade'] }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Text colour scale (shown on contrasting bg) --}}
            <div class="flex flex-col gap-6">
                <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Text Scale</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3">
                    @foreach ([
                        ['label' => 'text',     'class' => 'text-text'],
                        ['label' => 'text-50',  'class' => 'text-text-50'],
                        ['label' => 'text-100', 'class' => 'text-text-100'],
                        ['label' => 'text-200', 'class' => 'text-text-200'],
                        ['label' => 'text-300', 'class' => 'text-text-300'],
                        ['label' => 'text-400', 'class' => 'text-text-400'],
                        ['label' => 'text-500', 'class' => 'text-text-500'],
                        ['label' => 'text-600', 'class' => 'text-text-600'],
                        ['label' => 'text-700', 'class' => 'text-text-700'],
                        ['label' => 'text-800', 'class' => 'text-text-800'],
                        ['label' => 'text-900', 'class' => 'text-text-900'],
                        ['label' => 'text-950', 'class' => 'text-text-950'],
                    ] as $s)
                    <div class="flex items-center justify-between gap-4 px-4 py-3 rounded-xl border border-primary/20 bg-primary/5">
                        <span class="font-heading font-bold text-2xl {{ $s['class'] }} leading-none">Aa</span>
                        <code class="font-body text-base text-text-300 shrink-0">{{ $s['label'] }}</code>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
