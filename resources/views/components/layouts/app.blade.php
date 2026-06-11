<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Usoppii' }}</title>
        <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
        <link rel="shortcut icon" href="/favicon/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
        <link rel="manifest" href="/favicon/site.webmanifest" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css?family=Plus+Jakarta+Sans:700|Miranda+Sans:400" rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="scroll-smooth">
        <x-navbar />

        <main class="pt-18">
            {{ $slot }}
        </main>

        <x-footer />

        {{-- Back to top --}}
        <button
            id="back-to-top"
            onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
            aria-label="Back to top"
            class="fixed bottom-6 right-6 z-50 flex items-center justify-center w-11 h-11 rounded-full
                border border-primary/40 bg-background/80 backdrop-blur-md text-text-300
                hover:border-accent hover:text-accent
                active:scale-95 active:text-accent-600
                transition-all duration-200 cursor-pointer opacity-0 translate-y-4
                focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
        >
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <polyline points="18 15 12 9 6 15"/>
            </svg>
        </button>
    </body>
</html>
