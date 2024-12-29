<?php

namespace App\View\Components\General;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectInput extends Component
{
    /**
     * Create a new component instance.
     */
    public string $entangle = '';

    public bool $multiple = false;

    public string $inputName = '';

    public string $eventName = '';

    public string $label = '';

    public string $isRequired = 'true';

    public function __construct(
        $entangle = '',
        $multiple = false,
        $inputName = '',
        $eventName = '',
        $label = '',
        $isRequired = 'true',
        public array $options = []
    ) {
        $this->entangle = $entangle;
        $this->multiple = $multiple;
        $this->inputName = $inputName;
        $this->eventName = $eventName;
        $this->label = $label;
        $this->isRequired = $isRequired;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.general.select-input');
    }
}
