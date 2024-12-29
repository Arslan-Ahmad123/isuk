<div>
    <div class="mb-0 card">
        <div class="p-0 card-body">
            <div class="p-0">
        <h5 class="ms-1">Notifications</h5>
        <ul class="list-group list-group-flush">
            @foreach ($notifications ?? [] as $notification)
                <li class="list-group-item {{ $notification['status'] == 1 ? 'list-group-item-info' : '' }}  py-1">
                    <div class="d-flex align-items-center">
                        <img class="d-flex me-2 rounded-circle"
                            src="{{ asset($notification->users?->profile_photo_url) }}" alt="placeholder image"
                            height="32" width="32">
                        <a href="{{ $notification['status'] == 1 ? 'javascript:void(0);' : $notification['link'] . '?notification_id=' . $notification['id'] }}"
                            @if ($notification['status'] == 1) wire:click="updateStatus('{{ $notification }}')" @endif>
                            <div class="overflow-hidden w-100">
                                <small>
                                    <h6 class="m-0">
                                        {{ $notification['description'] . ' ' . $notification->users?->full_name }}
                                    </h6>
                                </small>
                                <small class="text-muted">
                                    {{ \Carbon\Carbon::parse($notification['created_at'])->diffForHumans() }}</small>
                            </div>
                        </a>

                    </div>
                </li>
            @endforeach
        </ul>

        @if ($limit == false)
            {{ $notifications->links() }}
        @endif
    </div>
        </div>
    </div>
</div>
