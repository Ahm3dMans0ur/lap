@extends('layouts.simple')
@section('title')
    @lang('orders.Invoice')
@endsection
@section('content')
    <style>
        body {
            background-color: white;
        }

        table {
            direction: rtl;
        }

        .rtl {
            direction: rtl;
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            /*font-family:'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;*/
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: right;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2),
        .invoice-box table tr td:nth-child(3) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
            float: left;
            direction: rtl;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
            float: right;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(3) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
    </style>
    </head>
    <br/>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>

                            <td class="pull-right col-md-6">
                                <img src="/frontend/images/logo-dark-alt-small.png" class="img-responsive">
                            </td>
                            <td colspan="2" class="details col-md-6">

                                رقم الطلب : {{$order->id}}<br>
                                تاريخ الطلب: {{$order->created_at->formatLocalized('%A %d %B %Y')}}<br>
                                اخر تعديل: {{$order->updated_at->formatLocalized('%A %d %B %Y')}}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title" colspan="1">
                                @if($order->store && $order->store->user)
                                    <img src="{{ $order->store->user->getImage('small') }}"
                                         style="width:100%; max-width:250px;max-height: 100px;">
                                @endif
                            </td>
                            <td style="margin-right: 30px"></td>
                            <td>
                                @php
                                    echo DNS2D::getBarcodeHTML(route('order.invoice',$order->id), "QRCODE",5,5);
                                @endphp
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="rtl" style="float: right;">
                                @if($order->store)
                                    <strong>المتجر</strong><br>
                                    {{ $order->store->name }}<br>
                                    {{ $order->store->description }}
                                @else
                                    لم يتم العثور على المتجر
                                @endif
                            </td>
                            <td>
                                <strong>البائع</strong><br>
                                {{ $order->store->user->name }}<br>
                                {{ $order->store->user->email }}<br>
                                {{ $order->store->user->phone }}<br>
                                {{ $order->store->user->address }}<br>
                                {{ $order->store->user->bank_accounts }}<br>
                            </td>
                            <td class="rtl">
                                <strong>المشترى</strong><br>
                                {{ $order->owner->name }}<br>
                                {{ $order->owner->email }}<br>
                                {{ $order->owner->phone }}<br>
                                {{ $order->owner->address }}
                                {{ $order->owner->bank_accounts }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            <tr class="heading  xxs-mt-40">
                <td>
                    المنتج \ العنصر
                </td>
                <td>
                    الكمية
                </td>
                <td>
                    اجمالي السعر
                </td>
            </tr>

            @foreach($order->items as $i => $item)
                <tr class="item @if($i == (count($order->items) - 1)) last @endif ">
                    <td>
                        {{ $item->title }}
                    </td>
                    <td>
                        {{ $item->qty }}
                    </td>
                    <td>
                        {{ $item->price * $item->qty }}
                    </td>
                </tr>
            @endforeach

            <tr class="total">
                <td></td>
                <td></td>
                <td>
                    الاجمالي : {{$order->total}}
                </td>
            </tr>
            <tr class="heading xxs-mb-40">
                <td colspan="2">
                    @lang('orders.Order status')
                </td>
                <td>
                <span class="xxs-p-5 label label-{{$order->getStatus()['class']}}">
                    {{$order->getStatus()['name']}}
                </span>
                </td>
            </tr>
        </table>
        <p>
        <center>@php echo DNS1D::getBarcodeHTML($order->id, "EAN13"); @endphp</center>
        </p>
        <p class="rtl text-right xxs-mt-20">@lang('orders.invoice_shari_note')</p>
    </div>
@endsection
