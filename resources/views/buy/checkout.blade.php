extends('layouts.app')

@section('page-title', "Cart")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/buy.css') }}">

<link rel="stylesheet" href="{{ asset('css/cart2.css') }}">

@endsection('custom_css')

@section('content')

<div class="section section-grey section-border-bottom" style="padding: 20px 0; margin-bottom: 2rem;">
    <div class="container">
        <div class="col-md-12 noP row">
            <div class="col-md-12 noP">
                <h1 class="heading2">Cart</h1>
            </div>
        </div>
    </div>
</div>

@endsection('content')