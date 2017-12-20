@section('css')
    <style>
        .invisible {
            visibility: hidden;
            display: none;
        }
    </style>
@append
<div class="col-xs-12 col-md-12 bg-light card-dp-4 border-radius-md xxs-pt-40 xxs-mt-40 xxs-mb-40 xxs-p-0">

    <div class="col-xs-12 col-md-6 xxs-mb-40 xxs-pr-40">
        <div id="productThumbs" class="col-xs-12 col-sm-3 col-md-2 xxs-p-0">
            <div class="visible-xs thumbs-hr text-center xxs-mb-20 border-bottom-dashed-midgray-1 overflow-hidden"
                 data-nicescroll="hr">
                <div class="hr-auto-width text-right" style="width: 2000px;">
                    @foreach($product->images as $k => $image)
                        <a href="{{ $image->getImage('large') }}"
                           class="display-inline-block va-top xxs-mb-20 xxs-mr-20 xxs-ml-20 square-xxl overflow-hidden {{ $k > 0 ? 'opacity-3' : ''}}"
                           data-zoom="{{ $image->getImage('large') }}">
                            <img class="img-responsive border-radius-sm" src="{{ $image->getImage('medium') }}"
                                 alt="{{ $product->title }}">
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="hidden-xs thumbs-vr" data-nicescroll="vr">
                @foreach($product->images as $k => $image)
                    <a id="{{$k}}" href="{{ $image->getImage('large') }}"
                       class="display-block xxs-mb-20 overflow-hidden {{ $k > 0 ? 'opacity-3' : ''}}">
                        <img class="img-responsive display-block full-width" src="{{ $image->getImage('medium') }}"
                             alt="{{ $product->title }}">
                    </a>
                @endforeach
            </div>
        </div>
        <div id="productImages" class="col-xs-12 col-sm-9 col-md-10">
            <div class="pimg">
                @foreach($product->images as $k => $image)

                    <a href="{{ $image->getImage('large') }}" id="{{$k}}"
                       class="display-block overflow-hidden position-relative z-index-low {{ $k > 0 ? 'invisible' : ''}} "
                       data-lightbox="product-images">
                    <span data-fullimage=""
                          class="absolute-center z-index-high square-xl border-radius-round card-dp-2 bg-light text-darkgray text-center cursor-pointer zoomin transition">
                        <i class="material-icons display-block margin-auto xxs-pt-15">zoom_out_map</i>
                    </span>
                        <img class="img-responsive full-width oimg" src="{{ $image->getImage('large') }}"
                             alt="{{ $product->title }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-xs-12 visible-xs xxs-mb-20">
        <hr>
    </div>

    <div class="col-xs-12 col-md-6 xxs-mb-40 xxs-pl-40">
        <div class="clearfix">
            <div class="clearfix">
                <div class="product-actions pull-left text-left">
                    <input type="hidden" class="get-product-id" value="{!! $product->id !!}">
                    <input type="hidden" class="likes-url" value="{!! route('products.likes') !!}">
                    <input type="hidden" class="favorites-url" value="{!! route('products.favorite') !!}">

                    @if(auth()->user())
                        <div class="pull-left border-right-solid-lightgray-1 xxs-pr-15 xxs-pt-5 xxs-mr-15"
                             data-toggle="tooltip" data-placement="right" title="اضافة الى المفضلة">
                            <a href="#"
                               class="pull-left action-favorite {!! (auth()->user()->favorites()->where('product_id',$product->id)->count() > 0)? 'is-favorite' : 'favorite' !!} xxs-mb-10 icon icon-star"></a>
                        </div>
                    @endif

                    <div class="pull-left xxs-pt-5">
                        <a href="#"
                           class="pull-left action-views views  xxs-mb-10 icon icon-eye"><span> {!! $product->getviews() !!} </span></a>
                        @if($product->isLiked() > 0)
                            <a href="#"
                               class="pull-left action-like like{!! $product->id !!} xxs-mb-10 xxs-mr-20 icon icon-like is-like change-like{!! $product->id !!}"
                               like='1'
                               data-action="like"><span> {!! $product->getLikes() !!} </span></a>
                        @else
                            <a href="#"
                               class="pull-left action-like like{!! $product->id !!} xxs-mb-10 xxs-mr-20 icon fontello-icon-thumbs-up change-like{!! $product->id !!}"
                               like='1'
                               data-action="like"><span> {!! $product->getLikes() !!} </span></a>
                        @endif
                        @if($product->isDisLiked() > 0)
                            <a href="#"
                               class="pull-left action-dislike dislike{!! $product->id !!} xxs-mb-10 icon icon-dislike is-dislike change-dislike{!! $product->id !!}"
                               like="0"
                               data-action="dislike"><span> {!! $product->getDisLikes() !!} </span></a>
                        @else
                            <a href="#"
                               class="pull-left action-dislike dislike{!! $product->id !!} xxs-mb-10 icon fontello-icon-thumbs-down-alt  change-dislike{!! $product->id !!}"
                               like="0"
                               data-action="dislike"><span> {!! $product->getDisLikes() !!} </span></a>
                        @endif

                    </div>
                </div>
                {{-- {{Breadcrumbs::setView('blocks.__breadcrumbs-product')}}
                {!! Breadcrumbs::render('product', $product) !!} --}}
            </div>
            <div class="product-meta xxs-mt-20">
                <h1 class="product-title xxs-mt-10 text-right text-bold text-lg"><a
                            class="font-jfflat"> {{ $product->title }}  </a></h1>
                <div class="meta-list xxs-mt-40">

                    <div class="list-item">
                        <span class="meta-label"> البائع </span>
                        <span class="meta-value ">

                                <a href="{{route('user.profile',$product->owner->username)}}"
                                   class="card-title btn btn-sm btn-primary btn-link full-underline xxs-pr-0 xxs-pl-0">
                                    </strong>{{ $product->owner->username.'@' }}</strong>
                                </a>

                        </span>
                    </div>

                    <div class="list-item">
                        <span class="meta-label"> السعر </span>
                        @if($product->offer && $product->offer->is_active && $product->offer->isLaunched())
                            <span class="meta-value meta-price"> <strike><strong>  {{ $product->price }} </strong>  ريال</strike>  </span>
                            /
                            <span class="meta-value meta-price"> <strong> {{ $product->offer->new_price }} </strong> ريال </span>
                        @else
                            <span class="meta-value meta-price"> <strong> {{ $product->price }} </strong> ريال </span>
                        @endif
                    </div>
                    @if($product->offer && $product->offer->is_active && $product->offer->isLaunched())
                        <div class="list-item">
                            <span class="meta-label"> خصم </span>
                            <span class="meta-value meta-price"> <strong> {{ $product->offer->discount }} % </strong> حتى {{ $product->offer->end_date }} </span>
                        </div>
                    @endif
                    <div class="list-item">
                        <span class="meta-label"> العدد المتوفر </span>
                        <span class="meta-value"> {{$product->quantity}} </span>
                    </div>
                    @if($product->country_id > 0)

                        <div class="list-item">
                            <span class="meta-label"> العنوان </span>
                            <span class="meta-value"> {{$product->country}} / {{$product->state}}
                                / {{$product->city}}</span>
                        </div>
                    @endif
                    @if(count($product->tags) > 0)
                        <div class="list-item">
                            <span class="meta-label"> وسم </span>
                            <span class="meta-value">
                        @foreach($product->tags as $tag)
                                    {!! Html::link(route('tags.show',$tag->slug),$tag->name) !!} ,
                                @endforeach
                        </span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="product-btns xxs-mt-40">
                @if(Auth::user() && Auth::user()->id == $product->user_id )
                    <a href="{{route('products.edit',$product->id)}}"
                       class="btn btn-sm btn-ghost xxs-mt-5 xxs-pr-15 xxs-pl-15">
                        تعديل
                    </a>

                    <a href="{{route('products.destroy',$product->id)}}" onclick="return confirm('Are you sure?')"
                       class="btn btn-sm text-danger xxs-mt-5 xxs-pr-15 xxs-pl-15">
                        حذف
                    </a>
                @else
                    <a href="{!! route('messages.send_view', $product->user_id) !!}"
                       class="btn btn-lg btn-primary col-md-4">@lang('products.PM seller')</a>
                    @if(!$product->isAuction())
                        <a id="add_to_cart" href="{!! route('cart.add',[$product->id]) !!}"
                           class="btn btn-lg btn-primary btn-ghost col-md-4">@lang('products.Add to cart')</a>
                    @endif
                @endif
            </div>
        </div>
    </div>
    <div class="col-xs-12 product-tabs xxs-p-0">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" @if(!$product->isAuction()) class="active" @endif>
                <a href="#productSpecs" aria-controls="productSpecs" role="tab" data-toggle="tab"> المواصفات </a>
            </li>
            @if($product->address)
            <li role="presentation" id="proMap">
                <a href="#productMap" id="loadAddress" aria-controls="productMap" role="tab"> الموقع(خريطة جوجل
                    ماب) </a>
            </li>
            @endif
            <li role="presentation">
                <a href="#productShipment" aria-controls="productShipment" role="tab" data-toggle="tab"> الشحن
                    والتسليم </a>
            </li>

            @if($product->isAuction())
                <li role="presentation" class="active">
                    <a href="#productBids" aria-controls="productBids" role="tab" data-toggle="tab"> المزايدات </a>
                </li>
            @endif
            @if(Auth::user() && Auth::user()->id != $product->user_id )
                <li role="presentation">
                    <a href="#reportReview" aria-controls="reportReview" role="tab"
                       data-toggle="tab"> @lang('messages.report review')</a>
                </li>
            @endif
        </ul>
        <div class="col-xs-12 col-md-10 col-md-pull-1">
            <div class="tab-content">

                <div id="productShipment" class="tab-pane" role="tabpanel">
                    <ul class="product-specs">
                        <li>
                            <span class="specs-label"> @lang('products.Delivery Options') </span>
                            <span class="specs-value">
                                <p>{{ $product->delivery_options }}</p>
                            </span>
                        </li>
                    </ul>
                </div>
                <div id="productSpecs" class="tab-pane @if(!$product->isAuction()) active @endif" role="tabpanel">
                    <ul class="product-specs">
                        <li>
                            <span class="specs-label"> @lang('products.Description') </span>
                            <span class="specs-value">
                                <p class="xxs-mb-0">{{ $product->description }}</p>
                            </span>
                        </li>

                        <li>
                            <span class="specs-label"> @lang('products.recover') </span>
                            <span class="specs-value">
                                <p class="xxs-mb-0">
                                   {{ $product->recover? 'نعم':'لا' }}
                                </p>
                            </span>
                        </li>
                        @if (count($product->productSpecs) > 0)
                            @foreach ($product->productSpecs as $product_spec)
                                <li>
                                    @if (View::exists('products.fields-display.'.$product_spec['key']))
                                        @include('products.fields-display.'.$product_spec['key'])
                                    @else
                                        @includeIf('products.fields-display.'.$product_spec['type'])
                                    @endif
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                @if($product->address)
                <div id="productMap" class="tab-pane" role="tabpanel">
                    <ul class="product-specs">
                        <li>
                            <span class="specs-label"> @lang('products.location') </span>
                            <span class="specs-value " style="width: 100%;">
                                    <h4>{{ $product->address }}</h4>
                                    <div id="us2" style="width: 100%; height: 400px;"></div>
                                </span>
                        </li>
                    </ul>
                </div>
                @endif
                @if($product->isAuction())
                    @include('products._bids-list')
                @endif
                @if(Auth::user() && Auth::user()->id != $product->user_id )
                    <div id="reportReview" class="tab-pane" role="tabpanel">
                        {!! Form::open(['route'=>'product.add_review', 'class'=>'md-form form-horizontal xxs-p-20 xxs-pt-40 xxs-pb-40']) !!}
                        {!! Form::hidden('product_id',$product->id) !!}
                        <div class="form-group clearfix">
                            <label for="reportComment"
                                   class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-100 xxs-mt-15"> @lang('app.Review comment') </label>
                            <div class="col-xs-10 col-sm-7">
                                <div>
                                    <textarea id="reportComment" name="comment" rows="5"
                                              class="form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0"></textarea>
                                </div>
                                {!! Form::submit(Lang::get('app.Send'),['class'=>'btn btn-primary xxs-mt-15']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@section('scripts')
    <script type="text/javascript"
            src='https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('shari.MAP_API_KEY') }}&libraries=places"></script>
    <!-- [Cart.js] Will be included in all pages.. -->
    <!-- <script src="{!! asset('/frontend/scripts/products/cart.js') !!}"></script> -->

    {{--mapper--}}
    {{-- async defer --}}

    @if($product->address)
        <script>

            $(document).on('click', '#loadAddress', function (e) {
                e.preventDefault();
                $('.active').removeClass('active');
                $('#productMap').addClass('active');
                $('#proMap').addClass('active');
//                $('.product-tabs').tabs('option','active',1);
                $('#us2').locationpicker(
                    {
                        location: {
                            latitude: "{!!  $product->lat !!}",
                            longitude: "{!! $product->lon !!}"
                        }
                    }
                );
            });

        </script>
    @endif
@append