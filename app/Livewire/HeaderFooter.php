<?php

namespace App\Livewire;

use Livewire\Component;

class HeaderFooter extends Component
{
    public function render()
    {
        return view('livewire.header-footer')->layout('layouts.dashboard');
    }
}
