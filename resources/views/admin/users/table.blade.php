<table class="table table-responsive" id="users-table">
    <thead>
        <th>Group</th>
        <th>Profile</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Account Type</th>
        <th>Referee</th>
        <th>Is Active</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>
                @if($user->group)
                {{ $user->group->name }}
                @else
                {{$user->group_id}}
                @endif
            </td>
            <td><a href="{!! route('user.profile',[$user->username]) !!}" target="_blank">{{ $user->name }}</a></td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->account_type }}</td>
            <td>{{ $user->referee }}</td>
            <td>@if($user->is_active) @lang('app.Yes') @else @lang('app.No') @endif</td>
            <td>
                {!! Form::open(['route' => ['admin.users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>