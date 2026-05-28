{{-- ============================================================
     TRUST BAR / FEATURES — Carbon & Cyber Lime Edition
============================================================ --}}
<section class="relative w-full overflow-hidden bg-zinc-950 border-t border-b border-white/5 py-14">

    {{-- Subtle background ambient glow --}}
    <div class="pointer-events-none absolute inset-0 -z-10">
        <div
            class="absolute top-1/2 left-1/2 h-full w-full -translate-x-1/2 -translate-y-1/2 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-lime-400/[0.03] via-transparent to-transparent">
        </div>
    </div>

    <div class="w-full px-4 sm:px-6 lg:px-10 xl:px-16 2xl:px-24">
        <div class="grid grid-cols-2 gap-8 sm:grid-cols-3 lg:grid-cols-6">
            @foreach ([['🔒', 'Secure Payment'], ['⚡', 'Same-Day Booking'], ['🎯', 'Vetted Pros'], ['📸', '4K Delivery'], ['🔄', 'Easy Rescheduling'], ['💯', 'Satisfaction Guarantee']] as [$icon, $label])
                <div
                    class="group flex flex-col items-center gap-3 text-center transition-transform duration-300 hover:-translate-y-1">

                    {{-- Icon Container with subtle glass effect --}}
                    <div
                        class="flex h-12 w-12 items-center justify-center rounded-xl bg-zinc-900 border border-white/5 shadow-inner transition-all duration-300 group-hover:border-lime-400/30 group-hover:shadow-lime-400/5">
                        <span class="text-2xl filter grayscale group-hover:grayscale-0 transition-all duration-300">
                            {{ $icon }}
                        </span>
                    </div>

                    {{-- Label --}}
                    <p
                        class="text-[10px] font-bold uppercase tracking-[0.15em] text-zinc-500 group-hover:text-lime-400 transition-colors">
                        {{ $label }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>
