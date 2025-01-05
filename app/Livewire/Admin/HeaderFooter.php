<?php

namespace App\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;
use App\Helpers\AppConstants as AppConst;
use Livewire\WithFileUploads;

class HeaderFooter extends Component
{
    use WithFileUploads;

    public $oldLogo;
    public $logo;
    public $firstPara;
    public $secondPara;
    public $footerNumber;
    public $footerEmail;

    public $pageId;

    protected $rules = [
        'firstPara' => 'required|string|max:500',
        'secondPara' => 'required|string|max:500',
        'footerNumber' => 'required|numeric',
        'footerEmail' => 'required|email|max:255',
    ];

    public function updatedLogo()
    {
        $this->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    }

    public function submit()
    {
        $this->validate();
        $data = [
            'firstPara' => $this->firstPara,
            'secondPara' => $this->secondPara,
            'footerNumber' => $this->footerNumber,
            'footerEmail' => $this->footerEmail,
        ];

        // Handle file upload
        if ($this->logo) {
            $fileName = uniqid() . '.' . $this->logo->getClientOriginalExtension();
            $filePath = $this->logo->storeAs('public/images', $fileName);
            $data['logo'] = url('storage/images/'.$fileName);
        } else {
            $data['logo'] = $this->oldLogo;
        }

        // Save data to the database
        Page::updateOrCreate(
            ['id' => $this->pageId],
            [
                'page_name' => 'header_footer',
                'section_name' => 'header_footer',
                'content' => $data,
            ]
        );

        // Clear the APP_PAGES cache
        cache()->forget(AppConst::ALL_PAGES);
        session()->flash('success', 'Form updated successfully!');
    }

    public function render()
    {
        $page = Page::where('page_name', 'header_footer')->first();
        if ($page) {
            $this->pageId = $page->id;
            $this->oldLogo = $page->content['logo'] ?? null;
            $this->firstPara = $page->content['firstPara'] ?? '';
            $this->secondPara = $page->content['secondPara'] ?? '';
            $this->footerNumber = $page->content['footerNumber'] ?? '';
            $this->footerEmail = $page->content['footerEmail'] ?? '';
        }
        return view('livewire.admin.header-footer')->layout('layouts.dashboard');
    }
}
