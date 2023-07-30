@props(['class' => ''])

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    @vite('resources/css/app.css')
    @vite('resources/css/swiper.css')
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

{{-- Section Navbar --}}
<x-atoms.navs.homenavbar/>

<body class="{{ $class }}">
    {{ $slot }}
    @vite('resources/js/app.js')
    @vite('resources/js/swiper.js')
    @vite('resources/js/swiper2.js')
    @vite('resources/js/graph.js')
    @vite('resources/js/graph2.js')
    <script src="https://kit.fontawesome.com/c0ab72f2bc.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</body>

{{-- Footer --}}
<x-atoms.navs.homefooter />

</html>
