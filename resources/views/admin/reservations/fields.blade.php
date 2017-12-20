<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User ID:') !!}
    {!! Form::text('user_id', $reservation->user->id, ['class'=>'class-name','readonly'])  !!}
    <p>التعديل غير مسموح في هذا الحقل</p>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name',$reservation->user->name, ['class'=>'form-control']) !!}
</div>

<!-- Service Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service', 'Service:') !!}
    {!! Form::select('service_id',$services , null, ['class' => 'form-control', 'placeholder' => 'Please Select']) !!}
</div>

<!-- Personal Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('personal_id', 'Personal Id:') !!}
    {!! Form::text('personal_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', $reservation->user->phone, ['class' => 'form-control']) !!}
</div>
<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', $reservation->user->email, ['class' => 'form-control']) !!}
</div>

<!-- Extra Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('extra_phone', 'Extra Phone:') !!}
    {!! Form::text('extra_phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_time', 'Start Time:') !!}
    {!! Form::date('start_time', $reservation->start_time, ['class' => 'form-control']) !!}
</div>

<!-- End Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end_time', 'End Time:') !!}
    {!! Form::date('end_time', $reservation->end_time, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.reservations.index') !!}" class="btn btn-default">Cancel</a>
</div>