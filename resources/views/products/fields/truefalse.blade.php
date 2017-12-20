<div class="form-group xxs-pt-40 clearfix{{ $errors->has('specs.'.$field['id']) ? ' has-error' : '' }}">
    {!! Form::label("specs[{$field['id']}]", $field['name'],['class' => 'col-xs-12 col-sm-3 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
    <div class="col-xs-10 col-sm-7">
    @if ($errors->has('specs.'.$field['id'])) <p class="help-block">{{ $errors->first('specs.'.$field['id']) }}</p> @endif
	<div class="radio">
		<label>
			{!! Form::radio("specs[{$field['id']}]", "yes", (((isset($field['pivot']) && $field['pivot']['value'] == 'yes') || (!isset($field['pivot']) && $field['default'] == 'yes')) ? true : null)) !!}
			<span> @lang('forms.yes') </span>
		</label>
		<label>
			{!! Form::radio("specs[{$field['id']}]", "no", (((isset($field['pivot']) && $field['pivot']['value'] == 'no') || (!isset($field['pivot']) && $field['default'] == 'no')) ? true : null)) !!}
			<span> @lang('forms.no') </span>
		</label>
	</div>
  </div>
</div>