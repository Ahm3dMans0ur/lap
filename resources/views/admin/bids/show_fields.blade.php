<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $bids->id }}</p>
</div>

<!-- Auction Id Field -->
<div class="form-group">
    {!! Form::label('auction_id', 'Auction Id:') !!}
    <p>{{ $bids->auction_id }}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $bids->user_id }}</p>
</div>

<!-- Product Id Field -->
<div class="form-group">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{{ $bids->product_id }}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $bids->price }}</p>
</div>

<!-- Deal Field -->
<div class="form-group">
    {!! Form::label('deal', 'Deal:') !!}
    <p>{{ $bids->deal }}</p>
</div>

<!-- Chosen Field -->
<div class="form-group">
    {!! Form::label('chosen', 'Chosen:') !!}
    <p>{{ $bids->chosen }}</p>
</div>

<!-- Closed Field -->
<div class="form-group">
    {!! Form::label('closed', 'Closed:') !!}
    <p>{{ $bids->closed }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $bids->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $bids->updated_at }}</p>
</div>

