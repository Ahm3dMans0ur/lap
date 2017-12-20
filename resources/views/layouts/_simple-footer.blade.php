<div class="simple-footer position-relative full-width z-index-low text-center card-dp-0">
  <div class="pull-up-120 border-top-solid-{{(isset($borderTopColor) ? $borderTopColor : 'lightgray')}}-{{(isset($borderTopWidth) ? $borderTopWidth : '1')}}"></div>
  <div class="xxs-mt-100 xxs-pt-20"></div>
  <div class="xxs-mt-40">
    <a href="#" class="btn btn-dark btn-link no-underline">
      <div class="brand-centered">
          <img src="/frontend/images/logo-dark.png" alt="Shari - شاري (Shari.sa)">
      </div>
    </a>
  </div>
  <div class="footer-nav xxs-mt-20">
    <ul class="list-reset">
      <li>
        <a href="{{ route('stores.manage') }}" class="btn btn-gray btn-link no-underline xxs-mb-20"> متجرك الخاص </a>
      </li>
      @if (!Auth::check())
      <li>
        <a href="{{ url('/register') }}" class="btn btn-gray btn-link no-underline xxs-mb-20"> تسجيل حساب </a>
      </li>
      <li>
        <a href="{{ url('/password/reset') }}" class="btn btn-gray btn-link no-underline xxs-mb-20"> نسيت كلمة المرور </a>
      </li>
      @endif
      <li>
        <a href="{{ url('/how-to-use-shari') }}" class="btn btn-gray btn-link no-underline xxs-mb-20"> كيف تستخدم شاري </a>
      </li>
      <li>
        <a href="{{ url('/memberships') }}" class="btn btn-gray btn-link no-underline xxs-mb-20"> العضويات </a>
      </li>
      <li>
        <a href="{{route('contact')}}" class="btn btn-gray btn-link no-underline xxs-mb-20"> الدعم الفنى </a>
      </li>
    </ul>
  </div>
  <div class="lang-ltr xxs-pb-10">
    <div class="footer-copyrights text-gray md-mt-20 text-uppercase line-height-sm">
      <div class="text-sm"> Copyright &copy; 2017 Shari.sa </div>
    </div>
  </div>
</div>