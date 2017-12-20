<div class="offer-card border-radius-sm col-xs-6 col-sm-6 col-md-4 flex-item xxs-mb-40">
    <div class="card-img position-relative">
        <div class="cart-actions-cover position-absolute x-left y-top z-index-top full-width full-height">
          <div class="absolute-center z-index-high text-center xxs-p-20">
            <div class="xxs-mb-10">
              <a  href="{!! route('reservations.create',[$item->id]) !!}" class="btn btn-light btn-ghost btn-sm btn-block"> حجز الان </a>
            </div>
            <div class="xxs-mb-10">
              <a href="{!! route('services.show', $item->id) !!}" class="details-btn btn btn-light btn-link no-underline btn-sm btn-block">
                <span class="display-inline-block va-top"> @lang('services.Details') </span>
                <i class="arrow material-icons Display-inline-block va-top xxs-mt-5 text-md">arrow_back</i>
              </a></div>
          </div>
          <div class="bg-dark position-absolute x-left y-top z-index-low full-width full-height opacity-5 border-radius-sm"></div>
        </div>
        <a href="{!! route('services.show', $item->id) !!}">
            <img src="{{ $item->getDefaultImage() }}" alt="{{ $item->title }}" class="img-responsive">
        </a>
    </div>
    <div class="card-meta">
        <a href="{!! route('services.show', $item->id) !!}" class="card-title btn btn-sm btn-primary btn-link"> {{ $item->title }} </a>
    </div>
</div>

