<table class="table table-hover table-responsive table-condensed lang-rtl" id="reservations-table">
    <thead>
    <th class="text-right">@lang('services.The Service')</th>
    <th class="text-right hidden-xs">@lang('reservations.Name')</th>
    <th class="text-right hidden-xs hidden-sm">@lang('reservations.Phone')</th>
    <th class="text-right hidden-xs hidden-sm">@lang('reservations.Start Time')</th>
    <th class="text-right hidden-xs">@lang('reservations.End Time')</th>
    <th class="text-right hidden-xs">@lang('reservations.Status')</th>
    <th class="text-right hidden-xs">@lang('reservations.Invoice')</th>
    <th class="text-right" colspan="3">@lang('app.Actions')</th>
    </thead>
    <tbody>
    @foreach($reservations as $reservations)
        <tr>
            <td><a href="{{route('services.show', [$reservations->service_id])}}">{{$reservations->service->title}}</a>
            </td>
            <td class="hidden-xs">{{$reservations->name}}</td>
            <td class="hidden-xs hidden-sm">{{$reservations->phone}}</td>
            <td class="hidden-xs hidden-sm">{{$reservations->start_time}}</td>
            <td class="hidden-xs">{{$reservations->end_time}}</td>
            <td class="hidden-xs">{{Lang::get('reservations.'.$reservations->status)}}</td>
            @if($reservations->status == 'confirmed')
                <td class="hidden-xs"><a href="{{ route('reservations.invoice',$reservations->id) }}"
                                         target="_blank">{{Lang::get('reservations.Invoice')}}</a></td>
                @else
                <td></td>
            @endif
            <td>
                {{Form::open(['route' => ['reservations.destroy', $reservations->id], 'method' => 'delete'])}}
                <div class='btn-group'>
                    <a href="{{route('reservations.show', [$reservations->id])}}" class='btn btn-default btn-xs'><i
                                class="glyphicon glyphicon-eye-open"></i></a>
                    @if($reservations->status != 'confirmed')
                        <a href="{{route('reservations.edit', [$reservations->id])}}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-edit"></i></a>
                        {{Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"])}}
                    @endif
                </div>
                {{Form::close()}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>



