<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layouts.mata')
        <title>資訊系統 - @yield('title')</title>
        @include('layouts.css')
        @include('layouts.js')
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        
        <div class="header">
            @include('layouts.header')
        </div>
        
        <div class="content mt-5">
            @yield('content')
            @include('layouts.footer')
        </div>
    </body>
</html>