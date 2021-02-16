<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/particles.js') }}" defer></script>
    <script src="{{ asset('js/evjs.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/evc.css') }}" rel="stylesheet">
</head>

<body>
    <div class="relative flex flex-row-reverse bg-black h-screen focus">
        <div id="landing" class="overflow-hidden relative w-full">
            <img class="w-full h-screen object-cover absolute"
                 src="/images/landingpage.jpg"
                 alt="">
            <img class="w-full h-screen object-cover absolute"
                src="/images/arch3.jpg"
                alt="">
            <img class="w-full h-screen object-cover absolute"
                src="/images/arch4.jpg"
                alt="">
            <img class="w-full h-screen object-cover absolute"
                src="/images/arch2.jpg"
                alt="">
            <img class="w-full h-screen object-cover absolute"
                src="/images/arch5.jpg"
                alt="">
            <img class="w-full h-screen object-cover"
                src="/images/arch6.jpg"
                alt="">
        </div>
        <div class="text-center pt-4 bg-black fixed h-screen sidebar">
            <button
                style="outline: none"
                class="close mb-8">
                <img
                    class="mx-auto"
                    width="40px"
                    src="/images/menu.svg"
                    alt="">
            </button>
            <div class="px-10 divide-red-400 divide-y-4 text-xs overflow-hidden linkitems truncate">
                <a href="/Solow" class="disabled">
                    <div class="border-b pb-4 border-gray-600 mb-4">
                        <h1 class="text-white tracking-normal font-medium uppercase linktext navlinks">
                            Menu
                        </h1>
                    </div>
                </a>
                <a href="/peapo" class="disabled">
                    <div class="border-b pb-4 border-gray-600 mb-4">
                        <h1 class="text-white tracking-normal font-medium uppercase linktext navlinks">
                            About Us
                        </h1>
                    </div>
                </a>
                <a href="/sideways" class="disabled">
                    <div class="border-b pb-4 border-gray-600 mb-4">
                        <h1 class="text-white tracking-normal font-medium uppercase linktext navlinks">
                            Architecture
                        </h1>
                    </div>
                </a>
                <a href="#" class="disabled">
                    <div class="border-b pb-4 border-gray-600 mb-4">
                        <h1 class="text-white tracking-normal font-medium uppercase linktext navlinks">
                            Interior Design
                        </h1>
                    </div>
                </a>
                <a href="#" class="disabled">
                    <div class="border-b pb-4 border-gray-600 mb-4">
                        <h1 class="text-white tracking-normal font-medium uppercase linktext navlinks">
                            Teams
                        </h1>
                    </div>
                </a>
                <a href="#" class="disabled">
                    <div class="border-b pb-4 border-gray-600 mb-4">
                        <h1 class="text-white tracking-normal font-medium uppercase linktext navlinks">
                            Products
                        </h1>
                    </div>
                </a>
                <a href="#" class="disabled">
                    <div class="border-b pb-4 border-gray-600 mb-4">
                        <h1 class="text-white tracking-normal font-medium uppercase linktext navlinks">
                            Downloadable files
                        </h1>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="particles-js" class="bg-white px-4 h-screen">
        <div class="float-left absolute">
            <h1 class="text-blue-300 underline hover:text-black font-black">
                Hello There General Kenobi
            </h1>
        </div>
    </div>
</body>
