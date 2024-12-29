<div>
    @foreach ($allData as $key => $data)
        <livewire:performance.view-performance :slug="$data['slug']" />
    @endforeach
</div>
