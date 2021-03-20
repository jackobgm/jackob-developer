@extends('layouts.app')

@section('page-title', "Publisher Dashboard")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/btcustom.css') }}">

<link rel="stylesheet" href="{{ asset('css/websiteadd.css') }}">

<link rel="stylesheet" href="{{ asset('css/orders.css') }}">

@endsection('custom_css')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-12 mt-4">
            <livewire:heading2 site="publisher" currentlySite="websites" />
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
                    <a href="{{ route('publisher.index') }}" class="dashboard" class="orders" style="color: white;">Dashboard</a>
                </li>

                <li>
                    <a href="{{ route('publisher.websites') }}" class="dashboard active" style="color: #0090bf; background: #eff1f1; font-weight: 500;">Websites</a>
                </li>

                <hr style="background-color: white;">

                <li>
                    <a href="{{ route('publisher.orders') }}" class="orders" style="color: white;">Orders</a>
                </li>

                <li>
                    <a href="{{ route('publisher.earning') }}" class="orders" style="color: white;">Earning</a>
                </li>

            </ul>
            <a href="{{ route('da-dr-increase-service') }}"><img src="https://www.buysellguestpost.com/assets/images/j.jpg" style="width: 100%;margin-top: 20px;margin-bottom: 20px;" alt=""></a> 

            <script>
                $(".sidebar-list .websites").addClass("active");
                $('.sidebar-list .websites').css("color:#0090BF;");
                $(".sidebar-list .dashboard,.sidebar-list .inbox,.sidebar-list .ordesidebar-list .earning").css('color', 'white');
            </script>

        </div>

        <div class="col-md-10" style="padding: 0 0 0 40px">
        	
        	<div class="col-md-12">
        		
        		<table class="table table-bordered properties-table list-table">
                <tbody>
                    <tr>
                        <th class="my-top-bar">
                            Your Properties
                        </th>
                        <th class="my-top-bar">
                            <select name="filter_by_category" id="filter_by_category" class="form-select">
                                <option selected>Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->name }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </th>
                        <th class="my-top-bar">
                            <select name="order_by_price" id="order_by_price" class="form-select">
                                <option selected>Price</option>
                                <option value="lowToHigh">Low to High</option>
                                <option value="highToLow">High to Low</option>
                            </select>
                        </th>
                        <th class="my-top-bar">
                            <div class="">
                                <form action="{{ route('publisher.websites') }}" method="GET">
                                    <input type="text" name="search" id="search" placeholder="Search" class="form-control">
                                </form>
                            </div>
                        </th>
                    </tr>
                    <tr class="text-uppercase">
                        <th width="35%">Website</th>
                        <th width="16%">Other Details</th>
                        <th width="16%">
                            <select name="order_by_status" id="order_by_status" class="form-select" style="border: unset; outline: unset;">
                                <option selected>Status</option>
                                @foreach($status as $statu)
                                    <option value="{{ $statu->name }}">
                                        {{ $statu->name }}
                                    </option>
                                @endforeach
                            </select>
                        </th>
                        <th>Actions</th>
                    </tr>
                </tbody>
                <tbody>
                    
                </tbody>
            </table>
        		
        	</div>

        </div>

    </div>
</div>

@endsection('content')