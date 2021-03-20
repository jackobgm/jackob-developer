@extends('layouts.app')

@section('page-title', "Publisher Dashboard")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/btcustom.css') }}">

<link rel="stylesheet" href="{{ asset('css/websiteadd.css') }}">

<link rel="stylesheet" href="{{ asset('css/advertiser.css') }}">

<style>
    body {
        font-size: 14px;
    }

    .withdraw-btn {
        display: inline-block;
        padding: 4px 15px;
        border: 1px solid #D7D7D7;
        background: #FAFAFA;
        margin-left: 15px;
        cursor: pointer;
        border-radius: 4px;
        font-weight: 700;
        color: #1F4967;
    }

    .withdraw-btn:hover {
        background: #EEF0F2;
    }

    .properties-table td, .properties-table th {
    border: 1px solid #e9ecef;
    }
</style>

@endsection('custom_css')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12 mt-4">
            <livewire:heading2 site="advertiser" currentlySite="earning" />
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
                    <a href="{{ route('publisher.index') }}" class="dashboard" class="orders active" style="color: white;">Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('publisher.websites') }}" class="dashboard" style="color: white;">Websites</a>
                </li>

                <hr style="background-color: white;">

                <li>
                    <a href="{{ route('publisher.orders') }}" class="orders" style="color: white;">Orders</a>
                </li>

                <li>
                    <a href="{{ route('publisher.earning') }}" class="orders" style="color: #0090bf; background: #eff1f1; font-weight: 500;">Earning</a>
                </li>

            </ul>
            <a href="{{ route('da-dr-increase-service') }}"><img src="https://www.buysellguestpost.com/assets/images/j.jpg" style="width: 100%;margin-top: 20px;margin-bottom: 20px;" alt=""></a> 

            <script>
                $(".sidebar-list .websites").addClass("active");
                $('.sidebar-list .websites').css("color:#0090BF;");
                $(".sidebar-list .dashboard,.sidebar-list .inbox,.sidebar-list .ordesidebar-list .earning").css('color', 'white');
            </script>

        </div>

        <div class="col-10">
            <div class="col-12 row">
            
                <div class="col-md-3">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <th class="my-top-bar">
                                    Net Income
                                    <a href="#" style="color: yellow !important; float: right;">Details</a>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="card-big-text">$0.00</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <div class="col-md-3">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <th class="my-top-bar">
                                    Pending Clearance
                                    <a href="#" style="color: yellow !important; float: right;">Details</a>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="card-big-text">$0.00</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <div class="col-md-3">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <th class="my-top-bar">
                                    Available for Withdrawal
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="card-big-text">$0.00</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-3">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <th class="my-top-bar">
                                    Pending Withdrawal
                                    <a href="#" style="color: yellow !important; float: right;">Details</a>
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="card-big-text">$0.00</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-12 mb-4">
                    <strong class="text-success">$0</strong>
                    are available for withdrawal.
                    <p>
                        <br>
                        Methods:
                        <span class="withdraw-btn" data-value="paypal">
                            <img src="{{ asset('img/paypal.png') }}" alt="paypal" style="width: 40px;">
                        </span>
                    </p>
                </div>
            
            </div>

            <div class="col-12">

            <table class="table properties-table list-table">
                <tbody>
                    <tr>
                        <th class="my-top-bar" colspan="5">
                            Earning Details
                        </th>
                    </tr>
                    <tr class="">
                        <th width="43%">For</th>
                        <th width="15%">Date</th>
                        <th width="17%">Clearance Date</th>
                        <th width="15%">Status</th>
                        <th width="15%">Amount</th>
                    </tr>
                </tbody>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center" colspan="6">
                            
                        </td>
                    </tr>
                </tfoot>
            </table>
            </div>

        </div>

	</div>
</div>

@endsection('content')