<table class="table table-responsive" id="products-table">
    <thead>

    <th>Name</th>
    <th>Slug</th>
    <th>Active</th>
    <th>Status</th>
    <th>Actions</th>
    <th>By</th>
    </thead>
    <tbody>
    @foreach($tags as $tag)
        <tr>

            <td>{!! Html::link(route('tags.show',$tag->slug),$tag->name) !!}</td>
            <td>{{ $tag->slug }}</td>
            <td>
                {!! Form::open(['route'=>['admin.tags.changeActive', $tag->id]]) !!}
                @if($tag->is_active)
                    {!! Form::hidden('is_active',0) !!}
                    <button type="submit" class="btn btn-success">active</button>
                @else
                    {!! Form::hidden('is_active',1) !!}
                    <button type="submit" class="btn btn-danger">unActive</button>
                @endif
                {!! Form::close() !!}
            </td>
            <td>
                {!! Form::open(['id'=>'change-status','route'=>['admin.tags.changeStatus', $tag->id]]) !!}
                {!! Form::select('status',['review'=>'review','accepted'=>'accepted'],$tag->status,['class'=>'submit form-control' ]) !!}
                {!! Form::close() !!}
            </td>
            <td>
                {!! Form::open(['route' => ['admin.tags.destroy', $tag->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    {{--edit--}}
                    <span class='btn btn-default btn-xs editTag' update_route="{!! route('admin.tags.update',$tag->id) !!}" route="{!! route('admin.tags.getTagInfo',$tag->id) !!}"  ><i class="glyphicon glyphicon-edit"></i></span>
                    {{--delete--}}
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
            <td>
                @if($tag->user_id)
                    {!! $tag->user()->first()->name !!}
                @endif
            </td>

        </tr>
    @endforeach
    </tbody>
</table>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['class' => 'updateForm md-form row','method'=>'put']) !!}
                    @include('blocks._tag_fields')
                    <hr class="xxs-mt-80 xxs-mb-40" />
                    <div class="form-group form-submit xxs-pl-40 xxs-pb-20 text-left">
                        {!! Form::submit('Save', ['class' => 'btn btn-primary border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </div>

@section('scripts')
<script>
    $(document).on('change', '.submit', function () {
        $(this).parents('#change-status').submit();
    });

    $(document).on('click','.editTag',function(){
        var route = $(this).attr('route');
        var update_route = $(this).attr('update_route');
        $.ajax({
            url:route,
            type:'get',
            success: function(data){

                if(data != 0){
                    console.log(data.name);
                    $('.tag_name').val(data.name);
                    $('.tag_slug').val(data.slug);
                    $('.updateForm').attr('action',update_route);
                    $('#myModal').modal();
                }
            }
        });

    });
</script>
@append