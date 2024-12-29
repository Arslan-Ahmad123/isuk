<div>
    <x-general.dialog-modal wire:model="showDepartmentModal" maxWidth="md">
        <x-slot name="title">{{ $departmentId == 0 ? 'Create New' : 'Update Existing' }}
            Department
        </x-slot>
        <x-slot name="content">
            <div class="row" id="">
                <div class="col-lg-12 mb-2">
                    <label for="name" class="col-form-label">Department Name *</label>
                    <div class="col-12">
                        <input type="text" class="form-control" id="name" wire:model="name" placeholder="Name"
                            value="">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                {{-- <div class="col-lg-12 mb-2">
                    <div class="col-12 w-full">
                        <x-general.select-single-input :options="$branchesList" entangle="branchId" inputName="branchId"
                            eventName="update-branch-option" label="Branch" />
                    </div>

                    @error('branchId')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-general.modal-button click="save" target="save" class="btn btn-info" text="Submit" />
        </x-slot>
    </x-general.dialog-modal>
</div>
