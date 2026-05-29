<x-table-component :headers="[
    ['label' => 'Sl No.', 'field' => 'id', 'align' => 'left'],
    ['label' => 'Role Name', 'field' => 'name', 'align' => 'center'],
    ['label' => 'Guard Name', 'field' => 'guard_name', 'align' => 'center'],
    ['label' => 'Created At', 'field' => 'created_at', 'align' => 'center'],
    ['label' => 'Actions', 'field' => 'actions', 'align' => 'center'],
]" {{-- :items="$roles" --}} emptyMessage="No roles defined yet." />
