{{-- ============================================================
     CTA SECTION — Minimalist Light Theme
============================================================ --}}
<section id="cta" class="relative w-full overflow-hidden bg-slate-50 py-20 lg:py-28">

    {{-- Subtle texture overlay (Dark dots on light background) --}}
    <div class="absolute inset-0 opacity-[0.03]"
         style="background-image: radial-gradient(circle, #0f172a 1px, transparent 1px); background-size: 24px 24px;"></div>
         
    {{-- Soft, elegant ambient glows --}}
    <div class="pointer-events-none absolute inset-0">
        <div class="absolute -top-20 -right-20 h-80 w-80 rounded-full bg-indigo-500/10 blur-[80px]"></div>
        <div class="absolute -bottom-20 -left-20 h-80 w-80 rounded-full bg-slate-400/20 blur-[80px]"></div>
    </div>

    <div class="relative w-full px-4 text-center sm:px-6 lg:px-10 xl:px-16 2xl:px-24">
        
        {{-- Section Tag --}}
        <span class="inline-flex items-center rounded-full border border-slate-200 bg-white px-4 py-1.5 text-xs font-bold uppercase tracking-[0.2em] text-indigo-600 shadow-sm">
            Limited Slots Available
        </span>
        
        {{-- Headline --}}
        <h2 class="mx-auto mt-6 max-w-3xl text-3xl font-black leading-tight tracking-tight text-slate-900 sm:text-4xl lg:text-5xl xl:text-6xl">
            Ready to Create <br class="hidden sm:block">Timeless Memories?
        </h2>
        
        {{-- Subtext --}}
        <p class="mx-auto mt-5 max-w-xl text-base text-slate-600 sm:text-lg">
            Join thousands of happy clients who trusted PixelMoment Studio for their most important moments. Book today and save up to 30%.
        </p>

        {{-- Buttons --}}
        <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
            
            {{-- Primary CTA: Deep Slate for high contrast --}}
            <a href="#"
               id="ctaBookBtn"
               class="group inline-flex min-h-12 w-full items-center justify-center gap-2.5 rounded-full bg-slate-900 px-8 py-3.5 text-sm font-black text-white shadow-xl shadow-slate-900/10 transition-all duration-300 hover:-translate-y-1 hover:bg-slate-800 hover:shadow-slate-900/20 sm:w-auto sm:text-base">
                <svg class="h-4 w-4 text-indigo-400" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><rect x="8" y="2" width="8" height="4" rx="1"/><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/></svg>
                Book Now — It's Free to Start
            </a>
            
            {{-- Secondary CTA: Crisp White --}}
            <a href="#"
               id="ctaContactBtn"
               class="group inline-flex min-h-12 w-full items-center justify-center gap-2.5 rounded-full border border-slate-300 bg-white px-8 py-3.5 text-sm font-semibold text-slate-700 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-slate-400 hover:bg-slate-50 sm:w-auto sm:text-base">
                Talk to an Expert
                <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2A19.79 19.79 0 0112.19 19a19.5 19.5 0 01-6-6 19.79 19.79 0 01-1.93-8.82A2 2 0 016.18 2.34h3a2 2 0 012 1.72c.127.96.36 1.903.7 2.81a2 2 0 01-.45 2.11L10 9a16 16 0 006 6l.92-.92a2 2 0 012.11-.45c.907.34 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            </a>
            
        </div>

        {{-- Trust badges --}}
        <div class="mt-10 flex flex-wrap items-center justify-center gap-6 text-sm font-medium text-slate-500">
            <span class="flex items-center gap-2">
                <svg class="h-4 w-4 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                Secure &amp; Encrypted
            </span>
            <span class="flex items-center gap-2">
                <svg class="h-4 w-4 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20 6 9 17l-5-5"/></svg>
                No Hidden Charges
            </span>
            <span class="flex items-center gap-2">
                <svg class="h-4 w-4 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                100% Money-Back Guarantee
            </span>
        </div>
    </div>
</section>