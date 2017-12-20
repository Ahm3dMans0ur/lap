{!! Form::hidden('is_active',0) !!}

<!-- Category Id Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('category_id') ? ' has-error' : '' }}">
    <label for="category_id" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> Category </label>
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('category_id')) <p class="help-block">{{ $errors->first('category_id') }}</p> @endif
        {!! Form::select('category_id', $parentCategories,null,['class' => 'form-control text-right lang-ltr']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">category</span>
    </div>
    <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
    </label>
</div>

<!-- name Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('name') ? ' has-error' : '' }}">
  <label for="name" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> Name </label>
  <div class="col-xs-10 col-sm-7">
    @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
    {!! Form::text('name', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','id'=>'name','placeholder'=>"category name"]) !!}
    <span class="help-block text-sm line-height-xl font-droidkufi">Name</span>
  </div>
  <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
    <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
  </label>
</div>

<!-- description Field -->
<div class="form-group xxs-pt-40 clearfix{{ $errors->has('description') ? ' has-error' : '' }}">
    <label for="description" class="col-xs-12 col-sm-4 xs-text-right sm-text-left xxs-mt-2 xxs-pt-20"> Description </label>
    <div class="col-xs-10 col-sm-7">
        @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
        {!! Form::textarea('description', null, ['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr','id'=>'description','placeholder'=>'description']) !!}
        <span class="help-block text-sm line-height-xl font-droidkufi">description</span>
    </div>
    <label for="inputID4" class="col-xs-2 col-sm-1 text-right">
        <i class="validation-icon display-inline-block va-top xxs-mt-10 icon text-lg icon-check"></i>
    </label>
</div>



<hr class="xxs-mt-80 xxs-mb-40" />
<div class="form-group form-submit xxs-pl-40 xxs-pb-20 text-left">
  {!! Form::submit('Save', ['class' => 'btn btn-primary border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30 xxs-ml-10']) !!}
  <a href="{!! route('stores.welcome') !!}" class="btn btn-gray border-radius-sm xxs-p-10 xxs-pr-30 xxs-pl-30">@lang("Cancel")</a>
</div>