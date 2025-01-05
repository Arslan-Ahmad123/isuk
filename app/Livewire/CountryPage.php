<?php

namespace App\Livewire;

use App\Traits\PageTrait;
use Livewire\Component;

class CountryPage extends Component
{
    use PageTrait;
    public function render()
    {
        $pages = $this->allPages();
        return view('livewire.country-page',[
            'country' => $pages?->where('page_name', 'country'),
            'headerFooter' => $pages?->where('page_name', 'header_footer')?->first(),
        ]);
    }
}
