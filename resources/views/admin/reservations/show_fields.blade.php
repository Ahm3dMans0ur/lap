<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!} {!! $reservation->id !!}
</div>

<!-- User Name Field -->
<div class="form-group">
    {!! Form::label('user', 'User:') !!}
    <p>{!! $reservation->user->name !!}</p>
</div>

<!-- Service Title Field -->
<div class="form-group">
    {!! Form::label('service', 'Service:') !!}
    <p>{!! $reservation->service->title !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $reservation->name !!}</p>
</div>

<!-- Personal Id Field -->
<div class="form-group">
    {!! Form::label('personal_id', 'Personal ID:') !!}
    <p>{!! $reservation->personal_id !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{!! $reservation->user->phone !!}</p>
</div>

<!-- Extra Phone Field -->
<div class="form-group">
    {!! Form::label('extra_phone', 'Extra Phone:') !!}
    <p>{!! $reservation->extra_phone !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $reservation->user->email !!}</p>
</div>

<!-- Notes Field -->
<div class="form-group">
    {!! Form::label('notes', 'Notes:') !!}
    <p>{!! $reservation->notes !!}</p>
</div>

<!-- Start Time Field -->
<div class="form-group">
    {!! Form::label('start_time', 'Start Time:') !!}
    <p>{!! $reservation->start_time !!}</p>
</div>

<!-- End Time Field -->
<div class="form-group">
    {!! Form::label('end_time', 'End Time:') !!}
    <p>{!! $reservation->end_time !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $reservation->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $reservation->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $reservation->deleted_at !!}</p>
</div>

