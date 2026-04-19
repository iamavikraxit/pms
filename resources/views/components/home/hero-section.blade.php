{{-- ============================================================
     HERO SECTION — Carbon & Cyber Lime (High Contrast Dark)
============================================================ --}}
<section id="hero" class="relative w-full overflow-hidden min-h-[calc(100vh-60px)] bg-zinc-950">

    {{-- Ambient light & background --}}
    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-zinc-950"></div>
        {{-- Cyber Lime & Stealth Gray glows --}}
        <div class="absolute -top-32 left-1/4 h-[500px] w-[500px] rounded-full bg-lime-400/5 blur-[120px]"></div>
        <div class="absolute bottom-0 right-0 h-[400px] w-[400px] rounded-full bg-white/5 blur-[100px]"></div>
    </div>

    {{-- Main Content --}}
    <div class="w-full px-4 py-12 sm:px-6 lg:px-10 xl:px-16 2xl:px-24">

        {{-- Tag line --}}
        <div class="flex justify-center">
            <div
                class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-zinc-900 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-zinc-400 shadow-sm">
                <span class="relative flex h-2 w-2">
                    <span
                        class="absolute inline-flex h-full w-full animate-ping rounded-full bg-lime-400 opacity-75"></span>
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-lime-400"></span>
                </span>
                Effortless Event Photography Booking
            </div>
        </div>

        {{-- Main headline --}}
        <h1
            class="mx-auto mt-5 max-w-5xl text-center text-4xl font-black leading-[1.08] tracking-tight text-white sm:text-5xl lg:text-6xl xl:text-7xl">
            Capture Every
            <span class="relative inline-block">
                <span class="bg-gradient-to-r from-white to-zinc-500 bg-clip-text text-transparent">
                    Priceless
                </span>
                {{-- Cyber Lime underline --}}
                <svg class="absolute -bottom-2 left-0 w-full opacity-100" viewBox="0 0 300 12" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 9C60 3 180 1 298 9" stroke="#a3e635" stroke-width="4" stroke-linecap="round" />
                </svg>
            </span>
            Moment
        </h1>

        <p class="mx-auto mt-6 max-w-2xl text-center text-base leading-7 text-zinc-400 sm:text-lg sm:leading-8">
            Professional photographers for weddings, engagements, birthdays, and private events — curated, transparent
            pricing, seamless booking in under 2 minutes.
        </p>

        {{-- CTA Buttons --}}
        <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
            {{-- Primary: Cyber Lime --}}
            <a href="#" id="heroBookBtn"
                class="group inline-flex min-h-11 w-full items-center justify-center gap-2.5 rounded-full bg-lime-400 px-7 py-3 text-sm font-black text-zinc-950 shadow-lg shadow-lime-400/10 transition-all duration-300 hover:-translate-y-0.5 hover:bg-white sm:w-auto sm:text-base">
                <svg class="h-4 w-4 text-zinc-950" fill="none" stroke="currentColor" stroke-width="2.5"
                    viewBox="0 0 24 24">
                    <rect x="8" y="2" width="8" height="4" rx="1" />
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                </svg>
                Book Photographer
            </a>
            {{-- Secondary: Stealth --}}
            <a href="#services" id="heroServicesBtn"
                class="group inline-flex min-h-11 w-full items-center justify-center gap-2.5 rounded-full border border-white/10 bg-zinc-900 px-7 py-3 text-sm font-semibold text-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:border-white/20 hover:bg-zinc-800 sm:w-auto sm:text-base">
                Explore Services
                <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1" fill="none"
                    stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </a>
        </div>

        {{-- Stats bar --}}
        <div class="mx-auto mt-10 grid max-w-4xl grid-cols-2 gap-3 sm:grid-cols-4">
            @foreach ([['500+', 'Events Covered'], ['4.9★', 'Avg. Rating'], ['120+', 'Photographers'], ['24 / 7', 'Support']] as [$num, $label])
                <div
                    class="group rounded-2xl border border-white/5 bg-zinc-900/50 p-4 text-center shadow-sm transition-all duration-300 hover:border-lime-400/30 hover:bg-zinc-900">
                    <p class="text-2xl font-black text-white sm:text-3xl">{{ $num }}</p>
                    <p class="mt-1 text-xs font-semibold text-zinc-500 sm:text-sm uppercase tracking-wider">
                        {{ $label }}</p>
                </div>
            @endforeach
        </div>

        {{-- Hero Visual Card --}}
        <div class="mx-auto mt-12 max-w-6xl">
            <div
                class="group relative overflow-hidden rounded-[2rem] border border-white/5 bg-zinc-900/30 p-1.5 shadow-2xl transition-all duration-500 hover:shadow-lime-400/5">

                <div class="overflow-hidden rounded-[1.65rem] bg-zinc-950 ring-1 ring-white/5">
                    <div class="grid lg:grid-cols-[1.2fr_0.8fr]">

                        {{-- LEFT SIDE --}}
                        <div class="relative p-5 sm:p-8">

                            <p class="text-xs font-bold uppercase tracking-[0.2em] text-lime-400">
                                ⭐ Featured Package
                            </p>

                            <h2 class="mt-2 text-2xl font-black text-white sm:text-3xl">
                                Wedding & <br> Event Storytelling
                            </h2>

                            <p class="mt-3 text-sm leading-6 text-zinc-400">
                                Capture your once-in-a-lifetime moments with cinematic storytelling and premium editing.
                            </p>

                            {{-- Features --}}
                            <ul class="mt-5 space-y-2.5 text-sm font-medium text-zinc-300">
                                @foreach (['Full-day coverage with two photographers', 'Edited gallery delivered in 7 days', 'Drone shots & cinematic reels included', '100% money-back guarantee'] as $feat)
                                    <li class="flex items-center gap-3">
                                        <span
                                            class="flex h-5 w-5 flex-shrink-0 items-center justify-center rounded-full bg-zinc-800 text-[10px] text-lime-400 border border-white/5">
                                            ✔
                                        </span>
                                        {{ $feat }}
                                    </li>
                                @endforeach
                            </ul>

                            {{-- Pricing --}}
                            <div class="mt-6 flex items-center gap-3">
                                <span class="text-3xl font-black text-white">₹9,999</span>
                                <span class="text-sm font-medium text-zinc-600 line-through">₹14,999</span>
                                <span
                                    class="rounded-lg bg-lime-400/10 px-2.5 py-1 text-xs font-bold text-lime-400 border border-lime-400/20">
                                    Save 33%
                                </span>
                            </div>

                            {{-- CTA --}}
                            <div class="mt-6 flex flex-wrap items-center gap-4">
                                <a href="#"
                                    class="inline-flex items-center gap-2 rounded-full bg-white px-6 py-2.5 text-sm font-black text-zinc-950 shadow-md transition-all duration-300 hover:bg-lime-400 hover:shadow-lg">
                                    Book Now
                                </a>
                                <span class="text-xs font-semibold text-zinc-500 uppercase tracking-widest">🔥 120+
                                    bookings this month</span>
                            </div>
                        </div>

                        {{-- RIGHT SIDE (IMAGE BASED) --}}
                        <div class="relative overflow-hidden">
                            <img src="https://www.focuzstudios.in/wp-content/uploads/2025/04/Fun-Filled-Talambralu-in-Telugu-wedding-011_result.webp"
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105 opacity-80" />

                            {{-- Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/20 to-transparent">
                            </div>

                            <div class="absolute bottom-0 p-5 sm:p-8 w-full">
                                <p class="text-xs font-bold uppercase tracking-[0.2em] text-zinc-400">
                                    Why clients love us
                                </p>

                                {{-- Glass card --}}
                                <div class="mt-3 rounded-xl border border-white/10 bg-white/5 p-3.5 backdrop-blur-md">
                                    <p class="text-[10px] font-bold uppercase tracking-wider text-zinc-400">Next
                                        Available Slot</p>
                                    <p class="mt-0.5 text-base font-black text-white">This Saturday · 5:30 PM</p>
                                    <p class="mt-0.5 text-xs font-medium text-lime-400">Only 3 slots remaining!</p>
                                </div>

                                {{-- Rating --}}
                                <div class="mt-3 flex items-center gap-1.5 text-amber-400 text-sm">
                                    ⭐⭐⭐⭐⭐
                                    <span
                                        class="text-zinc-500 text-xs font-medium ml-1 uppercase tracking-widest">(4.9/5
                                        from 250+ clients)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
