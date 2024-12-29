<div class="card mb-2">
    <div class="card-header d-flex align-items-center ms-2">
        <div class="me-2">
            <input class="form-check-input" type="checkbox" {{$setNewRolePermissions == 1?"checked":""}} wire:model.live="setNewRolePermissions" />
        </div>
        <h5 wire:click="$dispatchTo('settings.manage-role.role-permission.sub-module-role-permission-modal', 'show-submodule-permission',{moduleId:{{$module->id}}})" class="w-100 cursor-pointer">{{$module->name}}</h5>
    </div>
    <livewire:settings.manage-role.role-permission.sub-module-role-permission-modal :roleId="$roleId" wire:key="sub-module-role-permission-modal-{{now()}}" />
</div>
