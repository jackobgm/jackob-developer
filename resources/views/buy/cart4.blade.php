@extends('layouts.app')

@section('page-title', "Cart")

@section('custom_js_head')

<script src="https://js.stripe.com/v3/"></script>

@endsection('custom_js_head')

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/buy.css') }}">

<link rel="stylesheet" href="{{ asset('css/cart2.css') }}">

@endsection('custom_css')

@section('content')

<div class="container-fluid noP" style="margin-top: 4rem;">

	<div class="section section-grey section-border-bottom" style="padding: 20px 0; margin-bottom: 2rem;">
		<div class="container">
			<div class="col-md-12 noP row">
				<div class="col-md-12 noP">
					<h1 class="heading2">Cart</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="section section-border-bottom">
		<div class="container">
			<div>
				<div class="col-md-12 noP">
					<div class="steps-sec">
						<ul class="step-menu">
							<li id="step-1">
								<span class="no">Step 1</span>
								<p>Review Cart & Provide Details</p>
							</li>
							<li id="step-2" class="activeP">
								<span class="no">Step 2</span>
								<p>Select payment method & confirm order</p>
							</li>
							<li id="step-3">
								<span class="no">Step 3</span>
								<p>Order complete!</p>
							</li>
						</ul>
					</div>
				</div>
				<div id="paymentSec" class="col-md-12 noP row">
				<div class="col-md-7 noP" style="padding-right:80px;">

				<form id="form-payment" action="{{ route('payWithPayPal1') }}" method="get">


					<table class="table table-bordered cart-table">
					<tbody><tr>
					<th>
					Select Payment Method
					</th>
					</tr>
					<tr id="payOpPaypal">
					<td>
					<label class="payment-option">
					<input type="radio" id="radioPayPal" checked> <img height="30" src="{{ asset('img/paypal2.png') }}">
					</label>
					</td>
					</tr>
					</tbody></table>
					<p style="padding-top:150px;">
					<a href="{{ route('plan-standard') }}">
					<span class="btn btn-primary backtoOne" style="color: #FFF;">« Back To Step 1</span>
                    </a>
					</p>
					</div>
					<div class="col-md-5 noP">
					<table class="table table-bordered cart-table">
					<tbody><tr>
					<th colspan="2">
					Order Summery
					</th>
					</tr>
					<tr>
					<td width="70%">
					<span class="cart-items">service price</span>
					</td>
					<td align="center">
					$<span class="gp_price">150</span>
					</td>
					</tr>
					<tr class="bg-light">
					<td>
					<strong>Sub Total:</strong>
					</td>
					<td align="center" style="font-weight:700;" class="totalPrice">$150</td>
					</tr>
					<tr id="pendingpay">
					<td>
					Paypal Fee
					</td>
					<td align="center" class="pendingtopay">$0</td>
					</tr>
					<tr id="paypalfeeRow">
					<td id="fee">
					Handling Fee
					</td>
					 <td align="center" class="paymentFee" id="paymentFee">
						 $0
					</td>
					</tr>
					<tr class="bg-light">
					<td style="line-height:28px;">
					<strong id="changeTextBalnce">Total</strong>
					</td>
					<td align="center" class="org-color">
					<strong style="font-size:20px;" class="finalTotal">$150</strong>
					</td>
					</tr>
					</tbody></table>

						<!--<input type="hidden" id="amount" name="amount" value="75"/>
						<input type="hidden" id="website" name="website" value="Basic"/>
						<input type="hidden" id="prices" name="prices" value="75"/>
						<input type="hidden" id="description" name="description" value="Services Basic"/>-->

					<div class="col-md-12 noP">
					<button type="submit" class="btn btn-success cart-btn text-center" id="placeOrder">Complete My Order</button></br>
                </form>

                <p>By placing order you agree with <a href="{{ route('privacy') }}" target="_blank" style="color: #0068a3;">privacy policy</a> &amp; <a href="{{ route('refound-policy') }}" target="_blank" style="color: #0068a3;">refund policy</a></p>
				</div>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>

</div>



@endsection('content')

@section('custom_js')



@endsection('custom_js')
