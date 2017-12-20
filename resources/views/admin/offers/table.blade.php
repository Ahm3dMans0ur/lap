<table class="table table-responsive" id="offers-table">
    <thead>
        <th>Product Id</th>
        <th>Title</th>
        <th>Description</th>
        <th>New Price</th>
        <th>Discount</th>
        <th>Is Featured</th>
        <th>Is Active</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($offers as $offers)
        <tr>
            <td>{{ $offers->product_id }}</td>
            <td>{{ $offers->title }}</td>
            <td>{{ $offers->description }}</td>
            <td>{{ $offers->new_price }}</td>
            <td>{{ $offers->discount }}</td>
            <td>{{ $offers->is_featured }}</td>
            <td>{{ $offers->is_active }}</td>
            <td>{{ $offers->start_date }}</td>
            <td>{{ $offers->end_date }}</td>
            <td>
                {!! Form::open(['route' => ['admin.offers.destroy', $offers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.offers.show', [$offers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.offers.edit', [$offers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>