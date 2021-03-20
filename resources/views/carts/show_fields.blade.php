<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $cart->user_id }}</p>
</div>

<!-- Website Id Field -->
<div class="col-sm-12">
    {!! Form::label('website_id', 'Website Id:') !!}
    <p>{{ $cart->website_id }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $cart->quantity }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $cart->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $cart->updated_at }}</p>
</div>

