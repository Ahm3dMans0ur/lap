<div class="col-xs-12 col-sm-6 col-md-4 xxs-mb-40 flex-item">
    <div class="offers-box stores-box bg-light border-radius-sm card-dp-1 clearfix">
        <div class="clearfix">
            <div class="offer z_store">
                <div class="card-img z_store-img-wrapper">
                    <a class="display-block" href="{{route('stores.show',$item['slug'])}}" class="col-xs-12 xxs-p-5 bg-light card-dp-1">
                        <img src="{{$item->getImage()}}" alt="{{$item['name']}}" class="full-width img-responsive margin-auto">
                        <span class="z_store-owner" style="background-image:url({{$item->user->getImage()}})"></span>
                    </a>
                </div>
                <div class="card-meta xxs-p-10 xxs-pr-10">
                    <h4 class="xxs-mt-5 xxs-p-0">
                        <a href="{{route('stores.show',$item['slug'])}}" class="text-primary text-bold font-jfflat">
                            {{ str_limit($item['name'], 30, '...') }}
                        </a>
                    </h4>
                    <p class="xxs-mt-10 font-droidkufi text-sm">
                        {{ str_limit($item['description'], 120, '...') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>