{{ Form::hidden('url',url('/'),['id'=>'url']) }}
<input type="hidden" name="current_country"
       value="@if(old('country_id')){{old('country_id')}}@elseif(isset($field) && $field->country_id){{$field->country_id}}@endif">
<input type="hidden" name="current_state"
       value="@if(old('state_id')){{old('state_id')}}@elseif(isset($field) && $field->state_id){{$field->state_id}}@endif">
<input type="hidden" name="current_city"
       value="@if(old('city_id')){{old('city_id')}}@elseif(isset($field) && $field->city_id){{$field->city_id}}@endif">

<!-- country_id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', Lang::get('products.country'),['class' => '']) !!}
    <select class="form-control country_id" name="country_id">
        <option value="empty">{{ trans('products.choose_country') }}</option>
        @foreach($countries as $country)
            <option value="{{ $country->id }}" @if(count($countries) == 1 ||(isset($field->country_id) && $field->country_id == $field->id)){{ 'selected="selected"' }}@endif>{{ trans($country->name) }}</option>
        @endforeach
    </select>

</div>

<!-- state_id Field -->
<div class="form-group col-sm-6">
{!! Form::label('state_id', Lang::get('products.state'),['class' => '']) !!}
<!-- If we are editing -->
    <select class="form-control state_id" name="state_id" disabled></select>
</div>


<!-- city_id Field -->
<div class="form-group col-sm-6 pull-left">
{!! Form::label('city_id', Lang::get('products.city'),['class' => '']) !!}
<!-- If we are editing -->
    <select class="form-control city_id" name="city_id" disabled></select>

</div>