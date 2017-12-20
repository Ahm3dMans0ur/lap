@extends('layouts.simple')
@section('title')
    @lang('reservations.Invoice')
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

                            <td class="col-xs-5 pull-right">
                                <img src="/frontend/images/logo-dark-alt-small.png" class="img-responsive">
                            </td>
                            <td class="col-xs-2 pull-right"></td>
                            <td class="details col-xs-5 pull-left">

                                رقم الطلب : {{$reservations->id}}<br>
                                تاريخ الطلب: {{$reservations->created_at->formatLocalized('%A %d %B %Y')}}<br>
                                اخر تعديل: {{$reservations->updated_at->formatLocalized('%A %d %B %Y')}}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td class="title pull-right col-xs-5">
                                <img src="{{ $reservations->service->store->user->getImage('small') }}"
                                     style="width:100%; max-width:250px;max-height: 100px;">
                            </td>
                            <td class="col-xs-2 pull-right"></td>
                            <td class="col-xs-5 pull-left">
                                @php
                                    echo DNS2D::getBarcodeHTML(route('reservations.invoice',$reservations->id), "QRCODE",5,5);
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
                            <td class="rtl pull-right col-xs-5">
                                {{ $reservations->service->store->name }}<br>
                                {{ $reservations->service->store->description }}
                            </td>
                            <td class="col-xs-2 pull-right"></td>
                            <td class="rtl col-xs-5 pull-left">
                                {{ $reservations->user->name }}<br>
                                {{ $reservations->user->email }}<br>
                                {{ $reservations->user->phone }}<br>
                                {{ $reservations->user->address }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>


            <tr class="heading  xxs-mt-40">
                <td>
                    الخدمة
                </td>
                <td>
                    الحجز من
                </td>
                <td>
                    إلى
                </td>
            </tr>


                <tr class="item last ">
                    <td>
                        {{ $reservations->service->title }}
                    </td>
                    <td>
                        {{ $reservations->start_time }}
                    </td>
                    <td>
                        {{ $reservations->end_time }}
                    </td>
                </tr>



            {{--<tr class="heading xxs-mb-40">--}}
                {{--<td colspan="2">--}}
                    {{--@lang('orders.Order status')--}}
                {{--</td>--}}
                {{--<td>--}}
                {{--<span class="xxs-p-5 label label-{{$order->getStatus()['class']}}">--}}
                    {{--{{$order->getStatus()['name']}}--}}
                {{--</span>--}}
                {{--</td>--}}
            {{--</tr>--}}
        </table>
        <p>
        <center>@php echo DNS1D::getBarcodeHTML($reservations->id, "EAN13"); @endphp</center>
        </p>
        <p class="rtl text-right xxs-mt-20">@lang('orders.invoice_shari_note')</p>
    </div>
@endsection
