@if(isset($tickers) && count($tickers) > 0)
<div id="widgetsBar" class="widgets-bar xxs-mt-20 bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-lg-8 xxs-pr-0 xs-text-center lg-text-right">
        <div class="display-inline-block va-top clearfix">
          <div id="offersRotator" class="offers-rotator pull-right">
            <ul class="list-reset xxs-mb-0 offers-list">
              @foreach($tickers as $index => $ticker)
                <li @if($index == 0)class="active" @endif>
                  <div class="offer-inline dropdown">
                    <a href="{!! route('products.show' , [$ticker->id]) !!}" class="offer-title">
                      {{ $ticker->title }}
                    </a>
                    <a href="#" class="icon icon-options-vertical" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></a>
                    <ul class="dropdown-menu" aria-labelledby="offerQuickLinks">
                      <li><a href="{!! route('products.show' , [$ticker->id]) !!}"> <i class="icon icon-xs icon-arrow-left-circle"></i> @lang('products.Details') </a></li>
                      <li><a href="{!! route('user.profile',[$ticker->owner->username]) !!}"> <i class="icon icon-xs icon-exclamation"></i> عن المعلن </a></li>
                      <li><a id="add_to_cart_{{$ticker->id}}" href="{!! route('cart.add',[$ticker->id]) !!}"> <i class="icon icon-xs icon-plus"></i> اضافة الى قائمة الشراء </a></li>
                    </ul>
                  </div>
                </li>
              @endforeach
            </ul>
          </div>
          <hr class="visible-sm visible-xs xxs-mb-0"/>
          <div class="offers-btns pull-right xs-text-center">
            <a href="#" class="xxs-pt-15 xxs-pb-15 btn btn-sm btn-primary" data-action="offersRotatorNext"> التالى <i class="icon icon-xs xxs-mr-5 icon-arrow-left"></i> </a>
            <div class="display-inline-block va-top dropdown">
              <a href="#" class="xxs-pt-15 xxs-pb-15 btn btn-sm btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> المزيد <i class="icon icon-xs xxs-mr-5 icon-arrow-down"></i> </a>
              <ul class="dropdown-menu" aria-labelledby="offerQuickMoreLinks">
                <li><a href="{{route('products.auctions')}}"> احدث المزادات </a></li>
                <li><a href="#"> المزيد من العروض </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 visible-lg xxs-pt-15 xxs-pb-15">
        <ol class="breadcrumb text-left">
          <li><a href="{{route('categories.index')}}"> كل التصنيفات </a></li>
          <li class="active"> <a href="{{route('categories.show','cars')}}" class="active"> السيارات </a> </li>
        </ol>
      </div>
    </div>
  </div>
</div> <!-- END WIDGETS BAR -->
@endif