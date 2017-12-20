<table class="table table-responsive" id="sections-table">
    <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Is Active</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($sections as $sections)
        <tr>
            <td>{{ $sections->name }}</td>
            <td>{{ $sections->description }}</td>
            <td>{{ $sections->is_active }}</td>
            <td>
                {!! Form::open(['route' => ['admin.sections.destroy', $sections->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.sections.show', [$sections->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.sections.edit', [$sections->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>