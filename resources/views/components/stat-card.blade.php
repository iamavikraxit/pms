<div
    {{ $attributes->merge([
        'class' =>
            'group relative overflow-hidden rounded-2xl border border-orange-200/60 bg-orange-50/90 backdrop-blur-xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-500',
    ]) }}>

    {{-- Soft Gradient Background --}}
    <div class="absolute inset-0 opacity-[0.08] {{ $theme['bg'] }}"></div>

    {{-- Glow Circle --}}
    <div
        class="absolute -right-10 -top-10 h-32 w-32 rounded-full blur-3xl opacity-0 group-hover:opacity-25 transition duration-700 {{ $theme['bg'] }}">
    </div>

    {{-- Header --}}
    <div class="relative z-10 flex items-center justify-between px-4 pt-4">

        <div class="flex items-center gap-2">
            <div class="h-2 w-2 rounded-full {{ $theme['bg'] }}"></div>

            <span class="text-[10px] font-bold uppercase tracking-[0.22em] text-stone-500">
                {{ $title }}
            </span>
        </div>

        <span class="text-[9px] font-bold px-2 py-0.5 rounded-full bg-orange-100/80 {{ $theme['text'] }}">
            Live
        </span>
    </div>

    {{-- Body --}}
    <div class="relative z-10 px-4 pt-2.5 pb-4">

        <div class="flex items-end justify-between gap-4">

            <div>
                <h3 class="text-3xl font-black tracking-tight text-stone-900 leading-none">
                    {{ $value }}
                </h3>

                <p class="mt-1 text-[10px] text-stone-400 leading-none">
                    Updated just now
                </p>
            </div>

            @if ($trend)
                <div class="px-2.5 py-1 rounded-lg border bg-white/90 {{ $theme['border'] }}">
                    <span class="text-xs font-bold {{ $theme['text'] }}">
                        {{ $trend }}
                    </span>
                </div>
            @endif

        </div>
    </div>

    {{-- Bottom Accent --}}
    <div class="h-1 w-full bg-orange-200/40">
        <div class="h-full w-0 group-hover:w-full transition-all duration-700 {{ $theme['bg'] }}"></div>
    </div>

</div>
