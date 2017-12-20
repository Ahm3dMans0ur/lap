<div class="form-group col-sm-6">
    {!! Form::label('parent_id', Lang::get('geo.country')) !!}
    @if(isset($dataType->parent_id))
        {!! Form::select('parent_id', $countries, $dataType->parent_id, ['class' => 'form-control', 'readonly']) !!}
    @elseif(isset($country_id))
        {!! Form::select('parent_id', $countries, $country_id, ['class' => 'form-control', 'readonly']) !!}
    @else
        {!! Form::select('parent_id', $countries, old('parent_id'), ['class' => 'form-control']) !!}
    @endif
</div>
@if(isset($dataType->name))
    <div class="form-group col-sm-6">
        {!! Form::label('name', Lang::get('geo.name')) !!}
        {!! Form::text('name',$dataType->name , ['class' => 'form-control', 'readonly']) !!}
    </div>
@endif
<div class="form-group col-sm-6">
    {!! Form::label('name_ar', Lang::get('geo.translate')) !!}
    {!! Form::text('name_ar',old('name_ar') , ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! url()->previous() !!}" class="btn btn-default">Cancel</a>
</div>