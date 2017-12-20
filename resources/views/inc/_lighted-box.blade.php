@php
// could be duplicated
if (!isset($block_loop_empty)):
    $block_loop_empty = Lang::get('app.No results matched with this criteria');
endif;
if (!isset($block_item)):
    $block_item = 'inc._product';
endif;
@endphp
<div class="col-xs-12 bg-light card-dp-2 xxs-mt-{{isset($mt) ? $mt : '40'}} boxed-offers offers border-radius-md clearfix">
    @if(isset($block_title))
    <div class="box-title border-bottom-solid-lightgray-1 xxs-mb-20">
        <h6 class="text-bold font-droidkufi xxs-p-20 text-darkgray">
            @if(isset($block_title_icon))<i class="display-inline-block va-top icon {{$block_title_icon}} xxs-ml-10"></i>@endif
            <sapn>{{$block_title}}</sapn>
        </h6>
    </div>
    @endif
    <div class="offers-box clearfix xxs-mt-20">
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
    <footer class="md-pagination row xxs-pt-20">
        <div class="col-xs-12">
        {!! $block_loop->links() !!}
        </div>
    </footer>
    @endif
</div>
