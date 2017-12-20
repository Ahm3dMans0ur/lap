<!-- Is Liked Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_liked', 'Is Liked:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_liked', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_liked', "0", null) !!} No
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.likes.index') !!}" class="btn btn-default">Cancel</a>
</div>
