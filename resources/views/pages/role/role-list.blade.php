@php
    $headers = [
        'Sl No.',
        'Role Name',
        ['label' => 'Guard Name', 'align' => 'center'],
        ['label' => 'Created At', 'align' => 'center'],
        ['label' => 'Actions', 'align' => 'center'],
    ];
@endphp

<x-table 
    :headers="$headers" 
    :items="$roles" 
    search-action="{{ route('roles') }}" 
    search-placeholder="Search roles by name..." 
    search-value="{{ request('search') }}"
    empty-title="No Roles Found"
    empty-description=""
>
    @foreach ($roles as $index => $role)
        <tr class="group hover:bg-orange-50/40 transition-all duration-200">
            <td class="px-6 py-4 text-sm font-semibold text-stone-700">
                {{ $index + 1 }}
            </td>

            <td class="px-6 py-4">
                <div class="font-bold text-stone-800">
                    {{ $role->name }}
                </div>
            </td>

            <td class="px-6 py-4 text-center">
                <span
                    class="inline-flex items-center rounded-full border border-orange-200 bg-orange-50 px-3 py-1 text-xs font-bold text-orange-700">
                    {{ $role->guard_name }}
                </span>
            </td>

            <td class="px-6 py-4 text-center text-sm font-medium text-stone-500">
                {{ $role->created_at->format('d M Y') }}
            </td>

            <td class="px-6 py-4">
                <div class="flex items-center justify-center gap-2">
                    <button
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-blue-200 bg-blue-50 text-blue-600 transition hover:scale-105 hover:bg-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 5h2m-1-1v2m6.364 2.636l-9.9 9.9a2 2 0 01-.878.515l-3 1a1 1 0 01-1.264-1.264l1-3a2 2 0 01.515-.878l9.9-9.9a2.121 2.121 0 013 3z" />
                        </svg>
                    </button>

                    <button
                        class="flex h-10 w-10 items-center justify-center rounded-full border border-red-200 bg-red-50 text-red-600 transition hover:scale-105 hover:bg-red-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 7h12M9 7V4h6v3m-7 4v6m4-6v6m4-6v6m-9 4h10a2 2 0 002-2V7H5v12a2 2 0 002 2z" />
                        </svg>
                    </button>
                </div>
            </td>
        </tr>
    @endforeach
</x-table>

