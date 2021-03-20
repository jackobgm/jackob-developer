@extends('layouts/app')

@section('page-title', "Login - Amit's Website")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/login.css') }}">

@endsection('custom_css')

@section('content')

@if(Session::has('successRegister'))

    <div style="color: #155724; background-color: #d4edda; border-color: #c3e6cb; padding: .75rem 1.25rem; border: 1px solid transparent; border-radius: .25rem; margin: 1rem auto; text-align: center;">
        <span>{{ Session::get('successRegister') }}</span>
    </div>

@endif

<div class="loginC" id="fean">
        <div class="loginCF">
            <h2 class="titleF">
                Sign In
            </h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <label for="email" class="label">Email</label>
                <input type="email" name="email" placeholder="Example: info@yourcompany.com" class="input">
                @error('email')
                    <small class="invalid-feedback" role="alert">
                        <strong style="color: #dc3545; display: block; margin-bottom: 1rem;">{{ $message }}</strong>
                    </small>
                @enderror

                <label for="password" class="label">Password</label>
                <input type="password" name="password" placeholder="Password" class="input">
                @error('password')
                    <small class="invalid-feedback" role="alert">
                        <strong style="color: #dc3545; display: block; margin-bottom: 1rem;">{{ $message }}</strong>
                    </small>
                @enderror

                <a href="{{ route('password.request') }}" class="lostP">Lost Password?</a>

                <div class="submit">
                    <button type="submit" id="btn-login" class="btn" style="cursor: pointer;">
                        Login Now
                    </button>
                </div>

            </form>
        </div>

        <div class="formStarted">
            <h2 class="titleF">
                Create New Account
            </h2>

            <livewire:form-register />

        </div>

</div>

    <div class="learn tac">
        <h2 class="learn__title">
            Want To Learn More?
        </h2>
        <p class="learn__description">
            Learn to use the BuySellGuestPost suite of products and tools with our easy-to-follow guides, articles and
            support documents.
        </p>
        <div class="learn__more">
            <div class="learnCard">
                <div class="learTitle">
                    <div class="iconLearn">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3>Read Articles</h3>
                </div>
                <p>
                    The latest news about the guest blogging and the BuySellGuestPost line of products and services.
                </p>
            </div>
            <a class="learnCard" id="linkM">
                <div class="learTitle">
                    <div class="iconLearn">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <h3>View Marketplace</h3>
                </div>
                <p>
                    Get quality contextual backlinks, view guest blogging sites marketplace that includes 2500+ sites.
                </p>
            </a>
            <div class="learnCard">
                <div class="learTitle">
                    <div class="iconLearn">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Support Doc</h3>
                </div>
                <p>
                    Need any help regarding buying or selling guest posts, our experts ready to help you 24/7.
                </p>
            </div>
        </div>

@endsection('content')

@section('custom_js')

    <script>

        const $btnRegister = document.getElementById('btn-register');
        const $btnLogin = document.getElementById('btn-login');
        

        $btnRegister.addEventListener('click', () => {
            
            $btnRegister.innerHTML = `<img src="http://website.test/img/loaderButton.svg" alt="loader" style="height: 20px; width: 20px;"> Redirecting...`;
        });

        $btnLogin.addEventListener('click', () => {
           
            $btnLogin.innerHTML = `<img src="http://website.test/img/loaderButton.svg" alt="loader" style="height: 20px; width: 20px;"> Loggin in...`;
        });

    </script>

@endsection('custom_js')