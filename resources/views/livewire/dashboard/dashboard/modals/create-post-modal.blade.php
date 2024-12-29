<div>
    <x-general.dialog-modal wire:model="showPostModal" maxWidth="lg">
        <x-slot name="title">
            Add Posts
        </x-slot>
        <x-slot name="content">
            <div class="row" id="">
                <div class="mb-3 row">
                    <label for="name" class="col-3 col-form-label text-dark">Description<span class="text-danger">*</span></label>
                    <div class="col-12">
                        <x-general.quill-component wire:model="description" />
                        @error('description')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label for="files" class="col-3 col-form-label text-dark">File Upload</label>
                    <div class="multiple-files-height">
                        <x-general.filepond wire:model="files" id="postFilepond" multiple="true" class="postFilepond" />
                    </div>
                    <div class="mt-5 text-dark">
                        @error('files.*')
                            <span class="error ">{{ $message }}</span>
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
