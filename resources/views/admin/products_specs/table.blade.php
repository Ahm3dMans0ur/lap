<table class="table table-responsive" id="productsSpecs-table">
    <thead>
        <th>Product Id</th>
        <th>Specs Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($productsSpecs as $productsSpecs)
        <tr>
            <td>{{ $productsSpecs->product_id }}</td>
            <td>{{ $productsSpecs->specs_id }}</td>
            <td>
                {!! Form::open(['route' => ['admin.productsSpecs.destroy', $productsSpecs->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.productsSpecs.show', [$productsSpecs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.productsSpecs.edit', [$productsSpecs->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>