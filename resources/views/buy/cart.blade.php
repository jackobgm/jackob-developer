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
							<li id="step-1" class="activeP">
								<span class="no">Step 1</span>
								<p>Review Cart & Provide Details</p>
							</li>
							<li id="step-2">
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
				<div class=" row cart-step cartsec" style="display: flex;">
					<div class="col-md-9 ">
						<div class="col-md-12 " style="padding: 10px; background: #ECF1F3; margin-bottom: 6rem;">
							<div class="col-md-12  cart-contents">
								<div class="col-md-12  text-right" style="padding: 0px 5px 5px 5px; font-size: 14px;">
								</div>
							</div>
                            <form id="form-payment" action="{{ route('step-2') }}">
							<div class="col-md-12  cart-table-contents">
								<div class="form-row">
									<div class="col-md-6">
										<label>Name</label>
										<input type="text" class="form-control" name="name" placeholder="Name" required/>
									</div>
									<div class="col-md-6">
										<label>Email</label>
										<input type="text" class="form-control" name="email" placeholder="email@example.com" required/>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<label>Website URL:</label>
										<input type="text" class="form-control" name="websiteurl1" placeholder="example.com" required/>
									</div>
									<div class="col-md-6">
										<label>Keywords: Seprate with commas(,)</label>
										<input type="text" class="form-control" name="separetecommas1" placeholder="e,x,a,m,p,l,e" required/>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<label>Website URL:</label>
										<input type="text" class="form-control" name="websiteurl2" placeholder="example.com" required/>
									</div>
									<div class="col-md-6">
										<label>Keywords: Seprate with commas(,)</label>
										<input type="text" class="form-control" name="separetecommas2" placeholder="e,x,a,m,p,l,e" required/>
									</div>
								</div>
								<div class="form-row">
									<div class="col-md-6">
										<label>Website URL:</label>
										<input type="text" class="form-control" name="websiteurl3" placeholder="example.com" required/>
									</div>
									<div class="col-md-6">
										<label>Keywords: Seprate with commas(,)</label>
										<input type="text" class="form-control" name="separetecommas3" placeholder="e,x,a,m,p,l,e" required/>
									</div>
								</div>
								<div class="col-md-12 noP">
									<label>Special Requirement:</label>
								</div>
								<div class="mce-edit-area mce-container mce-panel mce-stack-layout-item mce-last">
									<textarea name="message" id="message" style="width: 100%; height: 150px; display: block;"></textarea>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" style="padding-left: 10px; position: relative;">
						<div class="scrollBox">
							<div class="checkoutBox">
								<!--<a href="{{ route('step-2') }}"><button class="btn-span-checkout">
                    Go to checkout
                </button></a>-->
                                <button type="submit" class="btn btn-success cart-btn text-center" id="placeOrder">Complete My Order</button><br>
                                </form>
								<table class="table checkTable">
									<tbody>
										<tr>
											<td width="60%">
												Service
											</td>
											<td class="text-right">
												Basic
											</td>
										</tr>
										<tr style="font-size: 18px;">
											<td>Total</td>
											<td class="text-right">
												$75
												<span id="totalPrice"></span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<span class="text-danger">
								<br>
								<strong style="color: #dc3545">NOTE:</strong>
								No adult, Sexual, Gambling, Casino or any type of illegal links.
							</span>
							Need Help?
							<a href="{{ route('contact.index') }}">Contact us</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

</div>


<!--<script src="{{ asset('js/stripe.js') }}"></script>-->
@endsection('content')

@section('custom_js')



@endsection('custom_js')
