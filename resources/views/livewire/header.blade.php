<nav class="navigation" id="nav">
    <div class="nav">
        <div class="cMenuT">
            <a href="/">
                <img src="{{ asset('img/logo.png') }}" class="nav__link--logo" alt="Logo Website">
            </a>
            <div id="menuT" class="navigation__menuT">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <div class="contMenu desactive" id="contNav">
            <div class="nav__link">
                <ul class="nav__link--navbar">
                    <li class="navbar">
                        <a class="navbar__link" href="{{ route('sell-guest-posts') }}">Sell Guest Posts</a>
                    </li>
                    <li class="navbar">
                        <a class="navbar__link" href="{{ route('marketplace') }}">Marketplace</a>
                    </li>
                    <li class="navbar">
                        <a class="navbar__link" href="{{ route('guest-posting-services') }}">Guest Posting Services</a>
                    </li>
                    <li class="navbar">
                        <a class="navbar__link" href="{{ route('da-dr-increase-service') }}">Increase DA/DR</a>
                    </li>
                </ul>
            </div>
            @php
                $cont = \DB::table('carts')
                    ->count();
                //return dd($cont);
            @endphp
            <div class="nav__cardAndLogin">
                <!--<ul class="nav__cardAndLogin--ul">-->
                    <ul style="display: flex; align-items: center;">
                    <a class="cart" href="{{ route('cart.show', $cont) }}">



                        <li class="navbar"><i class="fas fa-cart-plus cart"></i><a class="navbar__link cart-item" href="{{ route('cart.show', $cont) }}" style="border-right: 1px solid #123147;">{{ $cont }} item</a></li>
                    <!--</a>-->
                    @guest
                        <li class="login"><a href="{{ route('login') }}" style="cursor: pointer;">Login</a></li>
                    @endguest
                    @auth
                        <li class="navbar">
                            <a role="button" id="userButton" class="navbar__link" style="cursor: pointer;">
                                {{ auth()->user()->first_name }} <i class="fas fa-caret-down"></i>
                            </a>
                        </li>

                        <div class="dropdown-user" style="display: none;">
                            <div class="buyer-seller">
                                <a href="{{ route('advertiser.index') }}">Buyer</a>
                                <a href="{{ route('publisher.index') }}">Seller</a>
                            </div>
                            <a href="{{ route('user.edit') }}">My Profile</a>
                            <a href="{{ route('advertiser.index') }}">Transactions History</a>
                            <a href="">Balance: $0</a>
                            <div>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                            </div>
                        </div>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
