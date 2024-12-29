<div>
    <div class="container mt-2">
        <form wire:submit.prevent="UpdateUserRole">
            <div class="d-flex justify-content-end  align-items-center mb-2">

                <div class="me-2">
                     <label for="name" class="col-form-label">Role Name</label>
                </div>
                <div class="me-2">
                    <input class="form-control form-control-sm py-1" placeholder="Roll Name" name="name" type="text"
                        id="first_name" wire:model="name">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
        </form>
        <div class="accordion" id="accordionExample">
            @foreach ($modules as $module)
                <livewire:settings.manage-role.role-permission.module-role-permission :module="$module"
                    :roleId="$roleId" :selectedPermissions="$selectedPermissions" key="{{ $module->name . '-' . now() . '-main' }}" />
            @endforeach
        </div>
    </div>
</div>
