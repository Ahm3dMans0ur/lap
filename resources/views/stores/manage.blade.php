@extends('layouts.frontend')

@section('title')
    @lang('messages.store_manage')
@endsection

@section('content')

    <section class="grad-bg-light-primary half-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
            <h1 class="display-block text-primary text-center text-bold xxs-mt-80"> معلومات المتجر </h1>
        </div>
    </section>

    <div class="container pull-up-80 position-relative z-index-medium">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-pull-1 bg-light card-dp-4 border-radius-md">
                @include('common.errors')
                {!! Form::model($store,['route' => 'stores.update','class' => 'md-form row','files'=>true]) !!}
                @include('stores.fields')
                {!! Form::close() !!}
            </div>
        </div>
        {{--<br>--}}
        {{--<div class="row">--}}
        {{--<div class="col-xs-12 col-md-10 col-md-pull-1 bg-light card-dp-4 border-radius-md">--}}
        {{--@include('common.errors')--}}
        {{--{!! Form::open(['route' => 'category.store','class' => 'md-form row']) !!}--}}
        {{--@include('stores._categories_fields')--}}
        {{--{!! Form::close() !!}--}}
        {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection