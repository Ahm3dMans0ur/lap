<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Local Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('local_path', 'Local Path:') !!}
    {!! Form::text('local_path', null, ['class' => 'form-control']) !!}
</div>

<!-- File Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_size', 'File Size:') !!}
    {!! Form::text('file_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.files.index') !!}" class="btn btn-default">Cancel</a>
</div>
