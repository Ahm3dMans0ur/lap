<table class="table table-responsive" id="reservations-table">
    <thead>
        <th>#</th>
        <th>المستخدم</th>
        <th>رقم الهوية</th>
        <th>الهاتف</th>
        <th>الخدمة</th>
        <th>ملاحظات</th>
        <th>من</th>
        <th>الي</th>
        <th colspan="3">عمليات</th>
    </thead>
    <tbody>
    @foreach($reservations as $reservation)
        <tr>
            <td>{{ $reservation->id }}</td>
            <td>
                @if($reservation->user)
                <a href="{{ route('user.profile',[$reservation->user->username]) }}" target="_blank">
                    {{$reservation->name}}
                </a>
                @else
                    {{$reservation->name}}
                @endif
            </td>
            <td>{{ $reservation->personal_id }}</td>
            <td>{{ $reservation->phone }}</td>

            <td>
                @if($reservation->service)
                    {{ $reservation->service->title }}
                @else
                    تم حذف الخدمة
                @endif
            </td>

            <td>{{$reservation->notes}}</td>
            <td>{{ $reservation->start_time }}</td>
            <td>{{ $reservation->end_time }}</td>

            <td>
                {!! Form::open(['route' => ['admin.reservations.destroy', $reservation->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.reservations.show', [$reservation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.reservations.edit', [$reservation->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>