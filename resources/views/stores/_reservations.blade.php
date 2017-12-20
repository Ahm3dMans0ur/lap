<div id="storeReservations" class="tab-pane col-xs-12 col-sm-8 col-md-9 position-relative z-index-high xxs-mt-10"
     role="tabpanel">

    <div class="bg-light card-dp-3 md-form xxs-mt-10 xxs-mb-20 clearfix lang-rtl">
        <ul class="nav navbar-nav">
            <li>
                <a href="{!! route('stores.show',$store->slug) !!}?status=confirmed#storeReservations" class="font-jfflat bg-light  border-bottom-solid-lightgray-1">
                    <span class="display-inline-block va-top"> @lang('reservations.confirmed') </span>
                </a>
            </li>
            <li>
                <a href="{!! route('stores.show',$store->slug) !!}?status=rejected#storeReservations" class="font-jfflat bg-light  border-bottom-solid-lightgray-1">
                    <span class="display-inline-block va-top"> @lang('reservations.rejected') </span>
                </a>
            </li>
            <li>
                <a href="{!! route('stores.show',$store->slug) !!}?status=new#storeReservations" class="font-jfflat bg-light  border-bottom-solid-lightgray-1">
                    <span class="display-inline-block va-top"> @lang('reservations.new') </span>
                </a>
            </li>
        </ul>
    </div>

    <div class="bg-light card-dp-3 border-radius-md md-form clearfix">
        @if(count($reservations)>0)
        <table class="table table-hover table-responsive table-condensed lang-rtl" id="reservations-table">
            <thead class="">
            <th class="text-right" style="padding: 12px;">@lang('services.The Service')</th>
            <th class="text-right hidden-xs" style="padding: 12px;">@lang('reservations.Name')</th>
            <th class="text-right hidden-xs hidden-sm" style="padding: 12px;">@lang('reservations.Phone')</th>
            <th class="text-right hidden-xs hidden-sm" style="padding: 12px;">@lang('reservations.Start Time')</th>
            <th class="text-right hidden-xs" style="padding: 12px;">@lang('reservations.End Time')</th>
            <th class="text-right hidden-xs" style="padding: 12px;">@lang('reservations.Status')</th>
            <th></th>
            </thead>
            <tbody>
            @foreach($reservations as $reservations)
                <tr>
                    <td>
                        <a href="{{route('services.show', [$reservations['service_id']])}}">{{$reservations['title']}}</a>
                    </td>
                    <td class="hidden-xs">{{$reservations['name']}}</td>
                    <td class="hidden-xs hidden-sm">{{$reservations['phone']}}</td>
                    <td class="hidden-xs hidden-sm">{{$reservations['start_time']}}</td>
                    <td class="hidden-xs">{{$reservations['end_time']}}</td>
                    <td class="hidden-xs reserv{{ $reservations['id'] }}">
                        @include('stores._reservation_status')
                    </td>
                    <td>
                        <a href="{{route('reservations.show', [$reservations['id']])}}"
                           class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-eye-open"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @else
            <p class="xxs-p-20">@lang('reservations.No Reservations added')</p>
        @endif
    </div>

</div>
@section('scripts')
    <script>
        $(document).on('change', '#change_status', function () {
            var status = $(this).val();
            var id = $(this).attr('reservation');
            $.ajax({
                url: "{{ url('reservations/status') }}" + '/' + id,
                type: 'get',
                data: {status: status},
                success: function (data) {
                    $('.reserv' + id).html(data.html);
                    if (data.status == 'confirmed')
                        swal('{{ Lang::get('reservations.reservation confirmed') }}');
                    else if (data.status == 'rejected')
                        swal('{{ Lang::get('reservations.reservation rejected') }}');
                }
            });
        });
    </script>

@append