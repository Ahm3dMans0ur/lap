<div class="form-group col-sm-6">
        {!! Form::label('country', Lang::get('geo.country_key')) !!}
        @if(isset($dataType->country))
                {!! Form::text('country',$dataType->country , ['class' => 'form-control', 'readonly']) !!}
        @else
                {!! Form::text('country',old('country') , ['class' => 'form-control']) !!}
        @endif
        <a href="https://en.wikipedia.org/wiki/ISO_3166-1" target="_blank" data-toggle="tooltip"
        title="{{Lang::get('geo.get_country_tip')}}">{{ Lang::get('geo.get_country_key') }}</a>
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
    <a href="{!! route('admin.geo.countries') !!}" class="btn btn-default">Cancel</a>
</div>