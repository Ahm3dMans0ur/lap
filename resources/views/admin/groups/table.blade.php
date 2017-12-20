<table class="table table-responsive" id="groups-table">
    <thead>
        <th>Name</th>
        <th>Class</th>
        <th>Description</th>
        <th>Is Active</th>
        <th>Is Free</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($groups as $groups)
        <tr>
            <td>{!! $groups->name !!}</td>
            <td>{!! $groups->class !!}</td>
            <td>{!! $groups->description !!}</td>
            <td>@if($groups->is_active) @lang('app.Yes') @else @lang('app.No') @endif</td>
            <td>@if($groups->is_free) @lang('app.Yes') @else @lang('app.No') @endif</td>
            <td>
                {!! Form::open(['route' => ['admin.groups.destroy', $groups->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.groups.edit', [$groups->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>