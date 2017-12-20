@if($newest_products && count($newest_products) > 0)
<div id="featuredOffers" class="featured-offers offers carousel xxs-mt-40">
    <div class="carousel-container">
        <div class="container position-relative">
            <div class="carousel-arrows"></div>
            <div class="carousel-slides same-line col-xs-10 col-xs-pull-1">
                @foreach($newest_products as $product)
                    <div class="carousel-slide col-xs-5th">
                        <div class="offer-card border-radius-sm card-dp-1">
                            <div class="card-img position-relative">
                                @include('blocks._offer-cart-actions')
                                <a href="{{ $product->getUrl() }}">
                                    <img src="{{ $product->getDefaultImage('small') }}" alt="{{$product->title}}"
                                         class="img-responsive">
                                </a>
                            </div>
                            <div class="card-meta">
                                <a href="{{$product->getUrl()}}" class="card-title btn btn-sm btn-primary btn-link">{{$product->title}}</a>
                                <div class="offer-actions product-actions clearfix xxs-pr-15 xxs-pl-15 xxs-pt-10 xxs-pb-5">
                                    @include('blocks._likes',['class'=>'xxs-ml-15  pull-right'])
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div> <!-- END FEATURED OFFERS -->
@endif