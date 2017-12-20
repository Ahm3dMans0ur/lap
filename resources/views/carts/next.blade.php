@extends('layouts.frontend')

@section('title')
    @lang('messages.create_order')
@endsection

@section('content')
    <main class="main-content position-relative z-index-medium">
        <section
                class="form-fold grad-bg-light-primary half-window-height position-relative z-index-low overflow-hidden text-center">
            <div class="container">
                <h1 class="display-block text-primary text-center text-bold xxs-mt-80 xxs-mb-60"> @lang('messages.order_created')</h1>
                <ul class="list-reset inline-blocks">
                    <li class="form-step">
                        <a href="#">
                            <div class="step-num border-radius-round">
                                <span> 1 </span>
                            </div>
                            <div class="step-title"> @lang('messages.shopping list')</div>
                        </a>
                    </li>
                    <li class="form-step current">
                        <a>
                            <div class="step-num border-radius-round">
                                <span> 2 </span>
                            </div>
                            <div class="step-title"> التاكيد</div>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <div class="container pull-up-80 position-relative z-index-medium">
            @foreach($orders as $order)
                <div class="offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
                    <div class="bg-light card-dp-3 border-radius-md">
                        <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                            <div class="pull-left square-sm border-radius-round bg-darkgray text-light text-center line-height-lg xxs-mt-30 xxs-ml-20">
                                <span> {{ count($order->items) }} </span>
                            </div>
                            <span class="pull-left xxs-ml-10 text-sm xxs-p-5 xxs-mt-20 xxs-pt-15 text-darkgray line-height-xs"> عدد المنتجات </span>
                            <a href="{!! route('stores.show',[$order->store->slug]) !!}" class="pull-right xxs-p-20">
                    <span class="display-inline-block va-top">
                      <img src="{{ $order->store->getImage()  }}" alt="Apple (Sample Company Placeholder)"
                           class="img-responsive square-lg bg-lightgray border-radius-round">
                    </span>
                                <span class="btn btn-link btn-gray no-underline xxs-mt-2"> {{$order->store->name}} </span>
                            </a>
                        </div>
                        <div class="xxs-p-20">
                            @foreach($order->items as $item)
                                <div class="offer-card clearfix xxs-mb-40 border-bottom-dotted-midgray-1">
                                    <div class="col-xs-3 col-lg-2 xxs-pr-0">
                                        <a href="{!! route('products.show',[$item->product->id]) !!}" class="display-block">
                                            <img src="{{ $item->product->getDefaultImage('small') }}"
                                                 alt="{{ $item->name }}"
                                                 class="img-responsive display-block xxs-m-auto">
                                        </a>
                                    </div>
                                    <div class="col-xs-9 col-lg-10 xxs-pl-0 xxs-pb-20">
                                        <a href="{!! route('products.show',$item->product->id) !!}" class="card-meta">
                                            <h5 class="card-title btn btn-block btn-link btn-gray no-underline xxs-mt-0 xxs-p-0 font-jfflat text-right line-height-xl">
                                                {{ $item->name }}
                                            </h5>
                                        </a>
                                        <div class="xxs-mt-20 clearfix">
                                            <div class="col-xs-12 col-md-8 xxs-pr-0">
                                                <h4 class="text-primary xxs-mt-10 xxs-mb-0 xs-text-left md-text-right">
                                                    <strong> {{ $item->price}} </strong>
                                                    <small> ريال</small>
                                                </h4>
                                            </div>
                                            <div class="col-xs-12 col-md-4 xxs-pl-0">
                                                <strong class="col-xs-3 xxs-pt-20 xxs-pr-0 text-sm text-darkgray font-droidkufi">
                                                    الكمية </strong>
                                                <div class="col-xs-9 xxs-pl-0">
                                                    <input type="number" value="{{ $item->qty }}" step="1" max="10"
                                                           min="1" class="form-control xxs-pl-0" readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xxs-mt-20 clearfix pull-left">

                                            <div class="col-xs-12 col-md-12 xxs-pl-0">
                                                <strong class="col-xs-3 xxs-pt-20 xxs-pr-0 text-sm text-darkgray font-droidkufi">
                                                    التاجر </strong>
                                                <div class="col-xs-8 xxs-pl-0">
                                                    <a href="{{ route('user.profile',$item->product()->first()->owner->username) }}">{{ $item->product()->first()->owner->username.'@' }}</a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-12 xxs-pl-0">
                                                <strong class="col-xs-3 xxs-pt-20 xxs-pr-0 text-sm text-darkgray font-droidkufi">
                                                    الجوال </strong>
                                                <div class="col-xs-9 xxs-pl-0">
                                                    {{ $item->product()->first()->owner->phone }}
                                                </div>
                                            </div>
                                            @if($item->product()->first()->owner->bank_accounts)
                                            <div class="col-xs-12 col-md-12 xxs-pl-0">
                                                <strong class="col-xs-3 xxs-pt-20 xxs-pr-0 text-sm text-darkgray font-droidkufi">
                                                    حسابات بنكية </strong>
                                                <div class="col-xs-9 xxs-pl-0">
                                                    {{ $item->product()->first()->owner->bank_accounts }}
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="clearfix xxs-p-20 border-top-solid-lightgray-1">
                            <div class="pull-right">
                                <a href="{!! route('order.view', [$order->id]) !!}" class="btn btn-primary text-sm"
                                   data-action="addtoWishlist"> عرض </a>
                            </div>
                            <h6 class="pull-left text-bold xxs-mt-10">
                                <span class="display-inline-block va-top text-darkgray"> اجمالى: </span>
                                <span class="display-inline-block va-top text-primary border-bottom-solid-primary-1 xxs-pb-5 xxs-mr-5">{{ $order->total }}
                                    ريال </span>
                            </h6>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main> <!-- END MAIN CONTENT -->
@endsection
