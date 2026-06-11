{{-- Design System — Badges & Labels --}}
<section class="py-24 lg:py-36 border-b border-primary/20" id="ds-badges" aria-label="Design System Badges">
    <div class="container mx-auto px-6 lg:px-9 xl:px-12">

        <div class="flex flex-col gap-2 mb-12 lg:mb-16">
            <p class="font-body text-accent tracking-widest uppercase text-base">04</p>
            <h2 class="font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight">Badges &amp; Labels.</h2>
        </div>

        <div class="flex flex-col gap-16">

            {{-- Stack tags --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Stack Tags</h3>
                    <p class="font-body text-base text-text-300">Used on project cards to label technologies. Accent border + tinted background.</p>
                </div>
                <div class="flex flex-wrap gap-2">
                    @foreach (['Laravel', 'PHP', 'Vue.js', 'React', 'TypeScript', 'MySQL', 'Tailwind CSS', 'Docker', 'Node.js', 'PostgreSQL', 'Git'] as $tag)
                    <span class="px-3 py-1 rounded-full text-base font-body text-accent border border-accent/30 bg-accent/5">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
            </div>

            {{-- Status badges --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Status Badges</h3>
                    <p class="font-body text-base text-text-300">Semantic status indicators.</p>
                </div>
                <div class="flex flex-wrap items-center gap-3">
                    <span class="px-3 py-1 rounded-full text-sm font-body font-bold bg-accent/10 text-accent border border-accent/30">Active</span>
                    <span class="px-3 py-1 rounded-full text-sm font-body font-bold bg-primary/10 text-primary border border-primary/30">In Progress</span>
                    <span class="px-3 py-1 rounded-full text-sm font-body font-bold bg-text-300/10 text-text-300 border border-text-300/20">Archived</span>
                    <span class="px-3 py-1 rounded-full text-sm font-body font-bold bg-secondary/20 text-text-200 border border-secondary/30">Beta</span>
                </div>
            </div>

            {{-- Section eyebrow --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Section Eyebrow</h3>
                    <p class="font-body text-base text-text-300">Accent label above section headings. <code class="text-accent">font-body text-accent tracking-widest uppercase text-base</code></p>
                </div>
                <div class="flex flex-wrap items-center gap-6">
                    @foreach (['About Me', 'My Work', 'Get In Touch', 'Design System'] as $label)
                    <p class="font-body text-accent tracking-widest uppercase text-base">{{ $label }}</p>
                    @endforeach
                </div>
            </div>

            {{-- Ticker item --}}
            <div class="flex flex-col gap-6">
                <div class="flex flex-col gap-1">
                    <h3 class="font-heading text-xl font-bold text-text-300 uppercase tracking-widest">Ticker Item</h3>
                    <p class="font-body text-base text-text-300">Used in the scrolling tech stack bar. Dot separator in accent colour.</p>
                </div>
                <div class="flex items-center gap-12 flex-wrap">
                    @foreach (['Laravel', 'Vue.js', 'TypeScript', 'PostgreSQL'] as $tech)
                    <span class="flex items-center gap-12 font-heading font-bold text-base text-text-300 uppercase tracking-widest whitespace-nowrap">
                        {{ $tech }}
                        <span class="text-accent leading-none" aria-hidden="true">&#9679;</span>
                    </span>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
