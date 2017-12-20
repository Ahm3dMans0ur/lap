@extends('layouts.frontend')

@section('title')
    @lang('messages.create offer')
@endsection

@section('content')

    <section class="grad-bg-light-primary half-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
            <h1 class="display-block text-primary text-center text-bold xxs-mt-80"> @lang('messages.create offer') </h1>
        </div>
    </section>

    <div class="container pull-up-80 position-relative z-index-medium">
        <div class="row">

            <div class="pull-left offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
                <div class="bg-light card-dp-3 border-radius-md md-form user-panel-left-pane">
                    <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                        @if (isset($product,$product->id))
                        <div class="btn-group pull-left xxs-pt-30 xxs-pl-30">
                            <a href="{{route('products.show',$product->id)}}" class="btn btn-xs btn-gray" target="_blank"> المعاينة </a>
                        </div>
                        @endif
                        <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-40 xxs-m-0 border-bottom-solid-midgray-1">
                            <i class="display-inline-block va-top icon icon-book-open xxs-ml-10"></i>
                            <span> بيانات الأعلان \ المنتج </span>
                        </h5>
                    </div>
                    @if (count($errors) > 0)
                    <div class="xxs-p-20 xxs-mb-20">
                        @include('common.errors')
                    </div>
                    @endif
                    {!! Form::open(['route' => 'offers.store','class' => 'row','method'=>'post']) !!}
                    @include('stores.offers.fields')
                    {!! Form::close() !!}
                </div>
            </div>
            @include('blocks._user-nav-sidebar', ['selected' => 'offers.create'])
        </div>

    </div>
@endsection