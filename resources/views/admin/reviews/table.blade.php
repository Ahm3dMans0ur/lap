<table class="table table-responsive" id="reviews-table">
    <thead>
        <th>Product</th>
        <th>Reviews</th>
        <th>Actions</th>
    </thead>
    <tbody>
    @foreach($reviews as $review)
        <tr>
            <td><a href="{{ route('products.show',$review->products->id) }}" target="_blank">{{ $review->products->title }}</a></td>
            <td>{{ $review->total }}</td>

            <td>
                {{--{!! Form::open(['route' => ['admin.reviews.destroy', $reviews->id], 'method' => 'delete']) !!}--}}
                {{--<div class='btn-group'>--}}
                    <a href="{!! route('admin.reviews.show', [$review->products->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    {{--<a href="{!! route('admin.reviews.edit', [$reviews->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>--}}
                    {{--{!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}--}}
                {{--</div>--}}
                {{--{!! Form::close() !!}--}}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>