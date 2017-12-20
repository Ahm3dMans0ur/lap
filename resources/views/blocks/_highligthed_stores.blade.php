@if(isset($lighted_stores) && count($lighted_stores) > 0)
<div class="boxed-offers offers xxs-mt-40">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="text-primary xxs-mt-0 xxs-mb-40"> متاجر مميزة </h4>
            </div>
            @foreach($lighted_stores as $store)
                <div class="user-offers col-xs-12 col-sm-6 xxs-mb-20 sm-mb-0">
                    <div class="bg-light border-radius-md card-dp-2 xxs-pt-20 clearfix overflow-hidden">
                        @foreach($store->products as $product)
                            <div class="offer-card offer-md border-radius-sm col-xs-12 col-sm-6">
                                <div class="card-img border-radius-sm position-relative">
                                    @include('blocks._offer-cart-actions')
                                    <a href="{!! route('products.show' , [$product->id]) !!}">
                                        <img src="{{ $product->getImage() }}" alt="{{ $product->title }}" class="img-responsive">
                                    </a>
                                </div>
                                <div class="card-meta">
                                    <a href="{!! route('products.show',[$product->id]) !!}" class="card-title btn btn-sm btn-primary btn-link"> {{ $product->title }} </a>
                                    <div class="offer-actions product-actions clearfix xxs-pr-15 xxs-pl-15 xxs-pt-10 xxs-pb-5">
                                        @include('blocks._likes',['class'=>'xxs-ml-15  pull-right'])
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <hr class="col-xs-12 xxs-mt-0">
                        <div class="col-xs-12 xxs-pb-15">
                            <div class="offer-user">
                                <a href="{!! route('user.profile', [$store->user->username]) !!}" class="user-rank {{ $store->user->type() }} xxs-ml-10"></a>

                                <a href="{!! route('stores.show', [$store->slug]) !!}" class="user-img display-inline-block va-top border-radius-round square-md overflow-hidden xxs-mt-2">
                                    <img src="{{ $store->user->getImage() }}" class="img-responsive square-md" alt="{{ $store->name }}">
                                </a>
                                <a href="{!! route('stores.show', [$store->slug]) !!}" class="user-name display-inline-block va-top text-bold xxs-pt-5 btn btn-link btn-gray no-underline"> {{ $store->name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div> <!-- END BOXED TOP USERS OFFERS -->
@endif