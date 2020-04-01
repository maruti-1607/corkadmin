<html lang="{{ app()->getLocale() }}">

    @include('partials.auth.head')

    <body class="form">
        @stack('body_start')

        @yield('content')

        @stack('body_end')

        @include('partials.auth.scripts')
    </body>

</html>
