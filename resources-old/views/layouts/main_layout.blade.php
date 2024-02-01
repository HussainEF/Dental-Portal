<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <body>
        @livewireStyles
        @yield('content')
        
        
        @include('includes.scripts')
        @livewireScripts
    </body>
</html>
