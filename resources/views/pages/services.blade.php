<x-welcome-layout>
    {{-- ===== Carbon & Cyber Hero Section ===== --}}
    <section class="relative w-full bg-zinc-950 pt-28 sm:pt-36 lg:pt-44 pb-16 sm:pb-24 lg:pb-32 overflow-hidden">

        {{-- Decorative High-Tech Glows --}}
        <div
            class="absolute top-0 right-0 w-[30rem] sm:w-[40rem] h-[30rem] sm:h-[40rem] bg-lime-400/5 rounded-full blur-[120px] pointer-events-none -translate-y-1/3 translate-x-1/3">
        </div>
        <div
            class="absolute bottom-0 left-0 w-[20rem] h-[20rem] bg-indigo-500/5 rounded-full blur-[100px] pointer-events-none">
        </div>

        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-10 xl:px-16 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-8">

                {{-- ── Left: Typography & Intro ── --}}
                <div class="w-full lg:w-1/2 flex flex-col justify-center items-start text-left z-20">

                    {{-- Cyber Badge --}}
                    <div
                        class="inline-flex items-center gap-3 px-4 py-2.5 rounded-full border border-white/10 bg-zinc-900 shadow-2xl mb-6 sm:mb-8 transition-transform hover:-translate-y-1">
                        <span class="text-lime-400 animate-pulse">✦</span>
                        <span class="text-[0.65rem] sm:text-xs font-black uppercase tracking-[0.25em] text-zinc-400">Our
                            Studio Services</span>
                    </div>

                    {{-- Carbon Headline --}}
                    <h1
                        class="text-5xl sm:text-6xl lg:text-[5.5rem] xl:text-[6.5rem] font-black text-white tracking-tighter leading-[0.95] mb-6 sm:mb-8">
                        Moments, <br />
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-lime-400 to-emerald-400">Immortalized.</span>
                    </h1>

                    {{-- Paragraph --}}
                    <p
                        class="text-zinc-400 text-base sm:text-lg lg:text-xl max-w-md leading-relaxed mb-8 sm:mb-10 font-medium">
                        Specializing in high-performance wedding coverage and cinematic event storytelling. We use a
                        technical approach to capture raw, authentic stories with precision.
                    </p>

                    {{-- Scroll Down CTA --}}
                    <div class="flex items-center gap-6">
                        <a href="#servicesGrid"
                            class="group flex items-center gap-4 text-sm font-black uppercase tracking-[0.2em] text-white hover:text-lime-400 transition-colors">
                            <span
                                class="flex h-12 w-12 items-center justify-center rounded-2xl border border-white/10 bg-zinc-900 group-hover:border-lime-400/50 shadow-2xl transition-all">
                                <svg class="h-4 w-4 text-lime-400 group-hover:translate-y-1 transition-transform"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                                </svg>
                            </span>
                            View Services
                        </a>
                    </div>
                </div>

                {{-- ── Right: Overlapping Composition (Stealth Style) ── --}}
                <div class="w-full lg:w-1/2 relative h-[450px] sm:h-[550px] lg:h-[650px] mt-8 lg:mt-0">

                    {{-- Cyber Ring Background --}}
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[85%] aspect-square rounded-full border border-white/5 bg-zinc-900/20">
                    </div>

                    {{-- Image 1 --}}
                    <div
                        class="absolute top-[5%] right-[5%] w-[65%] h-[85%] rounded-[2rem] overflow-hidden shadow-2xl z-10 transition-all duration-700 hover:scale-105 border border-white/5">
                        <img src="https://images.unsplash.com/photo-1520854221256-17451cc331bf?q=80&w=1000&auto=format&fit=crop"
                            class="w-full h-full object-cover opacity-80" />
                    </div>

                    {{-- Image 2 --}}
                    <div
                        class="absolute bottom-[5%] left-[5%] w-[60%] h-[60%] rounded-[2rem] overflow-hidden shadow-2xl border-4 sm:border-8 border-zinc-950 z-20 transition-all duration-700 hover:scale-105 ring-1 ring-lime-400/20">
                        <img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e?q=80&w=1000&auto=format&fit=crop"
                            class="w-full h-full object-cover opacity-90" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===== Services Alternating Grid (Cyber-Glass) ===== --}}
    <section id="servicesGrid" class="w-full bg-zinc-950 py-16 sm:py-24 lg:py-32 overflow-hidden">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-10 xl:px-16 flex flex-col gap-24 sm:gap-32 lg:gap-40">

            {{-- Service 1: Wedding --}}
            <div class="flex flex-col lg:flex-row items-center gap-10 lg:gap-20 group">
                <div class="w-full lg:w-1/2 relative">
                    <div
                        class="absolute -inset-4 bg-lime-400/10 rounded-[3rem] blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    </div>
                    <div class="relative aspect-[4/5] rounded-[2rem] overflow-hidden shadow-2xl ring-1 ring-white/10">
                        <img src="https://images.unsplash.com/photo-1511285560929-80b456fea0bc?q=80&w=1200&auto=format&fit=crop"
                            class="w-full h-full object-cover grayscale-[0.5] group-hover:grayscale-0 transition-all duration-[10s]" />
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-lime-400">✦</span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-zinc-500">Tier One</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight mb-6 uppercase">
                        Wedding <span class="text-lime-400">Coverage</span>
                    </h2>
                    <p class="text-zinc-400 leading-relaxed mb-8 sm:text-lg">
                        Documenting the intensity and raw emotion of your union. Our technical approach ensures
                        cinematic precision and rapid delivery of your visual legacy.
                    </p>
                    <ul class="space-y-4 mb-10">
                        @foreach (['Full-day immersive coverage', 'Dual-perspective master shooters', 'Ultra-HD digital delivery'] as $item)
                            <li class="flex items-center gap-4 text-zinc-300 font-bold text-sm">
                                <svg class="h-5 w-5 text-lime-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="3">
                                    <path d="M5 13l4 4L19 7" />
                                </svg>
                                {{ $item }}
                            </li>
                        @endforeach
                    </ul>
                    <a href="{{ url('/contact') }}"
                        class="inline-flex items-center gap-2 text-xs font-black uppercase tracking-widest text-lime-400 hover:text-white transition-colors group/link">
                        Inquire Now
                        <svg class="h-4 w-4 transition-transform group-hover/link:translate-x-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Service 2: Pre-Wedding (Reversed) --}}
            <div class="flex flex-col lg:flex-row-reverse items-center gap-10 lg:gap-20 group">
                <div class="w-full lg:w-1/2 relative">
                    <div
                        class="absolute -inset-4 bg-indigo-500/10 rounded-[3rem] blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    </div>
                    <div class="relative aspect-[4/5] rounded-[2rem] overflow-hidden shadow-2xl ring-1 ring-white/10">
                        <img src="https://images.unsplash.com/photo-1583939003579-730e3918a45a?q=80&w=1200&auto=format&fit=crop"
                            class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-all duration-[10s]" />
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-indigo-400">✦</span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-zinc-500">Lifestyle</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight mb-6 uppercase">
                        Pre-Wedding <span class="text-indigo-400">Stories</span>
                    </h2>
                    <p class="text-zinc-400 leading-relaxed mb-8 sm:text-lg">
                        Conceptual visual storytelling. We curate editorial environments to capture the chemistry of
                        your connection before the main event.
                    </p>
                    <a href="{{ url('/contact') }}"
                        class="inline-flex items-center gap-2 text-xs font-black uppercase tracking-widest text-indigo-400 hover:text-white transition-colors group/link">
                        Book a Date
                        <svg class="h-4 w-4 transition-transform group-hover/link:translate-x-2" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

    {{-- ============================================================
        CUSTOM VISION CTA — High-Contrast Light Edition
        ============================================================ --}}
    <section class="relative w-full bg-white py-20 sm:py-24 overflow-hidden border-t border-zinc-100">

        {{-- Decorative Ambient Glows (Subtle Lime on White) --}}
        <div class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute top-0 right-0 h-[400px] w-[400px] rounded-full bg-lime-400/10 blur-[100px] opacity-60">
            </div>
            <div class="absolute bottom-0 left-0 h-[300px] w-[300px] rounded-full bg-indigo-500/5 blur-[80px]"></div>
        </div>

        {{-- Subtle Technical Grid --}}
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none"
            style="background-image: radial-gradient(circle, #000000 1px, transparent 1px); background-size: 32px 32px;">
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">

            {{-- Mini Badge --}}
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-100 border border-zinc-200 mb-6 transition-all hover:border-lime-400/50">
                <span class="flex h-1.5 w-1.5 rounded-full bg-lime-500 animate-pulse"></span>
                <span class="text-[0.6rem] font-black uppercase tracking-[0.2em] text-zinc-500">Bespoke Projects</span>
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-zinc-950 tracking-tighter mb-6 uppercase">
                Custom <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-lime-600 to-lime-900">Vision?</span>
            </h2>

            <p class="text-zinc-500 mb-10 max-w-xl mx-auto font-medium text-base sm:text-lg leading-relaxed">
                From brand campaigns to corporate architecture. Discuss a custom technical package tailored to your
                specific visual requirements.
            </p>

            <a href="{{ url('/contact') }}"
                class="group relative inline-flex items-center justify-center overflow-hidden rounded-full bg-zinc-950 px-10 py-4 text-sm font-black uppercase tracking-widest text-white transition-all duration-300 hover:shadow-2xl hover:shadow-lime-400/20 active:scale-95">
                {{-- Hover Slide Effect --}}
                <div
                    class="absolute inset-0 translate-y-full bg-lime-400 transition-transform duration-300 group-hover:translate-y-0">
                </div>

                <span
                    class="relative z-10 flex items-center gap-2 group-hover:text-zinc-950 transition-colors duration-300">
                    Let's Connect
                    <svg class="transition-transform duration-300 group-hover:translate-x-1" width="16"
                        height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                        <path d="M5 12h14m-7-7 7 7-7 7" />
                    </svg>
                </span>
            </a>
        </div>
    </section>
</x-welcome-layout>
