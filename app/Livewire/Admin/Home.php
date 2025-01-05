<?php

namespace App\Livewire\Admin;

use App\Helpers\AppConstants as AppConst;
use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Home extends Component
{
    use WithFileUploads;

    public $sections = [
        'hero' => 'Hero Section',
        'about' => 'About Section',
        'services' => 'Services Section',
        'counter' => 'Counter Section',
        'country' => 'Country Section',
        'contact' => 'Contact Section',
    ];

    public $selectedSection;
    public $sectionData = [];
    public $newImage;
    public $imageIndex;

    protected $rules = [
        'sectionData.title' => 'nullable|string|max:255',
        'sectionData.description' => 'nullable|string|max:5000',
        'sectionData.image' => 'nullable|url',
        'sectionData.buttonText' => 'nullable|string|max:255',
        'sectionData.buttonLink' => 'nullable|url',
        'sectionData.heading' => 'nullable|string|max:255',
        'sectionData.subHeading' => 'nullable|string|max:255',
        'sectionData.firstPara' => 'nullable|string|max:5000',
        'sectionData.secondPara' => 'nullable|string|max:5000',
        'sectionData.thirdPara' => 'nullable|string|max:5000',
        'sectionData.services' => 'nullable|array',
        'sectionData.counters' => 'nullable|array',
        'sectionData.countries' => 'nullable|array',
        'newImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];

    public function updatedSelectedSection()
    {
        $page = Page::where('page_name', 'home')->where('section_name', $this->selectedSection)->first();
        $this->sectionData = $page ? $page->content : [];
    }

    public function updatedNewImage()
    {
        $this->validate([
            'newImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fileName = uniqid() . '.' . $this->newImage->getClientOriginalExtension();
        $filePath = $this->newImage->storeAs('public/images', $fileName);

        if ($this->selectedSection == 'hero' && isset($this->imageIndex)) {
            // Delete the old image from storage
            $oldImage = $this->sectionData['sliders'][$this->imageIndex]['image'];
            if ($oldImage) {
                $oldImagePath = str_replace(url('storage'), 'public', $oldImage);
                Storage::delete($oldImagePath);
            }

            // Update the image URL in the section data
            $this->sectionData['sliders'][$this->imageIndex]['image'] = url('storage/images/' . $fileName);
        } else {
            // Delete the old image from storage
            $oldImage = $this->sectionData['image'] ?? null;
            if ($oldImage) {
                $oldImagePath = str_replace(url('storage'), 'public', $oldImage);
                Storage::delete($oldImagePath);
            }

            // Update the image URL in the section data
            $this->sectionData['image'] = url('storage/images/' . $fileName);
        }
    }

    public function addSlider()
    {
        $this->sectionData['sliders'][] = [
            'title' => '',
            'description' => '',
            'image' => '',
            'buttonText' => '',
            'buttonLink' => '',
        ];
    }

    public function removeSlider($index)
    {
        if (isset($this->sectionData['sliders'][$index]['image'])) {
            $oldImage = $this->sectionData['sliders'][$index]['image'];
            $oldImagePath = str_replace(url('storage'), 'public', $oldImage);
            Storage::delete($oldImagePath);
        }
        unset($this->sectionData['sliders'][$index]);
        $this->sectionData['sliders'] = array_values($this->sectionData['sliders']);
    }

    public function addService()
    {
        $this->sectionData['services'][] = [
            'title' => '',
            'description' => '',
            'buttonText' => '',
            'buttonLink' => '',
        ];
    }

    public function removeService($index)
    {
        unset($this->sectionData['services'][$index]);
        $this->sectionData['services'] = array_values($this->sectionData['services']);
    }

    public function addCounter()
    {
        $this->sectionData['counters'][] = [
            'number' => '',
            'title' => '',
        ];
    }

    public function removeCounter($index)
    {
        unset($this->sectionData['counters'][$index]);
        $this->sectionData['counters'] = array_values($this->sectionData['counters']);
    }

    public function addCountry()
    {
        $this->sectionData['countries'][] = [
            'title' => '',
            'description' => '',
        ];
    }

    public function removeCountry($index)
    {
        unset($this->sectionData['countries'][$index]);
        $this->sectionData['countries'] = array_values($this->sectionData['countries']);
    }

    public function submit()
    {
        $this->validate();

        Page::updateOrCreate(
            ['page_name' => 'home', 'section_name' => $this->selectedSection],
            ['content' => $this->sectionData]
        );
        cache()->forget(AppConst::ALL_PAGES);
        session()->flash('success', 'Section updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.home')->layout('layouts.dashboard');
    }
}
