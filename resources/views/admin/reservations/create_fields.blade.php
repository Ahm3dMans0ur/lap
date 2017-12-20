<div class="form-group col-sm-12">
    <h3>First Stage</h3>
    <p>Choose this fields first to go forward and complete the reservation.</p>
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user', 'User:') !!}
    {!! Form::select('user_id', $users, null, ['class' => 'form-control', 'placeholder' => 'Please Select']) !!}
</div>

<!-- Service Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('service', 'Service:') !!}
    {!! Form::select('service_id',$services , null, ['class' => 'form-control', 'placeholder' => 'Please Select']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Next', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.reservations.index') !!}" class="btn btn-default">Cancel</a>
</div>