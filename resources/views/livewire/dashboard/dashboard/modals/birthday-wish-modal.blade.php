<div>
    <x-general.dialog-modal wire:model="showModal" maxWidth="lg">
        <x-slot name="title">
            Add Wish
        </x-slot>
        <x-slot name="content">

            <div class="row">
                <label for="selected_image_template" class="col-6 col-form-label">Type <span class="text-danger">*</span></label>
                <div class="col-12">
                    <select class="form-select form-select-sm" wire:model.live="selected_image_template">
                        <option selected value="">Select Image Type</option>
                        @foreach ($allImages ?? [] as $type)
                            <option value="{{ $type['path'] }}">{{ $type['id'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            @error('selected_image_template')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
            <div class="text-center">
                @if ($selected_image_template)
                    <img width="550" src="{{ asset($selected_image_template) }}" alt="Image">
                @endif
            </div>


        </x-slot>
        <x-slot name="footer">
            <x-general.modal-button click="save" target="save" class="btn btn-info" text="Submit" />
        </x-slot>
    </x-general.dialog-modal>
</div>
