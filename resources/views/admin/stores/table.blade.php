<table class="table table-responsive" id="stores-table">
    <thead>
        <th>User Name</th>
        <th>Store Name</th>
        <th>Description</th>
        <th>Status</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($stores as $store)
        <tr>
            <td>
                @if(isset($store->user))
                <a href="{!! route('user.profile',[$store->user->username]) !!}" target="_blank">
                    {{ $store->user->name }}
                </a>
                @else
                    تم حذف المستخدم
                @endif
            </td>
            <td><a href="{!! route('stores.show', [$store->slug]) !!}" target="_blank">{{ $store->name }}</a></td>
            <td>{{ str_limit($store->description, $limit = 100, $end = '...') }}</td>
            <td>{{ $store->status }}</td>
            <td>
                {!! Form::open(['route' => ['admin.stores.destroy', $store->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.stores.show', [$store->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.stores.edit', [$store->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>