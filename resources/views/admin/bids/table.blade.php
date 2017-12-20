<table class="table table-responsive" id="bids-table">
    <thead>
        <th>Auction Id</th>
        <th>User Id</th>
        <th>Product Id</th>
        <th>Price</th>
        <th>Deal</th>
        <th>Chosen</th>
        <th>Closed</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($bids as $bids)
        <tr>
            <td>{{ $bids->auction_id }}</td>
            <td>{{ $bids->user_id }}</td>
            <td>{{ $bids->product_id }}</td>
            <td>{{ $bids->price }}</td>
            <td>{{ $bids->deal }}</td>
            <td>{{ $bids->chosen }}</td>
            <td>{{ $bids->closed }}</td>
            <td>
                {!! Form::open(['route' => ['admin.bids.destroy', $bids->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.bids.show', [$bids->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.bids.edit', [$bids->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>