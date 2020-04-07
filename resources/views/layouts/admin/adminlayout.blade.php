<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  dir="rtl">
    <head>
        @include('layouts.admin.partials.head')
    </head>

    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('layouts.admin.partials.nav')
            @include('layouts.admin.partials.sidebar')
            {{-- <main class="py-4"> --}}
            <div class="content-wrapper">
                @yield('content')
            </div>
            {{-- </main> --}}
        </div>
        @include('layouts.admin.partials.footer')
        @include('layouts.admin.partials.footer-scripts')
    </body>

</html>
