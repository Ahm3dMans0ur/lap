<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $services->id !!}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{!! $services->category_id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $services->user_id !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{!! $services->image !!}</p>
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

<!-- Working days Field -->
<div class="form-group">
    {!! Form::label('working_days', 'Working days:') !!}
    @foreach($services->working_days as $workingDay)
    <p>{!! $workingDay !!}</p>
    @endforeach
</div>

<!-- Working hours Field -->
<div class="form-group">
    {!! Form::label('working_hours', 'Working hours:') !!}
    @foreach($services->working_hours as $workingHours)
    <p>{!! $workingHours !!}</p>
    @endforeach
</div>

<!-- Reserving Type Field -->
<div class="form-group">
    {!! Form::label('reserving_type', 'Reserving Type:') !!}
    <p>{!! $services->reserving_type !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $services->status !!}</p>
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

