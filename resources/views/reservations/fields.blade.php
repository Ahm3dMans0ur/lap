@if (count($errors) > 0)
<div class="xxs-p-20 xxs-mb-20">
    @include('common.errors')
</div>
@endif
<!-- Name Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('name') ? ' has-error' : '' }}">
{!! Form::label('name', Lang::get('reservations.Name'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
  <div class="col-xs-10 col-sm-7">
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
    {!! Form::text('name', (Auth::user()) ? Auth::user()->name : null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('reservations.Name')]) !!}
    <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('reservations.Name More')}}</span>
  </div>
</div>

<!-- Phone Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('phone') ? ' has-error' : '' }}">
{!! Form::label('phone', Lang::get('reservations.Phone'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
  <div class="col-xs-10 col-sm-7">
    @if ($errors->has('phone')) <p class="help-block">{{ $errors->first('phone') }}</p> @endif
    {!! Form::text('phone', (Auth::user()) ? Auth::user()->phone : null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('reservations.Phone')]) !!}
    <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('reservations.Phone More')}}</span>
  </div>
</div>


<div class="form-group xxs-pt-40 clearfix{{ $errors->has('extra_phone') ? ' has-error' : '' }}">
{!! Form::label('extra_phone', Lang::get('reservations.Extra Phone'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
  <div class="col-xs-10 col-sm-7">
    @if ($errors->has('extra_phone')) <p class="help-block">{{ $errors->first('extra_phone') }}</p> @endif
    {!! Form::text('extra_phone',null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('reservations.Extra Phone')]) !!}
    <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('reservations.Extra Phone More')}}</span>
  </div>
</div>

<!-- Email Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('email') ? ' has-error' : '' }}">
{!! Form::label('email', Lang::get('reservations.Email'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
  <div class="col-xs-10 col-sm-7">
    @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
    {!! Form::text('email', (Auth::user()) ? Auth::user()->email : null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('reservations.Email')]) !!}
    <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('reservations.Email More')}}</span>
  </div>
</div>

<div class="form-group xxs-pt-40 clearfix{{ $errors->has('personal_id') ? ' has-error' : '' }}">
{!! Form::label('personal_id', Lang::get('reservations.Personal Id'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
  <div class="col-xs-10 col-sm-7">
    @if ($errors->has('personal_id')) <p class="help-block">{{ $errors->first('personal_id') }}</p> @endif
    {!! Form::text('personal_id',null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('reservations.Personal Id')]) !!}
    <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('reservations.Personal Id More')}}</span>
  </div>
</div>

<!-- Notes Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('notes') ? ' has-error' : '' }}">
	{!! Form::label('notes', Lang::get('reservations.Notes'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
  <div class="col-xs-10 col-sm-7">
    @if ($errors->has('notes')) <p class="help-block">{{ $errors->first('notes') }}</p> @endif
    {!! Form::textarea('notes', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0','placeholder'=>Lang::get('reservations.Notes More')]) !!}
  </div>
</div>

<div class="clearfix">
    <hr class="xxs-mt-30 xxs-mb-10">
</div>

<div class="form-group-title border-bottom-solid-lightgray-1 clearfix xxs-mb-20">
    <h5 class="pull-right text-darkgray xxs-p-30 xxs-pl-0 xxs-pr-40 xxs-m-0 border-bottom-solid-midgray-1">
        <i class="display-inline-block va-top icon icon-calendar xxs-ml-10"></i>
        <span> موعد الحجز </span>
    </h5>
</div>

<!-- Start Time Field -->
<div class=" form-group col-sm-6 {{ $errors->has('start_time') ? ' has-error' : '' }}">
    {!! Form::label('start_time', Lang::get('reservations.Start Time')) !!}
    @if ($errors->has('start_time')) <p class="help-block">{{ $errors->first('start_time') }}</p> @endif
    {!! Form::text('start_time', null, ['class' => 'form-control dateTimePicker']) !!}
</div>

<!-- End Time Field -->
<div class="form-group col-sm-6 {{ $errors->has('end_time') ? ' has-error' : '' }}">
    {!! Form::label('end_time', Lang::get('reservations.End Time')) !!}
    @if ($errors->has('end_time')) <p class="help-block">{{ $errors->first('end_time') }}</p> @endif
    {!! Form::text('end_time', null, ['class' => 'form-control dateTimePicker']) !!}
</div>

<div class="clearfix">
    <hr class="xxs-mt-30 xxs-mb-10">
</div>
<div class="form-group form-submit xxs-pl-40 xxs-pb-20 text-left">
  {!! Form::submit(Lang::get('app.Save'), ['class' => 'btn btn-primary border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10']) !!}
  <a href="{!! route('reservations.index') !!}" class="btn btn-gray border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30">@lang("app.Cancel")</a>
</div>

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.css">
<script type="text/javascript">
$(document).ready(function (e) {
  // init date picker
  $('.dateTimePicker').datetimepicker({
      i18n:{
        ar:{
          months:["يناير", "فبراير", "مارس", "أبريل", "مايو", "يونيو","يوليو", "أغسطس", "سبتمبر", "أكتوبر", "نوفمبر", "ديسمبر"],
          dayOfWeek:['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت']
        }
      },
      // todayBtn: false,
      maxDate: '+1970/01/30',
      defaultDate: '+1970/01/06',
      minDate: '+1970/01/02',
      format: 'Y-m-d',
      timepicker:false,
      closeOnDateSelect: true
  });
  $.datetimepicker.setLocale('ar');



});
</script>
@append