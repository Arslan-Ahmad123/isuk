<div>
    <x-general.dialog-modal wire:model="showModal" maxWidth="lg">
        <x-slot name="title">
            Sub Module Permissions
        </x-slot>
        <x-slot name="content">
            @forelse($subModules??[] as $subModule)
            <div class="accordion-item">
                <h2 class="accordion-header" id="subHeading{{ $subModule->id }}">
                    <button class="accordion-button collapsed" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#subCollapse{{ $subModule->id }}"
                        aria-expanded="false"
                        aria-controls="subCollapse{{ $subModule->id }}">
                        {{ $subModule->name }}
                    </button>
                </h2>
                <div id="subCollapse{{ $subModule->id }}"
                    class="accordion-collapse collapse"
                    aria-labelledby="subHeading{{ $subModule->id }}"
                    data-bs-parent="#collapse{{ $moduleId }}">
                    <div class="accordion-body">
                        <ul class="row">
                            @foreach ($subModule->permissions as $permission)
                                <div class="col-lg-3" :key="$permission->id">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox"
                                        wire:model="subModulePermissions.{{ $subModule->id }}.{{ $permission->id }}"
                                        @checked(in_array($permission->id,$subModulePermissions[$subModule->id])=="true"?1:0)
                                        value="{{ $permission->id }}"
                                        id="permission{{ $permission->id }}">
                                        <label class="form-check-label"
                                            for="permission{{ $permission->id }}">
                                            {{ $permission->name }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
        </x-slot>
        <x-slot name="footer">
            <x-general.modal-button click="save" target="save" class="btn btn-info" text="Save" />
        </x-slot>
    </x-general.dialog-modal>

</div>
