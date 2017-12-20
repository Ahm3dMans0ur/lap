<!-- Group Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('group_id', 'Group Id:') !!}
    {{ Form::select('group_id', $groups, null, ['class' => 'form-control'])}}

</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

{{--@if(!isset($users))--}}
<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>
<!-- Password_confirmation -->
<div class="form-group col-sm-6">
    {!! Form::label('password_confirmation', 'Password Confirmation:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>
{{--@endif--}}
<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Account Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('account_type', 'Account Type:') !!}
    {!! Form::select('account_type', ['owner' => 'Owner', 'admin' => 'Admin', 'moderator' => 'Moderator', 'personal' => 'Personal'], null, ['class' => 'form-control']) !!}
</div>

<!-- address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- bank accounts Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bank_accounts', 'Bank Accounts:') !!}
    {!! Form::text('bank_accounts', null, ['class' => 'form-control']) !!}
</div>

<!-- referee Field -->
<div class="form-group col-sm-6">
    {!! Form::label('referee', 'Referee:') !!}
    {!! Form::text('referee', null, ['class' => 'form-control']) !!}
</div>

<!-- Admin Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('admin_notes', 'Admin Notes:') !!}
    {!! Form::textarea('admin_notes', null, ['class' => 'form-control']) !!}
</div>

<!-- Is Active Field -->
<div class="form-group col-sm-12">
    {!! Form::label('is_active', 'Is Active:') !!}
    <label class="radio-inline">
        {!! Form::radio('is_active', "1", null) !!} نعم
    </label>

    <label class="radio-inline">
        {!! Form::radio('is_active', "0", null) !!} لا
    </label>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.users.index') !!}" class="btn btn-default">Cancel</a>
</div>
