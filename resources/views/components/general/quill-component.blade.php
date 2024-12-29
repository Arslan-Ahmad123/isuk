<div  wire:ignore.self>
    <div x-ref="editor" {{ $attributes }} class="quill-editor" style="height: {{$attributes['height']??'200px'}};"
    x-data="{ content: @entangle($attributes->wire('model')) }" x-init="
    const quill = new Quill($refs.editor, {
        theme: 'snow',
    });
    quill.on('text-change', function() {
        $dispatch('input', quill.root.innerHTML);
    });

    if(content !== ''){
        quill.root.innerHTML = content;
    }
"
>
    </div>
</div>
