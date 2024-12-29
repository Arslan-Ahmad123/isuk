<div>
    <div class="navbar-custom">
        <div class="topbar container-fluid">
            <div class="gap-1 d-flex align-items-center gap-lg-2">

                <!-- Topbar Brand Logo -->
                <div class="logo-topbar">
                    <!-- Logo light -->
                    <a href="{{ route('employee') }}" class="logo-light">
                        <span class="logo-lg">
                            <img src="{{ asset(AppConst::ASSET_LOGO) }}" alt="logo">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset(AppConst::ASSET_SM_LOGO) }}" alt="small logo">
                        </span>
                    </a>

                    <!-- Logo Dark -->
                    <a href="{{ route('employee') }}" class="logo-dark">
                        <span class="logo-lg">
                            <img src="{{ asset(AppConst::ASSET_DARK_LOGO) }}" alt="dark logo">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset(AppConst::ASSET_DARK_SM_LOGO) }}" alt="small logo">
                        </span>
                    </a>
                </div>

                <!-- Sidebar Menu Toggle Button -->
                <button class="button-toggle-menu">
                    <i class="mdi mdi-menu"></i>
                </button>

                <!-- Horizontal Menu Toggle Button -->
                <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>

            </div>

            <ul class="gap-3 topbar-menu d-flex align-items-center notification-lists">
                {{-- <li class="dropdown notification-list "
                    wire:click="$dispatchTo('common.notifications', 'showNotification')">
                    <a class="nav-link dropdown-toggle arrow-none " data-bs-toggle="dropdown" role="button"
                        aria-haspopup="false" aria-expanded="true">
                        <i class="ri-notification-3-line font-22"></i>
                        <span class="noti-icon-badge"></span>
                    </a>
                    <div class="py-0 dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg"
                        style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 72px);"
                        data-popper-placement="bottom-end">
                        <div style="max-height: 305px;" data-simplebar="init">
                            <livewire:common.notifications :limit='true' />
                        </div>
                        <a href="{{ route('notifications') }}"
                            class="py-2 text-center dropdown-item text-primary notify-item border-top">
                            View All
                        </a>
                    </div>
                </li> --}}
                <li class="d-none d-sm-inline-block">
                    <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Theme Mode">
                        <i class="ri-moon-line font-22"></i>
                    </div>
                </li>

                <li class="d-none d-md-inline-block">
                    <a class="nav-link" href="#" data-toggle="fullscreen">
                        <i class="ri-fullscreen-line font-22"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a class="px-2 nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="account-user-avatar">
                            <img src="{{ auth()->user()?->profile_photo_url }}" alt="user" width="32"
                                class="rounded-circle" height="32">
                        </span>
                        <span class="gap-1 d-lg-flex flex-column d-none">
                            <h5 class="my-0">{{ Auth::user()?->full_name }}</h5>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                        {{-- <a href="{{ route('myprofile') }}" class="dropdown-item">
                            <i class="mdi mdi-account-circle me-1"></i>
                            <span>My Profile</span>
                        </a> --}}
                        <a href="javascript:void(0);" wire:click="logout" class="dropdown-item">
                            <i class="mdi mdi-logout me-1"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
