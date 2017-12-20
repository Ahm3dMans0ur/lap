@if(isset($users_most_orders) && count($users_most_orders) > 1)
@php
$topOrdersStore = $users_most_orders->shift();
@endphp
<div id="usersTopSales" class="user-cards carousel xxs-mt-40">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-9 boxed-offers xxs-mb-20 sm-mb-0">
                <div class="offers-box bg-light border-radius-sm card-dp-2 clearfix">
                    <div class="box-title border-bottom-solid-lightgray-1 xxs-mb-10 clearfix">
                        <h6 class="text-bold font-droidkufi xxs-p-10 text-darkgray"> المتاجر الاكثر مبيعاً لهذا الاسبوع </h6>
                    </div>
                    <div class="carousel-container xxs-mt-10 xxs-ml-0 position-relative">
                        <div class="carousel-arrows"></div>
                        <div class="carousel-slides same-line clearfix xxs-ml-40 xxs-mr-20">
                            @foreach($users_most_orders as $store)
                                <div class="carousel-slide user-card">
                                    <div class="card-img border-radius-sm">
                                        <a href="{!! route('stores.show', [$store->slug]) !!}">
                                            <img src="{{$store->getImage('small')}}" alt="{{ $store->name }}" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="card-meta text-center">
                                        @if($store->user)
                                        <a href="{!! route('user.profile', [$store->user->username]) !!}" class="user-rank {{ $store->user->type() }}"></a>
                                        @endif
                                            <a href="{!! route('stores.show', [$store->slug]) !!}" class="card-title btn btn-xs btn-primary btn-link"> {{ $store->name }} </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="user-card inline-rank bg-light border-radius-sm card-dp-1 clearfix">
                    <h4 class="text-light bg-primary border-radius-sm xxs-m-10 xxs-mt-20 xxs-p-10"> الافضل مبيعا هذا الاسبوع </h4>
                    <div class="card-img">
                        <a href="{!! route('stores.show', [$topOrdersStore->slug]) !!}">
                            <img src="{{$topOrdersStore->getImage('small')}}" alt="{{ $topOrdersStore->name }}" class="img-responsive big-img">
                        </a>
                    </div>
                    <div class="card-meta text-center">
                        <div class="xxs-pt-5 xxs-pl-10 xxs-pr-10 xxs-pb-5">
                            @if($topOrdersStore->user)
                            <a href="{!! route('user.profile', [$topOrdersStore->user->username]) !!}" class="user-rank {{ $topOrdersStore->user->type() }}"></a>
                            @endif
                                <a href="{!! route('stores.show', [$topOrdersStore->slug]) !!}" class="card-title btn btn-sm btn-primary btn-link truncate-145"> {{ $topOrdersStore->name }} </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- END TOP SALES USERS -->
@endif