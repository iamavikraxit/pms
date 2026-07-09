<div class="overflow-hidden rounded-2xl border border-orange-100 bg-white shadow-xl shadow-orange-950/5">
    {{-- Search Field --}}
    <div class="border-b border-orange-100 bg-gradient-to-r from-orange-50/60 via-white to-orange-50/30 px-6 py-5">
        <div class="flex items-center justify-between flex-wrap gap-4">
            <div class="flex items-center gap-3">
                <div class="relative">
                    <x-search-field action="{{ route('staff') }}" name="search" value="{{ request('search') }}"
                        placeholder="Search staff by name or email..." button-label="Search" />
                </div>

                <span class="whitespace-nowrap rounded-full bg-orange-100 px-3 py-2 text-sm font-semibold text-orange-700">
                    Total: {{ $users->count() }}
                </span>
            </div>
        </div>
    </div>

    {{-- Table Wrapper --}}
    <div class="overflow-x-auto">
        <table class="min-w-[720px] w-full table-auto divide-y divide-orange-100">
            <thead class="bg-gradient-to-r from-orange-50 via-white to-orange-50">
                <tr>
                    <th class="px-6 py-4 text-left text-[11px] font-black uppercase tracking-[0.2em] text-stone-500">
                        Sl No.
                    </th>
                    <th class="px-6 py-4 text-left text-[11px] font-black uppercase tracking-[0.2em] text-stone-500">
                        Staff Details
                    </th>
                    <th class="px-6 py-4 text-center text-[11px] font-black uppercase tracking-[0.2em] text-stone-500">
                        Role
                    </th>
                    <th class="px-6 py-4 text-left text-[11px] font-black uppercase tracking-[0.2em] text-stone-500">
                        Custom Permissions
                    </th>
                    <th class="px-6 py-4 text-center text-[11px] font-black uppercase tracking-[0.2em] text-stone-500">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-orange-100/70">
                @forelse ($users as $index => $user)
                    <tr class="group hover:bg-orange-50/40 transition-all duration-200">
                        <td class="px-6 py-4 text-sm font-semibold text-stone-700">
                            {{ $index + 1 }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="font-bold text-stone-800">{{ $user->name }}</div>
                            <div class="text-xs text-stone-400 font-medium">{{ $user->email }}</div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            @forelse ($user->roles as $role)
                                <span class="inline-flex items-center rounded-full border border-orange-200 bg-orange-50 px-3 py-1 text-xs font-bold text-orange-700">
                                    {{ $role->name }}
                                </span>
                            @empty
                                <span class="text-xs text-stone-400 italic">No Role</span>
                            @endforelse
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex flex-wrap items-center gap-1.5 max-w-[400px]">
                                @forelse ($user->permissions as $permission)
                                    <span class="inline-flex items-center rounded-full bg-stone-100 px-2 py-0.5 text-[10px] font-bold text-stone-600 border border-stone-200">
                                        {{ $permission->name }}
                                    </span>
                                @empty
                                    <span class="text-xs text-stone-400 italic">None</span>
                                @endforelse
                            </div>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <button onclick="editStaff('{{ $user->id }}', '{{ $user->name }}', '{{ $user->roles->first()?->id }}', {{ json_encode($user->permissions->pluck('id')) }})"
                                class="inline-flex items-center justify-center gap-1.5 px-3 py-1.5 rounded-lg border border-orange-200 bg-orange-50 text-xs font-bold text-orange-700 hover:bg-orange-100 hover:scale-105 transition-all duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 5h2m-1-1v2m6.364 2.636l-9.9 9.9a2 2 0 01-.878.515l-3 1a1 1 0 01-1.264-1.264l1-3a2 2 0 01.515-.878l9.9-9.9a2.121 2.121 0 013 3z" />
                                </svg>
                                Edit Permissions
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-16 text-center">
                            <div class="flex flex-col items-center justify-center gap-3">
                                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-orange-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293L6.586 13H4" />
                                    </svg>
                                </div>
                                <h3 class="text-lg font-bold text-stone-700">No Staff Found</h3>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<x-modal.open-modal id="editStaffModal" title="Edit Staff Permissions" size="2xl" bg-class="bg-zinc-900 border border-zinc-800 shadow-2xl">
    <form id="editStaffForm" method="POST" action="" class="space-y-6">
        @csrf
        
        <div class="space-y-1">
            <h3 class="text-sm font-semibold text-zinc-400">Staff Member</h3>
            <div id="staffNameDisplay" class="text-lg font-bold text-white"></div>
        </div>

        {{-- Role Dropdown --}}
        <div class="space-y-2">
            <label for="roleSelect" class="block text-sm font-semibold text-zinc-300">Role</label>
            <select id="roleSelect" name="role_id"
                class="w-full rounded-lg border border-white/10 bg-zinc-800 px-4 py-2.5 text-white transition-all focus:border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500/20">
                <option value="">Select a Role</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
            <p class="text-xs text-zinc-500">
                You can customize individual permissions below.
            </p>
        </div>

        {{-- Permissions Grid --}}
        <div class="space-y-3">
            <div class="flex items-center justify-between">
                <label class="block text-sm font-semibold text-zinc-300">Custom Permissions</label>
                <button type="button" onclick="resetPermissions()" class="text-xs font-bold text-orange-400 hover:text-orange-300 hover:underline">
                    Reset to Original
                </button>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 rounded-xl border border-white/5 bg-zinc-800/40 p-4">
                @foreach ($permissions as $permission)
                    <label class="flex items-start gap-3 cursor-pointer group rounded-lg p-2 hover:bg-white/5 transition-colors">
                        <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" data-permission-id="{{ $permission->id }}"
                            class="permission-checkbox mt-1 h-4.5 w-4.5 rounded border-white/10 bg-zinc-850 text-orange-500 focus:ring-orange-500 accent-orange-500" />
                        <div class="space-y-0.5">
                            <span class="block text-sm font-bold text-white group-hover:text-orange-400 transition-colors">
                                {{ $permission->name }}
                            </span>
                            <span class="block text-[11px] font-mono text-zinc-500">
                                {{ $permission->short_name }}
                            </span>
                        </div>
                    </label>
                @endforeach
            </div>
        </div>

        {{-- Submit --}}
        <div class="flex justify-end gap-3 border-t border-white/5 pt-4">
            <button type="button" onclick="closeModal('editStaffModal')"
                class="rounded-lg border border-white/10 px-4 py-2.5 text-sm font-bold text-zinc-300 hover:bg-white/5 transition-all">
                Cancel
            </button>
            <button type="submit"
                class="rounded-lg bg-gradient-to-r from-orange-500 to-red-500 px-5 py-2.5 text-sm font-bold text-white shadow-lg shadow-orange-500/20 hover:shadow-orange-500/35 hover:-translate-y-0.5 transition-all duration-200">
                Save Permissions
            </button>
        </div>
    </form>
</x-modal.open-modal>

@push('scripts')
<script>
    let currentUserRoleId = null;
    let currentUserPermissions = [];

    function editStaff(userId, userName, roleId, permissionIds) {
        currentUserRoleId = roleId;
        currentUserPermissions = permissionIds;

        const form = document.getElementById('editStaffForm');
        form.action = `/staff/${userId}/permissions`;

        document.getElementById('staffNameDisplay').innerText = userName;
        
        const roleSelect = document.getElementById('roleSelect');
        roleSelect.value = roleId || '';

        // Check the boxes matching the user's specific current permissions
        document.querySelectorAll('.permission-checkbox').forEach(checkbox => {
            const permId = checkbox.value;
            checkbox.checked = currentUserPermissions.includes(permId);
        });

        openModal('editStaffModal');
    }

    function resetPermissions() {
        document.querySelectorAll('.permission-checkbox').forEach(checkbox => {
            checkbox.checked = currentUserPermissions.includes(checkbox.value);
        });
    }
</script>
@endpush
