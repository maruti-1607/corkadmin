@stack('content_start')
    <div id="app" class="row layout-top-spacing">
        @stack('content_content_start')

            @yield('content')

        @stack('content_content_end')

    </div>
@stack('content_end')
