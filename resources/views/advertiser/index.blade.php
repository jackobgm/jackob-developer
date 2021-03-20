@extends('layouts.app')

@section('page-title', "Advertiser Dashboard")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/btcustom.css') }}">

<link rel="stylesheet" href="{{ asset('css/websiteadd.css') }}">

<link rel="stylesheet" href="{{ asset('css/advertiser.css') }}">

@endsection('custom_css')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12 mt-4">
            <livewire:heading2 site="advertiser" currentlySite="dashboard" />
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
                    <a href="#" class="dashboard" style="color: white;">+ Deposit Funds</a>
                </li>

                <hr style="background-color: white;">

                <li>
                    <a href="{{ route('advertiser.index') }}" class="orders active" style="color: #0090bf; background: #eff1f1; font-weight: 500;">Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('publisher.orders') }}" class="orders" style="color: white;">Orders</a>
                </li>

                <li>
                    <a href="#" class="earning" style="color: white;">Service Orders</a>
                </li>

                <li>
                    <a href="#" class="earning" style="color: white;">DADR Service Orders</a>
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
            
                <div class="col-md-4">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <th class="my-top-bar">
                                    Total purchases
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="card-big-text">0</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <div class="col-md-4">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <th class="my-top-bar">
                                    Completed Orders
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="card-big-text">0</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
                <div class="col-md-4">
                    <table class="table table-bordered text-center">
                        <tbody>
                            <tr>
                                <th class="my-top-bar">
                                    Active Orders
                                </th>
                            </tr>
                            <tr>
                                <td>
                                    <span class="card-big-text">0</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </div>

            <div class="col-12">
                <table class="table properties-table list-table">
                <tbody>
                    <tr>
                        <th class="my-top-bar" colspan="6">
                            Orders
                        </th>
                    </tr>
                    <tr class="text-muted text-uppercase">
                        <th width="12%">Order</th>
                        <th width="20%">Item</th>
                        <th width="13%">Price</th>
                        <th width="15%">Date</th>
                        <th width="15%">Due Date</th>
                        <th width="25%">Status</th>
                    </tr>
                </tbody>
                <tbody>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center" colspan="6">
                            <a href="#" class="btn-advertiser" style="color: #0068a3; border: 1px solid #ccc; font-weight: 400; padding: .5rem .75rem; font-size: 1rem; line-height: 1.25; border-radius: .25rem;">
                                Go to Orders Page
                            </a>
                        </td>
                    </tr>
                </tfoot>
            </table>
            </div>

        </div>

	</div>
</div>

@endsection('content')