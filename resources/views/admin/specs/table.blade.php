<table class="table table-responsive" id="specs-table">
    <thead>
        <th>Name</th>
        <th>Type</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($specs as $specs)
        <tr>
            <td>{{ $specs->name }}</td>
            <td>{{ $specs->type }}</td>
            <td>
                {!! Form::open(['route' => ['admin.specs.destroy', $specs->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.specs.show', [$specs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.specs.edit', [$specs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>