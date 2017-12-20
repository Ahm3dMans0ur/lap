<div class="col-xs-12 col-md-6 xxs-p-0">
  <div class="xxs-mb-20">
    <span class="btn btn-light btn-lg btn-round-corner font-jfflat xxs-pt-10 xxs-pb-10 xxs-pl-20 xxs-pr-20 cursor-default">
      <span class="display-inline-block va-top icon-clock xxs-mt-2 xxs-pt-1 xxs-ml-10"></span>
      <span class="display-inline-block va-top"> {{$category->auctionProductsCount()}} مزاد جاري </span>
    </span>
  </div>
  <div class="xxs-mb-60">
    <span class="btn btn-dark btn-lg btn-round-corner font-jfflat xxs-pt-10 xxs-pb-10 xxs-pl-20 xxs-pr-20 cursor-default">
      <span class="display-inline-block va-top icon-basket-loaded xxs-mt-2 xxs-pt-1 xxs-ml-10"></span>
      <span class="display-inline-block va-top"> {{$category->normalProductsCount()}} منتج </span>
    </span>
  </div>
  <div class="">
    <a href="{{route('categories.show',$category->slug)}}" class="btn btn-light btn-link full-underline xxs-p-0 font-jfflat">
      <h2 class="xxs-mt-0 xxs-p-0"><span class="text-lg"> {{$category->name}} </span></h2>
    </a>
  </div>
</div>