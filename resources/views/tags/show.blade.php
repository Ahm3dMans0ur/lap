@extends('layouts.frontend')

@section('title')
    @lang('app.Tags') | {{ $tag->name }}
@endsection

@section('content')


    @include('blocks._top-meta-section',['header' => Lang::get('app.All Tags'), 'breadcrumbs' => 'tag', 'breadcrumbs_value' => $tag, 'enable_search' => false, 'noshadow' => true])

    <div class="container position-relative pull-up-20 z-index-high">
        <div class="row">
            <div class="col-xs-12 col-md-10 col-md-pull-1 xxs-mb-20 lg-mb-0 offers">
                <div class="offers-box bg-light border-radius-md card-dp-2 clearfix">
                    <div class="box-title border-bottom-solid-lightgray-1 xxs-mb-20">
                        <h6 class="text-bold font-droidkufi xxs-p-20 text-darkgray">{{ $tag->name }} </h6>
                    </div>
                    <div class="clearfix xxs-p-20 flex-cols">
                        @if (session()->has('flash_notification.message'))
                            <div class="alert alert-{{ session('flash_notification.level') }}">
                                {!! session('flash_notification.message') !!}
                            </div>
                        @endif
                        @foreach($products as $product)
                            @include('blocks._products')
                        @endforeach
                    </div>
                    <footer class="md-pagination row">
                        <div class="col-xs-12">
                        {!! $products->links() !!}
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
@endsection