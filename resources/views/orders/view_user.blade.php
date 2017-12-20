@extends('layouts.frontend')

@section('title')
    @lang('orders.My orders')
@endsection

@section('content')

    <section class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
            {!!Breadcrumbs::render('orders.user')!!}
            <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @lang('orders.My orders') </h1>
        </div>
    </section>

    <div class="container pull-up-40 position-relative z-index-medium">
        <div class="row">
            <div class="pull-left offers col-xs-12 col-md-8 col-lg-9 xxs-mb-40">
                <div class="bg-light card-dp-3 border-radius-md md-form clearfix user-panel-left-pane">

                    <div class="md-table xxs-p-10 xxs-pb-0">
                        <table class="table table-hover table-responsive table-condensed lang-rtl">
                            <thead>
                                <tr>
                                    <th class="text-right text-muted"> <span class="text-sm">#</span> </th>
                                    {{-- <th class="text-right"> @lang('messages.vendor') </th> --}}
                                    <th class="text-right"> @lang('messages.store') </th>
                                    <th class="text-right"> @lang('messages.status') </th>
                                    {{-- <th class="text-right hidden-xs"> @lang('orders.Invoice')</th> --}}
                                    <th class="text-right"> عمليات </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $k => $order)
                            <tr>
                                <td class="text-gray"> <span class="text-sm"> {{$order->id}} </span> </td>
                                {{-- <td> <a href="{!! route('user.profile', $order->store->user->username) !!}" class="btn btn-xs btn-gray text-uppercase">{{ $order->store->user->username }}</a> </td> --}}
                                <td>
                                    @if($order->store)
                                    <a href="{!! route('stores.show', $order->store->slug) !!}">{{ $order->store->name }}</a>
                                    @else
                                        لم يتم العثور على المتجر
                                    @endif
                                </td>
                                <td>
                                    <span class="xxs-p-5 label label-{{$order->getStatus()['class']}} xxs-mt-5">
                                        {{$order->getStatus()['name']}}
                                    </span>
                                </td>
{{--                                 <td class="hidden-xs">
                                    <a href="{{ route('order.invoice',[$order->id]) }}">@lang('orders.Invoice')</a>
                                </td> --}}
                                <td>
                                    <a href="{{ route('order.invoice',[$order->id]) }}" class="btn btn-ghost btn-xs btn-primary xxs-pr-10 xxs-pl-10 xxs-pb-2 skip-margin xxs-mt-5" style="width:90px;">@lang('orders.Invoice')</a>
                                    <a href="{!! route('order.view',[$order->id]) !!}" class="btn btn-ghost btn-xs btn-gray xxs-pr-10 xxs-pl-10 xxs-pb-2 skip-margin xxs-mt-5" style="width:90px;"> @lang('orders.View order') </a>
                                    @if($order->status == '1')
                                    <button class="btn btn-ghost btn-xs btn-primary xxs-pr-10 xxs-pl-10 xxs-pb-2 xxs-mt-5" route="{!! route('order.status', $order->id) !!}" id="status_submit" style="width:90px;"> @lang('orders.completed') </button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    @if(method_exists($orders,'links'))
                    <footer class="md-pagination">
                        <div class="">
                        {!! $orders->links() !!}
                        </div>
                    </footer>
                    @endif
                </div>
            </div>
            @include('blocks._user-nav-sidebar', ['selected' => 'order.user.view'])

        </div>
    </div>

    <div class="container">
        <div class="row">
        </div>
        @if(method_exists($orders,'links'))
        <footer class="md-pagination row">
            <div class="col-xs-12">
            {!! $orders->links() !!}
            </div>
        </footer>
        @endif
    </div>

    <form  id="order_complete" method="post">
        {!! csrf_field() !!}
        <input type="hidden" name="status" value="2">
    </form>

@endsection

@section('scripts')

    <script>
        $(document).on('click','#status_submit',function(e){
            e.preventDefault();
            var route=$(this).attr('route');
            $('#order_complete').attr('action',route);
            $('#order_complete').submit();
        });
    </script>
@endsection