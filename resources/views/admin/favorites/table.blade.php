<table class="table table-responsive" id="favorites-table">
    <thead>
        <th>User Id</th>
        <th>Product Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($favorites as $favorites)
        <tr>
            <td>{{ $favorites->user_id }}</td>
            <td>{{ $favorites->product_id }}</td>
            <td>
                {!! Form::open(['route' => ['admin.favorites.destroy', $favorites->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.favorites.show', [$favorites->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.favorites.edit', [$favorites->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>