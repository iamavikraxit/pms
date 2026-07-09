<x-layouts.authenticated-layout>
    <div class="space-y-6">
        <header class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="space-y-1">
                <h1 class="text-4xl sm:text-4xl font-black tracking-tight leading-tight text-stone-900">
                    Staff
                    <span class="bg-gradient-to-r from-orange-600 via-amber-600 to-red-600 bg-clip-text text-transparent">
                        Management
                    </span>
                </h1>
            </div>
        </header>

        @include('pages.staff.staff-list')
    </div>
</x-layouts.authenticated-layout>
