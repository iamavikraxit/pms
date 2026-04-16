{{-- ============================================================
     CTA SECTION
============================================================ --}}
<section id="cta" class="relative w-full overflow-hidden bg-gradient-to-br from-rose-600 via-rose-500 to-fuchsia-600 py-20 lg:py-28">

    {{-- Pattern overlay --}}
    <div class="absolute inset-0 opacity-[0.06]"
         style="background-image: radial-gradient(circle, #fff 1px, transparent 1px); background-size: 24px 24px;"></div>
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -top-20 -right-20 h-80 w-80 rounded-full bg-white/10 blur-[80px]"></div>
        <div class="absolute -bottom-20 -left-20 h-80 w-80 rounded-full bg-black/10 blur-[80px]"></div>
    </div>

    <div class="relative w-full px-4 text-center sm:px-6 lg:px-10 xl:px-16 2xl:px-24">
        <span class="inline-flex items-center rounded-full bg-white/15 px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-white backdrop-blur">
            Limited Slots Available
        </span>
        <h2 class="mx-auto mt-6 max-w-3xl text-3xl font-black leading-tight tracking-tight text-white sm:text-4xl lg:text-5xl xl:text-6xl">
            Ready to Create <br class="hidden sm:block">Timeless Memories?
        </h2>
        <p class="mx-auto mt-5 max-w-xl text-base text-rose-100 sm:text-lg">
            Join thousands of happy clients who trusted PixelMoment Studio for their most important moments. Book today and save up to 30%.
        </p>

        <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
            <a href="#"
               id="ctaBookBtn"
               class="inline-flex min-h-12 w-full items-center justify-center gap-2.5 rounded-full bg-white px-8 py-3.5 text-sm font-black text-rose-600 shadow-2xl shadow-black/20 transition-all duration-300 hover:-translate-y-1 hover:shadow-black/30 sm:w-auto sm:text-base">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><rect x="8" y="2" width="8" height="4" rx="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/></svg>
                Book Now — It's Free to Start
            </a>
            <a href="#"
               id="ctaContactBtn"
               class="inline-flex min-h-12 w-full items-center justify-center gap-2.5 rounded-full border border-white/40 bg-white/10 px-8 py-3.5 text-sm font-semibold text-white backdrop-blur transition-all duration-300 hover:-translate-y-1 hover:bg-white/20 sm:w-auto sm:text-base">
                Talk to an Expert
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2A19.79 19.79 0 0112.19 19a19.5 19.5 0 01-6-6 19.79 19.79 0 01-1.93-8.82A2 2 0 016.18 2.34h3a2 2 0 012 1.72c.127.96.36 1.903.7 2.81a2 2 0 01-.45 2.11L10 9a16 16 0 006 6l.92-.92a2 2 0 012.11-.45c.907.34 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            </a>
        </div>

        {{-- Trust badges --}}
        <div class="mt-10 flex flex-wrap items-center justify-center gap-6 text-sm text-rose-100">
            <span class="flex items-center gap-2">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                Secure &amp; Encrypted
            </span>
            <span class="flex items-center gap-2">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg>
                No Hidden Charges
            </span>
            <span class="flex items-center gap-2">
                <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                100% Money-Back Guarantee
            </span>
        </div>
    </div>
</section>
