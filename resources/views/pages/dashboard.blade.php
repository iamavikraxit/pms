<x-layouts.authenticated-layout>
    <div class="space-y-6">
        <header class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
            <div class="space-y-1">
                <div class="flex items-center gap-3">
                    <span class="text-lg sm:text-sm font-bold uppercase tracking-[0.35em] text-stone-500">
                        Welcome To
                    </span>
                </div>
                <h1 class="text-4xl sm:text-4xl font-black tracking-tight leading-tight text-stone-900">
                    Studio
                    <span class="bg-gradient-to-r from-orange-600 via-amber-600 to-red-600 bg-clip-text text-transparent">
                        Pixel Moment
                    </span>
                    <span class="text-orange-500">.</span>
                </h1>
            </div>
        </header>

        {{-- Stats Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            <x-stat-card title="Total Revenue" value="$45,820.00" change="+12.5%" trend="up" color="indigo" />
            <x-stat-card title="Shoots" value="18" trend="Active" color="blue" />
            <x-stat-card title="Vault" value="82 %" trend="9.2 TB" color="emerald" />
            <x-stat-card title="Render" value="14m" trend="- 2m" color="rose" />
        </div>
    </div>
</x-layouts.authenticated-layout>
