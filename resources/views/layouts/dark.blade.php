<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">


</head>

<body class="bg-gray-100 h-screen antialiased leading-none">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

    <nav x-data="{ open: false}" class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="flex items-center px-2 lg:px-0">
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex">
                            <a href="{{ url('/') }}" class="px-3 py-2 rounded-md text-sm font-medium leading-5 @if(Request::is('/')){{ 'text-white bg-indigo-900'}} @else {{ 'text-gray-300 hover:text-white hover:bg-gray-700' }}@endif  focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Home</a>
                            <a href="{{ url('movies') }}" class="px-3 py-2 rounded-md text-sm font-medium leading-5 @if(Request::is('movies')){{ 'text-white bg-indigo-900'}} @else {{ 'text-gray-300 hover:text-white hover:bg-gray-700' }}@endif  focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Movies</a>
                            <a href="{{ url('series') }}" class="px-3 py-2 rounded-md text-sm font-medium leading-5 @if(Request::is('series')){{ 'text-white bg-gray-900'}} @else {{ 'text-gray-300 hover:text-white hover:bg-gray-700' }}@endif  focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Series</a>
                            <a href="{{ url('about') }}" class="px-3 py-2 rounded-md text-sm font-medium leading-5 @if(Request::is('about')){{ 'text-white bg-gray-900'}} @else {{ 'text-gray-300 hover:text-white hover:bg-gray-700' }}@endif  focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">About</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 flex justify-center px-2 lg:ml-6 lg:justify-end">
                    <div class="max-w-lg w-full lg:max-w-xs">
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <label for="search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input id="search" name="query" placeholder="Search Movies" class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5 bg-gray-700 placeholder-gray-400 focus:outline-none focus:bg-white sm:text-sm transition duration-150 ease-in-out" />
                            </div>
                        </form>

                    </div>
                </div>
                <div class="flex lg:hidden">
                    <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-white transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
            <div class="px-2 pt-2 pb-3">
                <a href="{{ url('/') }}" class="block px-5 py-4 rounded-md text-base font-medium text-white @if(Request::is('/')){{ 'bg-gray-700'}} @else{{ '' }}@endif focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Home</a>
                <a href="{{ url('movies') }}" class="block px-5 py-4 rounded-md text-base font-medium text-white @if(Request::is('movies')){{ 'bg-gray-700 '}} @else {{ '' }}@endif focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Movies</a>
                <a href="{{ url('series') }}" class="block px-5 py-4 rounded-md text-base font-medium text-white  @if(Request::is('series')){{ 'bg-gray-700'}} @else{{ '' }}@endif focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Series</a>
                <a href="{{ url('about') }}" class="block px-5 py-4 rounded-md text-base font-medium text-white  @if(Request::is('about')){{ 'bg-gray-700'}} @else{{ '' }}@endif focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">About</a>
            </div>
        </div>
    </nav>


    @yield('content')

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
</body>

</html>