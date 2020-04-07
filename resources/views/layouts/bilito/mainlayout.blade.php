<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.bilito.partials.head')
    </head>

    <body>
        @include('layouts.bilito.partials.nav')
        @include('layouts.bilito.partials.header')
        @yield('content')
        @include('layouts.bilito.partials.footer')
        @include('layouts.bilito.partials.footer-scripts')
    </body>

</html>
