<table class="table table-responsive" id="pages-table">
    <thead>
        <th>Title</th>
        <th>Slug</th>
        <th>Is Published</th>
        <th>Views</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pages as $pages)
        <tr>
            <td>{{ $pages->title }}</td>
            <td>{{ $pages->slug }}</td>
            <td>@if($pages->is_published)@lang('app.Yes') @else @lang('app.Yes') @endif</td>
            <td>{{ $pages->views }}</td>
            <td>
                {!! Form::open(['route' => ['admin.pages.destroy', $pages->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pages.show',[$pages->slug]) !!}" target="_blank" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.pages.edit', [$pages->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>