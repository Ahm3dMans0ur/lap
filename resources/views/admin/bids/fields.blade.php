<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Deal Field -->
<div class="form-group col-sm-12">
    {!! Form::label('deal', 'Deal:') !!}
    <label class="radio-inline">
        {!! Form::radio('deal', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('deal', "0", null) !!} No
    </label>

</div>

<!-- Chosen Field -->
<div class="form-group col-sm-12">
    {!! Form::label('chosen', 'Chosen:') !!}
    <label class="radio-inline">
        {!! Form::radio('chosen', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('chosen', "0", null) !!} No
    </label>

</div>

<!-- Closed Field -->
<div class="form-group col-sm-12">
    {!! Form::label('closed', 'Closed:') !!}
    <label class="radio-inline">
        {!! Form::radio('closed', "1", null) !!} Yes
    </label>

    <label class="radio-inline">
        {!! Form::radio('closed', "0", null) !!} No
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.bids.index') !!}" class="btn btn-default">Cancel</a>
</div>
