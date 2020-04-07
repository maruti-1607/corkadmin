@stack('content_start')
    <div id="app" class="row layout-top-spacing">
        @stack('content_content_start')
            @yield('title')
            @yield('new_button')
            @yield('content')

        @stack('content_content_end')

    </div>
@stack('content_end')
