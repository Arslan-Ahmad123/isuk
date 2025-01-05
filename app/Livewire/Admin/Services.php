<?php

namespace App\Livewire\Admin;

use App\Helpers\AppConstants as AppConst;
use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Services extends Component
{
    use WithFileUploads;

    public $sections = [
        'hero' => 'Hero Section',
        'services' => 'Services Section',
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
        'sectionData.services' => 'nullable|array',
    ];

    public function updatedSelectedSection()
    {
        $page = Page::where('page_name', 'services')->where('section_name', $this->selectedSection)->first();
        $this->sectionData = $page ? $page->content : [];
    }

    public function updatedNewImage()
    {
        $this->validate([
            'newImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fileName = uniqid() . '.' . $this->newImage->getClientOriginalExtension();
        $filePath = $this->newImage->storeAs('public/images', $fileName);

        if ($this->selectedSection == 'services' && isset($this->imageIndex)) {
            // Delete the old image from storage
            $oldImage = $this->sectionData['services'][$this->imageIndex]['image'];
            if ($oldImage) {
                $oldImagePath = str_replace(url('storage'), 'public', $oldImage);
                Storage::delete($oldImagePath);
            }

            // Update the image URL in the section data
            $this->sectionData['services'][$this->imageIndex]['image'] = url('storage/images/' . $fileName);
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

    public function addService()
    {
        $this->sectionData['services'][] = [
            'title' => '',
            'description' => '',
            'image' => '',
        ];
    }

    public function removeService($index)
    {
        if (isset($this->sectionData['services'][$index]['image'])) {
            $oldImage = $this->sectionData['services'][$index]['image'];
            $oldImagePath = str_replace(url('storage'), 'public', $oldImage);
            Storage::delete($oldImagePath);
        }
        unset($this->sectionData['services'][$index]);
        $this->sectionData['services'] = array_values($this->sectionData['services']);
    }

    public function submit()
    {
        $this->validate();

        Page::updateOrCreate(
            ['page_name' => 'services', 'section_name' => $this->selectedSection],
            ['content' => $this->sectionData]
        );
        cache()->forget(AppConst::ALL_PAGES);
        session()->flash('success', 'Section updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.services')->layout('layouts.dashboard');
    }
}
