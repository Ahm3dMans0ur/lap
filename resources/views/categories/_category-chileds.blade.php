<div class="row xxs-mb-40 xs-text-center md-text-right">
    <div class="col-xs-6 bg-light card-dp-1 border-radius-sm xxs-mt-40 xxs-p-0">
        <div class="clearfix border-bottom-solid-lightgray-1 xxs-mb-10 xxs-p-0 position-relative">
            <h6 class="text-bold font-droidkufi xxs-pr-20 xxs-p-10 text-darkgray"> {{$category->name}} </h6>
        </div>
        <div class="xxs-mt-20 xxs-mb-20">
            @if($category->childCategories->count() > 0)
                @foreach($category->childCategories as $chiled_category)
                    <a href="{{route('categories.show',$chiled_category['slug'])}}"
                       class="display-block font-jfflat xxs-mb-15 clearfix text-primary @if(isset($category) && $category['id'] == $chiled_category['id']) text-muted @endif">
                        @if($chiled_category->products_count)
                        <span class="square-sm pull-right text-light bg-gray xxs-mr-20 xxs-mt-2 border-radius-round text-sm text-center line-height-lg"> {{$chiled_category->products_count}} </span>
                        @else
                        <span class="square-sm pull-right text-light bg-gray xxs-mr-20 xxs-mt-2 border-radius-round text-sm text-center line-height-lg"> 0 </span>
                        @endif
                        <span class="pull-right xxs-mr-10"> @if(isset($category) && $category['id'] == $chiled_category['id'])
                                >> @endif{{$chiled_category['name']}} </span>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
{{--     <div class="col-xs-6 bg-light card-dp-1 border-radius-sm xxs-mt-40 xxs-p-0">
        <div class="clearfix border-bottom-solid-lightgray-1 xxs-mb-10 xxs-p-0 position-relative">
            <h6 class="text-bold font-droidkufi xxs-pr-20 xxs-p-10 text-darkgray"> {{$category->name}} </h6>
        </div>
        <div class="xxs-mt-20 xxs-mb-20">
            @if($category->childrenProducts->count() > 0)
                @foreach($category->childrenProducts as $product)
                    <a href="{{route('categories.show',$product['slug'])}}"
                       class="display-block font-jfflat xxs-mb-15 clearfix text-primary @if(isset($category) && $category['id'] == $product['id']) text-muted @endif">
                        @if($product->products)<span
                                class="square-sm pull-right text-light bg-gray xxs-mr-20 xxs-mt-2 border-radius-round text-sm text-center line-height-lg"> {{$product->products->count()}} </span>@endif
                        <span class="pull-right xxs-mr-10"> @if(isset($category) && $category['id'] == $product['id'])
                                >> @endif{{$product['name']}} </span>
                    </a>
                @endforeach
            @else
            00000
            @endif
        </div>
    </div> --}}
</div>