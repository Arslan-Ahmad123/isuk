<div>
    <div class="card">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
            </div>
        </div>
        <div class="px-2 py-1 mb-2 rounded d-flex card-header justify-content-between align-items-center border-bottom">
            <h4 class="">Roles</h4>
            <x-general.modal-button click="$dispatchTo('settings.manage-role.create-role', 'showAssignmentModal')"
                target="" class="btn btn-primary btn-sm me-2 " text="+ Role" />
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table mb-0 table-centered table-hover w-100" id="products-datatable">
                    <thead class="table-light">
                        <tr>
                            <th>
                                Sr.
                            </th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($roles as $role)
                            @if ($role->id == 1 && auth()->user()->role_id == 1)
                                <tr>
                                    <td>{{ $loop->index }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td class="table-action">
                                        <a href="{{ route('role.permissions', ['roleId' => $role->id]) }}"
                                            class="action-icon"><i class="mdi mdi-pencil fs-5"></i></a>
                                    </td>
                                </tr>
                            @elseif($role->id != 1)
                                <tr>
                                    <td>{{ $loop->index }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td class="table-action">
                                        <a href="{{ route('role.permissions', ['roleId' => $role->id]) }}"
                                            class="action-icon"><i class="mdi mdi-pencil fs-5"></i></a>
                                        <i class="mdi mdi-delete ms-1 fs-5" wire:click="deleteUsersRole({{ $role->id }})"></i>
                                    </td>
                                </tr>
                            @endif
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No Active Role Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <x-general.confirm-modal wire:model="showDeleteModal">
        <x-slot name="title">
            Delete Role
        </x-slot>
        <x-slot name="content">
            Are you sure you want to delete?
        </x-slot>
        <x-slot name="footer">
            <button class="ml-2 btn btn-secondary" wire:click="$toggle('showDeleteModal')" wire:loading.attr="disabled">
                No
            </button>
            <button class="ml-2 btn btn-danger" wire:click="roleDelete()" wire:loading.attr="disabled">
                Yes
            </button>
        </x-slot>
    </x-general.confirm-modal>
    <livewire:settings.manage-role.create-role>
</div>
