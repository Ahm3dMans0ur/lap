<!doctype html>
<html class="no-js" lang="">
  <head>
    <title>{{\Setting::get('title')}} - @yield('title','Welcome')</title>
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
  <body class="lang-rtl page-loading page-landing">

    @include('layouts._offscreen-nav')

    <nav id="landingNav" class="landing-nav std-nav bg-transparent full-width z-index-top overflow-hidden @yield('landing.nav_class')">
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
            <a href="{{ url('/home') }}" class="{{ ( Route::getCurrentRoute()->getPath() == 'home' ? 'current' : '' ) }}"> الرئيسية </a>
          </li>
          <li>
            <a href="{{ url('/welcome#about-shari') }}" class="{{ ( Route::getCurrentRoute()->getPath() == 'welcome' ? 'current' : '' ) }}"> عن شارى </a>
          </li>
          <li>
            <a href="{{ url('/memberships') }}" class="{{ ( Route::getCurrentRoute()->getPath() == 'memberships' ? 'current' : '' ) }}"> @lang('messages.memberships') </a>
          </li>
          <li>
            <a href="{{ url('/how-to-use-shari') }}" class="{{ ( Route::getCurrentRoute()->getPath() == 'how-to-use-shari' ? 'current' : '' ) }}"> كيف تستخدم شارى </a>
          </li>
          <li>
            <a href="{{route('contact')}}" class="{{ ( \Request::route()->getName() == 'contact' ? 'current' : '' ) }}"> الدعم الفنى </a>
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

    <div id="scrollManager">
      <div id="pageLoader" class="position-fixed z-index-top full-width window-height">
        <div class="page-loading-element border-radius-round absolute-center">
          <div class="ple-shari absolute-center z-index-high">
              <img src="/frontend/images/logo-dark.png" alt="Shari - شاري (Shari.sa)" class="img-responsive">
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
@php
// calculate daylight on KSA
$currentTime = time();
$isDayLight = true;
$sunInfo = date_sun_info ( $currentTime , 24.7 , 46.5 );
if (($sunInfo['sunset'] < $currentTime && $sunInfo['sunrise'] < $currentTime) || $sunInfo['sunrise'] > $currentTime)
{
  $isDayLight = false;
}
@endphp
        <header id="mainHeader" class="main-header @if($isDayLight) grad-bg-primary @else bg-dark @endif position-relative z-index-low overflow-hidden window-height @yield('landing.main_header_class')">
          <div class="position-absolute full-width window-height z-index-low">
            <div class="effect-startrail startrail-lg position-absolute z-index-high"></div>
            <div class="effect-startrail startrail-md position-absolute z-index-high"></div>
          </div>
          <div class="position-absolute full-width window-height z-index-medium @yield('landing.main_header_class')">
            @if (trim($__env->yieldContent('landing.abovethefold')))
              <div class="effect-text">
                @yield('landing.abovethefold')
              </div>
            @else
              <div class="absolute-center text-center text-light z-index-top text-shadow-10 effect-text" style="height: 150px;">
              @if (!Auth::guest() && !(trim($__env->yieldContent('landing.abovethefold.title_raw'))) && !(trim($__env->yieldContent('landing.abovethefold.title'))))
                <h1><strong> مرحبا {{Auth::user()->name}} </strong></h1>
              @else
                @if (trim($__env->yieldContent('landing.abovethefold.title')))
                  <h1><strong> @yield('landing.abovethefold.title') </strong></h1>
                @elseif(trim($__env->yieldContent('landing.abovethefold.title_raw')))
                  @yield('landing.abovethefold.title_raw')
                @else
                  <h1><strong> شاري </strong></h1>
                  {{--   <div class="xxs-mt-20 xs-text-center md-text-right" style="text-align: center;">
                    <a href="{{url('/memberships')}}" class="btn btn-primary"> العضويات </a>
                    <a href="{{url('/register')}}" class="btn btn-primary"> تسجيل حساب </a>
                    <a href="{{url('/login')}}" class="btn btn-primary"> تسجيل دخول </a>
                    </div>
 --}}
                  <div class="xs-mt-10 animated-separator animated-separator-h animated-separator-sm"></div>
                @endif
              @endif
              </div>
            @endif
            @if($isDayLight)
            <div class="effect-sun effect-parallax z-index-high"></div>
            @else
            <div class="effect-moon effect-parallax z-index-high"></div>
            @endif
{{--
Disable clouds
<div class="effect-cloud effect-parallax cloud-lg position-absolute z-index-medium"></div>
<div class="effect-cloud effect-parallax cloud-md position-absolute z-index-medium"></div>
<div class="effect-cloud effect-parallax cloud-sm position-absolute z-index-medium hidden-sm hidden-xs"></div>
<div class="effect-cloud effect-parallax cloud-xs cloud-sun position-absolute z-index-top hidden-sm hidden-xs"></div>
<div class="effect-cloud effect-parallax cloud-xs position-absolute z-index-medium hidden-lg"></div>
--}}
            <div class="effect-starfield effect-parallax full-width window-height position-absolute z-index-low"></div>
          </div>
        </header> <!-- END Main Header -->

        <main class="main-content position-relative z-index-medium">
          @yield('content')
        </main> <!-- END Main Content -->

        @if (trim($__env->yieldContent('landing.footer')))
          @yield('landing.footer')
        @else
        <div class="landing-footer pull-up-100 position-relative z-index-low half-window-height overflow-hidden">
          <div class="position-absolute full-width half-window-height z-index-medium">
            <div class="effect-startrail startrail-lg position-absolute z-index-high"></div>
            <div class="effect-startrail startrail-md position-absolute z-index-high"></div>
            <div class="effect-starfield effect-parallax full-width window-height position-absolute z-index-low"></div>
          </div>
          <div class="position-relative z-index-low xxs-mt-50 xxs-pt-50"></div>
          <div class="position-relative z-index-top xxs-pt-20 text-center text-light">
            <div>
              <a href="#" class="btn btn-light btn-link no-underline">
                <div class="brand-centered">
                    <img src="/frontend/images/logo-light.png" alt="Shari - شاري (Shari.sa)">
                </div>
              </a>
            </div>
            <div class="animated-separator animated-separator-h animated-separator-xs"></div>
            <div class="footer-nav xxs-mt-20">
              <ul class="list-reset">
                <li>
                  <a href="{{ route('stores.manage') }}" class="btn btn-light btn-link"> متجرك الخاص </a>
                </li>
                @if (!Auth::check())
                <li>
                  <a href="{{ url('/register') }}" class="btn btn-light btn-link"> تسجيل حساب </a>
                </li>
                <li>
                  <a href="{{ url('/password/reset') }}" class="btn btn-light btn-link"> نسيت كلمة المرور </a>
                </li>
                @endif
                <li>
                  <a href="{{ url('/how-to-use-shari') }}" class="btn btn-light btn-link"> كيف تستخدم شاري </a>
                </li>
                <li>
                  <a href="{{ url('/memberships') }}" class="btn btn-light btn-link"> العضويات </a>
                </li>
                <li>
                  <a href="{{route('contact')}}" class="btn btn-light btn-link"> الدعم الفنى </a>
                </li>
              </ul>
            </div>
            <div class="lang-ltr">
              <div class="footer-copyrights xss-mt-20 md-mt-50 text-uppercase line-height-sm">
                <div> Copyright &copy; 2017 Shari.sa </div>
              </div>
              <div class="footer-copyrights xss-mt-5 md-mt-10 text-uppercase opacity-7">  </div>
            </div>
          </div>
          <div class="landing-footer-bg grad-bg-primary position-absolute z-index-low grad-bg-primary full-width half-window-height"></div>
        </div> <!-- END Footer -->
        @endif
      </div>
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
