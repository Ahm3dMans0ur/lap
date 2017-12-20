<!doctype html>
<html class="no-js" lang="">
    <head>
        <title>{{\Setting::get('title')}} - @yield('title')</title>
        @include('layouts._common-meta')
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <!-- Google Material Design Icons & Simple Line Icons -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,400i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="/frontend/styles/vendor.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/frontend/styles/extra.css">
        @yield('css')
    </head>
    <body class="lang-rtl page-loading page-generic">
        <div id="scrollManager">
            <main class="main-content position-relative z-index-medium xxs-pt-20 xxs-pb-60">
                @yield('content')
            </main> <!-- END MAIN CONTENT -->
        </div>
        @yield('scripts')
    </body>
</html>