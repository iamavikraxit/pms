{{-- ============================================================
     HERO SECTION — Full-width, cinematic
============================================================ --}}
<section id="hero" class="relative w-full overflow-hidden min-h-[calc(100vh-60px)]">

    {{-- Animated gradient background --}}
    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-950 via-slate-900 to-slate-800"></div>
        {{-- Ambient glows --}}
        <div
            class="absolute -top-32 left-1/4 h-[500px] w-[500px] rounded-full bg-rose-600/20 blur-[120px] animate-pulse">
        </div>
        <div class="absolute top-20 right-0 h-[400px] w-[400px] rounded-full bg-violet-600/15 blur-[100px]"></div>
        <div class="absolute bottom-0 left-0 h-[350px] w-[350px] rounded-full bg-rose-500/10 blur-[80px]"></div>
        {{-- Dot-grid pattern --}}
        <div class="absolute inset-0 opacity-[0.04]"
            style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 32px 32px;">
        </div>
    </div>

    <div class="w-full px-4 py-20 sm:px-6 lg:px-10 xl:px-16 2xl:px-24">

        {{-- Tag line --}}
        <div class="flex justify-center">
            <div
                class="inline-flex items-center gap-2 rounded-full border border-rose-500/30 bg-rose-500/10 px-5 py-2 text-xs font-bold uppercase tracking-[0.25em] text-rose-300 backdrop-blur">
                <span class="relative flex h-2 w-2">
                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-rose-400 opacity-75"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-rose-500"></span>
                </span>
                Effortless Event Photography Booking
            </div>
        </div>

        {{-- Main headline --}}
        <h1
            class="mx-auto mt-8 max-w-5xl text-center text-4xl font-black leading-[1.08] tracking-tight text-white sm:text-5xl lg:text-6xl xl:text-7xl">
            Capture Every
            <span class="relative inline-block">
                <span class="bg-gradient-to-r from-rose-400 via-fuchsia-400 to-rose-300 bg-clip-text text-transparent">
                    Priceless
                </span>
                <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 300 12" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 9C60 3 180 1 298 9" stroke="url(#ugrad)" stroke-width="3" stroke-linecap="round" />
                    <defs>
                        <linearGradient id="ugrad" x1="0" y1="0" x2="300" y2="0">
                            <stop offset="0%" stop-color="#fb7185" />
                            <stop offset="100%" stop-color="#e879f9" />
                        </linearGradient>
                    </defs>
                </svg>
            </span>
            Moment
        </h1>

        <p class="mx-auto mt-8 max-w-2xl text-center text-base leading-7 text-slate-400 sm:text-lg sm:leading-8">
            Professional photographers for weddings, engagements, birthdays, and private events — curated, transparent
            pricing, seamless booking in under 2 minutes.
        </p>

        {{-- CTA Buttons --}}
        <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
            <a href="#" id="heroBookBtn"
                class="group inline-flex min-h-12 w-full items-center justify-center gap-2.5 rounded-full bg-gradient-to-r from-rose-500 to-rose-600 px-8 py-3.5 text-sm font-bold text-white shadow-2xl shadow-rose-600/40 transition-all duration-300 hover:-translate-y-1 hover:shadow-rose-600/60 sm:w-auto sm:text-base">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <rect x="8" y="2" width="8" height="4" rx="1" />
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                </svg>
                Book Photographer
            </a>
            <a href="#services" id="heroServicesBtn"
                class="group inline-flex min-h-12 w-full items-center justify-center gap-2.5 rounded-full border border-white/20 bg-white/10 px-8 py-3.5 text-sm font-semibold text-white backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:border-white/40 hover:bg-white/15 sm:w-auto sm:text-base">
                Explore Services
                <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </a>
        </div>

        {{-- Stats bar --}}
        <div class="mx-auto mt-16 grid max-w-4xl grid-cols-2 gap-4 sm:grid-cols-4">
            @foreach ([['500+', 'Events Covered'], ['4.9★', 'Avg. Rating'], ['120+', 'Photographers'], ['24 / 7', 'Support']] as [$num, $label])
                <div
                    class="group rounded-2xl border border-white/10 bg-white/5 p-5 text-center backdrop-blur transition-all duration-300 hover:border-rose-500/30 hover:bg-white/10">
                    <p class="text-2xl font-black text-white sm:text-3xl">{{ $num }}</p>
                    <p class="mt-1 text-xs font-medium text-slate-400 sm:text-sm">{{ $label }}</p>
                </div>
            @endforeach
        </div>

        {{-- Hero Visual Card --}}
        <div class="mx-auto mt-20 max-w-6xl">
            <div
                class="group relative overflow-hidden rounded-[2rem] border border-white/10 bg-white/5 p-1.5 shadow-2xl backdrop-blur transition-all duration-500 hover:scale-[1.01]">

                {{-- Glow effect --}}
                <div class="absolute -top-20 -left-20 h-60 w-60 bg-rose-500/20 blur-[100px]"></div>
                <div class="absolute -bottom-20 -right-20 h-60 w-60 bg-violet-500/20 blur-[100px]"></div>

                <div class="overflow-hidden rounded-[1.65rem] bg-gradient-to-br from-slate-900 to-black">
                    <div class="grid lg:grid-cols-[1.2fr_0.8fr]">

                        {{-- LEFT --}}
                        <div class="relative p-6 sm:p-10">

                            <p class="text-xs font-bold uppercase tracking-[0.3em] text-rose-400">
                                ⭐ Featured Package
                            </p>

                            <h2 class="mt-3 text-3xl font-black text-white sm:text-4xl">
                                Wedding & <br> Event Storytelling
                            </h2>

                            <p class="mt-4 text-sm leading-7 text-slate-400 sm:text-base">
                                Capture your once-in-a-lifetime moments with cinematic storytelling and premium editing.
                            </p>

                            {{-- Features --}}
                            <ul class="mt-6 space-y-3 text-sm text-slate-300">
                                @foreach (['Full-day coverage with two photographers', 'Edited gallery delivered in 7 days', 'Drone shots & cinematic reels included', '100% money-back guarantee'] as $feat)
                                    <li class="flex items-center gap-3">
                                        <span
                                            class="flex h-6 w-6 items-center justify-center rounded-full bg-emerald-500/20 text-emerald-400">
                                            ✔
                                        </span>
                                        {{ $feat }}
                                    </li>
                                @endforeach
                            </ul>

                            {{-- Pricing --}}
                            <div class="mt-8 flex items-center gap-4">
                                <span class="text-4xl font-black text-white">₹9,999</span>
                                <span class="text-sm text-slate-500 line-through">₹14,999</span>
                                <span class="rounded-full bg-rose-500/20 px-3 py-1 text-xs font-bold text-rose-300">
                                    Save 33%
                                </span>
                            </div>

                            {{-- CTA --}}
                            <div class="mt-8 flex items-center gap-4">
                                <a href="#"
                                    class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-rose-500 to-pink-600 px-6 py-3 text-sm font-bold text-white shadow-lg transition-all duration-300 hover:scale-105 hover:shadow-rose-500/40">
                                    Book Now
                                </a>

                                <span class="text-xs text-slate-500">🔥 120+ bookings this month</span>
                            </div>
                        </div>

                        {{-- RIGHT (IMAGE BASED) --}}
                        <div class="relative overflow-hidden">

                            {{-- Background Image --}}
                            <img src="https://www.focuzstudios.in/wp-content/uploads/2025/04/Fun-Filled-Talambralu-in-Telugu-wedding-011_result.webp"
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110" />

                            {{-- Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent">
                            </div>

                            <div class="absolute bottom-0 p-6 sm:p-8 w-full">

                                <p class="text-xs font-bold uppercase tracking-[0.25em] text-rose-200">
                                    Why clients love us
                                </p>

                                {{-- Glass card --}}
                                <div class="mt-4 rounded-2xl border border-white/20 bg-white/10 p-4 backdrop-blur-lg">
                                    <p class="text-xs text-rose-200">Next Available Slot</p>
                                    <p class="mt-1 text-lg font-black text-white">
                                        This Saturday · 5:30 PM
                                    </p>
                                    <p class="text-xs text-rose-300">
                                        Only 3 slots remaining!
                                    </p>
                                </div>

                                {{-- Rating --}}
                                <div class="mt-4 flex items-center gap-2 text-yellow-400 text-sm">
                                    ⭐⭐⭐⭐⭐
                                    <span class="text-white text-xs">(4.9/5 from 250+ clients)</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
