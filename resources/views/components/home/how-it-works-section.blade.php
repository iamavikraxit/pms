{{-- ============================================================
     HOW IT WORKS — Carbon & Cyber Lime Theme
============================================================ --}}
<section id="how-it-works" class="relative w-full overflow-hidden bg-zinc-950 py-20 lg:py-28">

    {{-- Ambient light & subtle texture --}}
    <div class="pointer-events-none absolute inset-0 -z-10">
        <div
            class="absolute top-0 left-1/2 h-[450px] w-[600px] -translate-x-1/2 rounded-full bg-lime-400/5 blur-[120px]">
        </div>
    </div>

    {{-- High-tech dot grid for dark mode --}}
    <div class="absolute inset-0 opacity-[0.05]"
        style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 28px 28px;">
    </div>

    <div class="relative w-full px-4 sm:px-6 lg:px-10 xl:px-16 2xl:px-24">

        {{-- Section header --}}
        <div class="text-center">
            <span
                class="inline-flex items-center gap-2 rounded-full border border-white/10 bg-zinc-900 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-lime-400 shadow-sm">
                How It Works
            </span>
            <h2 class="mx-auto mt-5 max-w-2xl text-3xl font-black tracking-tight text-white sm:text-4xl lg:text-5xl">
                Booked in Under 2 Minutes
            </h2>
            <p class="mx-auto mt-4 max-w-xl text-base text-zinc-400">
                A simple, stress-free process from discovery to delivery.
            </p>
        </div>

        {{-- Steps --}}
        <div class="relative mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Connecting line (desktop) - Updated to Lime gradient --}}
            <div class="absolute top-[2.25rem] left-[12.5%] hidden w-3/4 lg:block">
                <div class="h-px w-full bg-gradient-to-r from-transparent via-lime-400/20 to-transparent"></div>
            </div>

            @foreach ([['01', '🔍', 'Browse', 'Search by event type, date, location, and budget. Instant results.'], ['02', '📅', 'Select & Book', 'Pick your photographer, choose a package, and confirm with secure payment.'], ['03', '📸', 'The Session', 'Your photographer arrives on time and captures every magic moment.'], ['04', '🖼️', 'Receive Gallery', 'Beautifully edited photos delivered to your inbox within 7 days.']] as [$step, $icon, $title, $desc])
                <div class="relative flex flex-col items-center text-center group">

                    {{-- Step circle (Carbon & Cyber Lime) --}}
                    <div
                        class="relative z-10 flex h-[4.5rem] w-[4.5rem] items-center justify-center rounded-2xl border border-white/10 bg-zinc-900 text-3xl shadow-2xl transition-all duration-300 group-hover:-translate-y-1 group-hover:border-lime-400/50 group-hover:shadow-lime-400/5">
                        {{ $icon }}

                        {{-- Step Number Badge (Cyber Lime) --}}
                        <span
                            class="absolute -top-2 -right-2 flex h-6 w-6 items-center justify-center rounded-full bg-lime-400 text-[0.65rem] font-black text-zinc-950 shadow-sm ring-2 ring-zinc-950">
                            {{ $step }}
                        </span>
                    </div>

                    {{-- Text Content --}}
                    <h3 class="mt-5 text-lg font-bold text-white group-hover:text-lime-400 transition-colors">
                        {{ $title }}</h3>
                    <p class="mt-2 text-sm leading-6 text-zinc-500">{{ $desc }}</p>
                </div>
            @endforeach

        </div>
    </div>
</section>
