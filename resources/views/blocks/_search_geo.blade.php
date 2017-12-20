<!-- country_id Field -->
<select class="form-control input-lg text-md xxs-p-0 country_id" name="country">
    <option value="empty">{{ trans('products.choose_country') }}</option>
    @foreach($countries as $country)
        <option value="{{ $country->id }}" @if($country_id == $country->id){{ 'selected="selected"' }}@endif>{{ trans($country->name) }}</option>
    @endforeach
</select>


<!-- state_id Field -->
<div id="states">
    <!-- If we are editing -->
    @if(isset($state_id))
        <select class="form-control input-lg text-md xxs-p-0 state_id" name="state">
            <option value="empty">{{ trans('products.choose_state') }}</option>
            @foreach($states as $state)
                <option value="{{ $state->id }}" @if($state_id == $state->id){{ 'selected="selected"' }}@endif>{{ trans($state->name) }}</option>
            @endforeach
        </select>
    @else
        <select class="form-control input-lg text-md xxs-p-0 state_id" name="state_id" disabled></select>
    @endif

</div>

<!-- city_id Field -->
<div id="cities">
    <!-- If we are editing -->
    @if(isset($city_id))
        <select class="form-control input-lg text-md xxs-p-0 city_id" name="city">
            <option value="empty">{{ trans('products.choose_city') }}</option>
            @foreach($cities as $city)
                <option value="{{ $city->id }}" @if($city_id == $city->id){{ 'selected="selected"' }}@endif>{{ trans($city->name) }}</option>
            @endforeach
        </select>
    @else
        <select class="form-control input-lg text-md xxs-p-0 city_id" name="city_id" disabled></select>
    @endif

</div>


{{ Form::hidden('url',url('/'),['id'=>'url']) }}

@section('scripts')
    <script src="/frontend/scripts/products/geo.js"></script>
@append
