<table class="table table-responsive" id="products-table">
    <thead>
        <th>Category Id</th>
        <th>User Id</th>
        <th>Code</th>
        <th>Title</th>
        <th>Description</th>
        <th>Delivery Options</th>
        <th>Price</th>
        <th>Status</th>
        <th>Views Cache</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($products as $products)
        <tr>
            <td>{!! $products->category_id !!}</td>
            <td>{!! $products->user_id !!}</td>
            <td>{!! $products->code !!}</td>
            <td>{!! $products->title !!}</td>
            <td>{!! $products->description !!}</td>
            <td>{!! $products->delivery_options !!}</td>
            <td>{!! $products->price !!}</td>
            <td>{!! $products->status !!}</td>
            <td>{!! $products->views_cache !!}</td>
            <td>
                {!! Form::open(['route' => ['products.destroy', $products->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('products.show', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('products.edit', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>