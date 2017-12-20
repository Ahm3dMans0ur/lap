<input type="hidden" class="get-product-id" value="{!! $product->id !!}">
<input type="hidden" class="likes-url" value="{!! route('products.likes') !!}">
<a href="#" class="action-like like{!! $product->id !!} {{ $class }} icon fontello-icon-thumbs-up @if($product->isLiked() > 0) is-like @endif change-like{!! $product->id !!}" like="1" data-action="like">
  <span> {{$product->getLikes()}} </span>
</a>
<a href="#" class="action-dislike dislike{!! $product->id !!} {{ $class }} icon fontello-icon-thumbs-down-alt @if($product->isDisLiked() > 0) is-dislike @endif change-dislike{!! $product->id !!}" like="0" data-action="dislike">
  <span> {{$product->getDisLikes()}} </span>
</a>
<a class="action-views icon icon-eye" data-action="views"> <span class="{{ (isset($pull))?  $pull: 'pull-right' }}"> {{$product->getviews()}} </span> </a>