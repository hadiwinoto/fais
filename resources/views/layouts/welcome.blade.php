<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
    </head>
    <body class="antialiased">
        <div id="app" class="relative flex items-top justify-center min-h-screen sm:items-center sm:pt-0">
            <div class="container">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700">Login</a> |

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </div>
                
            
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="container">
                   @yield('content')
                </div>
               
            </div>
        </div>
        
    </body>
</html>
