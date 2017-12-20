<table class="table table-responsive" id="files-table">
    <thead>
        <th>User Name</th>
        <th>Name</th>
        {{-- <th>Local Path</th> --}}
        <th>File Size</th>
        {{-- <th>Url</th> --}}
        <th>Is Active</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($files as $files)
        <tr>
            <td><a href="{!! route('user.profile', [$files->users->username]) !!}" target="_blank">{{ $files->users->name }}</a></td>
            <td><a href="{{ $files->url }}" target="_blank">{{ $files->name }}</a></td>
            {{-- <td>{{ $files->local_path }}</td> --}}
            <td>{{ $files->file_size }}</td>
            {{-- <td>{{ $files->url }}</td> --}}
            <td>@if($files->is_active) @lang('app.Yes') @else @lang('app.No') @endif</td>
            <td>
                {!! Form::open(['route' => ['admin.files.destroy', $files->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.files.show', [$files->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.files.edit', [$files->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>