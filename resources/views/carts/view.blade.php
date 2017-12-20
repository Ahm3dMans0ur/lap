@extends('layouts.frontend')

@section('title')
    @lang('messages.shopping_cart')
@endsection


@section('content')
    <main class="main-content position-relative z-index-medium">
        @if(empty($stores))
            <section
                    class="form-fold grad-bg-light-primary half-window-height position-relative z-index-low overflow-hidden text-center">
                <div class="container">
                    <div class="offers col-xs-12 col-md-12 col-lg-12 xxs-mb-40">
                        <h1>عفواً هذا الكارت فارغ الان يجب إضافة المنتجات للتمكن من رؤية المحتوى</h1>
                    </div>
                </div>
            </section>

        @else
            <section
                    class="form-fold grad-bg-light-primary half-window-height position-relative z-index-low overflow-hidden text-center">
                <div class="container">
                    <h1 class="display-block text-primary text-center text-bold xxs-mt-80 xxs-mb-60"> @lang('messages.shopping_cart') </h1>
                    <ul class="list-reset inline-blocks">
                        <li class="form-step current">
                            <a href="#">
                                <div class="step-num border-radius-round">
                                    <span> 1 </span>
                                </div>
                                <div class="step-title"> قائمة التسوق</div>
                            </a>
                        </li>
                        <li class="form-step">
                            <a>
                                <div class="step-num border-radius-round">
                                    <span> 2 </span>
                                </div>
                                <div class="step-title"> التأكيد</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
            <div class="container pull-up-80 position-relative z-index-medium">
                <form class="md-form row" action="{!! route('order.create') !!}">
                    <div class="pull-left col-xs-12 col-md-4 col-lg-3 xxs-mb-20">
                        <div class="bg-light card-dp-1 border-radius-md">
                            <div class="form-group form-submit xxs-p-20">
                                <h3 class="xxs-mt-0">
                                    <span class="text-sm"> اجمالي: </span>
                                    <strong class="xxs-mr-5" id="cart_total_top"> {{ $total }} </strong>
                                    <small class="text-xs"> ريال</small>
                                </h3>
                                <div class="xxs-mt-20">
                                    <button class="btn btn-block btn-primary border-radius-sm xxs-p-10 xxs-m-0"
                                            type="submit"> @lang('orders.confirm order')
                                    </button>
                                </div>
                                <div class="xxs-mt-10">
                                    <a href="/home" class="btn btn-block btn-gray border-radius-sm xxs-p-10 xxs-m-0"
                                       type="reset"> عودة </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($stores as $key => $value)
                        <div class="offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
                            <div class="bg-light card-dp-3 border-radius-md">
                                <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                                    <div class="pull-left square-sm border-radius-round bg-darkgray text-light text-center line-height-lg xxs-mt-30 xxs-ml-20">
                                        <span> {{ count($value['products']) }} </span>
                                    </div>
                                    <span class="pull-left xxs-ml-10 text-sm xxs-p-5 xxs-mt-20 xxs-pt-15 text-darkgray line-height-xs"> عدد المنتجات </span>
                                    <a href="{!! route('stores.show',[$value['slug']]) !!}" class="pull-right xxs-p-20">
                    <span class="display-inline-block va-top">
                      <img src="{{ $value['image'] }}" alt="Apple (Sample Company Placeholder)"
                           class="img-responsive square-lg bg-lightgray border-radius-round">
                    </span>
                                        <span class="btn btn-link btn-gray no-underline xxs-mt-2"> {{$value['name']}} </span>
                                    </a>
                                </div>
                                <div class="xxs-p-20">
                                    @foreach($value['products'] as $item)
                                        <div class="offer-card clearfix xxs-mb-40 border-bottom-dotted-midgray-1">
                                            <div class="col-xs-3 col-lg-2 xxs-pr-0">
                                                <a href="#" class="display-block">
                                                    <img src="{{ $item['image'] }}" alt="Product Image"
                                                         class="img-responsive display-block xxs-m-auto">
                                                </a>
                                            </div>
                                            <div class="col-xs-9 col-lg-10 xxs-pl-0 xxs-pb-20">
                                                <a href="{!! route('products.show',$item['id']) !!}" class="card-meta">
                                                    <h5 class="card-title btn btn-block btn-link btn-gray no-underline xxs-mt-0 xxs-p-0 font-jfflat text-right line-height-xl">
                                                        {{ $item['title'] }}
                                                    </h5>
                                                </a>
                                                <div class="xxs-mt-20 clearfix">
                                                    <div class="col-xs-12 col-md-8 xxs-pr-0">
                                                        <h4 class="text-primary xxs-mt-10 xxs-mb-0 xs-text-left md-text-right">
                                                            <strong> {{ $item['price'] }} </strong>
                                                            <small> ريال</small>
                                                        </h4>
                                                    </div>
                                                    <div class="col-xs-12 col-md-4 xxs-pl-0">
                                                        <strong class="col-xs-3 xxs-pt-20 xxs-pr-0 text-sm text-darkgray font-droidkufi">
                                                            الكمية </strong>
                                                        <div class="col-xs-9 xxs-pl-0">
                                                            <input id="update_qty_item_{{$item['rowId']}}"
                                                                   url="{{ route('cart.updateItem',[$item['rowId']]) }}"
                                                                   type="number" name="qty" value="{{ $item['qty'] }}"
                                                                   step="1" max="10" min="1"
                                                                   class="form-control xxs-pl-0">
                                                        </div>
                                                        <i class="col-xs-12 text-left text-gray xxs-mt-20 xxs-p-0 text-sm text-bold" id="item_qty_{{$item['rowId']}}">
                                                            متوفر {{$item['quantity']}} قطع فقط!
                                                        </i>
                                                        <div class="col-xs-12 xxs-mt-40 xxs-pl-0">
                                                            <div class="hidden-xs">
                                                                <div class="xxs-mt-10">
                                                                    <a href="{{ route('cart.removeItem',[$item['rowId']]) }}"
                                                                       class="btn btn-block btn-danger btn-ghost text-sm"
                                                                       data-action="removeItem">
                                                                        حذف من السلة </a>
                                                                </div>
                                                            </div>
                                                            <div class="visible-xs">
                                                                <a href="#" class="btn btn-primary text-sm"
                                                                   data-action="addtoWishlist"> حفظ </a>
                                                                <a href="#" class="btn btn-danger btn-ghost text-sm"
                                                                   data-action="removeItem"> حذف </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="clearfix xxs-p-20 border-top-solid-lightgray-1">
                                    <h6 class="pull-left text-bold xxs-mt-10">
                                        <span class="display-inline-block va-top text-darkgray"> اجمالى: </span>
                                        <span class="display-inline-block va-top text-primary border-bottom-solid-primary-1 xxs-pb-5 xxs-mr-5" id="cart_total_bottom_{{ $item['rowId'] }}">{{ $value['total'] }}
                                            ريال </span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </form>
            </div>
        @endif
    </main> <!-- END MAIN CONTENT -->
@endsection
@section('scripts')
    <script src="/frontend/scripts/products/cart_update.js"></script>
@append

