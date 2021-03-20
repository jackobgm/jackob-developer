@extends('layouts.app')

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@endsection('custom_css')

@section('content')

    <livewire:form-register />

@endsection('content')
