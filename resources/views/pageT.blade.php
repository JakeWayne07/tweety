<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/pageT.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pageT.css') }}" rel="stylesheet">
</head>

<body>
    <div class="relative">
        <div class="overflow-hidden">
            <img class="w-full h-screen object-cover landing embed-responsive-16by9"
                src="/images/landingpage.jpg"
                alt="">
        </div>
        <div class="absolute top-0 px-8 py-10 container min-w-full">
            <div class="flex items-center justify-between">
                <h1 class="text-white font-bold text-2xl cfont">
                    True Design
                </h1>
                <div class=" h-screen absolute px-4 py-5 right-0">
                    <a href="#">
                        <img
                            class="mb-4"
                            src="/images/menu.svg"
                            width="50"
                            alt="">
                    </a>
                    <h2 class="text-white mb-4">
                        MENU
                    </h2>
                    <hr class="border-blue-500">
                </div>
            </div>
        </div>
    </div>
</body>

{{--<body>
    <header class="relative">
        <img src="./images/landingpage.jpg" alt="">
        <nav class="absolute top-0 mt-2 ml-3">
            <div class="mx-auto">
                <div class="flex justify-between">
                    <h1>TrueDesign</h1>
                    <img id="menu"
                         src="./images/menu.svg"
                         alt="">
                </div>
            </div>
        </nav>
        <div class="absolute">
            <nav class="mx-auto">
                <ul class="nav-links flex justify-between">
                    <li class="p-4 hover:text-white">Home</li>
                    <li class="p-4 hover:text-white">Contact</li>
                    <li class="p-4 hover:text-white">Services</li>
                </ul>
            </nav>
        </div>
    </header>
</body> --}}

{{-- <body>
    <header>
        <nav>
            <h3 class="logo">True Design</h3>
            <img class="hamburger" src="./images/menu.svg" alt="hamburger">
        </nav>
        <section>
            <div class="hero">
                <img src="{{asset('images/landingpage.jpg')}}" alt="landingpage">
                <h1 class="headline">We are here</h1>
            </div>
        </section>
    </header>

    <div class="slider"></div>
</body> --}}
</html>
