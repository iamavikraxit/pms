<div
    {{ $attributes->merge([
        'class' =>
            'group relative overflow-hidden rounded-2xl border border-zinc-200/80 dark:border-white/5 bg-white/90 dark:bg-zinc-900/80 backdrop-blur-xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-500',
    ]) }}>

    {{-- Soft Gradient Background --}}
    <div class="absolute inset-0 opacity-[0.03] {{ $theme['bg'] }}"></div>

    {{-- Glow Circle --}}
    <div
        class="absolute -right-10 -top-10 h-32 w-32 rounded-full blur-3xl opacity-0 group-hover:opacity-15 transition duration-700 {{ $theme['bg'] }}">
    </div>

    {{-- Header --}}
    <div class="relative z-10 flex items-center justify-between px-5 pt-5">

        <div class="flex items-center gap-2">
            <div class="h-2 w-2 rounded-full {{ $theme['bg'] }}"></div>

            <span class="text-[10px] font-bold uppercase tracking-[0.22em] text-zinc-500">
                {{ $title }}
            </span>
        </div>

        <span class="text-[10px] font-semibold px-2 py-1 rounded-full bg-zinc-100 dark:bg-zinc-800 {{ $theme['text'] }}">
            Live
        </span>
    </div>

    {{-- Body --}}
    <div class="relative z-10 px-5 pt-4 pb-5">

        <div class="flex items-end justify-between gap-4">

            <div>
                <h3 class="text-4xl font-black tracking-tight text-zinc-900 dark:text-white">
                    {{ $value }}
                </h3>

                <p class="mt-2 text-xs text-zinc-500">
                    Updated just now
                </p>
            </div>

            @if ($trend)
                <div class="px-3 py-1.5 rounded-xl border bg-white dark:bg-zinc-950/60 {{ $theme['border'] }}">
                    <span class="text-sm font-bold {{ $theme['text'] }}">
                        {{ $trend }}
                    </span>
                </div>
            @endif

        </div>
    </div>

    {{-- Bottom Accent --}}
    <div class="h-1 w-full bg-zinc-100 dark:bg-zinc-800">
        <div class="h-full w-0 group-hover:w-full transition-all duration-700 {{ $theme['bg'] }}"></div>
    </div>

</div>
