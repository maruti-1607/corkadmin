<head>
    @stack('head_start')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico }}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{ asset('public/bootstrap/css/bootstrap.min.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/plugins.css' }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/css/authentication/form-1.css' }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/forms/theme-checkbox-radio.css' }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/forms/switches.css' }}">

    @stack('css')

    @stack('stylesheet')

    @stack('scripts')

    @stack('head_end')
</head>
