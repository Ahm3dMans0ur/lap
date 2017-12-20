@extends('layouts.frontend')
@section('title'){{$services->store->name}} - {{$services->title}}@endsection
@section('content')

    <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container xxs-pb-40">
            {!! Breadcrumbs::render('services.service', $services) !!}
            <h1 class="display-block text-primary text-bold xxs-p-20 xxs-pb-0 xxs-mb-0 text-xl xs-text-center md-text-right"> {{ $services->title }} </h1>
        </div>
    </section>

    <div class="visible-lg" style="margin-bottom: -80px;"></div>
    <div class="container pull-up-60 position-relative z-index-medium">
        <div class="row" id="serviceContent">
            @include('services._show-service-box')
            @if(auth()->user() && $services->store->user->id == auth()->user()->id)
                @include('services._show-service-calendar')
            @endif
        </div>
    </div>

@endsection

