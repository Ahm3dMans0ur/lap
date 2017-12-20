<table class="table table-responsive" id="products-table">
    <thead>
    <th>Category Id</th>
    <th>User Id</th>
    <th>Code</th>
    <th>Title</th>
    <th>Description</th>
    <th>Price</th>
    <th>change to active</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->category_id !!}</td>
            <td>{!! $product->user_id !!}</td>
            <td>{!! $product->code !!}</td>
            <td><a href="{!! route('admin.products.show', [$product->id]) !!}">{!! $product->title !!}</a></td>
            <td>{!! $product->description !!}</td>
            <td>{!! $product->price !!}</td>
            <td>
                {!! Form::open(['route'=>['admin.products.changeStatus', $product->id]]) !!}
                    <button type="submit" class="btn btn-success">active</button>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
