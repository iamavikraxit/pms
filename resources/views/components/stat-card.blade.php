@props([
    'title', 
    'value', 
    'trend' => null, 
    'color' => 'lime'
])

@php
    $theme = [
        'lime'    => ['text' => 'text-lime-400',    'bg' => 'bg-lime-400',    'shadow' => 'shadow-lime-400/20',    'border' => 'border-lime-400/30'],
        'blue'    => ['text' => 'text-blue-400',    'bg' => 'bg-blue-400',    'shadow' => 'shadow-blue-400/20',    'border' => 'border-blue-400/30'],
        'emerald' => ['text' => 'text-emerald-400', 'bg' => 'bg-emerald-400', 'shadow' => 'shadow-emerald-400/20', 'border' => 'border-emerald-400/30'],
        'rose'    => ['text' => 'text-rose-400',    'bg' => 'bg-rose-400',    'shadow' => 'shadow-rose-400/20',    'border' => 'border-rose-400/30'],
    ][$color] ?? $theme['lime'];
@endphp

<div {{ $attributes->merge([
    'class' => "group relative bg-zinc-900/80 backdrop-blur-md border border-white/5 p-0 rounded-2xl transition-all duration-500 overflow-hidden hover:bg-zinc-900/80 hover:shadow-2xl hover:shadow-black/50"
]) }}>
    
    {{-- 1. Hover Glow Backdrop --}}
    <div class="absolute -right-8 -top-8 h-32 w-32 rounded-full blur-[60px] opacity-0 group-hover:opacity-20 transition-opacity duration-700 {{ $theme['bg'] }}"></div>

    {{-- 2. Top "Glass" Bar --}}
    <div class="flex items-center justify-between px-5 py-3 border-b border-white/[0.03] bg-white/[0.02] relative z-10">
        <div class="flex items-center gap-2">
            <div class="h-1 w-1 rounded-full {{ $theme['bg'] }} {{ $theme['shadow'] }} shadow-[0_0_8px]"></div>
            <p class="text-[9px] font-black uppercase tracking-[0.25em] text-zinc-500 group-hover:text-zinc-300 transition-colors">
                {{ $title }}
            </p>
        </div>
        <span class="text-[8px] font-mono text-zinc-700 font-bold group-hover:{{ $theme['text'] }} transition-colors">SYS_OK</span>
    </div>

    {{-- 3. Main Content Body --}}
    <div class="p-5 pt-4 relative z-10">
        <div class="flex items-end justify-between">
            <div class="space-y-1">
                <h3 class="text-4xl font-black tracking-tighter text-white tabular-nums group-hover:translate-x-1 transition-transform duration-500">
                    {{ $value }}
                </h3>
                {{-- <div class="flex items-center gap-2">
                    <div class="h-[2px] w-4 bg-zinc-800 rounded-full overflow-hidden">
                        <div class="h-full w-full {{ $theme['bg'] }} translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-700 delay-100"></div>
                    </div>
                    <span class="text-[8px] font-black text-zinc-600 uppercase tracking-widest">Performance</span>
                </div> --}}
            </div>

            @if($trend)
                <div class="flex flex-col items-end gap-1">
                    <div class="px-2 py-0.5 rounded border border-white/5 bg-zinc-950/50 group-hover:{{ $theme['border'] }} transition-colors">
                        <span class="text-[10px] font-mono font-bold {{ $theme['text'] }}">
                            {{ $trend }}
                        </span>
                    </div>
                    <span class="text-[7px] font-black text-zinc-700 uppercase tracking-tighter italic">Live_Feed</span>
                </div>
            @endif
        </div>
    </div>

    {{-- 4. Laser Scan Hover Effect --}}
    <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-y-px group-hover:translate-y-[128px] transition-all duration-[1.5s] ease-in-out opacity-0 group-hover:opacity-100"></div>

    {{-- 5. Bottom Accent Line (Thinner) --}}
    <div class="absolute bottom-0 left-0 h-[2px] w-full bg-zinc-800/50">
        <div class="h-full w-0 {{ $theme['bg'] }} group-hover:w-full transition-all duration-700 ease-out"></div>
    </div>
</div>