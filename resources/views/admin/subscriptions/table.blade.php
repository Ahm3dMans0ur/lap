<table class="table table-responsive" id="subscriptions-table">
    <thead>
        <th>User Id</th>
        <th>Group Id</th>
        <th>Notes</th>
        <th>Paid Cost</th>
        <th>Is Active</th>
        <th>Plan</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($subscriptions as $subscription)
        <tr>
            <td>{{ $subscription->user_id }}</td>
            <td>{{ $subscription->group_id }}</td>
            <td>{{ $subscription->notes }}</td>
            <td>{{ $subscription->paid_cost }}</td>
            <td>{{ $subscription->is_active }}</td>
            <td>{{ $subscription->plan }}</td>
            <td>{{ $subscription->start_date }}</td>
            <td>{{ $subscription->end_date }}</td>
            <td>
                {!! Form::open(['route' => ['admin.subscriptions.destroy', $subscription->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.subscriptions.show', [$subscription->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.subscriptions.edit', [$subscription->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>