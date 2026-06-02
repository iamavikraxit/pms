<x-layouts.authenticated-layout>
    <div class="space-y-6">
        <header class="flex flex-col lg:flex-row lg:items-end justify-between gap-6">
            <div class="space-y-1">
                
                <h1 class="text-4xl sm:text-4xl font-black tracking-tight leading-tight text-stone-900">
                    Permission
                    <span
                        class="bg-gradient-to-r from-orange-600 via-amber-600 to-red-600 bg-clip-text text-transparent">
                        List
                    </span>
                </h1>
            </div>

            <button class="px-5 py-3 rounded-lg bg-gradient-to-r from-orange-500 to-red-500 hover:from-orange-600 hover:to-red-600 text-white font-bold text-xs shadow-lg shadow-orange-500/20 hover:shadow-orange-500/35 hover:-translate-y-0.5 transition-all duration-300">
                + Create New
            </button>
        </header>

        @include('pages.permission.permission-list')
</x-layouts.authenticated-layout>