<x-layouts.welcome-layout>
    {{-- ===== 01. THE RADAR (Hero Section) ===== --}}
    <section
        class="relative w-full h-[90vh] lg:h-screen bg-zinc-950 flex items-center overflow-hidden border-b border-white/5">
        <div class="absolute inset-0 pointer-events-none">
            <div
                class="absolute top-0 left-1/2 w-px h-full bg-gradient-to-b from-transparent via-lime-400/20 to-transparent animate-pulse">
            </div>
            <div
                class="absolute top-1/2 left-0 w-full h-px bg-gradient-to-r from-transparent via-white/5 to-transparent">
            </div>
        </div>

        <div class="max-w-[100rem] mx-auto px-6 lg:px-20 w-full relative z-10">
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-16">

                <div class="order-2 lg:order-1">
                    <p class="text-lime-400 text-[10px] font-black uppercase tracking-[0.5em] mb-4">Establishing
                        Connection...</p>
                    <h1
                        class="text-7xl sm:text-8xl lg:text-[10rem] xl:text-[12rem] font-black text-white leading-[0.8] tracking-tighter uppercase">
                        The <br />
                        <span class="text-transparent"
                            style="-webkit-text-stroke: 1px rgba(255,255,255,0.2);">Studio</span>
                    </h1>
                    <div class="mt-12">
                        <a href="#gallery"
                            class="group relative inline-flex items-center justify-center px-10 py-5 rounded-full bg-white text-zinc-950 text-xs font-black uppercase tracking-widest overflow-hidden transition-all hover:bg-lime-400">
                            <span class="relative z-10">Enter Archive</span>
                        </a>
                    </div>
                </div>

                <div class="order-1 lg:order-2 relative">
                    <div
                        class="relative h-[300px] w-[300px] sm:h-[450px] sm:w-[450px] rounded-full border-2 border-white/5 p-4 flex items-center justify-center">
                        <div class="absolute inset-0 rounded-full border border-lime-400/20 animate-spin-slow"></div>
                        <div
                            class="h-full w-full rounded-full overflow-hidden grayscale hover:grayscale-0 transition-all duration-1000">
                            <img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e?q=80"
                                class="h-full w-full object-cover" alt="Lens Visual" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== 02. STATIC GRID ARCHIVE (2 Rows x 4 Columns) ===== --}}
    <section id="gallery" class="bg-zinc-950 py-24 sm:py-32 border-b border-white/5">
        <div class="max-w-[100rem] mx-auto px-6 lg:px-20">

            {{-- Section Header --}}
            <div class="mb-16 flex flex-col sm:flex-row sm:items-end justify-between gap-8">
                <div>
                    <h2 class="text-4xl font-black text-white uppercase tracking-tighter">Project // <span
                            class="text-lime-400">Chronicles</span></h2>
                    <p class="text-zinc-500 text-[10px] font-bold uppercase tracking-widest mt-2">Static Index // 08
                        Units Displayed</p>
                </div>
                <div class="hidden lg:block text-zinc-800 text-xs font-black tracking-[0.4em] uppercase">
                    Status: Verified
                </div>
            </div>

            {{-- The Grid (2 Rows of 4) --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                @foreach ([['01', 'Heritage Wedding', 'https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80'], ['02', 'Noir Portraits', 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80'], ['03', 'Street Editorial', 'https://images.unsplash.com/photo-1520854221256-17451cc331bf?q=80'], ['04', 'Architecture', 'https://images.unsplash.com/photo-1606800052052-a08af7148866?q=80'], ['05', 'Cinematic Motion', 'https://images.unsplash.com/photo-1519741497674-611481863552?q=80'], ['06', 'Urban Stories', 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80'], ['07', 'Vogue Concept', 'https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80'], ['08', 'Luxury Lifestyle', 'https://images.unsplash.com/photo-1496747611176-843222e1e57c?q=80']] as [$idx, $title, $img])
                    <div
                        class="group relative aspect-[4/5] sm:aspect-square lg:aspect-[3/4] overflow-hidden rounded-2xl border border-white/5 bg-zinc-900 transition-all duration-500 hover:border-lime-400/30">
                        <img src="{{ $img }}"
                            class="w-full h-full object-cover grayscale transition-all duration-1000 group-hover:grayscale-0 group-hover:scale-105"
                            alt="{{ $title }}" />

                        {{-- Cyber Overlay --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-transparent to-transparent opacity-80 group-hover:opacity-40 transition-opacity">
                        </div>

                        {{-- Text Info --}}
                        <div class="absolute bottom-6 left-6 right-6">
                            <span
                                class="text-lime-400 text-[9px] font-black tracking-[0.4em] uppercase">Archive_{{ $idx }}</span>
                            <h3
                                class="text-white text-base font-bold uppercase tracking-widest mt-1 transform group-hover:translate-x-2 transition-transform">
                                {{ $title }}</h3>
                        </div>

                        {{-- Corner Accent --}}
                        <div
                            class="absolute top-4 right-4 h-6 w-6 border-t border-r border-white/10 group-hover:border-lime-400 transition-colors">
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Bottom CTA --}}
            <div class="mt-16 text-center">
                <a href="{{ url('/portfolio') }}"
                    class="inline-flex items-center gap-4 text-zinc-500 text-[10px] font-black uppercase tracking-[0.3em] hover:text-lime-400 transition-colors">
                    Explore Full Archive
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="3">
                        <path d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- ===== 03. THE SCANNER (Technical Overview) ===== --}}
    <section class="bg-zinc-950 py-32">
        <div class="max-w-[90rem] mx-auto px-6 lg:px-20">
            <div class="grid lg:grid-cols-2 gap-20 items-center">
                <div class="relative">
                    <h3 class="text-5xl font-black text-white uppercase tracking-tighter mb-8 leading-tight">
                        Precision <br /> <span class="text-lime-400">Editing</span> Logic
                    </h3>
                    <p class="text-zinc-400 text-lg font-medium leading-relaxed mb-10 max-w-md">
                        Every frame undergoes a rigorous multi-layer grading process to ensure cinematic density and
                        chromatic accuracy.
                    </p>
                    <ul class="space-y-6">
                        @foreach (['4K Raw Workflow', '7-Day Rapid Sync', 'Global Operations'] as $item)
                            <li class="flex items-center gap-4">
                                <div class="h-2 w-2 bg-lime-400 rounded-full shadow-[0_0_10px_rgba(163,230,53,0.8)]">
                                </div>
                                <span
                                    class="text-white font-black uppercase text-xs tracking-[0.2em]">{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="relative h-[500px] rounded-[3rem] overflow-hidden border border-white/10 group">
                    <img src="https://images.unsplash.com/photo-1519741497674-611481863552?q=80"
                        class="h-full w-full object-cover grayscale transition-all duration-1000 group-hover:scale-110"
                        alt="Scanner Visual" />
                    <div
                        class="absolute top-0 left-0 w-full h-1 bg-lime-400 shadow-[0_0_20px_rgba(163,230,53,0.8)] animate-scan-line z-20">
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.welcome-layout>

@push('scripts')
    <style>
        @keyframes scan-line {

            0%,
            100% {
                top: 0%;
            }

            50% {
                top: 100%;
            }
        }

        .animate-scan-line {
            animation: scan-line 4s linear infinite;
            position: absolute;
        }

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 25s linear infinite;
        }
    </style>
@endpush
