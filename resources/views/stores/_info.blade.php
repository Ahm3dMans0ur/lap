<div id="storeAbout" class="tab-pane col-xs-12 col-sm-8 col-md-9 position-relative z-index-high xxs-pt-2" role="tabpanel">
    <div class="col-xs-12 bg-light card-dp-2 xxs-mt-40 boxed-offers offers border-radius-md clearfix xxs-p-0">
        <div class="col-xs-12 xxs-p-20 bg-primary border-radius-md-top">
            <h2 class="xxs-p-0 text-light text-bold font-jfflat">
                {{$store->name}}
            </h2>
            <p class="font-droidkufi">{{ $store->description }}</p>
            <p class="xxs-mt-20 text-sm">مشترك {{\Carbon\Carbon::parse($store->created_at)->diffForHumans()}}</p>
        </div>
        <div class="col-xs-12 xxs-mt-20 xxs-p-20">
            <ul class="thumbnails list-unstyled text-center xxs-pr-0">
                <li class="col-xs-12 col-sm-12 col-md-4">
                    <div class="thumbnail xxs-p-0">
                        <div class="caption position-relative">
                            <h3 class="text-xxxl xxs-mt-40 position-relative z-index-high">{{ $allLikes }}</h3>
                            <h2 class="border-top-solid-midgray-1 text-xl xxs-mt-40 xxs-pt-20"><span>@lang('messages.all likes')</span></h2>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-12 col-md-4">
                    <div class="thumbnail xxs-p-0">
                        <div class="caption position-relative">
                            <h3 class="text-xxxl xxs-mt-40 position-relative z-index-high">{{ $allViews }}</h3>
                            <h2 class="border-top-solid-midgray-1 text-xl xxs-mt-40 xxs-pt-20"><span>@lang('messages.all views')</span></h2>
                        </div>
                    </div>
                </li>
                <li class="col-xs-12 col-sm-12 col-md-4">
                    <div class="thumbnail xxs-p-0">
                        <div class="caption position-relative">
                            <h3 class="text-xxxl xxs-mt-40 position-relative z-index-high">{{ $allFollowers }}</h3>
                            <h2 class="border-top-solid-midgray-1 text-xl xxs-mt-40 xxs-pt-20"><span>@lang('messages.all followers')</span></h2>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>