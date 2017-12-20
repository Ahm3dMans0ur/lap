<div class="std-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-2 clearfix">
                <div class="xs-text-center md-text-right">
                    <a href="#" class="hidden-md hidden-lg display-inline-block va-top xxs-mt-50 xxs-ml-30 xxs-pt-10 xxs-pb-10 nav-toggle"
                       data-action="offscreenNavToggle"><i class="icon-menu"></i></a>
                    <a class="display-inline-block va-top xxs-mt-15 xxs-mb-0 xxs-pt-0 xxs-pb-10 brand" href="{{route('defaultUserHome')}}">
                        <img src="/frontend/images/logo-dark-alt.png" alt="{{\Setting::get('title')}}"
                             class="img-responsive log_resolution">
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-8 xxs-mt-0 md-mt-15 quick-search">
                <form class="md-form" action="{!! route('search') !!}" method="get" accept-charset="utf-8"
                      autocomplete="off">
                    <div class="form-group col-xs-12 col-sm-4 md-pr-0 xxs-pt-5 xxs-mb-5  position-relative">
                        {{ Form::select('cat', $nested_products_categories, null, ['class' => 'form-control input-lg xxs-pr-0'])}}
                    </div>
                    <div class="form-group col-xs-12 col-sm-8 md-pl-0  xxs-mb-5 xxs-pt-5 position-relative">
                        <button class="position-absolute z-index-medium xxs-pt-0 xxs-pb-0 search-btn transition">
                            <span class="icon-magnifier"></span>
                        </button>
                        <input class="form-control input-lg xxs-pr-0 xxs-pl-30" name="q" value="@if(isset($q)){{ $q }}@endif" placeholder="@lang('products.searchKeyword')"/>
                        @if($errors->has('q'))
                            <span class="text-danger">{!! $errors->first('q') !!}</span>
                        @endif
                    </div>
                </form>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-2 xxs-mt-5 xxs-pt-15 xxs-pb-15 md-pt-30 md-pb-0 clearfix xs-text-center md-text-left lang-ltr">
                <div class="shop-actions display-inline-block va-top shop-cart xxs-mr-5 position-relative lang-rtl">
                    <a href="#" class="action-toggle icon-basket" data-action="toggleCart">
                        <span id="cart_count" class="position-absolute z-index-high badge badge-sm badge-danger border-radius-round text-center transition @if(Cart::count() == 0) opacity-0 @endif">
                            {{ Cart::count() }}
                        </span></a>
                    <div class="shop-card container position-absolute z-index-top y-bottom x-left">
                        <div id="cartItems"
                             class="col-xs-12 col-sm-6 col-lg-4 xxs-p-0 position-absolute z-index-high bg-lightgray border-radius-sm card-dp-2 y-top x-left text-right"
                             style="display: none;">
                            <div class="bg-light xxs-p-10 clearfix border-radius-sm card-dp-1 position-relative z-index-medium" id="cart_header">
                                @if(Cart::count() != 0)
                                    <a href="{!! route('order.create') !!}" class="btn btn-xs btn-primary pull-left xxs-mt-5 xxs-mr-5 skip-margin"> @lang('messages.create_order') </a>
                                    <a href="{!! route('cart.view') !!}" class="btn btn-xs btn-dark pull-left xxs-mt-5 xxs-mr-5 skip-margin">@lang('messages.shopping_cart')</a>
                                    <a href="{!! route('cart.destroy') !!}" class="btn btn-xs btn-danger pull-left xxs-mt-5 skip-margin">@lang('messages.destroy_cart')</a>
                                @endif
                                <h6 class="pull-right"><strong data-bind="cartItems"> {{ Cart::count() }} </strong> منتج فى سلة الشراء
                                </h6>
                            </div>
                            <div class="xxs-pt-5 card-items position-relative z-index-low" id="cart_container">
                                @foreach(Cart::content()->groupBy('options.store_name') as $key => $value)
                                    <h6 class="xxs-pr-20 xxs-pl-20 xxs-mr-5 xxs-mt-15 xxs-mb-0">{{ $key }}</h6>
                                    @foreach($value as $item)
                                        <div class="xxs-p-10 border-bottom-solid-midgray-1 clearfix">
                                            <a href="{{ route('products.show' , [$item->id]) }}"
                                               class="btn btn-primary btn-link no-underline text-bold font-jfflat">
                                                {{ $item->name }}
                                            </a>
                                            <a href="{!! route('cart.removeItem',[$item->rowId]) !!}" data-action="deleteCartItem"
                                               class="pull-left xxs-mt-5 xxs-p-5 icon icon-xs icon-close"></a>
                                        </div>
                                    @endforeach
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                @if (Auth::check())
                @include('notification._header')
                @endif
            </div>
        </div>
    </div>
</div>