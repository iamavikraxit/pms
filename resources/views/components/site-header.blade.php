<header class="sticky top-0 z-50 border-b border-white/60 bg-white/80 backdrop-blur-xl">
    <div class="mx-auto flex w-full max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">
        <a href="{{ url('/') }}" class="flex items-center gap-3">
            <span class="flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-900 text-sm font-black tracking-[0.2em] text-white shadow-lg shadow-slate-900/15">
                PMS
            </span>
            <div>
                <p class="text-sm font-semibold uppercase tracking-[0.24em] text-rose-500">Photo Booking</p>
                <p class="text-base font-bold text-slate-900 sm:text-lg">PixelMoment Studio</p>
            </div>
        </a>

        <nav class="hidden items-center gap-7 text-sm font-medium text-slate-600 md:flex">
            <a href="#" class="transition hover:text-slate-900">Home</a>
            <a href="#" class="transition hover:text-slate-900">Services</a>
            <a href="#" class="transition hover:text-slate-900">Portfolio</a>
            <a href="#" class="transition hover:text-slate-900">Contact</a>
        </nav>

        <div class="hidden md:block">
            <a
                href="#"
                class="inline-flex items-center justify-center rounded-full bg-slate-900 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-slate-900/15 transition hover:-translate-y-0.5 hover:bg-black"
            >
                Get Started
            </a>
        </div>

        <div class="md:hidden">
            <button
                type="button"
                class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-4 py-2 text-sm font-semibold text-slate-700 shadow-sm"
                aria-label="Open navigation"
            >
                Menu
            </button>
        </div>
    </div>

    <div class="border-t border-slate-200/80 bg-white/90 px-4 py-3 md:hidden">
        <nav class="mx-auto flex w-full max-w-7xl flex-col gap-3 text-sm font-medium text-slate-600">
            <a href="#" class="rounded-xl px-3 py-2 transition hover:bg-slate-50 hover:text-slate-900">Home</a>
            <a href="#" class="rounded-xl px-3 py-2 transition hover:bg-slate-50 hover:text-slate-900">Services</a>
            <a href="#" class="rounded-xl px-3 py-2 transition hover:bg-slate-50 hover:text-slate-900">Portfolio</a>
            <a href="#" class="rounded-xl px-3 py-2 transition hover:bg-slate-50 hover:text-slate-900">Contact</a>
            <a
                href="#"
                class="mt-2 inline-flex items-center justify-center rounded-full bg-slate-900 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-slate-900/15"
            >
                Get Started
            </a>
        </nav>
    </div>
</header>
