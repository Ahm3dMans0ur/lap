@extends('layouts.frontend')

@section('title')
    {{ $product->title }}
@endsection

@section('content')
    <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container xxs-pb-40">
            {!! Breadcrumbs::render('product', $product) !!}
            <h1 class="display-block text-primary text-bold xxs-p-20 xxs-pb-0 xxs-mb-0 text-xl xs-text-center md-text-right"> {{ $product->title }} </h1>
        </div>
    </section>

    <div class="visible-lg" style="margin-bottom: -80px;"></div>
    <div class="container pull-up-60 position-relative z-index-medium">
        <div class="row">
        @if($product->isAuction())
            @include('products._auction')
        @endif
        @include('products._show-product-box',['product' => $product])
		</div>
    </div>
@endsection
{{-- {!! route('admin.products.edit', [$products->id]) !!} --}}