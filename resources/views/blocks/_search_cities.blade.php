<select class="form-control input-lg xxs-pr-0" name="city_id">
    <option value="*">المدن</option>
    @foreach($cities as $key => $value)
        <option value="{{$key}}" @if(isset($city_id) && $city_id == $key) selected @endif>{{ $value }}</option>
    @endforeach
</select>