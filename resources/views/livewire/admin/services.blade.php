<div>
    <style>
        .container {
            width: 100%;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
            color: #2c2752;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
        }

        .btn-primary {
            background-color: #2c2752;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
        }

        .btn-primary:hover {
            background-color: #1a1a2e;
        }

        .text-danger {
            color: #dc3545;
        }
    </style>
    <div class="container my-3">
        <h2 class="text-center mb-4">Edit Services Page Sections</h2>
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="mb-3">
            <label for="section" class="form-label">Select Section</label>
            <select id="section" class="form-control" wire:model.live="selectedSection">
                <option value="">Select a section</option>
                @foreach ($sections as $key => $section)
                    <option value="{{ $key }}">{{ $section }}</option>
                @endforeach
            </select>
        </div>

        @if ($selectedSection)
            <form wire:submit.prevent="submit">
                @if ($selectedSection == 'hero')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" wire:model="sectionData.title">
                        @error('sectionData.title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" wire:model="sectionData.description"></textarea>
                        @error('sectionData.description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image URL</label>
                        <input type="file" class="form-control" id="image" wire:model="newImage">
                        @error('newImage')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        @if (isset($sectionData['image']))
                            <img src="{{ $sectionData['image'] }}" alt="Hero Image" class="img-fluid mt-2"
                                style="max-width: 100px;">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="buttonText" class="form-label">Button Text</label>
                        <input type="text" class="form-control" id="buttonText" wire:model="sectionData.buttonText">
                        @error('sectionData.buttonText')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                @elseif ($selectedSection == 'services')
                    @foreach ($sectionData['services'] ?? [] as $index => $service)
                        <h4>Service {{ $index + 1 }}</h4>
                        <div class="mb-3">
                            <label for="title_{{ $index }}" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title_{{ $index }}"
                                wire:model="sectionData.services.{{ $index }}.title">
                            @error('sectionData.services.' . $index . '.title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description_{{ $index }}" class="form-label">Description</label>
                            <textarea class="form-control" id="description_{{ $index }}" rows="3"
                                wire:model="sectionData.services.{{ $index }}.description"></textarea>
                            @error('sectionData.services.' . $index . '.description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image_{{ $index }}" class="form-label">Image URL</label>
                            <input type="file" class="form-control" id="image_{{ $index }}"
                                wire:model="newImage" wire:change="$set('imageIndex', {{ $index }})">
                            @error('newImage')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (isset($sectionData['services'][$index]['image']))
                                <img src="{{ $sectionData['services'][$index]['image'] }}" alt="Service Image"
                                    class="img-fluid mt-2" style="max-width: 100px;">
                            @endif
                        </div>
                        <button type="button" class="btn btn-danger"
                            wire:click="removeService({{ $index }})">Delete Service</button>
                    @endforeach
                    <button type="button" class="btn btn-success" wire:click="addService">Add Service</button>
                @endif
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        @endif
    </div>
</div>
