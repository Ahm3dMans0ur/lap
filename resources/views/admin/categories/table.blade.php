<table class="table table-responsive" id="categories-table">
    <thead>
        <th>مسلسل</th>
        <th>رئيسي</th>
        <th>الاسم</th>
        <th>الوصف</th>
        <th>نشط ؟</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>@if(isset($category->parentCategory)){{ $category->category_id }} - {{ $category->parentCategory->name }}@endif</td>
            <td style="width:180px">{{ $category->name }}</td>
            <td style="width:480px">{{ $category->description }}</td>
            <td>@if($category->is_active) @lang('app.Yes') @else @lang('app.No') @endif</td>
            <td>
                {!! Form::open(['route' => ['admin.categories.destroy', $category->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.categories.edit', [$category->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>