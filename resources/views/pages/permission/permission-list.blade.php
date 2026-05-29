<x-table-component :headers="[
    ['label' => 'Sl No.', 'field' => 'id', 'align' => 'left'],
    ['label' => 'Permission Name', 'field' => 'name', 'align' => 'center'],
    ['label' => 'Attached Role Name', 'field' => 'guard_name', 'align' => 'center'],
    ['label' => 'Actions', 'field' => 'actions', 'align' => 'center'],
]" {{-- :items="$roles" --}} emptyMessage="No permissions defined yet." />