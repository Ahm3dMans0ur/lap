<!-- Category Id Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('category_id') ? ' has-error' : '' }}">
    {!! Form::label('category_id', Lang::get('services.Category Id'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('category_id')) <p class="help-block">{{ $errors->first('category_id') }}</p> @endif
        {!! Form::select('category_id', collect($nested_services_categories)->splice(1),null,['class' => 'form-control font-droidkufi  text-right','placeholder'=>Lang::get('services.Category Id')]) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">{{  trans('services.Category Id')}}</span>
    </div>
</div>


<!-- Title Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('title') ? ' has-error' : '' }}">
    {!! Form::label('title', Lang::get('services.Title'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
        {!! Form::text('title', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right','placeholder'=>Lang::get('services.Title')]) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('services.Title')}}</span>
    </div>
</div>

<!-- Description Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', Lang::get('services.Description'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
        {!! Form::textarea('description', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0','placeholder'=>Lang::get('services.Description')]) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('services.Describe more details')}}</span>
    </div>
</div>


<!-- price -->

            <div class="form-group xxs-pt-40 clearfix{{ $errors->has('price') ? ' has-error' : '' }}">
                {!! Form::label('price', Lang::get('products.Price'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
                <div class="col-xs-10 col-sm-7">
                    {!! Form::text('price', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right','placeholder'=>Lang::get('products.Price'), 'step' => '9', 'min' => '1']) !!}
                    @if ($errors->has('price')) <p class="help-block">{{ $errors->first('price') }}</p> @endif
                </div>
            </div>

<div class="form-group xxs-pt-40 clearfix{{ $errors->has('image') ? ' has-error' : '' }}">
    <label for="image"
           class="col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-40"> @lang('services.Image') </label>
    <div class="col-xs-12 col-sm-7">
        @if ($errors->has('image')) <p class="help-block">{{ $errors->first('image') }}</p> @endif
        {!! Form::mdfile('image[]', ['multiple'=> true, 'class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right'] ) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">@lang('products.Image Note')</span>
    </div>
    <label for="image" class="col-xs-2 col-sm-1 text-right">
        @if(old('image'))
            <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg {{ $errors->has('image') ? 'icon-delete' : 'icon-check'}}"></i>
        @endif
    </label>

    <!-- images -->
    @if(isset($services) && $services->images->count() > 0)
        @foreach($services->images as $servicesImage)
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="#" target="_blank">
                        <img src="{{$servicesImage->getImage('medium')}}" alt="{{$servicesImage->name}}"
                             style="width:100%;max-height: 200px;">
                        <div class="caption">
                            <p>{{$servicesImage->name}}</p>
                            <p>
                                <a href="{{ route('services.destroyFile',[$services->id,$servicesImage->id]) }}">[@lang('app.Delete')
                                    ]</a></p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    @endif
</div>


<div class="clearfix">
    <hr class="xxs-mt-10 xxs-mb-10">
</div>

{{ Form::hidden('url',url('/'),['id'=>'url']) }}

<input type="hidden" name="current_country"
       value="@if(old('country_id')){{old('country_id')}}@elseif(isset($services) && $services->country_id){{$services->country_id}}@endif">
<input type="hidden" name="current_state"
       value="@if(old('state_id')){{old('state_id')}}@elseif(isset($services) && $services->state_id){{$services->state_id}}@endif">
<input type="hidden" name="current_city"
       value="@if(old('city_id')){{old('city_id')}}@elseif(isset($services) && $services->city_id){{$services->city_id}}@endif">

<!-- country_id Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('country_id') ? ' has-error' : '' }}">
    {!! Form::label('country_id', Lang::get('products.country'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-30']) !!}

    <div class="col-xs-10 col-sm-7">
        <select class="form-control input-lg text-md xxs-p-0 country_id" name="country_id">
            <option value="empty">{{ trans('products.choose_country') }}</option>
            @foreach($countries as $country)
                <option value="{{ $country->id }}" @if(count($countries) == 1 ||(isset($services->country_id) && $services->country_id == $country->id)){{ 'selected="selected"' }}@endif>{{ trans($country->name) }}</option>
            @endforeach
        </select>
        @if ($errors->has('country_id'))
            <p class="help-block">{{ $errors->first('country_id') }}</p>
        @else
            <span class="help-block text-sm line-height-xl font-droidkufi">رجاء اختيار الدولة</span>
        @endif
    </div>
</div>

<!-- state_id Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('state_id') ? ' has-error' : '' }}">
    {!! Form::label('state_id', Lang::get('products.state'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-30']) !!}
    <div class="col-xs-10 col-sm-7">
        <!-- If we are editing -->
        <select class="form-control input-lg text-md xxs-p-0 state_id" name="state_id" disabled></select>
        @if ($errors->has('state_id'))
            <p class="help-block">{{ $errors->first('state_id') }}</p>
        @else
            <span class="help-block text-sm line-height-xl font-droidkufi">رجاء اختيار الولاية</span>
        @endif
    </div>
</div>

<!-- city_id Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('city_id') ? ' has-error' : '' }}">
    {!! Form::label('city_id', Lang::get('products.city'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-30']) !!}
    <div class="col-xs-10 col-sm-7">
        <!-- If we are editing -->
        <select class="form-control input-lg text-md xxs-p-0 city_id" name="city_id" disabled></select>
        @if ($errors->has('city_id'))
            <p class="help-block">{{ $errors->first('city_id') }}</p>
        @else
            <span class="help-block text-sm line-height-xl font-droidkufi">رجاء اختيار المدينة</span>
        @endif
    </div>
</div>


<!-- Map Field -->
<div class="form-group xxs-pt-40 clearfix map">
    {!! Form::label('us2', Lang::get('products.location'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-30']) !!}
    <div class="col-xs-12 col-sm-12 col-md-7">
        <span class="help-block text-sm line-height-xl font-droidkufi">
            <div id="us2" style="width: 100%; height: 350px;"></div>
        </span>
    </div>
</div>
{!! Form::hidden('lat',null,['id'=>'us2-lat']) !!}
{!! Form::hidden('lon',null,['id'=>'us2-lon']) !!}


<!-- Working days Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('working_days') ? ' has-error' : '' }}">
    {!! Form::label('working_days', Lang::get('services.Working days'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('working_days')) <p class="help-block">{{ $errors->first('working_days') }}</p> @endif
        {!! Form::select('working_days', \App\Models\Services::getDayesList(), null,['multiple' => 'multiple','name' => 'working_days[]','class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('services.Working days more')}}</span>
    </div>
</div>


<!-- Working hours Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('working_hours') ? ' has-error' : '' }}">
    {!! Form::label('working_hours', Lang::get('services.Working hours'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('working_hours')) <p class="help-block">{{ $errors->first('working_hours') }}</p> @endif
        {!! Form::select('working_hours', \App\Models\Services::getHoursList(), null,['multiple' => 'multiple','name' => 'working_hours[]','class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('services.Working hours more')}}</span>
    </div>
</div>

<!-- Reserving Type Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('reserving_type') ? ' has-error' : '' }}">
    {!! Form::label('reserving_type', Lang::get('services.Reserving Type'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('reserving_type')) <p class="help-block">{{ $errors->first('reserving_type') }}</p> @endif
        {!! Form::select('reserving_type', \App\Models\Services::getReservationTypes(), null,['class' => 'form-control font-droidkufi  text-right']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('services.Reserving Type more')}}</span>
    </div>
</div>


<!-- Status Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('status') ? ' has-error' : '' }}">
    {!! Form::label('status', Lang::get('services.Status'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('status')) <p class="help-block">{{ $errors->first('status') }}</p> @endif
        {!! Form::select('status', \App\Models\Services::getStatusTypes(), 'active',['class' => 'form-control font-droidkufi  text-right']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('services.Status more')}}</span>
    </div>
</div>

<hr class="xxs-mt-80 xxs-mb-40"/>
<div class="form-group form-submit xxs-pl-40 xxs-pb-20 text-left">
    {!! Form::submit(Lang::get('app.Save'), ['class' => 'btn btn-primary border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10']) !!}
    <a href="{!! route('services.index') !!}"
       class="btn btn-gray border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30">@lang("app.Cancel")</a>
</div>

@section('scripts')
    <script type="text/javascript"
            src='https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.min.js'></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('shari.MAP_API_KEY') }}&libraries=places"></script>
    <script src="{!! asset('/frontend/scripts/products/geo.js') !!}"></script>
    <script>
        $(document).ready(function (e) {

            function getGeo(loadMap) {
                var lat = 24.7255553;
                var lon = 46.5423373;
                @if(isset($services) && $services->lat && $services->lon)
                    lat = "{!! $services->lat !!}";
                lon = "{!! $services->lon !!}";
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

            getGeo(loadMap);

        });
    </script>

@append