<html>
    <head>
        <title>資訊系統 - @yield('title')</title>
        @include('layouts.css')
        @include('layouts.js')
    </head>
    <body>
        <div class="header">
            @include('layouts.header')
        </div>
 
        <div class="container">
            @yield('content')
        </div>
        <div class="footer">
            @include('layouts.footer')
        </div>
    </body>
</html>