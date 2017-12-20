{{-- this block shared between stores(home page and products page) and normal profile --}}
<div id="{{isset($custom_id) ? $custom_id : 'storeMain'}}" class="tab-pane active col-xs-12 col-sm-8 col-md-9 position-relative z-index-high xxs-mt-20 md-mt-40">
    @if (isset($new_services) && (is_array($new_services) || is_object($new_services)) && count($new_services) > 0)
    <div class="col-xs-12 bg-light card-dp-2 xxs-mt-40 boxed-offers offers border-radius-md clearfix">
        <div class="box-title border-bottom-solid-lightgray-1 xxs-mb-20">
            <h6 class="text-bold font-droidkufi xxs-p-20 text-darkgray"> {{Lang::get('services.New Services')}} </h6>
        </div>
        <div class="offers-box clearfix xxs-mt-20 xxs-pt-20 flex-cols">
            @foreach($new_services as $service)
                @include('inc._service',['item' => $service])
            @endforeach
        </div>
    </div>
    @endif
    @if (!isset($disable_search))
    <div class="row">
        <div class="col-xs-12 xxs-mt-20">
            @include('blocks._custom-search')
        </div>
    </div>
    @endif
    @if (isset($custom_id))
        @include('inc._lighted-box',[
            'block_loop' => $full_products,
        ])
    @else
        @include('inc._lighted-box',[
            'block_title' => Lang::get('products.New Products'),
            'block_loop' => $products,
        ])
    @endif


    @if ($top_selling)
    @include('inc._lighted-box',[
        'block_title' => Lang::get('products.Top Selling'),
        'block_loop' => $top_selling,
    ])
    @endif

</div>