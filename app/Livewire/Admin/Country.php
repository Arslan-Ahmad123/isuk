<?php

namespace App\Livewire\Admin;

use App\Helpers\AppConstants as AppConst;
use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Country extends Component
{
    use WithFileUploads;

    public $sections = [
        'hero' => 'Hero Section',
        'destinations' => 'Destinations Section',
        'opportunities' => 'Opportunities Section',
    ];

    public $selectedSection;
    public $sectionData = [];
    public $newImage;
    public $imageIndex;

    protected $rules = [
        'sectionData.title' => 'nullable|string|max:255',
        'sectionData.description' => 'nullable|string|max:5000',
        'sectionData.image' => 'nullable|url',
        'sectionData.heading' => 'nullable|string|max:255',
        'sectionData.subHeading' => 'nullable|string|max:255',
        'sectionData.destinations' => 'nullable|array',
        'sectionData.opportunities' => 'nullable|array',
    ];

    public function updatedSelectedSection()
    {
        $page = Page::where('page_name', 'country')->where('section_name', $this->selectedSection)->first();
        $this->sectionData = $page ? $page->content : [];
    }

    public function updatedNewImage()
    {
        $this->validate([
            'newImage' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $fileName = uniqid() . '.' . $this->newImage->getClientOriginalExtension();
            $filePath = $this->newImage->storeAs('public/images', $fileName);

        if (($this->selectedSection == 'destinations' || $this->selectedSection == 'opportunities') && isset($this->imageIndex)) {
            // Delete the old image from storage
            $oldImage = $this->sectionData[$this->selectedSection][$this->imageIndex]['image'];
            if ($oldImage) {
                $oldImagePath = str_replace(url('storage'), 'public', $oldImage);
                Storage::delete($oldImagePath);
            }

            // Update the image URL in the section data
            $this->sectionData[$this->selectedSection][$this->imageIndex]['image'] = url('storage/images/' . $fileName);
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

    public function addDestination()
    {
        $this->sectionData['destinations'][] = [
            'title' => '',
            'description' => '',
            'image' => '',
        ];
    }

    public function removeDestination($index)
    {
        if (isset($this->sectionData['destinations'][$index]['image'])) {
            $oldImage = $this->sectionData['destinations'][$index]['image'];
            $oldImagePath = str_replace(url('storage'), 'public', $oldImage);
            Storage::delete($oldImagePath);
        }
        unset($this->sectionData['destinations'][$index]);
        $this->sectionData['destinations'] = array_values($this->sectionData['destinations']);
    }

    public function addOpportunity()
    {
        $this->sectionData['opportunities'][] = [
            'title' => '',
            'description' => '',
            'image' => '',
        ];
    }

    public function removeOpportunity($index)
    {
        if (isset($this->sectionData['opportunities'][$index]['image'])) {
            $oldImage = $this->sectionData['opportunities'][$index]['image'];
            $oldImagePath = str_replace(url('storage'), 'public', $oldImage);
            Storage::delete($oldImagePath);
        }
        unset($this->sectionData['opportunities'][$index]);
        $this->sectionData['opportunities'] = array_values($this->sectionData['opportunities']);
    }

    public function submit()
    {
        $this->validate();

        Page::updateOrCreate(
            ['page_name' => 'country', 'section_name' => $this->selectedSection],
            ['content' => $this->sectionData]
        );
        cache()->forget(AppConst::ALL_PAGES);
        session()->flash('success', 'Section updated successfully!');
    }

    public function render()
    {
        return view('livewire.admin.country')->layout('layouts.dashboard');
    }
}
