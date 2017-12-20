<table class="table table-responsive" id="adverts-table">
    <thead>
        <th>Name</th>
        <th>Is Active</th>
        <th>Balance</th>
        <th>Type</th>
        <th>Views</th>
        <th>Clicks</th>
        <th>Click Cost</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($adverts as $advert)
        <tr>
            <td>{!! $advert->name !!}</td>
            <td>@if($advert->is_active) @lang('app.Yes') @else @lang('app.No') @endif </td>
            <td>{!! $advert->balance !!}</td>
            <td>{{Lang::get('advert.'.ucfirst($advert->type))}}</td>
            <td>{!! $advert->views !!}</td>
            <td>{!! $advert->clicks !!}</td>
            <td>{!! $advert->click_cost !!}</td>
            <td>
                {!! Form::open(['route' => ['admin.adverts.destroy', $advert->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('admin.adverts.show', [$advert->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('admin.adverts.edit', [$advert->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>