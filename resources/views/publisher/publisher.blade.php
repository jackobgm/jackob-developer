@extends('layouts.app')

@section('page-title', "Publisher Dashboard")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/btcustom.css') }}">

<link rel="stylesheet" href="{{ asset('css/websiteadd.css') }}">

<link rel="stylesheet" href="{{ asset('css/form-steps.css') }}">

@endsection('custom_css')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <livewire:heading />
        </div>

        <div class="col-md-2 dashboard_sidebar">
            <style>
                .sidebar-list li a:hover{
                    color: black !important;
                                }
            </style>
            <ul class="sidebar-list">

                <li>
                    <strong>Account Balance</strong>
                    <br>
                    <span style="color:yellow !important;" class="fa-2x text-success">$0</span>
                </li>

                <hr style="background-color: white;">

                <li>
                    <a href="{{ route('publisher') }}" class="dashboard" style="color: white;">Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('publisher.websites') }}" class="websites active">Websites</a>
                </li>

                <hr style="background-color: white;">

                <li>
                    <a href="{{ route('publisher.orders') }}" class="orders" style="color: white;">Orders</a>
                </li>

                <li>
                    <a href="{{ route('publisher.earning') }}" class="earning" style="color: white;">Earning</a>
                </li>

            </ul>
            <a href="{{ route('da-dr-increase-service') }}"><img src="https://www.buysellguestpost.com/assets/images/j.jpg" style="width: 100%;margin-top: 20px;margin-bottom: 20px;" alt=""></a> 

            <script>
                $(".sidebar-list .websites").addClass("active");
                $('.sidebar-list .websites').css("color:#0090BF;");
                $(".sidebar-list .dashboard,.sidebar-list .inbox,.sidebar-list .ordesidebar-list .earning").css('color', 'white');
            </script>

            </div>
        
        <div class="col-12 col-md-10 text-center mt-4">
            <h1 style="font-size: 42px;">
                <strong style="color: #000;">Submit New Website</strong>
            </h1>

            <livewire:form-progress />

            <form role="form" action="" method="POST">
                @csrf

                <div class="form-step" id="form-step-1">
                    <h3 class="step1-title">Website</h3>
                    <input type="text" name="name" id="name" class="multisteps-form__input" placeholder="http://example.com">
                    <button type="button" class="step-next-btn" id="btn-next-1">Next</button>
                </div>

                <div class="form-step" id="form-step-2" style="display: none; align-items: flex-start;">
                    <div class="form-group" style="display: flex">

                        <label>Your role in website *</label>

                        <input class="multisteps-form__input" name="role" value="1" checked="" id="owner_type_1" type="radio">

                        <label for="owner_type_1">Author / Contributer</label>

                        <input class="multisteps-form__input" name="role" value="2" id="owner_type_2" type="radio"> <label for="owner_type_2">Website Owner</label>

                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection('content');

@section('custom_js')

<script>
    
    const $btnNext1 = document.getElementById('btn-next-1');

    const $step1 = document.getElementById('step_1');
    const $step2 = document.getElementById('step_2');

    const $formStep1 = document.getElementById('form-step-1');
    const $formStep2 = document.getElementById('form-step-2');

    $step1.addEventListener('click', () => {
        $step2.classList.remove('js-active');
        $formStep1.style.display = 'flex';
        $formStep2.style.display = 'none';
    });

    $btnNext1.addEventListener('click', () => {
        $step2.classList.add('js-active')
        $formStep1.style.display = 'none';
        $formStep2.style.display = 'flex';

    });

</script>

@endsection('custom_js')