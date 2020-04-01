@stack('content_start')
    <div id="app" class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        @stack('content_content_start')

            @yield('content')

        @stack('content_content_end')
        <notifications></notifications>

        <form id="form-create" method="POST" action="#"/>
        <component v-bind:is="component"></component>
    </div>
@stack('content_end')
