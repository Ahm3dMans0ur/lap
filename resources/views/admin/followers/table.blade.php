<table class="table table-responsive" id="followers-table">
    <thead>
        <th>User Id</th>
        <th>Follower Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($followers as $followers)
        <tr>
            <td>{{ $followers->user_id }}</td>
            <td>{{ $followers->follower_id }}</td>
            <td>
                {!! Form::open(['route' => ['admin.followers.destroy', $followers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.followers.show', [$followers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.followers.edit', [$followers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>