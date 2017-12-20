<select name="status" reservation="{{ $reservations['id'] }}" class="form-control" id="change_status">
    @if(! in_array($reservations['status'],['confirmed','rejected']))
    <option value="new" {{ $reservations['status']=='new'? 'selected':'' }}>@lang('reservations.new')</option>
    @endif
    <option value="confirmed"
            class="text-success" {{ $reservations['status']=='confirmed'? 'selected':'' }}>@lang('reservations.confirmed')
    </option>
    <option value="rejected" class="text-danger" {{ $reservations['status']=='rejected'? 'selected':'' }}>
    @lang('reservations.rejected')
    </option>
</select>