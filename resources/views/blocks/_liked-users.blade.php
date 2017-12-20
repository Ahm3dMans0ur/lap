@if(isset($stores_most_likes) && count($stores_most_likes) > 1)
@php
$topStore = $stores_most_likes->shift();
@endphp
    <div id="usersMostLiked" class="user-cards carousel xxs-mt-40">
        <div class="container">
            <div class="row">
                @if($topStore)
                <div class="col-xs-12 col-sm-4 col-md-3 xxs-mb-20 sm-mb-0">
                    <div class="user-card featured inline-rank bg-light border-radius-sm card-dp-1 clearfix ">
                        <h4 class=" text-light bg-primary border-radius-sm xxs-m-10 xxs-mt-20 xxs-p-10"> افضل متجر هذا الاسبوع </h4>
                        <div class="card-img">
                            <a href="{{route('stores.show',[$topStore->slug])}}">
                                <img src="{{$topStore->getImage()}}" alt="{{$topStore->name}}" class="img-responsive big-img">
                            </a>
                        </div>
                        <div class="card-meta text-center">
                            <div class="xxs-pt-5 xxs-pl-10 xxs-pr-10 xxs-pb-5">
                                <a href="{!! route('user.profile', [$topStore->users->username]) !!}" class="user-rank {{ $topStore->users->type() }}"></a>
                                <a href="{{route('user.profile',[$topStore->users->username])}}" class="card-title btn btn-sm btn-primary btn-link"> {{ $topStore->name }} </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div class="col-xs-12 col-sm-8 col-md-9 boxed-offers">
                    <div class="offers-box bg-light border-radius-sm card-dp-2 clearfix">
                        <div class="box-title border-bottom-solid-lightgray-1 xxs-mb-10 clearfix">
                            <h6 class="text-bold font-droidkufi xxs-p-10 text-darkgray"> الاعضاء الاكثر اعجابا لهذا
                                الاسبوع </h6>
                        </div>
                        <div class="carousel-container xxs-mt-10 xxs-mb-0 position-relative">
                            <div class="carousel-arrows"></div>
                            <div class="carousel-slides same-line clearfix xxs-ml-60 xxs-mr-20 xxs-pb-0">
                                @foreach($stores_most_likes as $store)
                                    <div class="carousel-slide user-card">
                                        <div class="card-img border-radius-sm">
                                            <a href="{!! route('stores.show',[$store->slug]) !!}">
                                                <img src="{{ $store->getImage('small') }}" alt="{{ $store->name }}" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="card-meta text-center">
                                            <a href="{!! route('user.profile', [$store->users->username]) !!}" class="user-rank {{ $store->users->type() }}"></a>
                                            <a href="{!! route('user.profile',[$store->users->username]) !!}" class="card-title btn btn-xs btn-primary btn-link truncate-145">{{ $store->users->name }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- END MOST LIKES USERS -->
@endif