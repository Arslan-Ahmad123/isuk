<?php

namespace App\Livewire;

use App\Traits\PageTrait;
use Livewire\Component;

class AboutPage extends Component
{
    use PageTrait;
    public function render()
    {
        $pages = $this->allPages();
        return view('livewire.about-page',[
            'about' => $pages?->where('page_name', 'about'),
            'headerFooter' => $pages?->where('page_name', 'header_footer')?->first(),
        ]);
    }
}
