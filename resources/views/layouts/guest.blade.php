<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'HRM') . '-' . ($pageTitle ?? '') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.jpeg') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"
        type="text/css" />

    @livewireStyles
    @vite(['resources/js/app.js'])
    @stack('below_css')


</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">
        {{ $slot }}
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AOS Animation Library -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false,
        });

        // Additional animations
        document.addEventListener('DOMContentLoaded', function() {
            var elements = document.querySelectorAll('.animate-on-scroll');
            elements.forEach(function(element) {
                element.classList.add('aos-animate');
            });
        });
    </script>
    @livewireScriptConfig
    @stack('below_script')
</body>

</html>
