<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="leftside-menu position-fixed left-nav-setting">
        <!-- Brand Logo Light -->
        <a href="{{ route('dashboard') }}" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{ asset(AppConst::ASSET_IMAGES . '/logo.png') }}" alt="logo">
            </span>
            <span class="logo-sm">
                <img src="{{ asset(AppConst::ASSET_IMAGES . '/logo-sm.png') }}" alt="small logo">
            </span>
        </a>
        <!-- Brand Logo Dark -->
        <a href="{{ route('dashboard') }}" class="logo logo-dark">
            <span class="logo-lg">
                <img src="{{ asset(AppConst::ASSET_IMAGES . '/logo-dark.png') }}" alt="dark logo">
            </span>
            <span class="logo-sm">
                <img src="{{ asset(AppConst::ASSET_IMAGES . '/logo-dark-sm.png') }}" alt="small logo">
            </span>
        </a>
        <!-- Sidebar Hover Menu Toggle Button -->
        <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
            <i class="align-middle ri-checkbox-blank-circle-line"></i>
        </div>
        <!-- Full Sidebar Menu Close Button -->
        <div class="button-close-fullsidebar">
            <i class="align-middle ri-close-fill"></i>
        </div>
        <!-- Sidebar -left -->
        <div class="h-100" id="leftside-menu-container">
            <!-- Leftbar User -->
            <div class="leftbar-user">
                <a href="pages-profile.html">
                    <img src="{{ asset(AppConst::ASSET_IMAGES . '/users/avatar-1.jpg') }}" alt="user-image"
                        height="42" class="shadow-sm rounded-circle">
                    <span class="mt-2 leftbar-user-name">Dominic Keller</span>
                </a>
            </div>
            <!--- Sidemenu -->
            {{-- <ul class="side-nav"> --}}
            <ul class="mt-2 side-nav">
                @forelse($modules as  $module)
                        <li class="side-nav-item text-center mb-2 pt-1 px-1 {{ $module['alias'] == 'setting' ? 'active' : '' }}">
                            <a href="{{ route($module['alias'])}}" class="text-white lh-1"  >
                                <span class="p-0 m-0"> <i class="{{ $module['icon'] }} fs-3 d-block"></i></span>
                                <div class="left-navbar-name">{{ $module['name'] }}</div>
                            </a>
                        </li>
                @empty
                    <li class="side-nav-title">No Module Assigned</li>
                @endforelse
            </ul>
            <!--- End Sidemenu -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
