@extends('layouts.app')

@section('page-title', "Buy - Amit's Website")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/mp.css') }}">

<link rel="stylesheet" href="{{ asset('css/heading-category.css') }}">

<link rel="stylesheet" href="{{ asset('css/buy.css') }}">

@endsection('custom_css')

@section('content')

<livewire:filter-website 
	:cateslug="$cateslug"
	:categories="$categories"
	:tlds="$tlds"
	:languages="$languages"
	:websites2="$websites2"
	:catego="$catego"
	:numCarts="$numCarts"
/>

@endsection('content')

@section('custom_js')

<script>

</script>

@endsection('custom_js')