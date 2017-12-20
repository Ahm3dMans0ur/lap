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

<!-- New Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('new_price', 'New Price:') !!}
    {!! Form::number('new_price', null, ['class' => 'form-control']) !!}
</div>

<!-- Discount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount', 'Discount:') !!}
    {!! Form::number('discount', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Featured Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_featured', 'Is Featured:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_featured', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_featured', "0", null) !!} No
    </label>

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
    <a href="{!! route('admin.offers.index') !!}" class="btn btn-default">Cancel</a>
</div>
