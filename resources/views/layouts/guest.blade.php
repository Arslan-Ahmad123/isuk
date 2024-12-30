<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'HRM') . '-' . ($pageTitle ?? '') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="">
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
    @livewireScriptConfig
    @stack('below_script')
</body>

</html>
