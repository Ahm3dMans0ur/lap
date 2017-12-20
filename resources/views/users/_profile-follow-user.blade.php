@php
$users  = $resource->paginate($perPage = 12, $columns = ['*'], $pageName = $fragment);
@endphp
<div id="{{$fragment}}" class="tab-pane col-xs-12 col-sm-8 col-md-9 position-relative z-index-high" role="tabpanel">
    <div class="col-xs-12 bg-light card-dp-2 xxs-mt-40 boxed-offers offers border-radius-md clearfix">
        <div class="offers-box clearfix xxs-mt-20 xxs-pt-20 flex-cols">
            @if(count($users) > 0)
                @foreach($users as $user)
                    @include('blocks._users',['follower'=>$user->{$relation}])
                @endforeach
                @if(method_exists($users,'links'))
                    <footer class="md-pagination">
                        <div class="col-xs-12">
                        {!! $users->fragment($fragment)->links() !!}
                        </div>
                    </footer>
                @endif
            @else
                @include('flash::_message',[
                  'class' => '',
                  'message' => Lang::get('messages.no_data')
                ])
            @endif
        </div>
    </div>
</div>
