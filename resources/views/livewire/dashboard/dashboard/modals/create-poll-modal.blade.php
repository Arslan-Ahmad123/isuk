<div>

    <x-general.dialog-modal wire:model="showPoolsModal" maxWidth="lg">
        <x-slot name="title">
            CREATE POLL
        </x-slot>
        <x-slot name="content">
            <div class="row" id="">

                <div class="mb-2 row">
                    <label for="description" class="col-3 col-form-label text-dark">Question <span class="text-danger">*</span></label>
                    <div class="col-12">
                        <textarea class="form-control" id="description" rows="3" name="description" wire:model="description"></textarea>
                        @error('description')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="duration" class="col-3 col-form-label text-dark">Duration <span class="text-danger">*</span></label>
                    <div class="col-12">
                        <select class="form-select" id="duration" name="duration" wire:model="duration">
                            <option value="0"></option>
                            <option value="1">1 day</option>
                            <option value="3">3 days</option>
                            <option value="7">1 week</option>
                            <option value="14">2 weeks</option>
                        </select>
                        @error('duration')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div>
                    @foreach ($options as $index => $option)
                        <div class="mb-2 row">
                            <div class="col-12">
                                <label for="option{{ $index + 1 }}" class="col-3 col-form-label text-dark">Option
                                    {{ $index + 1 }}</label>
                                <div class="input-group pe-3">
                                    <input type="text" class="form-control" id="option{{ $index + 1 }}"
                                        name="options[]" wire:model="options.{{ $index }}">
                                    @if ($index > 0)
                                        <span class="input-group-text" wire:click="removeOption({{ $index }})"><i
                                                class="ri-close-line"></i></span>
                                    @endif
                                </div>
                                @error('options.' . $index)
                                    <span class="error text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    @endforeach

                    <div class="row">
                        <div class="col-12">
                            <button wire:click="addOption" class="btn btn-sm btn-primary">+</button>
                        </div>
                    </div>
                </div>

            </div>
        </x-slot>
        <x-slot name="footer">
            <x-general.modal-button click="savePools" target="save" class="btn btn-info" text="Submit" />
        </x-slot>
    </x-general.dialog-modal>
</div>
