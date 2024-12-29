<div wire:ignore x-data="{ pond: null }" x-init="FilePond.registerPlugin(FilePondPluginFileValidateSize);
pond = FilePond.create($refs.input);
$wire.on('pondReset', ({
    data
}) => {
    pond.removeFiles();
})
pond.setOptions({
    allowMultiple: {{ isset($attributes['multiple']) ? 'true' : 'false' }},
    maxFileSize: '10MB',
    stylePanelLayout: 'compact',
    maxFiles: 4,
    server: {
        process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
            $wire.upload('{{ $attributes['wire:model'] }}', file, load, error, (event) => {
                progress(event.detail.progress, event.detail.progress, 100);
            })
        },
        revert: (filename, load) => {
            $wire.removeUpload('{{ $attributes['wire:model'] }}', filename, load)
        },
    },
});">
    <input type="file" x-ref="input" {!! isset($attributes['accept']) ? 'accept="' . $attributes['accept'] . '"' : '' !!}>
</div>
