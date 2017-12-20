<table class="table table-responsive" id="notifications-table">
    <thead>
        <th>User Id</th>
        <th>Content</th>
        <th>Is Readed</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($notifications as $notification)
        <tr>
            <td>{{ $notification->user_id }}</td>
            <td>{{ $notification->content }}</td>
            <td>{{ $notification->is_readed }}</td>
            <td>
                {!! Form::open(['route' => ['admin.notifications.destroy', $notification->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.notifications.show', [$notification->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.notifications.edit', [$notification->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>