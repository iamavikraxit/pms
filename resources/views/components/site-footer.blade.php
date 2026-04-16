<footer class="border-t border-white/60 bg-slate-950 text-slate-200">
    <div class="mx-auto grid w-full max-w-7xl gap-10 px-4 py-10 sm:px-6 lg:grid-cols-[1.2fr_0.8fr_0.8fr] lg:px-8 lg:py-14">
        <div>
            <div class="flex items-center gap-3">
                <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-white text-sm font-black tracking-[0.2em] text-slate-900">
                    PMS
                </span>
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.24em] text-rose-300">Photo Booking</p>
                    <p class="text-lg font-bold text-white">PixelMoment Studio</p>
                </div>
            </div>

            <p class="mt-5 max-w-md text-sm leading-7 text-slate-400 sm:text-base">
                Responsive event photography booking experiences built for weddings, birthdays, private events, and memorable celebrations.
            </p>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-white">Quick Links</p>
            <ul class="mt-4 space-y-3 text-sm text-slate-400">
                <li><a href="#" class="transition hover:text-white">Home</a></li>
                <li><a href="#" class="transition hover:text-white">Services</a></li>
                <li><a href="#" class="transition hover:text-white">Portfolio</a></li>
                <li><a href="#" class="transition hover:text-white">Contact</a></li>
            </ul>
        </div>

        <div>
            <p class="text-sm font-semibold uppercase tracking-[0.24em] text-white">Contact</p>
            <ul class="mt-4 space-y-3 text-sm text-slate-400">
                <li>Email: hello@pixelmoment.com</li>
                <li>Phone: +91 98765 43210</li>
                <li>Hours: Mon - Sat · 9 AM to 7 PM</li>
            </ul>
        </div>
    </div>

    <div class="border-t border-white/10">
        <div class="mx-auto flex w-full max-w-7xl flex-col gap-3 px-4 py-4 text-sm text-slate-500 sm:px-6 sm:flex-row sm:items-center sm:justify-between lg:px-8">
            <p>© {{ now()->year }} PixelMoment Studio. All rights reserved.</p>
            <p>Crafted for a seamless experience across all devices.</p>
        </div>
    </div>
</footer>
