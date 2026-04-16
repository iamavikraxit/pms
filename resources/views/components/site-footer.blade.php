<footer class="relative w-full overflow-hidden bg-slate-950 text-slate-300">

    {{-- ── Decorative ambient glows ─────────────────────────────────── --}}
    <div class="pointer-events-none absolute -top-24 -left-24 h-72 w-72 rounded-full bg-rose-600/20 blur-3xl"></div>
    <div class="pointer-events-none absolute -top-16 right-1/4 h-56 w-56 rounded-full bg-violet-600/15 blur-3xl"></div>
    <div class="pointer-events-none absolute bottom-0 right-0 h-64 w-64 rounded-full bg-rose-500/10 blur-2xl"></div>

    {{-- ── Top gradient accent line ──────────────────────────────────── --}}
    <div class="h-px w-full bg-gradient-to-r from-transparent via-rose-500 to-transparent opacity-60"></div>

    {{-- ── Main footer grid ──────────────────────────────────────────── --}}
    <div class="w-full px-6 pt-14 pb-10 sm:px-10 lg:px-16 xl:px-24">

        <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-4 xl:gap-16">

            {{-- Brand column --}}
            <div class="lg:col-span-1">
                {{-- Logo mark --}}
                <div class="flex items-center gap-3">
                    <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-rose-500 to-rose-700 text-xs font-black tracking-[0.15em] text-white shadow-lg shadow-rose-500/30">
                        PMS
                    </div>
                    <div>
                        <p class="text-[10px] font-semibold uppercase tracking-[0.3em] text-rose-400">Photo Booking</p>
                        <p class="text-lg font-bold text-white">PixelMoment Studio</p>
                    </div>
                </div>

                <p class="mt-5 text-sm leading-7 text-slate-400">
                    Capturing memories that last a lifetime. We specialise in weddings, birthdays, private events, and milestone celebrations.
                </p>

                {{-- Social links --}}
                <div class="mt-6 flex items-center gap-3">
                    {{-- Instagram --}}
                    <a href="#" aria-label="Instagram"
                       class="group flex h-9 w-9 items-center justify-center rounded-xl border border-white/10 bg-white/5 transition duration-200 hover:border-rose-500/60 hover:bg-rose-500/15 hover:text-rose-400">
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.406-11.845a1.44 1.44 0 1 0 0 2.881 1.44 1.44 0 0 0 0-2.881z"/></svg>
                    </a>
                    {{-- Facebook --}}
                    <a href="#" aria-label="Facebook"
                       class="group flex h-9 w-9 items-center justify-center rounded-xl border border-white/10 bg-white/5 transition duration-200 hover:border-blue-500/60 hover:bg-blue-500/15 hover:text-blue-400">
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.41c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.97h-1.513c-1.491 0-1.956.931-1.956 1.886v2.268h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073z"/></svg>
                    </a>
                    {{-- Twitter/X --}}
                    <a href="#" aria-label="Twitter"
                       class="group flex h-9 w-9 items-center justify-center rounded-xl border border-white/10 bg-white/5 transition duration-200 hover:border-sky-500/60 hover:bg-sky-500/15 hover:text-sky-400">
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    {{-- WhatsApp --}}
                    <a href="#" aria-label="WhatsApp"
                       class="group flex h-9 w-9 items-center justify-center rounded-xl border border-white/10 bg-white/5 transition duration-200 hover:border-emerald-500/60 hover:bg-emerald-500/15 hover:text-emerald-400">
                        <svg class="h-4 w-4 fill-current" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-white">Quick Links</p>
                <ul class="mt-5 space-y-3">
                    @foreach([['#','Home'],['#','Services'],['#','Portfolio'],['#','About Us'],['#','Pricing'],['#','Contact']] as [$href,$label])
                    <li>
                        <a href="{{ $href }}"
                           class="group flex items-center gap-2 text-sm text-slate-400 transition duration-200 hover:text-rose-400">
                            <span class="inline-block h-px w-0 bg-rose-400 transition-all duration-300 group-hover:w-4"></span>
                            {{ $label }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-white">Our Services</p>
                <ul class="mt-5 space-y-3">
                    @foreach(['Wedding Photography','Birthday Events','Corporate Events','Pre-Wedding Shoots','Baby Showers','Product Photography'] as $service)
                    <li>
                        <a href="#"
                           class="group flex items-center gap-2 text-sm text-slate-400 transition duration-200 hover:text-rose-400">
                            <span class="inline-block h-px w-0 bg-rose-400 transition-all duration-300 group-hover:w-4"></span>
                            {{ $service }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-white">Get In Touch</p>
                <ul class="mt-5 space-y-4 text-sm text-slate-400">
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-rose-500/15 text-rose-400">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </span>
                        <a href="mailto:hello@pixelmoment.com" class="transition hover:text-rose-400">hello@pixelmoment.com</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-rose-500/15 text-rose-400">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        </span>
                        <a href="tel:+919876543210" class="transition hover:text-rose-400">+91 98765 43210</a>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-rose-500/15 text-rose-400">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </span>
                        <span>Mon – Sat &middot; 9 AM to 7 PM</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-0.5 flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-rose-500/15 text-rose-400">
                            <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </span>
                        <span>Mumbai, Maharashtra, India</span>
                    </li>
                </ul>
            </div>

        </div>{{-- /grid --}}

        {{-- ── Newsletter Strip ──────────────────────────────────────────── --}}
        <div class="mt-14 flex flex-col items-center justify-between gap-6 rounded-2xl border border-white/10 bg-white/5 px-6 py-7 backdrop-blur-sm sm:flex-row sm:gap-4 lg:px-10">
            <div>
                <p class="text-sm font-semibold text-white">✨ Stay in the frame</p>
                <p class="mt-0.5 text-xs text-slate-400">Get exclusive offers, session tips, and studio news in your inbox.</p>
            </div>
            <form class="flex w-full max-w-sm shrink-0 overflow-hidden rounded-xl border border-white/10 bg-white/5">
                <input type="email" placeholder="your@email.com"
                       class="flex-1 bg-transparent px-4 py-2.5 text-sm text-white placeholder:text-slate-500 focus:outline-none" />
                <button type="submit"
                        class="shrink-0 bg-gradient-to-r from-rose-500 to-rose-600 px-5 py-2.5 text-sm font-semibold text-white transition duration-200 hover:from-rose-600 hover:to-rose-700">
                    Subscribe
                </button>
            </form>
        </div>

    </div>{{-- /main grid wrapper --}}

    {{-- ── Bottom bar ────────────────────────────────────────────────── --}}
    <div class="h-px w-full bg-gradient-to-r from-transparent via-white/10 to-transparent"></div>

    <div class="w-full px-6 py-5 sm:px-10 lg:px-16 xl:px-24">
        <div class="flex flex-col items-center justify-between gap-3 text-xs text-slate-500 sm:flex-row">
            <p>© {{ now()->year }} PixelMoment Studio. All rights reserved.</p>

            <div class="flex items-center gap-5">
                <a href="#" class="transition hover:text-slate-300">Privacy Policy</a>
                <a href="#" class="transition hover:text-slate-300">Terms of Service</a>
                <a href="#" class="transition hover:text-slate-300">Refund Policy</a>
            </div>

            <p class="text-slate-600">Crafted with ❤️ in India</p>
        </div>
    </div>

</footer>
