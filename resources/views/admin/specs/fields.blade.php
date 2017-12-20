@section('css')
<link rel="stylesheet" href="/backend/css/select2.min.css">
    @append
<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', ['string' => 'text', 'integer' => 'integer', 'decimal' => 'price', 'truefalse' => 'boolean'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('default', 'Default:') !!}
    {!! Form::text('default', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('key', 'Key:') !!}
    {!! Form::text('key', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category:') !!}

    @if(isset($categories) && isset($choosen_categories))
        {!! Form::select('category_id[]', $categories, $choosen_categories, ['multiple','id'=>'category_id','class' => 'form-control']) !!}
    @else
        {!! Form::select('category_id[]', $categories, null, ['multiple','id'=>'category_id','class' => 'form-control']) !!}
    @endif
</div>

<div class="form-group col-sm-6">
    <h1>Validation</h1>
    <hr>
    {!! Form::label('required', 'Required:') !!}
    @if(isset($required) && $required)
        {{ Form::checkbox('required', null,true) }}

    @else
        {{ Form::checkbox('required', null) }}
    @endif

    {!! Form::label('number', 'Number:') !!}
    @if(isset($integer) && $integer)
        {{ Form::checkbox('number', null,true) }}

    @else
    {{ Form::checkbox('number', null) }}
     @endif
    {!! Form::label('string', 'String:') !!}
    @if(isset($string) && $string)
        {{ Form::checkbox('string', null,true) }}
    @else
        {{ Form::checkbox('string', null) }}
    @endif
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.specs.index') !!}" class="btn btn-default">Cancel</a>
</div>

@section('scripts')
    <script src="/backend/js/select2.min.js"></script>
    <script type="text/javascript">
        $("#category_id").select2();
    </script>
    @append