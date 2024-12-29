<div>
    <x-general.dialog-modal wire:model="showPostEditModal" maxWidth="lg">
        <x-slot name="title">
            Add Posts
        </x-slot>
        <x-slot name="content">
            <div class="row" id="">
                <div class="row mb-3">
                    <label for="name" class="col-3 col-form-label text-dark">Description *</label>
                    <div class="col-12">
                        <x-general.quill-component wire:model="description" />
                        @error('description')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-general.modal-button click="save" target="save" class="btn btn-info" text="Submit" />
        </x-slot>
    </x-general.dialog-modal>
</div>
