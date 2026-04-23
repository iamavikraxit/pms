<x-layouts.authenticated-layout>
    <div class="space-y-10">
        <header class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
            <div class="space-y-2">
                <div class="flex items-center gap-2">
                    <span class="text-lg font-black uppercase tracking-[0.4em] text-zinc-500">Welcome To</span>
                </div>
                <h1 class="text-3xl sm:text-5xl font-black text-white tracking-tighter leading-none">
                    Studio <span class="text-zinc-800">Pixel Moment.</span>
                </h1>
            </div>
        </header>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ([
                        [
                            'label' => 'Total Revenue',
                            'value' => '$84,200',
                            'trend' => '+12.5%',
                            'color' => 'lime',
                        ],
                        [
                            'label' => 'Active Shoots',
                            'value' => '18',
                            'trend' => 'Live',
                            'color' => 'blue',
                        ],
                        [
                            'label' => 'Vault Usage',
                            'value' => '82%',
                            'trend' => '9.2 TB',
                            'color' => 'emerald',
                        ],
                        [
                            'label' => 'Avg. Rendering',
                            'value' => '14m',
                            'trend' => '-2m',
                            'color' => 'rose',
                        ],
                    ] as $stat)
                <div
                    class="relative group bg-zinc-900/40 border border-white/5 p-6 rounded-2xl transition-all duration-500 hover:bg-zinc-900/60 hover:-translate-y-1 overflow-hidden shadow-2xl">

                    {{-- 1. Dynamic Background Glow (Visible on Hover) --}}
                    <div
                        class="absolute -right-4 -top-4 w-24 h-24 bg-lime-400/5 rounded-full blur-3xl group-hover:bg-lime-400/10 transition-all duration-500">
                    </div>

                    {{-- 2. Technical Corner Accent (Now Glows) --}}
                    <div class="absolute top-0 right-0 p-1.5">
                        <div
                            class="w-3 h-3 border-t-2 border-r-2 border-white/5 group-hover:border-lime-400/40 transition-all duration-500 rounded-tr-sm">
                        </div>
                    </div>

                    {{-- 3. Label with Activity Indicator --}}
                    <div class="flex items-center gap-2 mb-5">
                        <div
                            class="h-1.5 w-1.5 rounded-full bg-lime-500 shadow-[0_0_8px_rgba(163,230,53,0.8)] animate-pulse">
                        </div>
                        <p
                            class="text-[10px] font-black uppercase tracking-[0.25em] text-zinc-500 group-hover:text-zinc-300 transition-colors">
                            {{ $stat['label'] }}
                        </p>
                    </div>

                    {{-- 4. Main Value & Trend --}}
                    <div class="flex items-end justify-between relative z-10">
                        <div class="space-y-1">
                            <span
                                class="text-4xl font-black text-white tracking-tighter tabular-nums block group-hover:scale-[1.02] transition-transform duration-500">
                                {{ $stat['value'] }}
                            </span>
                            <span
                                class="text-[8px] font-black text-zinc-600 uppercase tracking-widest group-hover:text-zinc-400">System_Validated</span>
                        </div>

                        <div class="flex flex-col items-end gap-1">
                            {{-- Trend Pill --}}
                            <div
                                class="px-2 py-1 rounded-md bg-lime-400/10 border border-lime-400/20 shadow-[0_0_15px_rgba(163,230,53,0.1)]">
                                <span class="text-[10px] font-mono font-black text-lime-400 tracking-tight">
                                    {{ $stat['trend'] }}
                                </span>
                            </div>
                            <span
                                class="text-[7px] font-black text-zinc-700 uppercase tracking-tighter">Metric_Node</span>
                        </div>
                    </div>

                    {{-- 5. Bottom Progress Line (Subtle Decoration) --}}
                    <div
                        class="absolute bottom-0 left-0 h-[2px] w-0 bg-lime-400 group-hover:w-full transition-all duration-700 opacity-30">
                    </div>
                </div>
            @endforeach
        </div>

        {{-- <section
            class="mt-10 bg-zinc-900/20 border border-white/5 rounded-2xl overflow-hidden backdrop-blur-xl shadow-[0_20px_50px_rgba(0,0,0,0.3)]">
            
            <div class="px-8 py-6 border-b border-white/5 bg-white/[0.02] flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <div class="p-2 rounded-lg bg-lime-400/10 border border-lime-400/20">
                        <svg class="w-4 h-4 text-lime-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-width="2.5"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xs font-black uppercase tracking-[0.3em] text-white">Live Production Queue</h3>
                        <p class="text-[9px] font-bold text-zinc-500 uppercase tracking-widest mt-0.5">Real-time asset
                            synchronization active</p>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="text-[9px] font-black uppercase text-zinc-600 tracking-[0.2em] bg-zinc-950/40">
                            <th class="px-8 py-4">Production / Entity</th>
                            <th class="px-8 py-4">Optimization Status</th>
                            <th class="px-8 py-4 text-right">Bitrate / Format</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-white/[0.03]">
                        @foreach (['Skyline Cinematic', 'Urban Vogue', 'Neon Nights', 'Archive_88'] as $project)
                            <tr class="group hover:bg-white/[0.02] transition-all duration-300 cursor-pointer">
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-4">
                                        <div
                                            class="relative h-12 w-12 flex-shrink-0 group-hover:scale-110 transition-transform duration-500">
                                            <div
                                                class="absolute inset-0 bg-lime-400/20 rounded-xl blur group-hover:opacity-100 opacity-0 transition-opacity">
                                            </div>
                                            <img src="https://api.dicebear.com/7.x/identicon/svg?seed={{ $project }}"
                                                class="relative h-full w-full rounded-xl bg-zinc-900 border border-white/10 group-hover:border-lime-400/50 transition-all">
                                        </div>
                                        <div>
                                            <p
                                                class="text-sm font-black text-zinc-100 group-hover:text-white transition-colors">
                                                {{ $project }}</p>
                                            <p
                                                class="text-[10px] font-mono text-zinc-500 group-hover:text-lime-400/60 transition-colors uppercase mt-0.5">
                                                PRD-{{ rand(100, 999) }}-LOCK
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-5">
                                        <div
                                            class="w-32 h-1.5 bg-zinc-950 rounded-full overflow-hidden border border-white/5 ring-1 ring-white/5">
                                            <div
                                                class="h-full bg-gradient-to-r from-lime-600 to-lime-400 w-2/3 shadow-[0_0_10px_rgba(163,230,53,0.4)]">
                                            </div>
                                        </div>
                                        <span
                                            class="text-[11px] font-mono font-bold text-zinc-400 group-hover:text-lime-400 transition-colors">64.2%</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6 text-right">
                                    <div class="inline-flex flex-col items-end gap-1">
                                        <span
                                            class="px-3 py-1.5 rounded-lg bg-zinc-900 border border-white/10 text-[9px] font-black text-white group-hover:border-lime-400/30 group-hover:bg-zinc-800 transition-all uppercase tracking-tighter">
                                            4K / PRORES 4444
                                        </span>
                                        <span
                                            class="text-[8px] font-black text-zinc-700 uppercase group-hover:text-zinc-500">Node_04_Active</span>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section> --}}
    </div>
</x-layouts.authenticated-layout>
