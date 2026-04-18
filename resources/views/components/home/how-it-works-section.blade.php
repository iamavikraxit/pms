{{-- ============================================================
     HOW IT WORKS — Minimalist Slate Theme
============================================================ --}}
<section id="how-it-works" class="relative w-full overflow-hidden bg-white py-20 lg:py-28">

    {{-- Ambient light & subtle texture --}}
    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute top-0 left-1/2 h-[450px] w-[600px] -translate-x-1/2 rounded-full bg-indigo-500/5 blur-[120px]"></div>
    </div>
    {{-- Dark dots with very low opacity for light mode --}}
    <div class="absolute inset-0 opacity-[0.03]"
         style="background-image: radial-gradient(circle, #0f172a 1px, transparent 1px); background-size: 28px 28px;"></div>

    <div class="relative w-full px-4 sm:px-6 lg:px-10 xl:px-16 2xl:px-24">

        {{-- Section header --}}
        <div class="text-center">
            <span class="inline-flex items-center gap-2 rounded-full border border-slate-200 bg-slate-50 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-indigo-600 shadow-sm">
                How It Works
            </span>
            <h2 class="mx-auto mt-5 max-w-2xl text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                Booked in Under 2 Minutes
            </h2>
            <p class="mx-auto mt-4 max-w-xl text-base text-slate-600">
                A simple, stress-free process from discovery to delivery.
            </p>
        </div>

        {{-- Steps --}}
        <div class="relative mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

            {{-- Connecting line (desktop) --}}
            <div class="absolute top-[2.25rem] left-[12.5%] hidden w-3/4 lg:block">
                <div class="h-px w-full bg-gradient-to-r from-transparent via-slate-200 to-transparent"></div>
            </div>

            @foreach([
                ['01', '🔍', 'Browse', 'Search by event type, date, location, and budget. Instant results.'],
                ['02', '📅', 'Select & Book', 'Pick your photographer, choose a package, and confirm with secure payment.'],
                ['03', '📸', 'The Session', 'Your photographer arrives on time and captures every magic moment.'],
                ['04', '🖼️', 'Receive Gallery', 'Beautifully edited photos delivered to your inbox within 7 days.'],
            ] as [$step, $icon, $title, $desc])
            <div class="relative flex flex-col items-center text-center group">
                
                {{-- Step circle --}}
                <div class="relative z-10 flex h-[4.5rem] w-[4.5rem] items-center justify-center rounded-full border border-slate-200 bg-white text-3xl shadow-md shadow-slate-200/50 transition-transform duration-300 group-hover:-translate-y-1 group-hover:shadow-lg">
                    {{ $icon }}
                    
                    {{-- Step Number Badge (Deep Slate) --}}
                    <span class="absolute -top-2 -right-2 flex h-6 w-6 items-center justify-center rounded-full bg-slate-900 text-[0.65rem] font-black text-white shadow-sm ring-2 ring-white">
                        {{ $step }}
                    </span>
                </div>

                {{-- Text Content --}}
                <h3 class="mt-5 text-lg font-bold text-slate-900">{{ $title }}</h3>
                <p class="mt-2 text-sm leading-6 text-slate-600">{{ $desc }}</p>
            </div>
            @endforeach
            
        </div>
    </div>
</section>