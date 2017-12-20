<div class="col-xs-12 bg-light card-dp-1 border-radius-sm xxs-mt-40 xxs-p-0">

    <div class="xxs-mt-20 xxs-mb-20 @if(isset($blocks) && $blocks == true) xxs-pt-20  xxs-pl-20 xxs-pr-30 @endif">
        @foreach($tags as $tag)

            <a href="{{route('tags.show',$tag->slug)}}"
               class="{{(isset($blocks) && $blocks == true) ? 'display-inline-block va-top xxs-p-10 border-radius-sm border-all-solid-midgray-1 xxs-ml-10 xxs-mb-10' : 'display-block'}} font-jfflat xxs-mb-15 clearfix text-primary">
                @if($tag->products)
                    <span class="square-sm pull-right text-light bg-gray xxs-mt-2 border-radius-round text-sm text-center line-height-lg @if(isset($blocks) && $blocks == true) xxs-mr-2 @else xxs-mr-20 @endif"> {{$tag->products->count()}} </span>
                @endif
                <span class="pull-right xxs-mr-10 xxs-ml-5"> {{ $tag->name }} </span>
            </a>

        @endforeach
    </div>
</div>
