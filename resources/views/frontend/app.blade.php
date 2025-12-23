<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'BandipurMountainResort') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('frontendimages/logo.png') }}">
    @stack('style')

    <link rel="stylesheet" href="{{ asset('css/asap.css') }}">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css','resources/js/app.js')
</head>

<body class="bg-linear-to-tr from-[#e3e3e3] to-[#c3c3c3]">
    @include('frontend.components.headers')
    <main>@yield('content')</main>
    <footer>@include('frontend.components.footers')</footer>

    @stack('script')
    <script src='{{ asset('js/asap.js') }}'></script>

</body>

</html>