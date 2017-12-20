<table class="table table-responsive" id="services-table">
    <thead>
        <th>#</th>
        <th>القسم</th>
        <th>المتجر</th>
        <th>العنوان</th>
        <th>نشط ؟</th>
        <th colspan="3">عمليات</th>
    </thead>
    <tbody>
    @foreach($services as $service)
        <tr>
            <td>{!! $service->id !!}
            <td>{!! $service->category->name !!}</td>
            <td>{!! $service->store->name !!}</td>
            <td>{!! $service->title !!}</td>
            <td>@if($service->status) @lang('app.Yes') @else @lang('app.No') @endif</td>
            <td>
                {!! Form::open(['route' => ['admin.services.destroy', $service->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.services.show', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.services.edit', [$service->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>