@foreach($list_categories as $mainCategory)
    @if(isset($category) && $category->name != $mainCategory['name'])
        @continue
    @endif
    <div class="col-xs-12 bg-light card-dp-1 border-radius-sm xxs-mt-40 xxs-p-0 z_side-cat-item z_child-hide">
        <div class="clearfix border-bottom-solid-lightgray-1 xxs-mb-10 xxs-p-0 position-relative">
            <h6 class="text-bold font-droidkufi xxs-pr-20 xxs-p-10 text-darkgray z_side-cat-item-title"> {{$mainCategory['name']}} </h6>
        </div>
        <div class="xxs-mt-20 xxs-mb-20 z_side-cat-childs">
            @if($mainCategory['childs'])
                @foreach($mainCategory['childs'] as $chiled_category)
                    <a href="{{route('categories.show',$chiled_category['slug'])}}"
                       class="display-block font-jfflat xxs-mb-15 clearfix text-primary @if(isset($category) && $category['id'] == $chiled_category['id']) text-muted @endif">
                        @if($chiled_category->products)<span
                                class="square-sm pull-right text-light bg-gray xxs-mr-20 xxs-mt-2 border-radius-round text-sm text-center line-height-lg"> {{$chiled_category->products->count()}} </span>@endif
                        <span class="pull-right xxs-mr-10"> @if(isset($category) && $category['id'] == $chiled_category['id'])
                                >> @endif{{$chiled_category['name']}} </span>
                    </a>
                @endforeach
            @endif
        </div>
    </div>
@endforeach