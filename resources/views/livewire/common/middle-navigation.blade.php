<div>
    <div class="card h-100">
        <div class="list-group">
            @forelse($subModules as  $subModule)
                <a href="{{ route($subModule['route_name']) }}"
                    class="list-group-item list-group-item-action fs-6  {{ Str::contains($alias, $subModule['route_name']) ? 'active' : '' }} ">
                    <i class="{{ $subModule['icon'] }} me-1"></i>{{ $subModule['name'] }}</a>
            @empty
                <li class="side-nav-title"> No Sub Module </li>
            @endforelse
        </div>
    </div>
</div>
