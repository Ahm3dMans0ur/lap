<!-- Content Field -->
<div class="form-group col-sm-6">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Readed Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_readed', 'Is Readed:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_readed', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_readed', "0", null) !!} No
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.notifications.index') !!}" class="btn btn-default">Cancel</a>
</div>
