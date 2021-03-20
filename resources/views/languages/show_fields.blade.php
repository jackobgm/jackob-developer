<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $language->name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $language->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $language->updated_at }}</p>
</div>

