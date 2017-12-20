<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $files->id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $files->user_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $files->name }}</p>
</div>

<!-- Local Path Field -->
<div class="form-group">
    {!! Form::label('local_path', 'Local Path:') !!}
    <p>{{ $files->local_path }}</p>
</div>

<!-- File Size Field -->
<div class="form-group">
    {!! Form::label('file_size', 'File Size:') !!}
    <p>{{ $files->file_size }}</p>
</div>

<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    <p>{{ $files->url }}</p>
</div>

<!-- Is Active Field -->
<div class="form-group">
    {!! Form::label('is_active', 'Is Active:') !!}
    <p>@if($files->is_active) @lang('app.Yes') @else @lang('app.No') @endif</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $files->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $files->updated_at }}</p>
</div>

