<!doctype html>
<html class="no-js" lang="">
<head>
    <title>{{\Setting::get('title')}} - @yield('title')</title>
    @include('layouts._common-meta')

    <!-- Place favicon.ico in the root directory -->
    <!-- Favicon -->
    <link rel="shortcut icon" href=" {{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href=" {{ asset('apple-touch-icon.png') }}">

    <!-- Google Material Design Icons & Simple Line Icons -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/frontend/styles/vendor.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/frontend/styles/extra.css">
    <link rel="stylesheet" href="/frontend/fontello/css/fontello.css">
    <link rel="stylesheet" href="/frontend/lightbox/css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.css">

    @yield('css')

    <script src="/frontend/scripts/vendor/modernizr.js"></script>
</head>
<body class="lang-rtl page-loading page-generic">

@include('layouts._offscreen-nav')

<div id="scrollManager">
    <div id="pageLoader" class="position-fixed z-index-top full-width window-height">
        <div class="page-loading-element border-radius-round absolute-center">
            <div class="ple-shari absolute-center z-index-high">
                <img src="/frontend/images/logo-dark.png" alt="{{\Setting::get('title')}}" class="img-responsive">
            </div>
            <div class="ple-dot ple-dot-md absolute-center z-index-medium"></div>
        </div>
        <!-- <div class="ple-dot ple-dot-lg absolute-center z-index-high"></div> -->
        <!-- <div class="ple-dot ple-dot-sm absolute-center z-index-low"></div> -->
        <div id="pageLoaderNotice" class="position-absolute full-width y-bottom z-index-top transparent">
            <div class="xxs-mb-20 xxs-p-20 text-center">
                <span class="display-inline-block va-top icon icon-xs icon-info xxs-mt-5 xxs-ml-10"></span>
                <span class="display-inline-block va-top xxs-mt-2 xxs-ml-5"> برجاء الانتظار جارى التحميل, او يمكنك </span>
                <a href="#" class="va-top btn btn-xs btn-gray" data-action="pageLoadingForceHide"> عرض الصفحة الآن </a>.
            </div>
        </div>
        <div class="position-absolute full-width window-height y-bottom z-index-low transparent"></div>
    </div>
    <div id="pageRoot" class="">
        <nav id="stdNav" class="std-nav z-index-top card-dp-2">
            @include('layouts._top-bar')
            @include('layouts._header')
            @include('layouts._mega-nav')
            @include('layouts._nav-bar')
        </nav> <!-- END Navigation -->

        <main class="main-content position-relative z-index-medium">
            @if (trim($__env->yieldContent('top_errors')))
                @yield('top_errors')
            @else
                <section class="session-message clearfix row">
                    @include('flash::message')
                </section>
            @endif
            @yield('content')
        </main> <!-- END MAIN CONTENT -->
        @include('layouts._footer')
    </div>
</div>

@yield('modal')


<script src="/frontend/scripts/vendor.js"></script>
<script src="/frontend/scripts/plugins.js"></script>
<script src="/frontend/scripts/main.js"></script>
<script src="{!! asset('/frontend/scripts/products/cart.js') !!}"></script>
<script src="/frontend/scripts/products/actions.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="/frontend/lightbox/js/lightbox.min.js"></script>
<script src="/js/jscolor.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>



@if (notify()->ready())
    <script>
        swal({
            title: "{!! notify()->message() !!}",
            text: "{!! notify()->option('text') !!}",
            type: "{{ notify()->type() }}",
            @if (notify()->option('timer'))
            timer: "{{ notify()->option('timer') }}",
            showConfirmButton: false
            @endif
        });
    </script>
@endif
<script type="text/javascript">
    if (parent)
    {
        window.parent.postMessage({height: document.body.scrollHeight},'*');
    }
</script>
@yield('scripts')
@include('layouts._cc')

</body>
</html>
