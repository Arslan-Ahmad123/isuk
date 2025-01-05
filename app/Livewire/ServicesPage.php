<?php

namespace App\Livewire;

use App\Traits\PageTrait;
use Livewire\Component;

class ServicesPage extends Component
{
    use PageTrait;
    public function render()
    {
        $pages = $this->allPages();
        return view('livewire.services-page',[
            'services' => $pages?->where('page_name', 'services'),
            'headerFooter' => $pages?->where('page_name', 'header_footer')?->first(),
        ]);
    }
}
