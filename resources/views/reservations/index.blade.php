@extends('layouts.frontend')
@section('title')
    @lang('reservations.Reservations')
@endsection
@section('content')
    <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
            {!! Breadcrumbs::render('reservations.dashboard') !!}
            <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @lang('reservations.Reservations') </h1>
        </div>
    </section>

    <div class="container pull-up-40 position-relative z-index-medium">
        <div class="row">
            <div class="pull-left col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
                <div class="bg-light card-dp-3 border-radius-md md-form clearfix user-panel-left-pane">

                    @if(isset($reservations) && count($reservations) > 0)
                    <div class="md-table xxs-p-10 xxs-pb-0">
                        @include('reservations.table')
                        <hr>
                    </div>
                    @else
                    <p class="xxs-p-20">@lang('reservations.No Reservations added')</p>
                    @endif


                    @if(method_exists($reservations,'links'))
                    <footer class="md-pagination">
                        <div class="">
                        {!! $reservations->links() !!}
                        </div>
                    </footer>
                    @endif
                </div>
            </div>
            @include('blocks._user-nav-sidebar', ['selected' => 'reservations.index'])

        </div>
    </div>


@endsection
