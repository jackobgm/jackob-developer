@extends('layouts.app')

@section('page-title', "Publisher Dashboard")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/btcustom.css') }}">


<link rel="stylesheet" href="{{ asset('css/form-steps.css') }}">
<link rel="stylesheet" href="{{ asset('css/websiteadd.css') }}">

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
                    <a href="{{ route('publisher.index') }}" class="dashboard" style="color: white;">Dashboard</a>
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
        
        <div class="col-12 col-md-10 mt-4">
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

                <div class="" id="form-step-2" style="display: none; flex-direction: column; justify-content: flex-start; margin: 0 3rem;">

                    <h3 class="step1-title">Details</h3>
                    <div style="flex-direction: row; justify-content: flex-start;">
                        <label>Your role in website *</label>
                        <div class="form-check form-check">
                            <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="option1" checked>
                            <label class="form-check-label" for="inlineRadio1">Author / Contributer</label>
                          </div>
                          <div class="form-check form-check">
                            <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Website Owner</label>
                          </div>
                    </div>

                    <div class="form-group" style="margin: 2rem 0;">
                        <label for="link_types">Link Type *</label>
                        <select name="link_types" id="link_types" class="form-select" style="display: block">
                            @foreach($linkTypes as $linkType)
                                <option value="{{ $linkType->name }}">{{ $linkType->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="languages">Website Language *</label>
                        <select name="languages" id="languages" class="form-select" style="display: block">
                            @foreach($languages as $language)
                                @if($language->name != 'All')
                                    <option value="{{ $language->name }}">{{ $language->name }}</option>  
                                @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="my-4">
                        <label for="categories" style="font-weight: bold">Select Categories: (Up to 3 Categories)*</label>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Automotive">
                                    <label class="form-check-label" for="inlineCheckbox1">Automotive</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Educatión">
                                    <label class="form-check-label" for="inlineCheckbox2">Educatión</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Gaming">
                                    <label class="form-check-label" for="inlineCheckbox3">Gaming</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Health">
                                    <label class="form-check-label" for="inlineCheckbox4">Health</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Podcasts">
                                    <label class="form-check-label" for="inlineCheckbox5">Podcasts</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Technology">
                                    <label class="form-check-label" for="inlineCheckbox6">Technology</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Web">
                                    <label class="form-check-label" for="inlineCheckbox7">Web Design & Development</label>
                                  </div>
                            </div>

                            <div class="col-md-4">

                                <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="Business">
                                    <label class="form-check-label" for="inlineCheckbox8">Business & Finance</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="Family">
                                    <label class="form-check-label" for="inlineCheckbox9">Family & Parenting</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="General">
                                    <label class="form-check-label" for="inlineCheckbox10">General: Multi-Niche</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="Home">
                                    <label class="form-check-label" for="inlineCheckbox11">Home & Architecture</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="Premium">
                                    <label class="form-check-label" for="inlineCheckbox12">Premium Websites</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="Travel">
                                    <label class="form-check-label" for="inlineCheckbox13">Travel</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox14" value="Weddings">
                                    <label class="form-check-label" for="inlineCheckbox14">Weddings</label>
                                  </div>

                            </div>

                            <div class="col-md-4">

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox15" value="Cryptocurrency">
                                    <label class="form-check-label" for="inlineCheckbox15">Cryptocurrency</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox16" value="Food">
                                    <label class="form-check-label" for="inlineCheckbox16">Food & Drink</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox17" value="Government">
                                    <label class="form-check-label" for="inlineCheckbox17">Government & Politics</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox18" value="Pets">
                                    <label class="form-check-label" for="inlineCheckbox18">Pets</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox19" value="Seo">
                                    <label class="form-check-label" for="inlineCheckbox19">SEO & Digital Marketing</label>
                                  </div>
                                  <div class="form-check form-check">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox20" value="Visual">
                                    <label class="form-check-label" for="inlineCheckbox20">Visual Arts & Design</label>
                                  </div>

                            </div>


                        </div>

                    </div>

                    <div class="button-row mt-4" style="display: flex; justify-content: space-between; padding: 0 1rem;">

                        <button class="btn btn-primary btn-lg js-btn-prev" style="color: #FFFFFF; width: 160px;" type="button" title="Prev">Prev</button>

                        <button class="btn btn-primary btn-lg ml-auto js-btn-next" type="button" id="btn-next-2" style="color: #FFFFFF; width: 160px;" title="Next">Next</button>
                    </div>

                </div>

                <div class="" id="form-step-3" style="display: none; flex-direction: column; justify-content: flex-start; margin: 0 3rem;">

                    <h3 class="step1-title">Requirements</h3>

                    <div class="form-row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                      </div>
                    </div>

                    <div class="button-row mt-4" style="display: flex; justify-content: space-between; padding: 0 1rem;">

                        <button class="btn btn-primary btn-lg js-btn-prev" style="color: #FFFFFF; width: 160px;" type="button" title="Prev">Prev</button>

                        <button class="btn btn-primary btn-lg ml-auto js-btn-next" type="button" id="btn-next-3" style="color: #FFFFFF; width: 160px;" title="Next">Next</button>
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
    const $btnNext2 = document.getElementById('btn-next-2');

    const $step1 = document.getElementById('step_1');
    const $step2 = document.getElementById('step_2');
    const $step3 = document.getElementById('step_3');

    const $formStep1 = document.getElementById('form-step-1');
    const $formStep2 = document.getElementById('form-step-2');
    const $formStep3 = document.getElementById('form-step-3');

    $step1.addEventListener('click', () => {
        $step2.classList.remove('js-active');
        $formStep1.style.display = 'flex';
        $formStep2.style.display = 'none';
    });

    $step2.addEventListener('click', () => {
        $step3.classList.remove('js-active');
        $step2.classList.add('js-active')
        $formStep2.style.display = 'flex';
        $formStep1.style.display = 'none';
        $formStep3.style.display = 'none';
    });

    $btnNext1.addEventListener('click', () => {
        $step2.classList.add('js-active')
        $formStep1.style.display = 'none';
        $formStep2.style.display = 'flex';

    });

    $btnNext2.addEventListener('click', () => {
        $step3.classList.add('js-active')
        $formStep1.style.display = 'none';
        $formStep2.style.display = 'none';
        $formStep3.style.display = 'flex';

    });

</script>

@endsection('custom_js')