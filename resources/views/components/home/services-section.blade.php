{{-- ============================================================
     SERVICES SECTION
============================================================ --}}
<section id="services" class="relative w-full overflow-hidden bg-white py-20 lg:py-28">

    {{-- Subtle bg gradient --}}
    <div class="pointer-events-none absolute inset-0 -z-10">
        <div class="absolute top-0 right-0 h-[500px] w-[500px] rounded-full bg-rose-100/60 blur-[120px]"></div>
        <div class="absolute bottom-0 left-0 h-[400px] w-[400px] rounded-full bg-violet-100/40 blur-[100px]"></div>
    </div>

    <div class="w-full px-4 sm:px-6 lg:px-10 xl:px-16 2xl:px-24">

        {{-- Section header --}}
        <div class="text-center">
            <span class="inline-flex items-center gap-2 rounded-full bg-rose-50 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-rose-500">
                Our Services
            </span>
            <h2 class="mx-auto mt-4 max-w-3xl text-3xl font-black tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
                Photography for Every Occasion
            </h2>
            <p class="mx-auto mt-4 max-w-2xl text-base text-slate-500 sm:text-lg">
                From intimate gatherings to grand celebrations — we have the perfect package for you.
            </p>
        </div>

        {{-- Service cards grid --}}
        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach([
                ['💍', 'Wedding Photography', 'from ₹9,999', 'Full-day coverage with edited gallery, drone shots & cinematic reels. Two professional photographers.', 'from-rose-500 to-red-600'],
                ['🎂', 'Birthday Events', 'from ₹3,999', 'Candid and posed shots for milestone birthdays. Indoor & outdoor, all lighting conditions.', 'from-orange-400 to-amber-500'],
                ['🏢', 'Corporate Events', 'from ₹5,999', 'Conference coverage, headshots, product launches and team photos. Same-day delivery available.', 'from-blue-500 to-indigo-600'],
                ['💑', 'Pre-Wedding Shoots', 'from ₹6,999', 'Romantic pre-wedding sessions at location of your choice. Styled, cinematic storytelling.', 'from-fuchsia-500 to-violet-600'],
                ['👶', 'Baby & Maternity', 'from ₹4,499', 'Newborn sessions, maternity portraits, and baby milestone shoots with props & styling.', 'from-emerald-400 to-teal-500'],
                ['📦', 'Product Photography', 'from ₹2,499', 'White-background & lifestyle product shots for e-commerce, websites and social media.', 'from-sky-400 to-cyan-500'],
            ] as [$icon, $title, $price, $desc, $gradient])
            <div class="group relative overflow-hidden rounded-3xl border border-slate-100 bg-white p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:shadow-xl hover:shadow-slate-200/80">
                {{-- Hover gradient fill --}}
                <div class="pointer-events-none absolute inset-0 rounded-3xl bg-gradient-to-br opacity-0 transition-opacity duration-300 group-hover:opacity-5 {{ $gradient }}"></div>

                <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br text-2xl shadow-lg {{ $gradient }}">
                    {{ $icon }}
                </div>

                <h3 class="mt-5 text-lg font-black text-slate-900">{{ $title }}</h3>
                <p class="mt-1 text-sm font-semibold text-rose-500">{{ $price }}</p>
                <p class="mt-3 text-sm leading-6 text-slate-500">{{ $desc }}</p>

                <a href="#" class="mt-6 inline-flex items-center gap-2 text-sm font-bold text-slate-900 transition-all duration-200 group-hover:gap-3">
                    Explore Package
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="m9 18 6-6-6-6"/></svg>
                </a>
            </div>
            @endforeach
        </div>

        {{-- View all --}}
        <div class="mt-12 text-center">
            <a href="#" class="inline-flex items-center gap-2.5 rounded-full border border-slate-200 bg-white px-8 py-3.5 text-sm font-semibold text-slate-700 shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:border-slate-300 hover:shadow-md">
                View All Packages
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="m9 18 6-6-6-6"/></svg>
            </a>
        </div>
    </div>
</section>
