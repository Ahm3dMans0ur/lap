<table class="table table-responsive" id="settings-table">
    <thead>
        <th>Key</th>
        <th>Value</th>
        <th>Description</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($settings as $setting)
        <tr>
            <td style="width: 180px">{!! $setting->key !!}</td>
            <td style="width: 320px">{!! $setting->value !!}</td>
            <td style="width: 320px">{!! $setting->description !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.settings.destroy', $setting->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.settings.show', [$setting->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.settings.edit', [$setting->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>