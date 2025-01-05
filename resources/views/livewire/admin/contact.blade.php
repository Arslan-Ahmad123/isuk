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
        <h2 class="text-center mb-4">Edit Contact Page Sections</h2>
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
                @elseif ($selectedSection == 'contact')
                    <div class="mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control" id="heading" wire:model="sectionData.heading">
                        @error('sectionData.heading')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subHeading" class="form-label">Sub Heading</label>
                        <input type="text" class="form-control" id="subHeading" wire:model="sectionData.subHeading">
                        @error('sectionData.subHeading')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="number" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="number" wire:model="sectionData.number">
                        @error('sectionData.number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" wire:model="sectionData.email">
                        @error('sectionData.email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        @endif
    </div>
</div>
