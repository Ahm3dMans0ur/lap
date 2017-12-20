<table class="table table-responsive" id="comments-table">
    <thead>
        <th>Product Id</th>
        <th>User Id</th>
        <th>Comment</th>
        <th>Is Published</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($comments as $comments)
        <tr>
            <td>{{ $comments->product_id }}</td>
            <td>{{ $comments->user_id }}</td>
            <td>{{ $comments->comment }}</td>
            <td>{{ $comments->is_published }}</td>
            <td>
                {!! Form::open(['route' => ['admin.comments.destroy', $comments->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.comments.show', [$comments->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.comments.edit', [$comments->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>