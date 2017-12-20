@extends('layouts.frontend')
@section('title')
    @lang('services.Services')
@endsection
@section('content')
    <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
            {!! Breadcrumbs::render('services.dashboard') !!}
            <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @lang('services.Services') </h1>
            <h1 class="pull-right">
               <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('services.create') !!}">@lang('services.Add Service')</a>
            </h1>
        </div>
    </section>
    <div class="container pull-up-10 position-relative z-index-medium">
        <div class="row">

            <div class="pull-left col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
                <div class="bg-light card-dp-3 border-radius-md md-form clearfix user-panel-left-pane  xxs-pt-20">
                    @if(isset($services) && count($services) > 0)
                    <div class="md-table xxs-p-10 xxs-pb-0">
                        @include('services.table')
                        <hr>
                    </div>
                    @else
                        @include('flash::_message',[
                          'class' => 'warning',
                          'message' => Lang::get('services.No Services uploaded')
                        ])
                    @endif

                    @if(method_exists($services,'links'))
                    <footer class="md-pagination">
                        <div class="">
                        {!! $services->links() !!}
                        </div>
                    </footer>
                    @endif
                </div>
            </div>
            @include('blocks._user-nav-sidebar', ['selected' => 'services.index'])

        </div>
    </div>

    <div class="container">
        <div class="row">
        </div>
        @if(method_exists($services,'links'))
        <footer class="md-pagination row">
            <div class="col-xs-12">
            {!! $services->links() !!}
            </div>
        </footer>
        @endif
    </div>

@endsection