<div class="boxed-offers rank-silver offers xxs-mt-40">
    <div class="container">
        <div class="row flex-cols">
            @if(isset($block_loop) && count($block_loop) > 0)
                @foreach($block_loop as $item)
                    @include($block_item)
                @endforeach
            @else
                @include('flash::_message',[
                  'class' => '',
                  'message' => $block_loop_empty
                ])
            @endif
        </div>
        @if(method_exists($block_loop,'links'))
            <footer class="md-pagination row">
                <div class="col-xs-12">
                    {!! $block_loop->links() !!}
                </div>
            </footer>
        @endif
    </div>
</div>