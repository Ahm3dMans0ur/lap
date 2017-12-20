<!-- Comment Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comment', 'Comment:') !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Published Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_published', 'Is Published:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_published', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_published', "0", null) !!} No
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.comments.index') !!}" class="btn btn-default">Cancel</a>
</div>
