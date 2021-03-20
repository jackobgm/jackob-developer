@extends('layouts.app')

@section('page-title', "Account Page")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/btcustom.css') }}">

<link rel="stylesheet" href="{{ asset('css/account.css') }}">

@endsection('custom_css')

@section('content')

@if(Session::has('userUpdated'))

<div style="background: green; padding: 1rem; margin: 1rem auto; text-align: center; color: white;">
	{{ Session::get('userUpdated') }}
</div>

@endif

<div class="section section-grey section-border-bottom div-account" style="padding: 20px 0">
	<div class="container">
		<div class="col-md-12 row" style="padding: 0">
			<div class="col-md-12 text-center" style="padding: 0">
				<h1 class="text-account-heading">My Account</h1>
			</div>
		</div>
	</div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="margin: 0 auto">
				<div class="col-md-12 noP">
					<table class="table table-bordered">
						<tbody>
							<tr class="bg-light">
								<td width="60%">Account Balance</td>
								<td width="40%" class="text-center text-success">
									<strong style="color: #5b922e !important;">$0</strong>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<hr>
				<div class="form">
					<form action="{{ route('users.update', $user->id) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="form-row">
							<div class="col-md-4">
								<label>First Name</label>
								<input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ $user->first_name }}" required>
							</div>
							<div class="col-md-4">
								<label>Last Name</label>
								<input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ $user->last_name }}" required>
							</div>
							<div class="col-md-4">
								<label>Phone</label>
								<input type="text" class="form-control" name="phone" placeholder="phone" value="{{ $user->phone }}">
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6">
								<label>Skype</label>
								<input type="text" class="form-control" name="skype" placeholder="Skype" value="{{ $user->skype }}">
							</div>
							<div class="col-md-6">
								<label>Facebook</label>
								<input type="text" class="form-control" name="facebook" placeholder="Facebook" value="{{ $user->facebook }}">
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email" value="{{ $user->email }}" required>
							</div>
							<div class="col-md-6">
								<label>Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password" value="" required>
							</div>
						</div>
						<hr>

						<div class="text-center">
							<button type="submit" class="form-control" name="update" class="btn-account-edit" style="background: #0090bf !important; border-color: #0088b4 #0088b4 #00698b !important; color: #fff; display: inline-block;">Update Account</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection('content')