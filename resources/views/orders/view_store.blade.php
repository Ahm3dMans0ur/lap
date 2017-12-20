@extends('layouts.frontend')

@section('title')
    @lang('messages.display orders')
@endsection

@section('content')
    <section
            class="grad-bg-light-primary quarter-window-height position-relative z-index-low overflow-hidden text-center">
        <div class="container">
            {!!Breadcrumbs::render('orders.sales')!!}
            <h1 class="display-block text-primary text-right text-bold xxs-p-20 text-xl"> @lang('messages.display orders') </h1>
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
                                <td class="text-right">@lang('messages.buyer')</td>
                                {{-- <td class="text-right">@lang('messages.store')</td> --}}
                                <td class="text-right">@lang('messages.status')</td>
                                <th class="text-right hidden-xs"> @lang('orders.Invoice')</th>
                                <td>@lang('messages.view')</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td class="text-right">
                                        <a class="btn btn-xs btn-gray text-uppercase"
                                           href="{!! route('user.profile', $order->owner->username) !!}">{{ $order->owner->name }}</a>
                                    </td>
                                    {{--                                     <td class="text-right">
                                                                            <a href="{!! route('stores.show', $order->store->slug) !!}">{{ $order->store->name }}</a>
                                                                        </td> --}}
                                    <td class="text-right">
                                        @if($order->status == '2')
                                            <span class="xxs-p-5 label label-success">@lang('orders.completed')</span>
                                        @else
                                            <form action="{!! route('order.status', $order->id) !!}" method="post">
                                                {!! csrf_field() !!}
                                                <select name="status" class="form-control"
                                                        onchange="this.form.submit()">
                                                    @foreach(\App\Models\Orders::getOrderStatusForTrader() as $val => $info)
                                                        <option value="{{$val}}"
                                                                @if($order->status == $val) selected @endif>
                                                            {{$info['name']}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        @endif
                                    </td>
                                    <td class="text-right hidden-xs"><a
                                                href="{{ route('order.invoice',[$order->id]) }}">@lang('orders.Invoice')</a>
                                    </td>
                                    <td class="text-right"><a
                                                class="btn btn-ghost btn-xs btn-gray xxs-pr-10 xxs-pl-10 xxs-pb-2"
                                                href="{!! route('order.view',[$order->id]) !!}">@lang('messages.view')</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @if(method_exists($orders,'links'))
                    <footer class="md-pagination row">
                        <div class="col-xs-12">
                            {{$orders->links() }}
                        </div>
                    </footer>
                @endif
            </div>
            @include('blocks._user-nav-sidebar', ['selected' => 'order.user.view'])
        </div>
    </div>
@endsection