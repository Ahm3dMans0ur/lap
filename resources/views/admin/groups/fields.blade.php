<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class', 'Class:') !!}
    {!! Form::text('class', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Active Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_active', 'Is Active:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_active', "1", null) !!} نعم
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_active', "0", null) !!} لا
    </label>

</div>

<!-- Is Free Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_free', 'Is Free:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_free', "1", null) !!} نعم
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_free', "0", null) !!} لا
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.groups.index') !!}" class="btn btn-default">Cancel</a>
</div>
