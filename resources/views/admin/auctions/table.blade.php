<table class="table table-responsive" id="auctions-table">
    <thead>
        <th>User Id</th>
        <th>Product Id</th>
        <th>Description</th>
        <th>Close Price</th>
        <th>Is Featured</th>
        <th>Is Active</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($auctions as $auctions)
        <tr>
            <td>{{ $auctions->user_id }}</td>
            <td>{{ $auctions->product_id }}</td>
            <td>{{ $auctions->description }}</td>
            <td>{{ $auctions->close_price }}</td>
            <td>{{ $auctions->is_featured }}</td>
            <td>{{ $auctions->is_active }}</td>
            <td>{{ $auctions->start_date }}</td>
            <td>{{ $auctions->end_date }}</td>
            <td>
                {!! Form::open(['route' => ['admin.auctions.destroy', $auctions->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.auctions.show', [$auctions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.auctions.edit', [$auctions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>