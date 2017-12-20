@extends('layouts.frontend')

@section('title')
    search - {{ $title }}
@endsection

@section('content')
    @include('blocks._top-meta-section',['header' => Lang::get('app.Search'),'breadcrumbs' => 'search'])

    <div class="container position-static products-list">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 xxs-mt-40 position-relative z-index-medium">
                {{--products--}}
                <form class="md-form" action="{!! route('search') !!}" method="get" accept-charset="utf-8">
                    <div class="offers-box bg-light border-radius-md card-dp-2 clearfix">
                        <div class="offer-card border-radius-sm col-xs-12">
                            <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                                <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-10 xxs-m-0 border-bottom-solid-midgray-1">
                                    <i class="display-inline-block va-top icon icon-diamond xxs-ml-10"></i>
                                    <span> البحث عن </span>
                                </h5>
                            </div>
                            <div class="form-group xxs-pt-20 clearfix">
                                <input class="form-control input-lg xxs-pr-0 xxs-pl-30" name="q"
                                       value="@if(isset($q)){{ $q }}@endif"
                                       placeholder="@lang('products.searchKeyword')"/>
                            </div>
                            <!-- Category Id Field -->
                            <div class="form-group xxs-pt-20 clearfix">
                                {{ Form::select('cat', $nested_products_categories, $searchCreiteria['cat'], ['class' => 'form-control input-lg xxs-pr-0'])}}
                            </div>

                            <!-- Geo -->
                            <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                                <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-10 xxs-m-0 border-bottom-solid-midgray-1">
                                    <i class="display-inline-block va-top icon icon-diamond xxs-ml-10"></i>
                                    <span> النطاق الجغرافي </span>
                                </h5>
                            </div>
                            <div class="form-group xxs-pt-20 clearfix">
                                @include('blocks._search_geo',['country_id' => $searchCreiteria['country_id'],'state_id' => $searchCreiteria['state_id'],'city_id' => $searchCreiteria['city_id']])
                            </div>

                            {{--price--}}
                            <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                                <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-10 xxs-m-0 border-bottom-solid-midgray-1">
                                    <i class="display-inline-block va-top icon icon-diamond xxs-ml-10"></i>
                                    <span> السعر </span>
                                </h5>
                            </div>

                            <div class="form-group xxs-pt-20 clearfix">
                                <div class="col-xs-10 col-sm-10 position-relative">
                                    <input
                                            class="form-control"
                                            type="text"
                                            name="price"
                                            data-provide="slider"
                                            data-slider-min="2500"
                                            data-slider-max="10000"
                                            data-slider-step="500"
                                            data-slider-tooltip="show"
                                    >
                                </div>
                                <label for="inputID9"
                                       class="col-xs-2 col-sm-2 text-right">{{config('app.currency')}} </label>
                            </div>

                            <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                                <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-10 xxs-m-0 border-bottom-solid-midgray-1">
                                    <i class="display-inline-block va-top icon icon-clock xxs-ml-10"></i>
                                    <span> النظاق الزمني </span>
                                </h5>
                            </div>

                            <div class="form-group xxs-pt-20 clearfix">
                                <div class="col-xs-10 col-sm-12 position-relative">
                                    <input class="form-control" type="text" name="timeperiod" data-provide="slider" data-slider-ticks="[2, 3, 4]" data-slider-ticks-labels='["اسبوعين", "3 اسابيع", "4 اسابيع"]' data-slider-min="2" data-slider-max="4" data-slider-step="1" data-slider-value="1" data-slider-tooltip="hide"
                                    >
                                </div>
                            </div>

                            <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
                                <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-10 xxs-m-0 border-bottom-solid-midgray-1">
                                    <i class="display-inline-block va-top icon icon-user-following xxs-ml-10"></i>
                                    <span> حسب العضوية </span>
                                </h5>
                            </div>

                            <div class="form-group xxs-pt-20 clearfix">
                                <label for="golden"
                                       class="col-xs-12 col-sm-8 xxs-mb-20"> @lang('products.Golden') </label>
                                <div class="col-xs-10 col-sm-4">
                                    <input type="checkbox" name="golden" id="golden">
                                </div>
                            </div>
                            <div class="form-group xxs-pt-0 clearfix">
                                <label for="silver"
                                       class="col-xs-12 col-sm-8 xxs-mb-20"> @lang('products.Silver') </label>
                                <div class="col-xs-10 col-sm-4">
                                    <input type="checkbox" name="silver" id="silver">
                                </div>
                            </div>
                            <div class="form-group xxs-pt-0 clearfix">
                                <label for="individual"
                                       class="col-xs-12 col-sm-8 xxs-mb-20"> @lang('products.Individual') </label>
                                <div class="col-xs-10 col-sm-4">
                                    <input type="checkbox" name="individual" id="individual">
                                </div>
                            </div>

                            <input class="btn btn-primary border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-mb-10"
                                   type="submit" name="search" value="بحث">
                        </div>
                    </div>
                </form>
                {{--stores  /  users--}}
                @include('blocks._search_users',['type'=>$searchCreiteria['type']])

            </div>


            <div class="col-xs-12 col-sm-8 col-md-9 position-relative z-index-high lg-mb-0">
                <div class="col-xs-12 bg-light card-dp-2 xxs-mt-40 boxed-offers offers border-radius-md clearfix">
                    <div class="box-title border-bottom-solid-lightgray-1 xxs-mb-20">
                        <h6 class="text-bold font-droidkufi xxs-p-10 text-darkgray"> @lang($title) </h6>
                    </div>
                    <div class="offers-box clearfix xxs-mt-20">

                        @if(isset($products) && count($products) > 0)
                            @foreach($products as $product)
                                @include('blocks._products')
                            @endforeach
                        @elseif(isset($users) && count($users) > 0)
                            @foreach($users as $user)
                                @include('blocks._users',['follower'=>$user])
                            @endforeach
                        @elseif(isset($stores) && count($stores) > 0)
                            @foreach($stores as $store)
                                @include('blocks._stores')
                            @endforeach
                        @else
                            @include('flash::_message',[
                              'class' => '',
                              'message' => Lang::get('products.No Products matched with this criteria')
                            ])
                        @endif
                    </div>
                    {{--                     @if(method_exists($paginator,'links'))
                                        <footer class="md-pagination row">
                                            <div class="col-xs-12">
                                            {!! $paginator->render() !!}
                                            {!! $paginator->appends(['q'=>$q,'cat' => $searchCreiteria['cat']])->render() !!}
                                            </div>
                                        </footer>
                                        @endif --}}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection