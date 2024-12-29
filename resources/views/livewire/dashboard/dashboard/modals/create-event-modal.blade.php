<div>
    <x-general.dialog-modal wire:model="showEventsModal" maxWidth="lg">
        <x-slot name="title">
            ADD EVENT
        </x-slot>
        <x-slot name="content">
            <div class="row" id="">
                <div class="mb-2 row">
                    <label for="name" class="col-3 col-form-label text-dark">Title <span
                            class="text-danger">*</span></label>
                    <div class="col-12">
                        <input type="text" class="form-control" id="name" name="name" wire:model="name">
                        @error('name')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="description" class="col-3 col-form-label text-dark">Description <span
                            class="text-danger">*</span></label>
                    <div class="col-12">
                        <x-general.quill-component wire:model="description" />
                        @error('description')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2 row">
                    <div class="col-12">
                        <label class="col-3 col-form-label text-dark">Type <span class="text-danger">*</span></label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="type_online"
                                value="online" wire:model="type">
                            <label class="form-check-label" for="type_online">Online</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="type" id="type_inperson"
                                value="inperson" wire:model="type">
                            <label class="form-check-label" for="type_inperson">In Person</label>
                        </div>
                        @error('type')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2 row">
                    <div class="col-6">
                        <label for="timezone" class="col-3 col-form-label text-dark">Timezone <span class="text-danger">*</span></label>
                        <select class="form-control" id="timezone" name="timezone" wire:model="timezone">
                            <option value="">Select Timezone</option>
                            @foreach ($timezones as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                        @error('timezone')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="event_link" class="col-3 col-form-label text-dark">Event Link</label>
                        <input type="text" class="form-control" id="event_link" name="event_link"
                            wire:model="event_link">
                        @error('event_link')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-2 row">
                    <div class="col-6">
                        <label for="start_datetime" class="col-3 col-form-label text-dark">Start Date <span class="text-danger">*</span></label>
                        <input type="datetime-local" class="form-control" id="start_datetime" name="start_datetime"
                            wire:model="start_datetime" min="{{ date('Y-m-d\TH:i') }}">
                        @error('start_datetime')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="end_datetime" class="col-3 col-form-label text-dark">End Date <span class="text-danger">*</span></label>
                        <input type="datetime-local" class="form-control" id="end_datetime" name="end_datetime"
                            wire:model="end_datetime" min="{{ date('Y-m-d\TH:i') }}">
                        @error('end_datetime')
                            <span class="error text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-1 row">
                    <label for="uploadfile" class="col-3 col-form-label text-dark">File Upload</label>
                    <x-general.filepond wire:model="uploadfile" id="eventFilepond" class="eventFilepond" />
                </div>
                <div class="text-dark">
                    @error('uploadfile.*')
                        <span class="error ">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-general.modal-button click="saveEvents" target="save" class="btn btn-info" text="Submit" />
        </x-slot>
    </x-general.dialog-modal>
</div>
