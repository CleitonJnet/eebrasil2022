<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'EE-Brasil') }}</title>

        <link rel=icon href={{ asset('img/favicon.png') }} sizes="any" type="image/png">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body onmousemove="showNavbar()" class="font-sans antialiased min-h-screen bg-gray-600 bg-cover bg-center bg-fixed bg-no-repeat" style="background-image: url({{ asset('img/ee.svg') }});">
        <x-jet-banner />

        <x-navigations.fieldworker />

        <div style="padding-top: 60px"></div>

        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endif

        @if (isset($navigation))
            <div id="navbar" class="mx-auto flex justify-center sm:px-6 lg:px-8 fixed left-0 w-full z-50" style="bottom: 3px;">
                <div class="bg-slate-800 opacity-95 overflow-hidden shadow-xl sm:rounded-t-md p-3 flex justify-center" style="width: 75.7rem;">
                    {{ $navigation }}
                </div>
            </div>
        @endif

        <!-- Page Content -->
        <main data-aos="zoom-in-up" data-aos-duration="200">
            <div class="{{ (isset($navigation))?'pb-14':'pb-2' }} pt-2">
                {{ $slot }}
            </div>
        </main>

        @stack('modals')

        @livewireScripts
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init();

          const navbar = document.getElementById("navbar")

          if (condition) {

          } else {

          }

          function showNavbar()
          {
            console.log('ok')
          }
        </script>
</body>
</html>
