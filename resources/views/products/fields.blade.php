<section class="container-fluid">

    <!-- Title Field -->
    <div class="form-group xxs-pt-10 clearfix{{ $errors->has('title') ? ' has-error' : '' }}">
        {!! Form::label('title', Lang::get('products.Title'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-10']) !!}
        <div class="col-xs-10 col-sm-7">
            {!! Form::text('title', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('products.Title')]) !!}
            @if ($errors->has('title'))
                <p class="help-block">{{ $errors->first('title') }}</p>
            @else
                <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('products.Title')}}</span>
            @endif
        </div>
        <label for="title" class="col-xs-2 col-sm-1 text-right">
            @if(old('title'))
                <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('title') ? 'icon-delete' : 'icon-check'}}"></i>
            @endif
        </label>
    </div>

    <!-- Category Id Field -->
    <div class="form-group xxs-pt-10 clearfix{{ $errors->has('category_id') ? ' has-error' : '' }}">
        {!! Form::label('category_id', Lang::get('products.Category'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-30']) !!}

        <div class="col-xs-10 col-sm-7">
            {!! Form::select('category_id', collect($nested_products_categories)->splice(1),null,['class' => 'form-control input-lg text-md xxs-p-0']) !!}
            @if ($errors->has('category_id'))
                <p class="help-block">{{ $errors->first('category_id') }}</p>
            @else
                <span class="help-block text-sm line-height-xl font-droidkufi">رجاء اختيار القسم</span>
            @endif
        </div>
        <label for="category_id" class="col-xs-2 col-sm-1 text-right">
            @if(old('category_id'))
                <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('category_id') ? 'icon-delete' : 'icon-check'}}"></i>
            @endif
        </label>
    </div>

    <div class="form-group xxs-pt-10 clearfix{{ $errors->has('description') ? ' has-error' : '' }}">
        {!! Form::label('description', Lang::get('products.Description'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-60']) !!}
        <div class="col-xs-10 col-sm-7">
            {!! Form::textarea('description', null, ['rows' => 2,'class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0','placeholder'=>Lang::get('products.Description')]) !!}
            @if ($errors->has('description'))
                <p class="help-block">{{ $errors->first('description') }}</p>
            @else
                <span class="help-block text-sm line-height-xl font-droidkufi"> قم بكتابة وصف المنتج </span>
            @endif
        </div>
        <label for="description" class="col-xs-2 col-sm-1 text-right">
            @if(old('description'))
                <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('description') ? 'icon-delete' : 'icon-check'}}"></i>
            @endif
        </label>
    </div>

    <div class="form-group xxs-pt-10 clearfix select2-md">
        <label for="tag_list"
               class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> @lang('products.tags') </label>
        <div class="col-xs-10 col-sm-7">
            @if(isset($tags) && isset($choosen_tags))
                {!! Form::select('tags[]', $tags, $choosen_tags, ['multiple','id'=>'tag_list','class' => 'form-control text-right lang-ltr']) !!}
            @else
                {!! Form::select('tags[]', [], null, ['multiple','id'=>'tag_list','class' => 'form-control text-right lang-ltr']) !!}
            @endif
        </div>
    </div>

    <div class="clearfix">
        <!-- <hr class="xxs-mt-40 xxs-mb-10"> -->
    </div>

    <div claass="row clearfix xxs-mb-40">
        <div class="clearfix col-xs-12 col-md-6 md-pl-0 md-pr-0 xxs-mb-40">
            <div class="form-group xxs-pt-10 clearfix{{ $errors->has('price') ? ' has-error' : '' }}">
                {!! Form::label('price', Lang::get('products.Price'),['class' => 'col-xs-12 col-sm-6 xs-text-right sm-text-left xxs-mt-2 xxs-pt-10']) !!}
                <div class="col-xs-12 col-sm-6">
                    {!! Form::text('price', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('products.Price'), 'step' => '9', 'min' => '1']) !!}
                    @if ($errors->has('price')) <p class="help-block">{{ $errors->first('price') }}</p> @endif
                </div>
            </div>
        </div>
        <div class="clearfix col-xs-12 col-md-6 md-pr-0 xxs-mb-40">
            <div class="form-group xxs-pt-10 clearfix{{ $errors->has('quantity') ? ' has-error' : '' }}">
                {!! Form::label('quantity', Lang::get('products.Quantity'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-10']) !!}
                <div class="col-xs-12 col-sm-6 col-md-4 md-pl-0">
                    {!! Form::number('quantity', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=> '000']) !!}
                    @if ($errors->has('quantity')) <p class="help-block">{{ $errors->first('quantity') }}</p> @endif
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>


    <div class="clearfix">
        <hr class="xxs-mt-10 xxs-mb-10">
    </div>


    {{-- Add as Auction --}}
    @if(!isset($product))
        <div class="form-group clearfix">
            <div class="col-xs-2 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20">
                <label for="is_auction"
                       class="display-inline-block va-top text-primary text-xxl material-icons cursor-pointer">gavel</label>
            </div>
            <div class="checkbox col-xs-10 col-sm-4">
                <label class="xxs-pt-15">
                    {!! Form::checkbox('is_auction', 'yes',false,['id' => 'is_auction']) !!}
                    <span class="display-inline-block va-top"> @lang('products.Show as action') </span>
                </label>
            </div>
        </div>

        <div class="form-group xxs-pb-20 xxs-pt-20 clearfix {{ $errors->has('auction_end') ? ' has-error' : '' }} auction_end_container hidden">
            {!! Form::label('auction_end', Lang::get('products.Auction end date'),[ 'class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-10']) !!}
            <div class="col-xs-10 col-sm-7 position-relative">
                <label for="auction_end"
                       class="icon-calendar text-lg text-primary position-absolute z-index-medium xxs-pt-10 xxs-pr-5 cursor-pointer"></label>
                @if ($errors->has('auction_end')) <p class="help-block">{{ $errors->first('auction_end') }}</p> @endif
                {!! Form::text('auction_end', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-40 text-right lang-ltr position-relative z-index-low ','placeholder'=>\Carbon\Carbon::now()->addDay(5)]) !!}
            </div>
        </div>
    @endif


    <div class="clearfix">
        <hr class="xxs-mt-10 xxs-mb-10">
    </div>


    <div class="form-group xxs-pt-10 clearfix{{ $errors->has('image') ? ' has-error' : '' }}">
        <label for="image"
               class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-10"> @lang('products.Image') </label>
        <div class="col-xs-12 col-sm-7">
            @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
            {!! Form::mdfile('image[]', ['multiple'=> true, 'class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr'] ) !!}
            <span class="help-block text-sm line-height-xl font-droidkufi">@lang('products.Image Note')</span>
        </div>
        <label for="image" class="col-xs-2 col-sm-1 text-right">
            @if(old('image'))
                <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('image') ? 'icon-delete' : 'icon-check'}}"></i>
            @endif
        </label>

        <!-- images -->
        @if(isset($product) && $product->images->count() > 0)
            @foreach($product->images as $productImage)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="#" target="_blank">
                            <img src="{{$productImage->getImage('medium')}}" alt="{{$productImage->name}}"
                                 style="width:100%;max-height: 200px;">
                            <div class="caption">
                                <p>{{$productImage->name}}</p>
                                <p>
                                    <a href="{{ route('products.destroyFile',[$product->id,$productImage->id]) }}">[@lang('app.Delete')
                                        ]</a></p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>


    <div class="clearfix">
        <hr class="xxs-mt-30 xxs-mb-10">
    </div>


    <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
        <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-40 xxs-m-0 border-bottom-solid-midgray-1">
            <i class="display-inline-block va-top icon icon-book-open xxs-ml-10"></i>
            <span> العنوان و التوصيل </span>
        </h5>
    </div>

    <!-- Delivery Options Field -->
    <div class="form-group xxs-pt-10 clearfix{{ $errors->has('delivery_options') ? ' has-error' : '' }}">
        {!! Form::label('delivery_options', Lang::get('products.Delivery Options'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
        <div class="col-xs-10 col-sm-7">
            @if ($errors->has('delivery_options')) <p
                    class="help-block">{{ $errors->first('delivery_options') }}</p> @endif
            {!! Form::textarea('delivery_options', null, ['rows' => 2,'class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0','placeholder'=>Lang::get('products.Delivery Options')]) !!}
            <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('products.Delivery Options help')}}</span>
        </div>
    </div>


    <div class="clearfix">
        <hr class="xxs-mt-10 xxs-mb-10">
    </div>


    {{-- recover --}}
    <div class="form-group clearfix">
        <div class="col-xs-2 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20">
            <label for="recover"
                   class="display-inline-block va-top text-primary text-xxl material-icons cursor-pointer">gavel</label>
        </div>
        <div class="checkbox col-xs-10 col-sm-4">
            <label class="xxs-pt-15">
                @if(isset($product) && $product->recover)
                    {!! Form::checkbox('recover', true,true,['id' => 'recover']) !!}
                @else
                    {!! Form::checkbox('recover', true,false,['id' => 'recover']) !!}
                @endif
                <span class="display-inline-block va-top"> @lang('products.recover') </span>
            </label>
        </div>
    </div>


    <div class="clearfix">
        <hr class="xxs-mt-10 xxs-mb-10">
    </div>


{{ Form::hidden('url',url('/'),['id'=>'url']) }}
<input type="hidden" name="current_country" value="@if(old('country_id')){{old('country_id')}}@elseif(isset($product) && $product->country_id){{$product->country_id}}@endif">
<input type="hidden" name="current_state" value="@if(old('state_id')){{old('state_id')}}@elseif(isset($product) && $product->state_id){{$product->state_id}}@endif">
<input type="hidden" name="current_city" value="@if(old('city_id')){{old('city_id')}}@elseif(isset($product) && $product->city_id){{$product->city_id}}@endif">

 @include("blocks.__geo")


    {{--add location--}}
    <div class="form-group clearfix">
        <div class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"></div>
        <div class="checkbox col-xs-12 col-sm-4">
            <label>
                @if(isset($product) && $product->address)
                    {!! Form::checkbox('location', 'yes',['checked'],['id' => 'location']) !!}
                @else
                    {!! Form::checkbox('location', 'yes',false,['id' => 'location']) !!}
                @endif
                <span class="display-inline-block va-top"> @lang('products.add location') </span>

            </label>
        </div>
    </div>

    <!-- address Field -->
    <div class="form-group xxs-pt-10 clearfix map">
        {!! Form::label('address', Lang::get('products.address'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
        <div class="col-xs-12 col-sm-12 col-md-7">
            {!! Form::text('address', null, ['id'=>'us2-address','class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('products.address')]) !!}
            <span class="help-block text-sm line-height-xl font-droidkufi">
            <div id="us2" style="width: 100%; height: 350px;"></div>
        </span>
        </div>
        <label for="address" class="col-xs-2 col-sm-1 text-right">
            @if(old('address'))
                <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('address') ? 'icon-delete' : 'icon-check'}}"></i>
            @endif
        </label>
    </div>
    {!! Form::hidden('lat',null,['id'=>'us2-lat']) !!}
    {!! Form::hidden('lon',null,['id'=>'us2-lon']) !!}

    <div id="specs_main_container" style="display: none">
        <div class="form-group-title border-bottom-solid-lightgray-1 clearfix">
            <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-40 xxs-m-0 border-bottom-solid-midgray-1">
                <i class="display-inline-block va-top icon icon-book-open xxs-ml-10"></i>
                <span> @lang('products.Extra information :') </span>
            </h5>
        </div>
        <div id="specs_container"></div>
    </div>

</section>


@section('scripts')
    <script type="text/javascript"
            src='https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('shari.MAP_API_KEY') }}&libraries=places"></script>
    {{-- async defer --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/i18n/ar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
    <script src="{!! asset('/frontend/scripts/products/geo.js') !!}"></script>
    <script>
        $('#tag_list').select2({
            width: '100%',
            tags: true,
            dir: 'rtl',
            language: 'ar',
            placeholder: "@lang('app.Choose tags...')",
            minimumInputLength: 2,
            ajax: {
                url: '{!! route('tags.find') !!}',
                dataType: 'json',
                data: function (params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    </script>

    {{--mapper--}}
    <script>

        function getGeo(loadMap) {
            var lat = 24.7255553;
            var lon = 46.5423373;
            @if(isset($product) && $product->lat && $product->lon)
                lat = "{!! $product->lat !!}";
            lon = "{!! $product->lon !!}";
            loadMap(lat, lon);
            @else
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(success, fail)
                function success(position) {

                    lat = position.coords.latitude;
                    lon = position.coords.longitude;
                    loadMap(lat, lon);

                }

                function fail() {
                    loadMap(lat, lon);
                }
            }
            else {
                loadMap(lat, lon);
            }


            @endif

        }
        function loadMap(lat, lon) {

            $('#us2').locationpicker(
                {
                    location: {
                        latitude: lat,
                        longitude: lon
                    },
                    locationName: "",
                    radius: 10,
                    inputBinding: {
                        latitudeInput: $('#us2-lat'),
                        longitudeInput: $('#us2-lon'),
                        radiusInput: null,
                        locationNameInput: $('#us2-address')
                    },
                    enableAutocomplete: true,
                }
            );
        }
    </script>

    <script>
        // on change location display map
        $(document).on('change', '#location', function () {
            if ($(this).is(':checked')) {
                $('.map').removeClass('hidden');
                getGeo(loadMap);
            }
            else {
                $('.map').addClass('hidden');
            }
        });
        // on change auction display auction date
        $(document).on('change', '#is_auction', function () {

            if ($(this).is(':checked')) {
                $('.auction_end_container').removeClass('hidden');
            }
            else {
                $('.auction_end_container').addClass('hidden');
            }
        });
        $(document).ready(function (e) {
            // init date picker
            $('#auction_end').datetimepicker({
                // todayBtn: false,
                maxDate: '+1970/01/30',
                defaultDate: '+1970/01/06',
                minDate: '+1970/01/02',
                format: 'Y-m-d H:i:s',
                closeOnDateSelect: true
            });
            // check location visibility status
            if (!$('#is_auction').is(':checked')) {
                $('.auction_end_container').addClass('hidden');
            }
            else {
                $('.auction_end_container').removeClass('hidden');
            }
            // check map visibility status
            if (!$('#location').is(':checked')) {
                $('.map').addClass('hidden');
            }
            else {
                getGeo(loadMap);
            }
            // load specs
            var specs_main_container = $('#specs_main_container');
            var specs_conatiner = $('#specs_container');

            function loadSpecs(categorey_id) {
                $.ajax({
                    url: "/categories/specs/" + categorey_id,
                    method: 'get',
                    success: function (data) {
                        if (data != '') {
                            specs_main_container.show();
                            specs_conatiner.html(data);
                            jscolor.installByClassName("jscolor");
                        }
                        else {
                            specs_main_container.hide();
                            specs_conatiner.html('');
                        }
                    }, error: function () {
                        specs_main_container.hide();
                        specs_conatiner.html('');
                    }
                });
            }

            function loadSpecsProduct(product_id) {
                $.ajax({
                    url: "/categories/specs_product/" + product_id,
                    method: 'get',
                    success: function (data) {
                        if (data == 'not_authorized') {
                            swal({
                                title: 'خطأ',
                                text: 'عفواً غير مسموح لك بإجراء هذه العمليه',
                                type: 'error',
                                timer: 3000,
                                showCancelButton: false,
                                showConfirmButton: false,
                                closeOnConfirm: false,
                                closeOnCancel: false
                            });
                        }
                        if (data != 'not_authorized') {
                            specs_main_container.show();
                            specs_conatiner.html(data);
                            jscolor.installByClassName("jscolor");
                        }
                        else {
                            specs_main_container.hide();
                            specs_conatiner.html('');
                        }
                    }, error: function () {
                        specs_main_container.hide();
                        specs_conatiner.html('');
                    }
                });
            }

            @if(isset($product))
                    loadSpecsProduct({{ $product->id }});
            @else
                    loadSpecs($('#category_id').val());
            @endif
            // load specs after changing category
            $('#category_id').change(function (e) {
                loadSpecs($(this).val());
            });
        });
    </script>


@append