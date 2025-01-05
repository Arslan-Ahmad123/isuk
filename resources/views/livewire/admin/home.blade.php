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
        <h2 class="text-center mb-4">Edit Home Page Sections</h2>
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
                    @foreach ($sectionData['sliders'] ?? [] as $index => $slider)
                        <h4>Slider {{ $index + 1 }}</h4>
                        <div class="mb-3">
                            <label for="title_{{ $index }}" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title_{{ $index }}"
                                wire:model="sectionData.sliders.{{ $index }}.title">
                            @error('sectionData.sliders.' . $index . '.title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description_{{ $index }}" class="form-label">Description</label>
                            <textarea class="form-control" id="description_{{ $index }}" rows="3"
                                wire:model="sectionData.sliders.{{ $index }}.description"></textarea>
                            @error('sectionData.sliders.' . $index . '.description')
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
                            @if (isset($sectionData['sliders'][$index]['image']))
                                <img src="{{ $sectionData['sliders'][$index]['image'] }}" alt="Slider Image"
                                    class="img-fluid mt-2" style="max-width: 100px;">
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="buttonText_{{ $index }}" class="form-label">Button Text</label>
                            <input type="text" class="form-control" id="buttonText_{{ $index }}"
                                wire:model="sectionData.sliders.{{ $index }}.buttonText">
                            @error('sectionData.sliders.' . $index . '.buttonText')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="buttonLink_{{ $index }}" class="form-label">Button Link</label>
                            <select name="" id="buttonLink_{{ $index }}" class="form-control"
                                wire:model="sectionData.sliders.{{ $index }}.buttonLink">
                                <option value="">Select a page</option>
                                <option value="{{ route('home') }}"
                                    {{ route('home') == $sectionData['sliders'][$index]['buttonLink'] ? 'selected' : '' }}>
                                    Home</option>
                                <option value="{{ route('about') }}"
                                    {{ route('about') == $sectionData['sliders'][$index]['buttonLink'] ? 'selected' : '' }}>
                                    About</option>
                                <option value="{{ route('services') }}"
                                    {{ route('services') == $sectionData['sliders'][$index]['buttonLink'] ? 'selected' : '' }}>
                                    Services</option>
                                <option value="{{ route('country') }}"
                                    {{ route('country') == $sectionData['sliders'][$index]['buttonLink'] ? 'selected' : '' }}>
                                    Country</option>
                                <option value="{{ route('contact') }}"
                                    {{ route('contact') == $sectionData['sliders'][$index]['buttonLink'] ? 'selected' : '' }}>
                                    Contact</option>
                            </select>
                            @error('sectionData.sliders.' . $index . '.buttonLink')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="button" class="btn btn-danger"
                            wire:click="removeSlider({{ $index }})">Delete Slider</button>
                    @endforeach
                    <button type="button" class="btn btn-success" wire:click="addSlider">Add Slider</button>
                @elseif ($selectedSection == 'about')
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
                        <label for="firstPara" class="form-label">First Paragraph</label>
                        <textarea class="form-control" id="firstPara" rows="3" wire:model="sectionData.firstPara"></textarea>
                        @error('sectionData.firstPara')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="secondPara" class="form-label">Second Paragraph</label>
                        <textarea class="form-control" id="secondPara" rows="3" wire:model="sectionData.secondPara"></textarea>
                        @error('sectionData.secondPara')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="thirdPara" class="form-label">Third Paragraph</label>
                        <textarea class="form-control" id="thirdPara" rows="3" wire:model="sectionData.thirdPara"></textarea>
                        @error('sectionData.thirdPara')
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
                            <img src="{{ $sectionData['image'] }}" alt="About Image" class="img-fluid mt-2"
                                style="max-width: 100px;">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="buttonText" class="form-label">Button Text</label>
                        <input type="text" class="form-control" id="buttonText"
                            wire:model="sectionData.buttonText">
                        @error('sectionData.buttonText')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="buttonLink" class="form-label">Button Link</label>
                        <select name="" id="buttonLink" class="form-control"
                            wire:model="sectionData.buttonLink">
                            <option value="">Select a page</option>
                            <option value="{{ route('home') }}"
                                {{ route('home') == $sectionData['buttonLink'] ? 'selected' : '' }}>
                                Home</option>
                            <option value="{{ route('about') }}"
                                {{ route('about') == $sectionData['buttonLink'] ? 'selected' : '' }}>
                                About</option>
                            <option value="{{ route('services') }}"
                                {{ route('services') == $sectionData['buttonLink'] ? 'selected' : '' }}>
                                Services</option>
                            <option value="{{ route('country') }}"
                                {{ route('country') == $sectionData['buttonLink'] ? 'selected' : '' }}>
                                Country</option>
                            <option value="{{ route('contact') }}"
                                {{ route('contact') == $sectionData['buttonLink'] ? 'selected' : '' }}>
                                Contact</option>
                        </select>
                        @error('sectionData.buttonLink')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                @elseif ($selectedSection == 'services')
                    <div class="mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control" id="heading" wire:model="sectionData.heading">
                        @error('sectionData.heading')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
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
                            <label for="buttonText_{{ $index }}" class="form-label">Button Text</label>
                            <input type="text" class="form-control" id="buttonText_{{ $index }}"
                                wire:model="sectionData.services.{{ $index }}.buttonText">
                            @error('sectionData.services.' . $index . '.buttonText')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="buttonLink_{{ $index }}" class="form-label">Button Link</label>
                            <select name="" id="buttonLink_{{ $index }}" class="form-control"
                                wire:model="sectionData.services.{{ $index }}.buttonLink">
                                <option value="">Select a page</option>
                                <option value="{{ route('home') }}"
                                    {{ route('home') == $sectionData['services'][$index]['buttonLink'] ? 'selected' : '' }}>
                                    Home</option>
                                <option value="{{ route('about') }}"
                                    {{ route('about') == $sectionData['services'][$index]['buttonLink'] ? 'selected' : '' }}>
                                    About</option>
                                <option value="{{ route('services') }}"
                                    {{ route('services') == $sectionData['services'][$index]['buttonLink'] ? 'selected' : '' }}>
                                    Services</option>
                                <option value="{{ route('country') }}"
                                    {{ route('country') == $sectionData['services'][$index]['buttonLink'] ? 'selected' : '' }}>
                                    Country</option>
                                <option value="{{ route('contact') }}"
                                    {{ route('contact') == $sectionData['services'][$index]['buttonLink'] ? 'selected' : '' }}>
                                    Contact</option>
                            </select>
                            @error('sectionData.services.' . $index . '.buttonLink')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="button" class="btn btn-danger"
                            wire:click="removeService({{ $index }})">Delete Service</button>
                    @endforeach
                    <button type="button" class="btn btn-success" wire:click="addService">Add Service</button>
                @elseif ($selectedSection == 'counter')
                    <div class="mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control" id="heading" wire:model="sectionData.heading">
                        @error('sectionData.heading')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @foreach ($sectionData['counters'] ?? [] as $index => $counter)
                        <h4>Counter {{ $index + 1 }}</h4>
                        <div class="mb-3">
                            <label for="number_{{ $index }}" class="form-label">Number</label>
                            <input type="text" class="form-control" id="number_{{ $index }}"
                                wire:model="sectionData.counters.{{ $index }}.number">
                            @error('sectionData.counters.' . $index . '.number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="title_{{ $index }}" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title_{{ $index }}"
                                wire:model="sectionData.counters.{{ $index }}.title">
                            @error('sectionData.counters.' . $index . '.title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="button" class="btn btn-danger"
                            wire:click="removeCounter({{ $index }})">Delete Counter</button>
                    @endforeach
                    <button type="button" class="btn btn-success" wire:click="addCounter">Add Counter</button>
                @elseif ($selectedSection == 'country')
                    <div class="mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control" id="heading" wire:model="sectionData.heading">
                        @error('sectionData.heading')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subHeading" class="form-label">Sub Heading</label>
                        <input type="text" class="form-control" id="subHeading"
                            wire:model="sectionData.subHeading">
                        @error('sectionData.subHeading')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    @foreach ($sectionData['countries'] ?? [] as $index => $country)
                        <h4>Destination {{ $index + 1 }}</h4>
                        <div class="mb-3">
                            <label for="title_{{ $index }}" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title_{{ $index }}"
                                wire:model="sectionData.countries.{{ $index }}.title">
                            @error('sectionData.countries.' . $index . '.title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description_{{ $index }}" class="form-label">Description</label>
                            <textarea class="form-control" id="description_{{ $index }}" rows="3"
                                wire:model="sectionData.countries.{{ $index }}.description"></textarea>
                            @error('sectionData.countries.' . $index . '.description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="button" class="btn btn-danger"
                            wire:click="removeCountry({{ $index }})">Delete Destination</button>
                    @endforeach
                    <button type="button" class="btn btn-success" wire:click="addCountry">Add Destination</button>
                @elseif ($selectedSection == 'contact')
                    <div class="mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control" id="heading" wire:model="sectionData.heading">
                        @error('sectionData.heading')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="firstPara" class="form-label">First Paragraph</label>
                        <textarea class="form-control" id="firstPara" rows="3" wire:model="sectionData.firstPara"></textarea>
                        @error('sectionData.firstPara')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="secondPara" class="form-label">Second Paragraph</label>
                        <textarea class="form-control" id="secondPara" rows="3" wire:model="sectionData.secondPara"></textarea>
                        @error('sectionData.secondPara')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="buttonText" class="form-label">Button Text</label>
                        <input type="text" class="form-control" id="buttonText"
                            wire:model="sectionData.buttonText">
                        @error('sectionData.buttonText')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="buttonLink" class="form-label">Button Link</label>
                        <select name="" id="buttonLink" class="form-control"
                            wire:model="sectionData.buttonLink">
                            <option value="">Select a page</option>
                            <option value="{{ route('home') }}"
                                {{ route('home') == $sectionData['buttonLink'] ? 'selected' : '' }}>
                                Home</option>
                            <option value="{{ route('about') }}"
                                {{ route('about') == $sectionData['buttonLink'] ? 'selected' : '' }}>
                                About</option>
                            <option value="{{ route('services') }}"
                                {{ route('services') == $sectionData['buttonLink'] ? 'selected' : '' }}>
                                Services</option>
                            <option value="{{ route('country') }}"
                                {{ route('country') == $sectionData['buttonLink'] ? 'selected' : '' }}>
                                Country</option>
                            <option value="{{ route('contact') }}"
                                {{ route('contact') == $sectionData['buttonLink'] ? 'selected' : '' }}>
                                Contact</option>
                        </select>
                        @error('sectionData.buttonLink')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                @endif
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        @endif
    </div>
</div>
