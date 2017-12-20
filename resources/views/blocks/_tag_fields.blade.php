
<!-- name Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('name') ? ' has-error' : '' }}">
  {!! Form::label('name', Lang::get('tags.name'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
  <div class="col-xs-10 col-sm-7">
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
    {!! Form::text('name', null, ['class' => 'tag_name form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('tags.name')]) !!}
    <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('tags.name')}}</span>
  </div>
  <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
    <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
  </label>
</div>


<!-- slug Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('slug') ? ' has-error' : '' }}">
  {!! Form::label('slug', Lang::get('tags.slug'),['class' => 'col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20']) !!}
  <div class="col-xs-10 col-sm-7">
    @if ($errors->has('slug')) <p class="help-block">{{ $errors->first('slug') }}</p> @endif
    {!! Form::text('slug', null, ['class' => 'tag_slug form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','placeholder'=>Lang::get('tags.slug')]) !!}
    <span class="help-block text-sm line-height-xl font-droidkufi">{{Lang::get('tags.slug')}}</span>
  </div>
  <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
    <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
  </label>
</div>

