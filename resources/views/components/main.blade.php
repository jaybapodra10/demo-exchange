<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        @yield('page_css')
    </head>
    <body>
        @yield('content')
        @yield('page_scripts')
    </body>
</html>