<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.propartials.head')
    </head>

    <body>
        @include('layouts.bilito.partials.nav')
        @include('layouts.propartials.header')
        @include('layouts.propartials.sidebar')
        @yield('content')
    </div>
</div>
        @include('layouts.bilito.partials.footer')
        @include('layouts.bilito.partials.footer-scripts')
    </body>

</html>
