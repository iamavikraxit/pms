<x-layouts.authenticated-layout>
    <div class="space-y-10">
        <header class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
            <div class="space-y-1">
                <div class="flex items-center gap-3">
                    <span class="text-lg sm:text-sm font-bold uppercase tracking-[0.35em] text-zinc-500">
                        Welcome To
                    </span>
                </div>
                <h1 class="text-4xl sm:text-4xl font-black tracking-tight leading-tight text-zinc-900 dark:text-white">
                    Studio
                    <span
                        class="relative inline-block text-transparent bg-clip-text bg-gradient-to-r from-zinc-800 via-lime-500 to-zinc-900 dark:from-white dark:via-lime-400 dark:to-zinc-300">
                        Pixel Moment
                    </span>
                    <span class="text-zinc-400">.</span>
                </h1>
            </div>
        </header>

        {{-- Stats Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <x-stat-card title="Revenue" value="$84.2k" trend="+12.5%" color="lime" />
            <x-stat-card title="Shoots" value="18" trend="Active" color="blue" />
            <x-stat-card title="Vault" value="82 %" trend="9.2 TB" color="emerald" />
            <x-stat-card title="Render" value="14m" trend="- 2m" color="rose" />
        </div>
    </div>
</x-layouts.authenticated-layout>
