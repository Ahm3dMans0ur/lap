@extends('layouts.frontend')

@section('title')
    @lang('messages.shopping list')
@endsection
@php
    $productModel = new \App\Models\Products;
@endphp
@section('content')
    <section
            class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
            <h1 class="display-block pull-right text-primary text-right text-bold xxs-p-20 xxs-pb-0 xxs-pt-10 text-xl"> عرض بيانات الطلب </h1>
            <ol class="breadcrumb pull-left bg-transparent xxs-pt-30 xxs-pb-20 xxs-mt-2">
                <li><a href="{!! route('user.edit') !!}" class="font-jfflat"> @lang('app.Dashboard') </a></li>
                <li><a href="{!! route('order.user.view') !!}"
                       class="font-jfflat"> @lang('messages.display orders') </a></li>
                <li class="active"> عرض بيانات الطلب</li>
            </ol>
        </div>
    </section>

    <div class="container pull-up-40 position-relative z-index-medium">
        <div class="row">
            <div class="pull-left offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
                <div class="bg-light card-dp-3 border-radius-md md-form user-panel-left-pane">
                    <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                        <div class="pull-left square-sm border-radius-round bg-darkgray text-light text-center line-height-lg xxs-mt-30 xxs-ml-20">
                            <span> {{ count($order->items) }} </span>
                        </div>
                        <span class="pull-left xxs-ml-10 text-sm xxs-p-5 xxs-mt-20 xxs-pt-15 text-darkgray line-height-xs"> عدد المنتجات </span>
                        @if($order->store)
                            <a href="{!! route('stores.show' , $order->store->slug) !!}" class="pull-right xxs-p-20">
                                <span class="display-inline-block va-top">
                                    <img src="{{ $order->store->getImage() }}" alt="Apple (Sample Company Placeholder)"
                                         class="img-responsive square-lg bg-lightgray border-radius-round">
                                </span>
                                <span class="btn btn-link btn-gray no-underline xxs-mt-2"> {{ $order->store->name }} </span>
                            </a>
                        @else
                            لم يتم العثور على المتجر
                        @endif
                    </div>
                    <div class="xxs-p-20">
                        @if($order->owner && $order->owner->id!=auth()->user()->id)
                            <div class="xxs-mt-5 clearfix">
                                <strong class="xxs-mt-0 col-xs-5 xxs-pt-5 xxs-pr-0 text-sm text-gray font-droidkufi">المشترى </strong>
                                <div class="xxs-mt-0 col-xs-7 xxs-pl-0 xxs-pt-2">
                                    <strong>
                                        <a href="{{ route('user.profile',$order->owner->username) }}">{{ $order->owner->username.'@' }}</a>
                                    </strong>
                                </div>
                            </div>
                            <div class="xxs-mt-5 clearfix">
                                <strong class="xxs-mt-0 col-xs-5 xxs-pt-5 xxs-pr-0 text-sm text-gray font-droidkufi">
                                    الجوال </strong>
                                <div class="xxs-mt-0 col-xs-7 xxs-pl-0 xxs-pt-2">
                                    <strong> {{ $order->owner->phone }} </strong>
                                </div>
                            </div>
                            <div class="xxs-mt-5 clearfix">
                                <strong class="xxs-mt-0 col-xs-5 xxs-pt-5 xxs-pr-0 text-sm text-gray font-droidkufi">
                                    العنوان </strong>
                                <div class="xxs-mt-0 col-xs-7 xxs-pl-0 xxs-pt-2">
                                    <strong> {{ $order->owner->address }} </strong>
                                </div>
                            </div>
                        @elseif($order->owner && $order->owner->id==auth()->user()->id && $order->store)
                            <div class="xxs-mt-5 clearfix">
                                <strong class="xxs-mt-0 col-xs-5 xxs-pt-5 xxs-pr-0 text-sm text-gray font-droidkufi">التاجر </strong>
                                <div class="xxs-mt-0 col-xs-7 xxs-pl-0 xxs-pt-2">
                                    <strong>
                                        <a href="{{ route('user.profile',$order->store->user->username) }}">{{ $order->store->user->username.'@' }}</a>
                                    </strong>
                                </div>
                            </div>
                            <div class="xxs-mt-5 clearfix">
                                <strong class="xxs-mt-0 col-xs-5 xxs-pt-5 xxs-pr-0 text-sm text-gray font-droidkufi">
                                    الجوال </strong>
                                <div class="xxs-mt-0 col-xs-7 xxs-pl-0 xxs-pt-2">
                                    <strong> {{ $order->store->user->phone }} </strong>
                                </div>
                            </div>
                            <div class="xxs-mt-5 clearfix">
                                <strong class="xxs-mt-0 col-xs-5 xxs-pt-5 xxs-pr-0 text-sm text-gray font-droidkufi">
                                    العنوان </strong>
                                <div class="xxs-mt-0 col-xs-7 xxs-pl-0 xxs-pt-2">
                                    <strong> {{ $order->store->user->address }} </strong>
                                </div>
                            </div>
                        @else
                            <div class="xxs-mt-5 clearfix">
                                <strong class="xxs-mt-0 col-xs-5 xxs-pt-5 xxs-pr-0 text-sm text-gray font-droidkufi">
                                    لم يتم العثور على المشتري </strong>
                            </div>
                        @endif

                    </div>
                    <hr>
                    <div class="xxs-p-20">
                        <div class="offer-card clearfix xxs-mb-40 border-bottom-dotted-midgray-1">
                            {{-- {{dd($order->items)}} --}}
                            @if(isset($order->items) && (is_array($order->items) || is_object($order->items)) && count($order->items) > 0)
                                @foreach($order->items as $item)
                                    <div class="col-xs-3 col-lg-2 xxs-pr-0">
                                        @if(isset($item->product) && $item->product != null)
                                            <a href="{!! route('products.show', $item->product->id ) !!}"
                                               class="display-block">
                                                <img src="{{ $item->product->getDefaultImage() }}"
                                                     alt="{{$item->product->title}}"
                                                     class="img-responsive display-block xxs-m-auto">
                                            </a>
                                        @else
                                            <a href="#" class="display-block">
                                                <img src="{{ $productModel->getDefaultImage() }}"
                                                     alt="{{$productModel->title}}"
                                                     class="img-responsive display-block xxs-m-auto">
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-xs-9 col-lg-10 xxs-pl-0 xxs-pb-20">
                                        <a href="@if(isset($item->product) && $item->product != null){!! route('products.show', $item->product->id) !!}@else # @endif"
                                           class="card-meta">
                                            <h5 class="card-title btn btn-block btn-link btn-gray no-underline xxs-mt-0 xxs-p-0 font-jfflat text-right line-height-xl">
                                                {{ $item->title }}
                                            </h5>
                                        </a>

                                        <div class="xxs-mt-20 clearfix">
                                            <div class="col-xs-12 col-md-8 xxs-pr-0">
                                                <h4 class="text-primary xxs-mt-10 xxs-mb-0 xs-text-left md-text-right">
                                                    <strong> {{ $item->price }}</strong>
                                                    <small> ريال</small>
                                                </h4>
                                            </div>
                                            <div class="col-xs-12 col-md-4 xxs-pl-0 xxs-pt-5">
                                                <div class="clearfix">
                                                    <strong class="xxs-mt-0 col-xs-5 xxs-pt-5 xxs-pr-0 text-sm text-gray font-droidkufi">
                                                        الكمية </strong>
                                                    <div class="xxs-mt-0 col-xs-7 xxs-pl-0 xxs-pt-2">
                                                        <strong> {{ $item->qty }}</strong>
                                                    </div>
                                                </div>
                                                <div class="xxs-mt-5 clearfix">
                                                    <strong class="xxs-mt-0 col-xs-5 xxs-pt-5 xxs-pr-0 text-sm text-gray font-droidkufi">
                                                        تاريخ الشراء </strong>
                                                    <div class="xxs-mt-0 col-xs-7 xxs-pl-0 xxs-pt-2">
                                                        <strong> {{ $item->created_at->diffForHumans() }} </strong>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                @include('flash::_message',[
                                    'class' => 'warning',
                                    'message' => Lang::get('messages.no_products')
                                ])
                            @endif
                            <section class="col-xs-12 comments xxs-mb-40 xxs-mt-40 clearfix">
                                <div class="xxs-pr-80">
                                    <a href="#"
                                       class="btn btn-block btn-ghost btn-gray border-radius-xs btn-lg text-md"
                                       data-action="toggleComments">
                                        <span class="display-inline-block va-top icon-bubbles text-lg xxs-mt-2 xxs-ml-5"></span>
                                        <span class="display-inline-block va-top"> التعليقات </span>
                                    </a>
                                </div>
                                <div class="xxs-mt-20 xxs-pr-40 sm-pr-80 clearfix comments-body">
                                    @foreach($order->notes as $note)
                                        <section class="xxs-pt-20 xxs-mt-20 border-top-solid-lightgray-1 clearfix">
                                            <div class="pull-right text-right">
                                                <a href="{!! route('user.profile', $note->user->username)  !!}"
                                                   class="display-inline-block va-top square-lg border-radius-round overflow-hidden">
                                                    <img src="{{ $note->user->getImage('small')}}" alt="User Avatar"
                                                         class="img-responsive display-block margin-auto full-width border-radius-round">
                                                </a>
                                            </div>
                                            <div class="xxs-pr-60">
                                                <a href="{!! route('user.profile' , $note->user->username) !!}"
                                                   class="btn btn-link btn-sm btn-gray text-bold no-underline">
                                                    <span class="display-inline-block va-top text-lg xxs-pt-5"> {{ $note->user->name }}</span></a>
                                                <div class="line-height-xl text-sm xxs-pr-10">
                                                    {{ $note->content }}
                                                </div>
                                            </div>
                                        </section>
                                    @endforeach
                                </div>
                            </section>
                            <form class="md-form clearfix xxs-pr-100 xxs-mb-40 col-xs-12" method="post"
                                  action="{!! route('order.note',[$order->id]) !!}">
                                {!! csrf_field()!!}
                                <div class="form-group border-top-dotted-lightgray-1 xxs-pt-5">
                                    <div class="display-block">
                                        <label class="display-inline-block va-top text-sm text-gray bg-light xxs-p-8 xxs-pl-20 xxs-pr-0 pull-up-20"
                                               for="commentMessageInput"> رسالتك </label>
                                    </div>
                                    <div class="display-block xxs-mt-20">
                                        <textarea class="form-control xxs-pr-0" name="content"
                                                  placeholder="اكتب رسالتك هنا.."
                                                  rows="2" id="commentMessageInput"></textarea>
                                    </div>
                                </div>
                                <div class="form-group form-submit xxs-mt-20">
                                    <button class="btn btn-sm btn-primary xxs-p-8 xxs-pr-15 xxs-pl-15"> ارسال
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix xxs-p-20 border-top-solid-lightgray-1">
                        <h6 class="pull-left text-bold xxs-mt-10">
                            <span class="display-inline-block va-top text-darkgray"> اجمالى: </span>
                            <span class="display-inline-block va-top text-primary border-bottom-solid-primary-1 xxs-pb-5 xxs-mr-5"> {{ $order->total }}
                                ريال </span>
                        </h6>
                    </div>
                </div>
            </div>
            @include('blocks._user-nav-sidebar', ['selected' => 'order.user.view'])
        </div>
    </div>
@endsection
