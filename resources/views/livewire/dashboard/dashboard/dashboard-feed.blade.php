<div>
    @push('below_script')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/jalendar.min.css')}}">
    <script src="{{asset('assets/js/jalendar.min.js')}}"></script>
    @endpush
    @forelse($result ?? [] as $data)
        @if($data['type']=='poll')
            <livewire:dashboard.dashboard.poll wire:key="poll-list-{{now()}}" :dashboardPermissions="$dashboardPermissions"  :poll="$data->postable"  />
        @elseif($data->type=='event')
            <livewire:dashboard.dashboard.event wire:key="event-list-{{now()}}" :dashboardPermissions="$dashboardPermissions" :event="$data->postable" />
        @elseif($data->type=='post')
            <livewire:dashboard.dashboard.post wire:key="post-list-{{now()}}"  :dashboardPermissions="$dashboardPermissions" :post="$data->postable"  />
        @endif
    @empty
    @endforelse
    <div class="card d-none" wire:loading.class.remove="d-none">
        <div wire:loading>
            <x-general.post-placeholder />
            <x-general.post-placeholder />
            <x-general.post-placeholder />
        </div>
    </div>
    <div x-data="{ hasMoreData: @entangle('hasMoreData') }">
        <div
            x-show="hasMoreData"
            class="self-center loading loading-spinner"
            x-intersect="$wire.loadMoreData()"
        ></div>
    </div>
</div>
