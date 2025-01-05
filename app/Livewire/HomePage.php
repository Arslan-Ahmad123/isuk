<?php

namespace App\Livewire;

use App\Traits\PageTrait;
use Livewire\Component;

class HomePage extends Component
{
    use PageTrait;
    public function render()
    {
        $pages = $this->allPages();
        return view('livewire.home-page',[
            'home' => $pages?->where('page_name', 'home'),
            'headerFooter' => $pages?->where('page_name', 'header_footer')?->first(),
        ]);
    }
}
