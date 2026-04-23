<div
    {{ $attributes->merge([
        'class' =>
            'group relative flex h-32 items-center gap-5 overflow-hidden rounded-2xl border border-white/20 bg-white/60 backdrop-blur-xl p-6 shadow-sm transition-all duration-500 hover:-translate-y-2 hover:shadow-xl',
    ]) }}>

    {{-- Soft animated gradient glow --}}
    <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition duration-500">
        <div class="absolute -top-10 -right-10 h-32 w-32 rounded-full bg-indigo-400/20 blur-3xl"></div>
        <div class="absolute -bottom-10 -left-10 h-32 w-32 rounded-full bg-purple-400/20 blur-3xl"></div>
    </div>

    {{-- Optional custom glow slot --}}
    @isset($glow)
        {{ $glow }}
    @endisset

    {{-- Icon --}}
    @isset($icon)
        <div
            class="relative z-10 flex h-14 w-14 items-center justify-center rounded-xl bg-white shadow-inner transition-all duration-500 group-hover:scale-110 group-hover:shadow-lg">
            {{ $icon }}
        </div>
    @endisset

    {{-- Content --}}
    <div class="relative z-10">
        <p
            class="text-[10px] font-semibold uppercase tracking-[0.35em] text-zinc-400 group-hover:text-zinc-500 transition">
            {{ $title }}
        </p>

        <h3 class="text-2xl font-extrabold tracking-tight text-zinc-900 group-hover:scale-[1.03] transition">
            {{ $value }}
        </h3>
    </div>

    {{-- Right-side subtle indicator bar --}}
    <div
        class="absolute right-0 top-0 h-full w-1 bg-gradient-to-b from-indigo-500 via-purple-500 to-pink-500 opacity-0 group-hover:opacity-100 transition-all duration-500">
    </div>

</div>
