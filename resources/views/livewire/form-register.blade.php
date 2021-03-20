<form action="{{ route('register') }}" method="POST" autocomplete="off">
	@csrf
    <div class="names">

        <div class="cFName">
            <label for="first_name" class="label">First Name</label>
            <input type="text" name="first_name" id="first_name" placeholder="First Name" class="input" value="{{ old('first_name') }}">
            @error('first_name')
                <small class="error" role="alert">
                    <strong style="color: #dc3545; display: block; margin-bottom: 1rem;">{{ $message }}</strong>
                </small>
            @enderror
        </div>

        <div class="lFName">
            <label for="last_name" class="label">Last Name</label>
            <input type="text" name="last_name" id="last_name" placeholder="Last Name" class="input" value="{{ old('last_name') }}">
            @error('last_name')
                <small class="error" role="alert">
                    <strong style="color: #dc3545; display: block; margin-bottom: 1rem;">{{ $message }}</strong>
                </small>
            @enderror
        </div>

    </div>

    <label for="email" class="label">Email</label>
    <input type="email" name="email" id="email" placeholder="Example: info@yourcompany.com" class="input" value="{{ old('email') }}">
    @error('email')
        <small class="error" role="alert">
            <strong style="color: #dc3545; display: block; margin-bottom: 1rem;">{{ $message }}</strong>
        </small>
    @enderror

    <label for="password" class="label">Password</label>
    <input type="password" name="password" id="password" placeholder="Password" class="input">
    @error('password')
        <small class="error" role="alert">
            <strong style="color: #dc3545; display: block; margin-bottom: 1rem;">{{ $message }}</strong>
        </small>
    @enderror

    <span>
        By Registering, You Agree To <a href="/privacy" class="formLinks">The Privacy Policy</a>, <a
            href="/refunds" class="formLinks">Refund Policy</a> & <a href="/term"
            class="formLinks">Terms Of
            Services.</a>
    </span>

    <div class="submit">
        <button type="submit" id="btn-register" class="btn" style="cursor: pointer;">
        	Register Now
    	</button>
    </div>

</form>
