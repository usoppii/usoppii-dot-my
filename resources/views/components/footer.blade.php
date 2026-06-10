<footer class="border-t border-primary/20 bg-primary/5">
    <div class="container mx-auto px-6 lg:px-9 xl:px-12 py-6 flex flex-col lg:flex-row items-center justify-between gap-2 text-text-300 font-body text-base">
        <span>© {{ date('Y') }} <a href="{{ route('home') }}" title="Usoppii — Home" class="text-accent hover:text-accent-400 active:text-accent-600 hover:underline hover:underline-offset-4 transition-colors duration-200">{{ config('app.name') }}</a>. All rights reserved.</span>
        <span>Developed by Usoppii</span>
    </div>
</footer>
