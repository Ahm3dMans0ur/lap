<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Paid Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('paid_cost', 'Paid Cost:') !!}
    {!! Form::number('paid_cost', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Active Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_active', 'Is Active:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_active', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_active', "0", null) !!} No
    </label>

</div>

<!-- Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plan', 'Plan:') !!}
    {!! Form::select('plan', ['quarterly' => 'Quarterly', 'biannual' => 'Biannual', 'annually' => 'Annually'], null, ['class' => 'form-control']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
</div>

<!-- End Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_date', 'End Date:') !!}
    {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.subscriptions.index') !!}" class="btn btn-default">Cancel</a>
</div>
