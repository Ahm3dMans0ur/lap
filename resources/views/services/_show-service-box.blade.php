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
                    @foreach($services->images as $k => $image)
                        <a href="{{ $image->getImage('large') }}"
                           class="display-inline-block va-top xxs-mb-20 xxs-mr-20 xxs-ml-20 square-xxl overflow-hidden {{ $k > 0 ? 'opacity-3' : ''}}"
                           data-zoom="{{ $image->getImage('large') }}">
                            <img class="img-responsive border-radius-sm" src="{{ $image->getImage('medium') }}"
                                 alt="{{ $services->title }}">
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="hidden-xs thumbs-vr" data-nicescroll="vr">
                @foreach($services->images as $k => $image)
                    <a id="{{$k}}" href="{{ $image->getImage('large') }}" class="display-block xxs-mb-20 overflow-hidden {{ $k > 0 ? 'opacity-3' : ''}}">
                        <img class="img-responsive display-block full-width" src="{{ $image->getImage('medium') }}"
                             alt="{{ $services->title }}">
                    </a>
                @endforeach
            </div>
        </div>
        <div id="productImages" class="col-xs-12 col-sm-9 col-md-10">
            <div class="pimg">
                @foreach($services->images as $k => $image)

                    <a href="{{ $image->getImage('large') }}" id="{{$k}}"
                       class="display-block overflow-hidden position-relative z-index-low {{ $k > 0 ? 'invisible' : ''}} "
                       data-lightbox="product-images">
                    <span data-fullimage=""
                          class="absolute-center z-index-high square-xl border-radius-round card-dp-2 bg-light text-darkgray text-center cursor-pointer zoomin transition">
                        <i class="material-icons display-block margin-auto xxs-pt-15">zoom_out_map</i>
                    </span>
                        <img class="img-responsive full-width oimg" src="{{ $image->getImage('large') }}"
                             alt="{{ $services->title }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-xs-12 visible-xs xxs-mb-20">
        <hr>
    </div>

    <div class="col-xs-12 col-md-6 xxs-mb-40 xxs-pl-20">
        <div class="product-meta">
            <div class="meta-list">



                <div class="list-item">
                    <span class="meta-label"> مقدم الخدمه </span>
                    <span class="meta-value ">

                                <a href="{{route('user.profile',$services->store->user->username)}}"
                                   class="card-title btn btn-sm btn-primary btn-link full-underline xxs-pr-0 xxs-pl-0">
                                    </strong>{{ $services->store->user->name }}</strong>
                                </a>

                        </span>
                </div>

                <div class="list-item">
                    <span class="meta-label"> السعر </span>
                    <span class="meta-value meta-price"> <strong> {{ $services->price }} </strong> ريال </span>
                </div>
                <div class="list-item">
                    <span class="meta-label"> الوصف </span>
                    <span class="meta-value"> {{$services->description}} </span>
                </div>
                @if($services->country_id > 0)

                    <div class="list-item">
                        <span class="meta-label"> العنوان </span>
                        <span class="meta-value"> {{$services->country}} / {{$services->state}}
                            / {{$services->city}}</span>
                    </div>
                @endif
            </div>
        </div>
        <div class="product-btns xxs-mt-40">
            @if(Auth::user() && Auth::user()->id == $services->store->user->id )
                <a href="{{route('services.edit',$services->id)}}"
                   class="btn btn-sm btn-ghost xxs-mt-5 xxs-pr-15 xxs-pl-15">
                    تعديل
                </a>

                <a href="{{route('services.destroy',$services->id)}}" onclick="return confirm('Are you sure?')"
                   class="btn btn-sm text-danger xxs-mt-5 xxs-pr-15 xxs-pl-15">
                    حذف
                </a>
            @else
                <a href="{!! route('messages.send_view', $services->store->user->id) !!}" class="btn btn-lg btn-primary col-md-4">@lang('services.SM seller')</a>
                <a href="{!! route('reservations.create',$services->id) !!}" class="btn btn-lg btn-primary btn-ghost col-md-4">
                    @lang('reservations.Book Now')
                </a>
            @endif


        </div>
    </div>
    <hr>
    @if($services->country_id > 0)
        <div id="us2" style="width: 100%; height: 400px;"></div>
    @endif
</div>
@section('scripts')
    <script type="text/javascript"
            src='https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('shari.MAP_API_KEY') }}&libraries=places"></script>
    @if($services->lat)
        <script>
            $('#us2').locationpicker(
                {
                    location: {
                        latitude: "{!!  $services->lat !!}",
                        longitude: "{!! $services->lon !!}"
                    }
                }
            );
        </script>
    @endif
@append