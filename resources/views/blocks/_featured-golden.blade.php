@if(isset($gold_products) && count($gold_products) > 0)
<div id="goldenOffers" class="golden-offers offers carousel xxs-mt-20">
    <div class="container position-relative xxs-mb-20">
        <div class="row">
            <h3 class="text-primary col-xs-12">أحدث المنتجات الذهبية</h3>
        </div>
    </div>
    <div class="carousel-container">
        <div class="container position-relative">
            <div class="row">
            <div class="carousel-slides col-xs-12 xxs-pb-0">
                @foreach($gold_products as $index => $product)
                    @if($index <= 2 || $index >= 5)
                        <div class="masonry-item col-xs-6 col-sm-4 col-lg-5th">
                            <div class="offer-card border-radius-sm card-dp-1 position-relative">
                                <div class="card-img ">
                                    @include('blocks._offer-cart-actions')
                                    <a href="{{$product->getUrl()}}">
                                        <img src="{{$product->getDefaultImage('small')}}" alt="{{$product->title}}" 
                                             class="img-responsive">
                                    </a>
                                </div>

                                <div class="container-fluid card-meta">
                                    <div class="raw">
                                        <div class="col-md-10 col-sm-12  col-xs-12">
                                            <div class="position-relative z-index-medium lg-ml-80">
                                                <a href="{{$product->getUrl()}}" class="card-title btn btn-primary btn-link"> {{$product->title}}</a>
                                            </div>

                                        </div>
                                        <div class="col-md-2 col-sm-12 col-xs-12">
                                            <div class="offer-actions product-actions position-relative z-index-low xxs-pt-5">
                                                @include('blocks._likes',['class'=>'xxs-mb-10','pull'=>'pull-right'])
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @elseif($index <= 3 || $index >= 4)
                        <div class="masonry-item col-xs-12 col-sm-8 col-lg-2-5th">
                            <div class="offer-card border-radius-sm card-dp-2 position-relative">
                                <div class="card-img">
                                    @include('blocks._offer-cart-actions')
                                    <a href="{{$product->getUrl()}}">
                                        <img src="{{$product->getDefaultImage('medium')}}" alt="{{$product->title}}"
                                             class="img-responsive big-image">
                                    </a>
                                </div>
                                <div class="container-fluid card-meta">
                                    <div class="raw">
                                        <div class="col-md-11 col-sm-12  col-xs-12">
                                            <div class="position-relative z-index-medium lg-ml-80">
                                                <a href="{{$product->getUrl()}}" class="card-title btn btn-primary btn-link"> {{$product->title}}</a>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-12 col-xs-12">
                                            <div class="offer-actions product-actions position-relative z-index-low xxs-pt-5">
                                                @include('blocks._likes',['class'=>'xxs-mb-10','pull'=>'pull-right'])
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            </div>
        </div>
    </div>
</div> <!-- END GOLDEN OFFERS -->
@endif
