@if(isset($individual_products) && isset($individuals_left_products) && count($individuals_left_products) >= 4)
<div class="boxed-offers rank-silver offers xxs-mt-40">
    <div class="container">
        <div class="row">
            @if(isset($individuals_left_products) && count($individuals_left_products) > 0)
            <div class="col-xs-12 col-md-4 col-lg-3">
                @foreach($individuals_left_products as $product)
                    @include('blocks._featured-product-card')
                @endforeach
            </div>
            @endif
            @if(isset($individual_products) && count($individual_products) > 0)
            <div class="col-xs-12 col-md-8 col-lg-9 xxs-mb-20 lg-mb-0">
                <div class="offers-box bg-light border-radius-md card-dp-2 clearfix">
                    <div class="box-title border-bottom-solid-lightgray-1 xxs-mb-20">
                        <h6 class="text-bold font-droidkufi xxs-p-20 text-darkgray"> أحدث منتجات الافراد </h6>
                    </div>
                    <div class="clearfix xxs-p-20 md-pb-0 flex-cols">
                        @foreach($individual_products as $product)
                            <div class="offer-card border-radius-sm col-xs-12 col-sm-6 col-md-4 flex-item">
                                <div class="card-img position-realtive">
                                    @include('blocks._offer-cart-actions')
                                    <a href="{{$product->getUrl()}}">
                                        <img src="{{$product->getDefaultImage()}}" alt="{{$product->title}}"
                                             class="img-responsive">
                                    </a>
                                </div>
                                <div class="card-meta">
                                    <a href="{{$product->getUrl()}}" class="card-title btn btn-sm btn-primary btn-link">{{$product->title}} </a>
                                    <div class="offer-actions product-actions clearfix xxs-pr-15 xxs-pl-15 xxs-pt-10 xxs-pb-5">
                                        @include('blocks._likes',['class'=>'xxs-ml-15  pull-right'])
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="offer-card read-more col-xs-12 col-sm-6 col-md-4 flex-item">
                            <div class="bg-lightgray text-center border-radius-sm">
                                <a href="{!! route('products.individual') !!}" class="btn btn-sm btn-dark btn-link xxs-mt-5 xxs-mb-5 xxs-pt-40 xxs-pb-20">
                                    <div> عرض المزيد</div>
                                    <div class="icon icon-sm icon-options"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div> <!-- END BOXED SILVER OFFERS -->
@endif