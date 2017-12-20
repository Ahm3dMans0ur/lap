@if(isset($stores) && count($stores) > 0)
<div id="userCards" class="user-cards carousel xxs-mt-20">
  <div class="container position-relative xxs-mb-20">
    <div class="row">
      <h3 class="text-primary col-xs-12">أحدث المتاجر</h3>
    </div>
  </div>
  <div class="carousel-container">
    <div class="container position-relative">
      <div class="carousel-arrows"></div>
      <div class="carousel-slides same-line col-xs-10 col-xs-pull-1">
        @foreach($stores as $store)
          @include('blocks.__store-card')
        @endforeach
      </div>
    </div>
  </div>
</div> <!-- END USER CARDS CAROUSEL -->
@endif