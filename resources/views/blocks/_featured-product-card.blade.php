<div class="col-xs-6 col-md-12 col-sm-6 col-xs-6 sm-p-10 lg-p-0 xxs-mb-20 sm-mb-0 lg-mb-20">
    <div class="offer-card offer-md border-radius-sm card-dp-1">
        <div class="card-img position-realtive">
            @include('blocks._offer-cart-actions')
            <a href="{{$product->getUrl()}}">
                <img src="{{$product->getDefaultImage()}}" alt="{{$product->title}}" class="img-responsive">
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