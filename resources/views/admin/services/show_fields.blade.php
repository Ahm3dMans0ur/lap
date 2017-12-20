<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!} {!! $services->id !!}
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category:') !!}
    <p>{!! $services->category->name !!}</p>
</div>

<!-- Store Id Field -->
<div class="form-group">
    {!! Form::label('store_id', 'Store:') !!}
    <p>{!! $services->store->name !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $services->title !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $services->description !!}</p>
</div>

<!-- Working Days Field -->
<div class="form-group">
    {!! Form::label('working_days', 'Working Days:') !!}
    <?php $all_days = count($services->working_days); ?>
    <p>
    @if ($all_days > 6)
    {{"All Days." }}
    @else
    @foreach ($services->working_days as $day)
    {!! $day !!}.
    @endforeach
    @endif
    </p>
</div>

<!-- Working Hours Field -->
<div class="form-group">
    {!! Form::label('working_hours', 'Working Hours:') !!}
    <p>
    @foreach ($services->working_hours as $hour)
    {!! $hour !!}.
    @endforeach
    </p>
</div>

<!-- Reserving Type Field -->
<div class="form-group">
    {!! Form::label('reserving_type', 'Reserving Type:') !!}
    <p>{!! $services->reserving_type !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Active:') !!}
    <p>@if($services->status) @lang('app.Yes') @else @lang('app.No') @endif</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $services->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $services->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $services->deleted_at !!}</p>
</div>

