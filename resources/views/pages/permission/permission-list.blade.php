<div class="overflow-hidden rounded-2xl border border-orange-100 bg-white shadow-xl shadow-orange-950/5">
    {{-- Search Field --}}
    <div class="border-b border-orange-100 bg-gradient-to-r from-orange-50/60 via-white to-orange-50/30 px-6 py-5">
        <div class="relative max-w-md">
            <x-search-field action="{{ route('permissions') }}" name="search" value="{{ request('search') }}"
                placeholder="Search permissions by name..." button-label="Search" />
            {{-- Add count --}}
            {{-- <span
                class="absolute top-1/2 -translate-y-1/2 rounded-full px-2 ml-3 py-0.5 text-sm font-bold text-orange-700">
                Total : {{ $permissions->count() }}
            </span> --}}
        </div>
    </div>

</div>