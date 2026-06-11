{{-- Tech Stack Ticker --}}
<div class="relative overflow-hidden border-y border-primary/30 py-4 bg-primary/10" aria-label="Tech stack" aria-hidden="true">
    <div class="ticker-track flex gap-12 w-max">
        @foreach (['Laravel', 'PHP', 'Vue.js', 'React', 'TypeScript', 'JavaScript', 'MySQL', 'PostgreSQL', 'Docker', 'Tailwind CSS', 'Node.js', 'Git'] as $tech)
            <span class="flex items-center gap-12 font-heading font-bold text-base text-text-300 uppercase tracking-widest whitespace-nowrap">
                {{ $tech }}
                <span class="text-accent leading-none" aria-hidden="true">&#9679;</span>
            </span>
        @endforeach
        {{-- Duplicate for seamless loop --}}
        @foreach (['Laravel', 'PHP', 'Vue.js', 'React', 'TypeScript', 'JavaScript', 'MySQL', 'PostgreSQL', 'Docker', 'Tailwind CSS', 'Node.js', 'Git'] as $tech)
            <span class="flex items-center gap-12 font-heading font-bold text-base text-text-300 uppercase tracking-widest whitespace-nowrap">
                {{ $tech }}
                <span class="text-accent leading-none" aria-hidden="true">&#9679;</span>
            </span>
        @endforeach
    </div>
</div>
