<div wire:ignore x-data="{
    value: $wire.entangle('{{ $entangle }}').live,
    options: {{ json_encode($options) }},
    debounce: null,
    itemRemoved: false,
}" x-init="$nextTick(() => {
    const choices = new Choices($refs.select, {
        removeItems: true,
        removeItemButton: true,
        duplicateItemsAllowed: false,
        allowHTML: true,
        placeholderValue: 'Select {{ $label }}',
    })
    const refreshChoices = () => {
        const selection = value
        choices.clearStore()
        choices.setChoices(options.map(({ value, label }) => ({
            value,
            label,
            selected: selection == value ? true : false,
            disabled: value == 0 ? true : false,
        })))
    }
    $refs.select.addEventListener('removeItem', (e) => {
        itemRemoved = true;
    });

    $refs.select.addEventListener('change', (e) => {
        var selectedValue = event.detail.value;
        selectedValue = itemRemoved ? '0' : selectedValue;
        this.debounce = setTimeout(() => {
            $wire.set('{{ $inputName }}', selectedValue)
        }, 300)
    })

    $refs.select.addEventListener('addItem', (e) => {
        itemRemoved = false;
    });
    $wire.on('{{ $eventName }}', ({
        data
    }) => {
        options = data;
        refreshChoices()
    })

    $watch('value', () => refreshChoices())
    $watch('options', () => refreshChoices())
    document.addEventListener('livewire:navigating', () => {
        choices.destroy()
    })
    refreshChoices()
})">
    @if ($label)
        <label for="agentId" class="col-4 col-form-label">{{ $label }}
             @if($isRequired == 'true')
             <span class="text-danger">*</span>
              @endif
        </label>
    @endif
    <select class="w-full form-control form-control-sm" x-ref="select"></select>
</div>
