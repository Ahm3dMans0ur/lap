<div class="col-xs-12 bg-light card-dp-1 border-radius-sm xxs-mt-40 xxs-p-0">
    @if(isset($block_title))
    <div class="clearfix border-bottom-solid-lightgray-1 xxs-mb-10 xxs-p-0 position-relative">
        <h6 class="text-bold font-droidkufi xxs-pr-20 xxs-p-10 text-darkgray"> {{$block_title}} </h6>
    </div>
    @endif
    <div class="xxs-mt-20 xxs-mb-20">
    @if(isset($products) && count($products) > 0)
        @foreach($products as $product)
        <a href="{!! route('products.show', $product->id) !!}" class="display-block font-jfflat xxs-mb-15 clearfix text-primary">
            <span class="square-sm pull-right text-light bg-gray xxs-mr-20 xxs-mt-2 border-radius-round text-sm text-center line-height-lg">
                {{$product->total_likes}}
            </span>
            <span class="pull-right xxs-mr-10 truncate-145"> {{ $product->title }} </span>
            <span class="pull-left text-gray xxs-mt-5 xxs-ml-20 text-sm text-bold"> {{ $product->price }} {{config('app.currency')}} </span>
        </a>
        @endforeach
    @else
        @include('flash::_message',[
          'class' => '',
          'message' => Lang::get('products.No Products matched with this criteria')
        ])
    @endif
    </div>
</div>