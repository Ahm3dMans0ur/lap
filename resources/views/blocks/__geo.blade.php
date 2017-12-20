<!-- country_id Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('country_id') ? ' has-error' : '' }}">
    {!! Form::label('country_id', Lang::get('products.country'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-30']) !!}

    <div class="col-xs-10 col-sm-9">
        <select class="form-control input-lg text-md xxs-p-0 country_id" name="country_id">
            <option value="empty">{{ trans('products.choose_country') }}</option>
            @foreach($countries as $country)
                <option value="{{ $country->id }}" @if(count($countries) == 1 ||(isset($product->country_id) && $product->country_id == $country->id)){{ 'selected="selected"' }}@endif>{{ trans($country->name) }}</option>
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
    <div class="col-xs-10 col-sm-9">
        <!-- If we are editing -->
        <select class="form-control input-lg text-md xxs-p-0 state_id" name="state_id" disabled></select>
        @if ($errors->has('state_id'))
            <p class="help-block">{{ $errors->first('state_id') }}</p>
        @else
            <span class="help-block text-sm line-height-xl font-droidkufi">@lang('products.choose_state')</span>
        @endif
    </div>
</div>

<!-- city_id Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('city_id') ? ' has-error' : '' }}">
    {!! Form::label('city_id', Lang::get('products.city'),['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-30']) !!}
    <div class="col-xs-10 col-sm-9">
        <!-- If we are editing -->
        <select class="form-control input-lg text-md xxs-p-0 city_id" name="city_id" disabled></select>
        @if ($errors->has('city_id'))
            <p class="help-block">{{ $errors->first('city_id') }}</p>
        @else
            <span class="help-block text-sm line-height-xl font-droidkufi">رجاء اختيار المدينة</span>
        @endif
    </div>
</div>