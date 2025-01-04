<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'HRM') . '-' . ($pageTitle ?? '') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset(AppConst::ASSET_JS . '/hyper-config.js') }}"></script>
    <!-- App css -->
    <!-- <link href="{{ asset(AppConst::ASSET_CSS . '/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" /> -->
    <link href="{{ asset(AppConst::ASSET_CSS . '/main.css') }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset(AppConst::ASSET_CSS . '/custom.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset(AppConst::ASSET_CSS . '/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@ryangjchandler/alpine-tooltip@1.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

    @livewireStyles
    @vite(['resources/js/app.js'])

    <script src="{{ asset(AppConst::ASSET_JS . '/vendor.min.js') }}"></script>
    @stack('below_css')


</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">


        <!-- ========== Topbar Start ========== -->
        @livewire('common.header')
        <!-- ========== Topbar End ========== -->

        <!-- ========== Left Sidebar Start ========== -->
        @livewire('common.left-navigation')
        <!-- ========== Left Sidebar End ========== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <x-general.breadcrumbs :breadcrumbs="$breadcrumbs ?? []" :pageTitle="$pageTitle ?? ''" />

                    @if (Route::currentRouteName() == 'role.permissions' || Route::currentRouteName() == 'tree')
                        <div class="row">
                            <div class="col-lg-12">
                                {{ $slot }}
                            </div>
                            <!-- container -->
                        </div>
                    @else
                        <div class="row">
                            <div class="col-lg-2 pe-0">
                                @livewire('common.middle-navigation')
                            </div>
                            <div class="col-lg-10">
                                {{ $slot }}
                            </div>
                            <!-- container -->
                        </div>
                    @endif
                </div>

                <x-general.alerts />

                <!-- Footer Start -->
                @livewire('common.footer')
                <!-- end Footer -->
                <!-- content -->
            </div>

        </div>
        <!-- END wrapper -->

        <!-- Vendor js -->
        <script type="module">
            function showAlert(param) {
                let icons = {
                    info: 'ri-information-fill',
                    success: ' ri-information-fill',
                    danger: 'ri-alert-fill',
                    warning: "ri-error-warning-fill"
                };
                return html = `
            <div id="liveToast" class="toast hide  mt-2" role="alert"  aria-live="assertive" aria-atomic="true">
                 <div class="toast-header  text-white bg-${param['type']}">
                      <i aria-hidden="true" class="text-white font-24 mx-2 ${icons[param['type']]}"></i>
                      <strong class="me-auto font-22">${param['type']}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                     ${param['message']}
                    </div>
                 </div>
            </div>
        `;
            }
            Livewire.on('alert', ({
                param
            }) => {
                $('.append-alerts').empty();
                $('.append-alerts').append(showAlert(param));
                $('.toast').toast('show');
                var myToastEl = document.getElementById('liveToast')
                myToastEl.addEventListener('hidden.bs.toast', function() {
                    $('.append-alerts').empty();
                })
            });
            document.addEventListener("DOMContentLoaded", function() {
                const userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
                var session_time_zone = '{{ session('user_time_zone') }}';
                if (session_time_zone == '' || session_time_zone == null) {
                    const route_name = '{{ route('setTimezone') }}';
                    fetch(route_name, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                timeZone: userTimeZone
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            console.log('Time zone set');
                        })
                        .catch(error => {
                            console.error('Error setting time zone:', error);
                        });
                }
            });
        </script>



        <script src="{{ asset(AppConst::ASSET_JS . '/app.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js "></script>
        <script src="{!! asset(AppConst::ASSET_JS . '/custom/custom.js') !!}" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="{{ asset(AppConst::ASSET_JS . '/quill-image-resize.js') }}"></script>
        <script src="{{ asset(AppConst::ASSET_JS . '/quill-mentions.js') }}"></script>
        <link href="
https://cdn.jsdelivr.net/npm/quill-mention@4.1.0/dist/quill.mention.min.css
" rel="stylesheet">
        @livewireScriptConfig
        @stack('below_script')
</body>

</html>
