<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Active Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_active', 'Is Active:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_active', false) !!}
        {!! Form::checkbox('is_active', '1', null) !!} نعم
    </label>
</div>
<div style="clear: both;"></div>

<!-- Balance Field -->
<div class="form-group col-sm-6">
    {!! Form::label('balance', 'Balance:') !!}
    {!! Form::number('balance', null, ['class' => 'form-control']) !!}
</div>

<!-- Views Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', \App\Models\Advert::getTypes(),null, ['class' => 'form-control']) !!}
</div>


<!-- Click Cost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('click_cost', 'Click Cost:') !!}
    {!! Form::number('click_cost', null, ['class' => 'form-control']) !!}
</div>

@if(isset($advert))
<div style="clear: both;"></div>
@endif
<!-- File Path Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Add file url or upload it:') !!}
    {!! Form::file('image' ) !!}
    {!! Form::text('file_path', null, ['class' => 'form-control']) !!}
</div>
@if(isset($advert))
<div class="col-md-6">
    <div class="col-md-4">
        <div class="thumbnail">
            <a href="#" target="_blank">
                <img src="{{$advert->file_path}}" alt="{{$advert->name}}"
                     style="width:100%;max-height: 200px;">
                <div class="caption">
                    <p>{{$advert->name}}</p>
                </div>
            </a>
        </div>
    </div>
</div>
<div style="clear: both;"></div>
@endif


<!-- Adv Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adv_url', 'Adv Url:') !!}
    {!! Form::text('adv_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.adverts.index') !!}" class="btn btn-default">Cancel</a>
</div>
