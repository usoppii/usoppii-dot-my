<x-layouts.app title="MZ Video Downloader — Usoppii">

    {{-- Hero background fade --}}
    <div class="relative overflow-hidden">
        <div
            class="absolute inset-0 bg-center bg-cover bg-no-repeat pointer-events-none"
            style="
                background-image: url('/images/backgrounds/video-download-bg-page.webp');
                mask-image: linear-gradient(to bottom, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.2) 75%, rgba(0,0,0,0) 100%);
                -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,0.45) 0%, rgba(0,0,0,0.2) 75%, rgba(0,0,0,0) 100%);
            "
            aria-hidden="true"
        ></div>

    <section class="relative z-10 py-24 lg:py-36 border-b border-primary/20">
        <div class="container mx-auto px-6 lg:px-9 xl:px-12">

            {{-- Header --}}
            <div class="flex flex-col gap-4 mb-12">
                <p class="reveal font-body text-accent tracking-widest uppercase text-base" style="transition-delay: 0ms">Project</p>
                <h1 class="reveal font-heading text-4xl lg:text-5xl font-bold text-text leading-none tracking-tight" style="transition-delay: 80ms">MZ Video Downloader.</h1>
                <p class="reveal font-body text-base text-text-300 leading-relaxed max-w-2xl" style="transition-delay: 160ms">
                    A lightweight Electron desktop app for downloading videos from YouTube, Instagram, TikTok, Twitter/X, Facebook, Twitch, SoundCloud, Vimeo, and 1000+ more sites — powered by <a href="https://github.com/yt-dlp/yt-dlp" target="_blank" rel="noopener noreferrer" class="relative inline-block text-accent after:absolute after:bottom-0 after:left-0 after:h-px after:w-0 after:bg-accent hover:after:w-full after:transition-all after:duration-200">yt-dlp</a> and ffmpeg.
                </p>

                {{-- Stack tags --}}
                <div class="reveal flex flex-wrap gap-2 mt-2" style="transition-delay: 240ms">
                    @foreach (['Electron', 'JavaScript', 'BeerCSS', 'yt-dlp', 'ffmpeg'] as $tag)
                        <span class="px-3 py-1 rounded-full text-base font-body text-accent border border-accent/30 bg-accent/5">
                            {{ $tag }}
                        </span>
                    @endforeach
                </div>

                {{-- Download buttons --}}
                <div class="reveal flex flex-wrap items-center gap-3 mt-2" style="transition-delay: 320ms">
                    <a
                        href="https://github.com/MazeM3dia/MZ-Video-Downloader-Desktop/releases/download/v0.2.0/MZ.Video.Downloader.0.2.0.exe"
                        title="Download MZ Video Downloader v0.2.0"
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-full font-heading font-bold text-base
                            bg-accent text-background hover:bg-accent-400 active:scale-95 active:bg-accent-600
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 256 256" aria-hidden="true">
                            <path d="M224,144v64a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V144a8,8,0,0,1,16,0v56H208V144a8,8,0,0,1,16,0Zm-101.66,5.66a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0-11.32-11.32L136,124.69V32a8,8,0,0,0-16,0v92.69L93.66,98.34a8,8,0,0,0-11.32,11.32Z"/>
                        </svg>
                        Download Video Downloader v0.2.0 (.exe)
                    </a>
                    <a
                        href="https://get.videolan.org/vlc/3.0.23/win64/vlc-3.0.23-win64.exe"
                        title="Download VLC Media Player"
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-full font-heading font-bold text-base
                            border border-primary/40 text-text-300 hover:border-accent hover:text-accent active:scale-95
                            transition-all duration-200 cursor-pointer
                            focus:outline-none focus-visible:ring-2 focus-visible:ring-accent focus-visible:ring-offset-2 focus-visible:ring-offset-background"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 256 256" aria-hidden="true">
                            <path d="M224,144v64a8,8,0,0,1-8,8H40a8,8,0,0,1-8-8V144a8,8,0,0,1,16,0v56H208V144a8,8,0,0,1,16,0Zm-101.66,5.66a8,8,0,0,0,11.32,0l40-40a8,8,0,0,0-11.32-11.32L136,124.69V32a8,8,0,0,0-16,0v92.69L93.66,98.34a8,8,0,0,0-11.32,11.32Z"/>
                        </svg>
                        Download VLC Player
                    </a>
                </div>
            </div>

            {{-- Screenshots grid --}}
            <div class="reveal grid grid-cols-1 md:grid-cols-2 gap-4 mb-16" style="transition-delay: 0ms">
                @foreach ([
                    ['src' => 'https://raw.githubusercontent.com/MazeM3dia/MZ-Video-Downloader-Desktop/master/images/image-1.png', 'alt' => 'Main screen'],
                    ['src' => 'https://raw.githubusercontent.com/MazeM3dia/MZ-Video-Downloader-Desktop/master/images/image-2.png', 'alt' => 'Fetch video'],
                    ['src' => 'https://raw.githubusercontent.com/MazeM3dia/MZ-Video-Downloader-Desktop/master/images/image-3.png', 'alt' => 'Downloading'],
                    ['src' => 'https://raw.githubusercontent.com/MazeM3dia/MZ-Video-Downloader-Desktop/master/images/image-4.png', 'alt' => 'Completed'],
                ] as $screenshot)
                <div class="rounded-2xl overflow-hidden border border-primary/20 bg-primary/5">
                    <img
                        src="{{ $screenshot['src'] }}"
                        alt="{{ $screenshot['alt'] }}"
                        title="{{ $screenshot['alt'] }}"
                        class="w-full h-full object-cover"
                        loading="lazy"
                    >
                </div>
                @endforeach
            </div>

            {{-- Windows SmartScreen warning --}}
            <div class="reveal flex gap-4 p-5 rounded-2xl border border-yellow-500/30 bg-yellow-500/5 mb-16" style="transition-delay: 0ms">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-yellow-400 shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 256 256" aria-hidden="true">
                    <path d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM222.93,203.8a8.5,8.5,0,0,1-7.48,4.2H40.55a8.5,8.5,0,0,1-7.48-4.2,7.59,7.59,0,0,1,0-7.72L120.52,44.21a8.75,8.75,0,0,1,15,0l87.45,151.87A7.59,7.59,0,0,1,222.93,203.8ZM120,144V104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm20,36a12,12,0,1,1-12-12A12,12,0,0,1,140,180Z"/>
                </svg>
                <div class="flex flex-col gap-1">
                    <p class="font-heading font-bold text-base text-yellow-400">Windows SmartScreen Warning</p>
                    <p class="font-body text-base text-text-300 leading-relaxed">
                        Windows may show a "Windows protected your PC" screen when you first run the app — this is because the app isn't code-signed yet. It's safe to proceed: click <strong class="text-text font-heading">"More info"</strong> then <strong class="text-text font-heading">"Run anyway"</strong>.
                    </p>
                </div>
            </div>

            {{-- Details grid --}}
            <div class="reveal grid grid-cols-1 lg:grid-cols-2 gap-12" style="transition-delay: 0ms">

                {{-- Features --}}
                <div class="flex flex-col gap-6">
                    <h2 class="font-heading text-2xl font-bold text-text">Features</h2>
                    <ul class="flex flex-col gap-3">
                        @foreach ([
                            ['label' => 'Multi-format downloads', 'desc' => '1080p, 720p, 480p, 360p video (MP4) or MP3 audio'],
                            ['label' => 'Batch downloads', 'desc' => 'Queue multiple videos simultaneously'],
                            ['label' => 'Real-time progress', 'desc' => 'Speed, ETA, and file size shown during download'],
                            ['label' => 'Custom save location', 'desc' => 'Pick any folder per session'],
                            ['label' => 'Auto-paste URL', 'desc' => 'Clipboard URL is pasted automatically on focus'],
                            ['label' => 'Smart error messages', 'desc' => 'Identifies private, unavailable, age-restricted, and geo-blocked videos'],
                            ['label' => 'Clean UI', 'desc' => 'Built with BeerCSS (Material Design 3)'],
                        ] as $feature)
                        <li class="flex gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-accent shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 256 256" aria-hidden="true">
                                <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"/>
                            </svg>
                            <span class="font-body text-base text-text-300 leading-relaxed">
                                <strong class="font-heading text-text">{{ $feature['label'] }}</strong> — {{ $feature['desc'] }}
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- How to use + System Requirements --}}
                <div class="flex flex-col gap-10">
                    <div class="flex flex-col gap-6">
                        <h2 class="font-heading text-2xl font-bold text-text">How To Use</h2>
                        <ol class="flex flex-col gap-3">
                            @foreach ([
                                ['step' => 'Paste URL', 'desc' => 'Copy a video link — it auto-pastes when you click the URL field.'],
                                ['step' => 'Fetch Video', 'desc' => 'Click Fetch Video (or press Enter) to load title, thumbnail, and duration.'],
                                ['step' => 'Choose Format', 'desc' => 'Select quality (default: 1080p) or MP3 audio.'],
                                ['step' => 'Select Location', 'desc' => '(Optional) Click Download Location to change save folder.'],
                                ['step' => 'Download', 'desc' => 'Click Start Download — progress, speed, and ETA update in real time.'],
                                ['step' => 'Open File', 'desc' => 'Click Show in folder once download completes.'],
                                ['step' => 'New Download', 'desc' => 'Click New Download (top right) to download another video.'],
                            ] as $i => $step)
                            <li class="flex gap-3">
                                <span class="flex items-center justify-center w-6 h-6 rounded-full text-base font-heading font-bold text-background bg-accent shrink-0 mt-0.5">{{ $i + 1 }}</span>
                                <span class="font-body text-base text-text-300 leading-relaxed">
                                    <strong class="font-heading text-text">{{ $step['step'] }}</strong> — {{ $step['desc'] }}
                                </span>
                            </li>
                            @endforeach
                        </ol>
                    </div>

                    <div class="flex flex-col gap-4">
                        <h2 class="font-heading text-2xl font-bold text-text">System Requirements</h2>
                        <ul class="flex flex-col gap-2">
                            <li class="font-body text-base text-text-300"><strong class="font-heading text-text">OS:</strong> Windows 10 / 11 (x64)</li>
                            <li class="font-body text-base text-text-300"><strong class="font-heading text-text">Installation:</strong> No installation required — single portable .exe</li>
                        </ul>
                    </div>
                </div>

            </div>

            {{-- Troubleshooting --}}
            <div class="reveal flex flex-col gap-6 mt-12" style="transition-delay: 0ms">
                <h2 class="font-heading text-2xl font-bold text-text">Troubleshooting</h2>
                <div class="rounded-2xl border border-primary/20 overflow-hidden">
                    <table class="w-full font-body text-base">
                        <thead>
                            <tr class="border-b border-primary/20 bg-primary/5">
                                <th class="text-left px-6 py-4 font-heading text-text">Problem</th>
                                <th class="text-left px-6 py-4 font-heading text-text">Cause</th>
                                <th class="text-left px-6 py-4 font-heading text-text">Fix</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ([
                                ['problem' => '"Video is private"', 'cause' => 'Video requires login', 'fix' => 'Use a public video'],
                                ['problem' => '"Age-restricted"', 'cause' => 'Platform requires sign-in', 'fix' => 'Not supported'],
                                ['problem' => '"Geo-blocked"', 'cause' => 'Not available in your region', 'fix' => 'Use a VPN'],
                                ['problem' => 'Audio won\'t play on Windows', 'cause' => 'Opus codec not supported by Windows Media Player', 'fix' => 'Download again — app now prefers AAC'],
                                ['problem' => 'Download fails', 'cause' => 'yt-dlp outdated', 'fix' => 'Replace yt-dlp.exe in the app\'s bin folder with the latest from yt-dlp releases'],
                            ] as $row)
                            <tr class="border-b border-primary/20 last:border-0 hover:bg-primary/5 transition-colors duration-200">
                                <td class="px-6 py-4 text-text-300">{{ $row['problem'] }}</td>
                                <td class="px-6 py-4 text-text-300">{{ $row['cause'] }}</td>
                                <td class="px-6 py-4 text-text-300">{{ $row['fix'] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
    </div>

</x-layouts.app>
