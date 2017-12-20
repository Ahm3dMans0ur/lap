@extends('layouts.frontend')


@section('content')

    <div class="boxed-offers rank-silver offers xxs-mt-40">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 xxs-mb-20 lg-mb-0">
                    @if (session()->has('flash_notification.message'))
                        <div class="alert alert-{{ session('flash_notification.level') }}">
                            {!! session('flash_notification.message') !!}
                        </div>
                    @endif

                    <div class="offers-box bg-light border-radius-md card-dp-2 clearfix">
                        @foreach($followings as $follower)
                            @if(count($follower->user->lastProducts) > 0)
                                <div class="box-title border-bottom-solid-lightgray-1 xxs-mb-20">
                                    <h3 class="text-bold font-droidkufi xxs-p-10 text-darkgray">
                                        {{ $follower->user->name }} </h3>
                                    <span>عدد المنتجات: {!! count($follower->user->lastProducts) !!}</span>
                                </div>
                                <div class="clearfix">
                                    @foreach($follower->user->lastProducts as $product)
                                        @include('blocks._products')
                                    @endforeach
                                </div>
                                <hr>
                            @endif
                        @endforeach
                    </div>
                </div>
                <footer class="md-pagination row">
                    <div class="col-xs-12">
                    {!! $followings->links() !!}
                    </div>
                </footer>
            </div>
        </div>
    </div>
@endsection