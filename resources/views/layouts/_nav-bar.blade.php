<div class="nav-bar hidden-md hidden-lg">
  <div class="container">
    <div class="row">
      <div class="col-xs-1 z-xs-p-l-0 z-xs-p-r-0 text-right">
        <a class="nav-arrow" href="#" data-action="navBarRight">
          <span class="icon-arrow-right"></span>
        </a>
      </div>
      <div class="col-xs-10 overflow-hidden sm-pr-0 sm-pl-0">
        <ul class="list-reset" id="catNav">
          <li>
            <a href="{{route('products.index')}}"> @lang('app.All Products') </a>
          </li>
          <li>
            <a href="{{route('stores.all')}}"> @lang('app.Stores') </a>
          </li>
          <li>
            <a href="{{ route('services.all') }}"> @lang('app.Reservations') </a>
          </li>
          <li>
            <a href="{{route('categories.index')}}"> @lang('app.All Categories') </a>
          </li>

{{--           <li>
            <a href="{{route('products.offers')}}"> @lang('app.All Offers') </a>
          </li> --}}
          <li>
            <a href="{{route('products.golden')}}"> @lang('products.golden products') </a>
          </li>
          <li>
            <a href="{{route('products.silver')}}"> @lang('products.silver products') </a>
          </li>
          <li>
            <a href="{{route('products.individual')}}"> @lang('products.individual products') </a>
          </li>
          <li>
            <a href="{{route('products.auctions')}}"> @lang('products.Auctions') </a>
          </li>
        </ul>
      </div>
      <div class="col-xs-1 z-xs-p-l-0 z-xs-p-r-0 text-left">
        <a class="nav-arrow" href="#" data-action="navBarLeft">
          <span class="icon-arrow-left"></span>
        </a>
      </div>
    </div>
  </div>
</div>