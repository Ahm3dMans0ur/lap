<div class="offer-card border-radius-sm col-xs-6 col-sm-6 col-md-4 flex-item xxs-mb-40">
    <div class="card-img position-relative">
        @include('blocks._offer-cart-actions',['product' => $item])
        <a href="{!! route('products.show', $item->id) !!}">
            @if($item->offer && $item->offer->is_active && $item->offer->isLaunched())
            <div class="position-absolute x-left y-top square-lg xxs-mt-10 xxs-ml-10 text-center line-height-sm font-jfflat bg-primary text-light z-index-high border-radius-round">
                <div class="text-sm xxs-pt-5 xxs-mt-1"> @lang('messages.discount') </div>
                <div class="text-lg text-bold"> {{ $item->offer->discount }}% </div>
            </div>
            @endif
            <img src="{{ $item->getDefaultImage() }}"
                 alt="{{ $item->title }}" class="img-responsive">
        </a>
    </div>
    <div class="card-meta">
        <a href="{!! route('products.show', $item->id) !!}"
           class="card-title btn btn-sm btn-primary btn-link"> {{ $item->title }} </a>
        <div class="offer-actions product-actions clearfix xxs-pr-15 xxs-pl-15 xxs-pt-10 xxs-pb-5">
            @include('blocks._likes',['product' => $item,'class'=>'xxs-ml-15  pull-right'])
        </div>
    </div>
</div>

