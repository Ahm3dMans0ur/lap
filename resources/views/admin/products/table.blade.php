<table class="table table-responsive" id="products-table">
    <thead>
        <th> Product Id</th>
        {{-- <th>Category Id</th> --}}
        <th>Owner</th>
        {{-- <th>Code</th> --}}
        <th>Title</th>
        {{-- <th>Description</th> --}}
        <th>Price</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($products as $products)
        <tr>
            <td>{{ $products->id }}</td>
            {{-- <td>{{ $products->category_id }}</td> --}}
            <td>@if($products->owner)<a href="{{ route('user.profile',$products->owner->username) }}">{{ $products->owner->name }}</a>@else {{$products->user_id}}@endif</td>
            {{-- <td>{{ $products->code }}</td> --}}
            <td>{{ $products->title }}</td>
            {{-- <td>{{ $products->description }}</td> --}}
            <td>{{ $products->price }}</td>
            <td>{{ $products->status }}</td>
            <td>
                {!! Form::open(['route' => ['admin.products.destroy', $products->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.products.show', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.products.edit', [$products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>