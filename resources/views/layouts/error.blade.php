<!doctype html>
<html class="no-js" lang="">
  <head>
    <title>{{\Setting::get('title')}} - @yield('title','Error')</title>
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

    <script src="/frontend/scripts/vendor/modernizr.js"></script>
  </head>
  <body class="lang-rtl page-landing page-error">

    @include('layouts._offscreen-nav')

    <div id="pageRoot" class="">

      <nav id="landingNav" class="landing-nav std-nav bg-transparent full-width z-index-top overflow-hidden">
        <div class="container-fluid container-expanded">
          <div class="pull-left xxs-mr-40 text-left visible-lg nav-toggle-wrap">
            <a href="#" class="display-inline-block va-top xxs-mt-30 xxs-ml-30 xxs-pt-10 xxs-pb-10 nav-toggle nt-light" data-action="offscreenNavToggle"><i class="icon-menu"></i></a>
          </div>
          <div class="nav-buttons pull-left">
            @if (Auth::check())
              <a href="{!! url('/logout') !!}" class="btn btn-light btn-sm btn-ghost"
                  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  تسجيل الخروج
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            @else
            <a href="{{ url('/register') }}" class="btn btn-light btn-sm btn-ghost hidden-xs"> تسجيل حساب </a>
            <a href="{{ url('/login') }}" class="btn btn-light btn-sm btn-link"> تسجيل الدخول </a>
            @endif
          </div>
          <ul class="nav-links pull-right visible-lg">
            <li>
              <a href="{{ url('/home') }}"> الرئيسية </a>
            </li>
            <li>
              <a href="{{ url('/welcome#about-shari') }}" class=""> عن شارى </a>
            </li>
            <li>
              <a href="{{ url('/memberships') }}"> العضويات </a>
            </li>
            <li>
              <a href="{{ url('/how-to-use-shari') }}"> كيف تستخدم شارى </a>
            </li>
            <li>
              <a href="{{route('contact')}}"> الدعم الفنى </a>
            </li>
          </ul>
          <div class="pull-right xxs-mr-20 text-right hidden-lg nav-toggle-wrap">
            <a href="#" class="display-inline-block va-top xxs-mt-30 xxs-ml-30 xxs-pt-10 xxs-pb-10 nav-toggle nt-light" data-action="offscreenNavToggle"><i class="icon-menu"></i></a>
          </div>
          <a class="brand-centered" href="{{ url('/home') }}">
            <img src="/frontend/images/logo-light.png" alt="Shari - شاري (Shari.sa)">
          </a>
        </div>
      </nav> <!-- END Navigation -->

      <header id="mainHeader" class="main-header bg-dark window-height position-relative z-index-low overflow-hidden">
        <div class="position-absolute full-width window-height z-index-high">
          <div class="effect-startrail startrail-lg position-absolute z-index-high"></div>
          <div class="effect-startrail startrail-md position-absolute z-index-high"></div>
        </div>
        <div class="position-absolute full-width window-height z-index-medium">
          <div class="effect-moon effect-parallax z-index-high"></div>
          <div class="effect-cloud effect-parallax cloud-lg position-absolute z-index-medium"></div>
          <div class="effect-cloud effect-parallax cloud-md position-absolute z-index-medium"></div>
          <div class="effect-cloud effect-parallax cloud-sm position-absolute z-index-medium hidden-sm hidden-xs"></div>
          <div class="effect-cloud effect-parallax cloud-xs cloud-sun position-absolute z-index-top hidden-sm hidden-xs"></div>
          <div class="effect-cloud effect-parallax cloud-xs position-absolute z-index-medium hidden-lg"></div>
          <div class="effect-starfield effect-parallax full-width window-height position-absolute z-index-low"></div>
        </div>
      </header> <!-- END Main Header -->

      <main class="main-content">
        @include('flash::message')
        @yield('content')
      </main> <!-- END Main Content -->

      <section class="position-relative z-index-high clearfix text-center pull-up-100">
          <form class="bg-light border-radius-md xxs-p-10 md-p-40 xxs-pt-40 xxs-pb-40 clearfix md-form card-dp-2 col-xs-10 col-xs-pull-1 col-sm-8 col-sm-pull-2 col-md-6 col-md-pull-3 col-lg-4 col-lg-pull-4" method="get" action="/">
              <div class="display-inline-block va-top xxs-mr-10">
                  <input type="text" name="q" class="form-control input-lg xxs-pr-0 bg-transparent"
                         placeholder="ابحث فى شاري ...." @if(isset($query))value="{{$query}}"@endif/>
              </div>
              <div class="display-inline-block va-top xxs-mr-10">
                  <button class="btn btn-primary btn-lg" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                  </button>
               </div>
          </form>
      </section>
      @include('layouts._simple-footer', ['borderTopWidth' => 0])
    </div>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <script src="/frontend/scripts/vendor.js"></script>
    <script src="/frontend/scripts/plugins.js"></script>
    <script src="/frontend/scripts/main.js"></script>
    @yield('scripts')
    @include('layouts._cc')
  </body>
</html>
