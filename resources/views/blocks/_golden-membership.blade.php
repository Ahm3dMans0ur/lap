@if (!Auth::check() || !Auth::user()->store)
<div class="col-xs-12 bg-light card-dp-1 border-radius-sm xxs-mt-40 xxs-p-0 hidden-xs">
<div class="pricing-title-wrap grad-bg-gold position-relative overflow-hidden">
  <h4 class="position-relative z-index-high xxs-mt-0 xxs-pr-20 xxs-pt-30 text-md"> احصل الآن على </h4>
  <h2 class="position-relative z-index-high xxs-mt-0 xxs-pr-20 xxs-pt-0 text-xl"> متجرك الخاص </h2>
  <div class="full-width position-absolute z-index-low full-height no-repeat x-left y-top xxs-mt-20 xxs-ml-20" data-background="/frontend/images/widget-shapes.png">
  </div>
</div>
<div class="clearfix xxs-m-20">
  <a href="{{route('stores.welcome')}}" class="btn btn-primary btn-ghost xxs-pr-20 xxs-pl-20"> اشترك </a>
  <a href="{{route('welcome')}}" class="btn btn-gray btn-link"> المزيد </a>
</div>
</div>
@endif