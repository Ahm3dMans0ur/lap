<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Please Select']) !!}
</div>

<!-- Store Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('store', 'Store:') !!}
    {!! Form::select('store_id', $stores, null, ['class' => 'form-control', 'placeholder' => 'Please Select']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Working Days Field -->
<div class="form-group col-sm-6">
    {!! Form::label('working_days', 'Working Days:') !!}
    {!! Form::select('working_days', \App\Models\Services::getDayesList(), null,['multiple' => 'multiple','name' => 'working_days[]','class' => 'form-control']) !!}
</div>

<!-- Working Hours Field -->
<div class="form-group col-sm-6">
    {!! Form::label('working_hours', 'Working Hours:') !!}
    {!! Form::select('working_hours', \App\Models\Services::getHoursList(), null,['multiple' => 'multiple','name' => 'working_hours[]','class' => 'form-control']) !!}
</div>

<!-- Reserving Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reserving_type', 'Reserving Type:') !!}
    {!! Form::select('reserving_type', \App\Models\Services::getReservationTypes(), null,['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr', 'placeholder' => 'Please Select']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::select('status', \App\Models\Services::getStatusTypes(), null,['class' => 'form-control font-droidkufi xxs-pt-10 xxs-pb-30 xxs-pr-0 text-right lang-ltr', 'placeholder' => 'Please Select']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.services.index') !!}" class="btn btn-default">Cancel</a>
</div>
