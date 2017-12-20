<table class="table table-responsive" id="likes-table">
    <thead>
        <th>Product Id</th>
        <th>User Id</th>
        <th>Is Liked</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($likes as $likes)
        <tr>
            <td>{{ $likes->product_id }}</td>
            <td>{{ $likes->user_id }}</td>
            <td>{{ $likes->is_liked }}</td>
            <td>
                {!! Form::open(['route' => ['admin.likes.destroy', $likes->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.likes.show', [$likes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.likes.edit', [$likes->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>