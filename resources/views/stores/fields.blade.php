<!-- name Field -->
<div class="form-group xxs-pt-40 clearfix {{ $errors->has('name') ? 'has-error' : '' }}">
  <label for="name" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-40"> @lang('stores.name') </label>
  <div class="col-xs-10 col-sm-6">
    {!! Form::text('name', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-5 text-right lang-ltr','id'=>'name','placeholder'=>"اسم متجري"]) !!}
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
  </div>
  <label for="name" class="col-xs-2 col-sm-2 text-right">
    @if(old('name'))
    <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
    @endif
  </label>
</div>

<!-- Category Id Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('category_id') ? ' has-error' : '' }}">
    {!! Form::label('category_id', Lang::get('products.Category'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-30']) !!}

    <div class="col-xs-10 col-sm-7">
        {{-- TODO need to check after setting categories hierarchy  --}}
        {!! Form::select('category_id', \App\Repositories\CategoriesRepository::getNestedCategories(),null,['class' => 'form-control input-lg text-md xxs-p-0']) !!}
        @if ($errors->has('category_id'))
            <p class="help-block">{{ $errors->first('category_id') }}</p>
        @else
            <span class="help-block text-sm line-height-xl font-droidkufi">رجاء اختيار القيم</span>
        @endif
    </div>
    <label for="category_id" class="col-xs-2 col-sm-1 text-right">
        @if(old('category_id'))
            <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('category_id') ? 'icon-delete' : 'icon-check'}}"></i>
        @endif
    </label>
</div>

<!-- slug Field -->
<div class="form-group xxs-pt-40 clearfix {{ $errors->has('slug') ? ' has-error' : '' }}">
    <label for="slug" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-40"> @lang('stores.slug') </label>
    <div class="col-xs-10 col-sm-6 xxs-p-0">
        <div class="col-xs-6 col-md-7">
            {!! Form::text('slug', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-left lang-ltr','placeholder'=>'my-store']) !!}
            @if ($errors->has('slug')) <p class="help-block">{{ $errors->first('slug') }}</p> @endif
        </div>
        <div class="col-xs-6 col-md-5 lang-ltr text-right xxs-pr-0">
            <span class="display-inline-block va-top text-gray xxs-pt-10 xxs-pb-30 border-bottom-solid-midgray-0"> shari.sa.com/stores/ </span>
        </div>
    </div>
    <label for="slug" class="col-xs-2 col-sm-2 text-right">
        @if(old('slug'))
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
        @endif
    </label>
</div>

<!-- status Field -->
<div class="form-group xxs-pt-40 clearfix {{ $errors->has('user_status') ? ' has-error' : '' }}">
    <label for="user_status" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-40">  @lang('stores.status') </label>
    <div class="col-xs-10 col-sm-6">
        {!! Form::select('user_status',['active'=>'سماح الوصول للجميع','suspended'=>'اغلاق المتجر مؤقتاً','view_only'=>'للمشاهدة فقط'], null, ['class' => 'form-control xxs-p-0 input-lg text-md','id'=>'user_status']) !!}
        @if ($errors->has('user_status')) <p class="help-block">{{ $errors->first('user_status') }}</p> @endif
    </div>
    <label for="user_status" class="col-xs-2 col-sm-2 text-right">
        @if(old('user_status'))
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
        @endif
    </label>
</div>


<!-- description Field -->
<div class="form-group xxs-pt-40 clearfix {{ $errors->has('description') ? ' has-error' : '' }}">
    <label for="description" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-80">  @lang('stores.description') </label>
    <div class="col-xs-10 col-sm-6">
        {!! Form::textarea('description', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0','id'=>'description','placeholder'=>'قم بكتابة وصف للمتجر هنا...','rows' => 4]) !!}
        @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
    </div>
    <label for="description" class="col-xs-2 col-sm-2 text-right">
        @if(old('description'))
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
        @endif
    </label>
</div>

<!-- logo Field -->
<div class="form-group xxs-pt-40 clearfix {{ $errors->has('logo') ? ' has-error' : '' }}">
    <label for="logo" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-40">  @lang('stores.logo') </label>
    <div class="col-xs-10 col-sm-6">
        @if ($errors->has('logo')) <p class="help-block">{{ $errors->first('logo') }}</p> @endif
        {!! Form::mdfile('logo', ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','id'=>"logo"]) !!}
            <span class="help-block text-sm line-height-xl font-droidkufi"> @lang('stores.dimensions')</span>
            @if(isset($store) && $store->files()->count() > 0)
                <img src="{{ $store->files()->first()->url }}" width="250px">
            @endif
    </div>
    <label for="logo" class="col-xs-2 col-sm-2 text-right">
        @if(old('logo'))
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
        @endif
    </label>
</div>

@include('blocks.__geo_all',['field' => isset($store) ? $store : null])

{{--add location--}}
<div class="form-group clearfix">
    <div class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"></div>
    <div class="checkbox col-xs-12 col-sm-4">
        <label>
            @if(isset($store) && $store->lat && $store->lon)
                {!! Form::checkbox('location', 'yes',['checked'],['id' => 'location']) !!}
            @else
                {!! Form::checkbox('location', 'yes',false,['id' => 'location']) !!}
            @endif
            <span class="display-inline-block va-top"> @lang('stores.add location') </span>

        </label>
    </div>
</div>

<!-- address Field -->
<div class="form-group xxs-pt-40 clearfix map">
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

<hr class="xxs-mt-80 xxs-mb-40" />
<div class="form-group form-submit xxs-pl-40 xxs-pb-40 text-left">
  {!! Form::submit( Lang::get('app.Send'), ['class' => 'btn btn-primary border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10']) !!}
  {!! Form::reset( Lang::get('messages.cancel'), ['class' => 'btn btn-gray btn-ghost border-radius-xs xxs-p-10 xxs-pr-30 xxs-pl-30']) !!}
</div>

@section('scripts')
    <script src="{!! asset('/frontend/scripts/products/geo.js') !!}"></script>

    <script type="text/javascript"
            src='https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('shari.MAP_API_KEY') }}&libraries=places"></script>


    {{--mapper--}}
    <script>

        function getGeo(loadMap) {
            var lat = 24.7255553;
            var lon = 46.5423373;
            @if(isset($store) && $store->lat && $store->lon)
                lat = "{!! $store->lat !!}";
            lon = "{!! $store->lon !!}";
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
                    enableAutocomplete: true
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
        $(document).ready(function (e) {

            // check map visibility status
            if (!$('#location').is(':checked')) {
                $('.map').addClass('hidden');
            }
            else {
                getGeo(loadMap);
            }


        });
    </script>

@append