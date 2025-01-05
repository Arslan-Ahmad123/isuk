<?php

namespace App\Livewire\Admin;

use App\Helpers\AppConstants as AppConst;
use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class About extends Component
{
    use WithFileUploads;

    public $sections = [
        'hero' => 'Hero Section',
        'details' => 'Details Section',
        'contact' => 'Contact Section',
    ];

    public $selectedSection;
    public $sectionData = [];
    public $newImage;

    protected $rules = [
        'sectionData.title' => 'nullable|string|max:255',
        'sectionData.description' => 'nullable|string|max:5000',
        'sectionData.image' => 'nullable|url',
        'sectionData.heading' => 'nullable|string|max:255',
        'sectionData.subHeading' => 'nullable|string|max:255',
        'sectionData.buttonText' => 'nullable|string|max:255',
        'sectionData.buttonLink' => 'nullable|url',
        'sectionData.details' => 'nullable|array',
    ];

    public function updatedSelectedSection()
    {
        $page = Page::where('page_name', 'about')->where('section_name', $this->selectedSection)->first();
        $this->sectionData = $page ? $page->content  : [];
    }

    public function updatedNewImage()
    {
        $this->validate([
            'newImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fileName = uniqid() . '.' . $this->newImage->getClientOriginalExtension();
        $filePath = $this->newImage->storeAs('public/images', $fileName);

        // Delete the old image from storage
        $oldImage = $this->sectionData['image'] ?? null;
        if ($oldImage) {
            $oldImagePath = str_replace(url('storage'), 'public', $oldImage);
            Storage::delete($oldImagePath);
        }

        // Update the image URL in the section data
        $this->sectionData['image'] = url('storage/images/' . $fileName);
    }

    public function addDetail()
    {
        $this->sectionData['details'][] = [
            'title' => '',
            'description' => '',
        ];
    }

    public function removeDetail($index)
    {
        unset($this->sectionData['details'][$index]);
        $this->sectionData['details'] = array_values($this->sectionData['details']);
    }

    public function submit()
    {
        $this->validate();

        Page::updateOrCreate(
            ['page_name' => 'about', 'section_name' => $this->selectedSection],
            ['content' => $this->sectionData]
        );
        cache()->forget(AppConst::ALL_PAGES);
        session()->flash('success', 'Section updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.about')->layout('layouts.dashboard');
    }
}
