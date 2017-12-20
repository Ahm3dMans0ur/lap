<div class="cart-actions-cover position-absolute x-left y-top z-index-top full-width full-height">
  <div class="absolute-center z-index-high text-center xxs-p-20">
    @if($product->purchasable)
    <div class="xxs-mb-10">
      <a data-action="add_to_cart" href="{!! route('cart.add',[$product->id]) !!}" class="btn btn-light btn-ghost btn-sm btn-block"> شراء </a>
    </div>
    @endif
    <div class="xxs-mb-10">
      <a href="{!! route('products.show', $product->id) !!}" class="details-btn btn btn-light btn-link no-underline btn-sm btn-block">
      	<span class="display-inline-block va-top"> @lang('products.Details') </span>
      	<i class="arrow material-icons Display-inline-block va-top xxs-mt-5 text-md">arrow_back</i>
      </a></div>
  </div>
  <div class="bg-dark position-absolute x-left y-top z-index-low full-width full-height opacity-5 border-radius-sm"></div>
</div>