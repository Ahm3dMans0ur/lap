@if(isset($products_auction) && count($products_auction) > 0)
<div class="boxed-offers offers-live offers xxs-mt-40">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="offers-box bg-light border-radius-md card-dp-2 clearfix">
                    <div class="box-title border-bottom-solid-lightgray-1 xxs-mb-20 clearfix">
                        <a href="{{ route('products.auctions') }}" class="btn btn-sm btn-link btn-gray pull-left xxs-ml-20 xxs-mt-20"> عرض
                            المزيد </a>
                        <h6 class="text-bold font-droidkufi xxs-p-20 text-darkgray"> المزاد المباشر </h6>
                    </div>
                    <div class="clearfix xxs-p-0">
                        @foreach($products_auction as $auction)
                            <div class="offer-card card-cover border-radius-sm col-xs-12 col-sm-6 col-md-4">
                                <div class="card-img border-radius-sm">
                                    <div class="card-cover border-radius-sm">
                                        <div class="offer-actions product-actions position-absolute x-left y-bottom xxs-pb-15 clearfix xxs-pr-15 xxs-pl-15 xxs-pt-10 xxs-pb-5 z-index-high">
                                            @include('blocks._likes',['product'=>$auction,'class'=>'xxs-ml-15  pull-right'])
                                        </div>
                                        <div class="card-cover-text">
                                            <span class="time-remaining xxs-p-5 xxs-pr-10" data-timecount>
                                              متبقى
                                              {{$auction->auction_date->d}} يوم و
                                              {{$auction->auction_date->h}} ساعة و
                                              {{$auction->auction_date->i}} دقيقة
                                              {{-- <span class="tr-hour"> {{$auction->auction_date->h}} </span> ساعة و --}}
                                              {{-- <span class="tr-minutes"> {{$auction->auction_date->i}} </span> دقيقة --}}
                                            </span>

                                            <a href="{!! route('products.show',[$auction->id]) !!}" class="card-title btn btn-light btn-link">{{ $auction->title }}</a>
                                        </div>
                                    </div>
                                    <a href="{!! route('products.show',[$auction->id]) !!}">
                                        <img src="{{ $auction->getImage() }}" alt="{{ $auction->title }}" class="img-responsive big-image">
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- END LIVE AUCTIONS -->
@endif