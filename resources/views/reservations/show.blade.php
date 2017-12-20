@extends('layouts.frontend')
@section('title'){{$reservations->service->store->name}} - {{$reservations->service->title}}@endsection
@section('content')
@include('stores._cover',['store' => $reservations->service->store])

<div class="container position-static">
    <div class="row">
        @include('stores._left',['services' => $reservations->service,'store' => $reservations->service->store,'extra_left' => 'services._stores-left','allFollowers'=>$reservations->service->store->user->followers()->count()])

        <h1 class="xxs-mt-20 xxs-p-0 pull-right">
            @lang('services.Reservations table') - {{$reservations->service->title}}
        </h1>
        <span class="pull-left">
            <a href="{!! route('reservations.create',$reservations->service->id) !!}" class="btn btn-primary pull-right xxs-mt-20 xxs-ml-10">
                @lang('reservations.Add Reservation')
            </a>
            <a href="{!! route('services.show',$reservations->service->id) !!}" class="btn btn-default pull-left xxs-mt-20">رجوع</a>
        </span>
        {{-- <p></p> --}}
        <div class="tab-content">
            <div id="reservationContent" class=" col-xs-12 col-sm-8 col-md-9 position-relative z-index-high xxs-mt-0">
                <div class="col-xs-12 bg-light card-dp-2 xxs-mt-40 boxed-offers offers border-radius-md clearfix">
                    @include('reservations.show_fields')
                    <a href="{!! route('services.show',$reservations->service->id) !!}" class="btn btn-default pull-left xxs-mt-20">رجوع</a>

                </div>
            </div>

        </div>

    </div>
</div>

@endsection


