@extends('layouts.frontend')

@section('title')
    @lang('app.Edit Product',['title'=> $product->title])
@endsection

@section('content')

<section class="grad-bg-light-primary half-window-height position-relative z-index-low overflow-hidden text-center">
  <div class="container">
    <h1 class="display-block text-primary text-center text-bold xxs-mt-80"> @lang('app.Products') </h1>
  </div>
</section>
<div class="container pull-up-80 position-relative z-index-medium">
  <div class="row">
    <div class="col-xs-12 col-md-10 col-md-pull-1 bg-light card-dp-4 border-radius-md">
        @include('common.errors')
        {!! Form::model($product, ['route' => ['products.update',$product->id],'class' => 'md-form row','enctype' => 'multipart/form-data','method' => 'put']) !!}
        @include('products.fields')
        <div class="clearfix">
          <hr class="xxs-mt-80 xxs-mb-40" />
        </div>
        <div class="form-group form-submit xxs-pl-40 xxs-pb-20 text-left clearfix">
          {!! Form::submit( Lang::get('app.Send'), ['class' => 'btn btn-primary border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10']) !!}
        <a class='btn btn-gray btn-ghost border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30' href="{!! route('products.show', $product->id) !!}">{{ Lang::get('messages.cancel') }}</a>
        </div>
       {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection