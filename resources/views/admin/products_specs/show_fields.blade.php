<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $productsSpecs->id }}</p>
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{{ $productsSpecs->product_id }}</p>
</div>

<!-- Specs Id Field -->
<div class="form-group">
    {!! Form::label('specs_id', 'Specs Id:') !!}
    <p>{{ $productsSpecs->specs_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productsSpecs->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productsSpecs->updated_at }}</p>
</div>

