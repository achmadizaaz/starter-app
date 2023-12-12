<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title', config('app.name', 'Laravel') )</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'public/css/custom.css','resources/js/app.js'])

        <!-- Styles -->
        <link href="{{ asset('themes/css/theme.css') }}" id="app-style" rel="stylesheet" type="text/css" />

         <!-- Icons Css -->
         <link href="{{ asset('themes/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('themes/js/jquery.min.js') }}"></script>
        <script>
            if (localStorage.getItem('mode') === 'dark') {
                $('html').attr('data-bs-theme', 'dark');
                $("#icon-mode").addClass("bi-moon-stars-fill").removeClass("bi-sun-fill");
            }
        </script>

    </head>
    <body>

        @include('layouts.header')
        @include('layouts.navigation')

        <div class="main-content">
            <div class="page-content">
                <div class="container">
                    @yield('content')
                </div>
            </div>
           @include('layouts.footer')
        </div>

        <script src="{{ asset('themes/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('themes/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('themes/libs/node-waves/waves.min.js') }}"></script>

        <script src="{{ asset('themes/js/app.js') }}"></script>

        <script>
            if (localStorage.getItem('mode') === 'dark') {
                $("#icon-mode").addClass("bi-moon-stars-fill").removeClass("bi-sun-fill");
                $('#text-mode').text('Dark Mode');
            }

            // Toggle dark mode on button click
            $('#darkToggle').click(function() {
                $('html').attr('data-bs-theme', 'dark');
                $('#text-mode').text('Dark Mode');
                let mode = 'dark';
                // Save user preference to localStorage
                localStorage.setItem('mode', mode);

                $("#icon-mode").addClass("bi-moon-stars-fill").removeClass("bi-sun-fill");
 
            });

            // Toggle light mode on button click
            $('#lightToggle').click(function() {
                $('html').removeAttr('data-bs-theme');
                $('#text-mode').text('Light Mode');

                let mode = 'light';
                // Save user preference to localStorage
                localStorage.setItem('mode', mode);
                
                $("#icon-mode").addClass("bi-sun-fill").removeClass("bi-moon-stars-fill");
            });
        </script>
    </body>
</html>
