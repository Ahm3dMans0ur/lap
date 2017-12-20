<table class="table table-hover table-responsive table-condensed lang-rtl" id="services-table">
    <thead>
        <th class="text-right text-muted"> <span class="text-sm">#</span> </th>
        <th class="text-right hidden-xs hidden-sm">التصنيف</th>
        <th class="text-right">@lang('services.Title')</th>
        @if(!isset($actions) || $actions === true)
        <th class="text-right  hidden-xs ">@lang('services.Status')</th>
        <th class="text-right" colspan="3">@lang('app.Actions')</th>
        @else
        <th class="text-right">@lang('services.Description')</th>
        @endif
    </thead>
    <tbody>
    @foreach($services as $services)
        <tr>
            <td class="text-gray"> <span class="text-sm"> {{$services->id}} </span> </td>
            <td class="hidden-xs hidden-sm"><a href="{{ route('categories.show',$services->category->slug) }}" title="{{$services->category->name}}" target="_blank">{{$services->category->name}}</a></td>
            <td><a href="{{ route('services.show',$services->id) }}" title="">{{$services->title}}</a></td>
            @if(!isset($actions) || $actions === true)
                <td class=" hidden-xs ">
                @if($services->status == 'active' )
                    <span class="xxs-p-5 label label-primary"> @lang('services.active') </span>
                @else
                    <span class="xxs-p-5 label label-warning"> @lang('services.suspended') </span>
                @endif
                </td>
                <td>
                    {{Form::open(['route' => ['services.destroy', $services->id], 'method' => 'delete'])}}
                    <div class=''>
                        <a href="{{route('services.show', [$services->id])}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {{-- <a href="{{route('services.edit', [$services->id])}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> --}}
                        {{-- {{Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"])}} --}}
                    </div>
                    {{Form::close()}}
                </td>
            @else
                <td>{{$services->description}}</td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>