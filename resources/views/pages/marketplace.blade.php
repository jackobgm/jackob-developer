@extends('layouts.app')

@section('page-title', "Marketplace - Amit's Website")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/mp.css') }}">

@endsection('custom_css')

@section('content')

<header class="main header" id="fean">
    <h2 class="titleMp">
        Marketplace
    </h2>
    <form class="search">
        <input type="text" name="shearch" id="search" class="inputText" placeholder="Example: example.com">
        <button class="iSearch">
            <i class="fas fa-search"></i>
        </button>
    </form>
</header>
<div class="main filter">
    <div class="categories">
        <strong class="strongC">Categories / <span class="spanC">see all <i
                    class="fas fa-angle-double-right"></i></span></strong>
        <form action="" class="ulC" method="POST">
            @csrf
            @foreach($slugs as $key => $slug)

                <a href="{{ route('buy.category', $slug) }}" class="categorie">
                    {{ $categories[$key]->name }}
                </a>

            @endforeach
        </form>
    </div>
    <div class="filters">
        <strong class="strongF">
            <div class="iconF">
                <i class="fas fa-filter"></i>
            </div>
            Refine Results
        </strong>
        <form action="{{ route('buy.marketplace') }}" class="form"><!-- &amp; -->
            <div class="categoriesF">
                <label>Categories</label>
                <select autocomplete="off" name="categories">
                    <option value="All">All</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <label for="country">Country TDLs</label>
            <select autocomplete="off" name="tlds">
                @foreach($tlds as $tld)
                    <option value="{{ $tld->name }}">{{ $tld->name }}</option>
                @endforeach
            </select>
            <label for="language">Language</label>
            <select autocomplete="off" name="languages">
                @foreach($languages as $language)
                    <option value="{{ $language->name }}">{{ $language->name }}</option>
                @endforeach
            </select>
            <div class="range">
                <div class="upR">
                    <h3 class="titleRange">
                        Domain Authority
                    </h3>
                    <input type="number" class="numberR inputF" value="12" min="0" max="100" id="numberO">
                </div>
                <input type="range" name="da" defaul="0" class="rangeI inputF" max="100" id="rangeO" value="12">
            </div>
            <div class="range">
                <div class="upR">
                    <h3 class="titleRange">
                        Page Authority
                    </h3>
                    <input type="number" class="numberR inputF" value="12" min="0" max="100" id="numberT">
                </div>
                <input type="range" name="pa" defaul="0" class="rangeI inputF" max="100" id="rangeT" value="12">
            </div>
            <div class="cBF">
                <button class="btn btnF">
                    <i class="fas fa-search"></i> Search
                </button>
            </div>
        </form>
    </div>
</div>
<img src="{{ asset('img/dadr.jpg') }}" alt="Da/Dr" class="imgF main">
<div class="main tables">
    <!-- First Block -->
    <div class="firstB">
        <!-- First Table -->
        <div class="fT">
            <h4 class="titleT"><i class="fas fa-dollar-sign"></i> Top Selling Sites</h4>
            <form>
                <table class="table">
                    <tbody class="bodyT">
                        <thead class="headT">
                            <tr>
                                <th>Website</th>
                                <th>DA</th>
                                <th>PA</th>
                                <th>Link Type</th>
                                <th>Price</th>
                                <th>Buy Guest Post</th>
                            </tr>
                        </thead>
                        @foreach($websiteTops as $websiteTop)
                        <tr class="tr">
                            <td>{{ $websiteTop->web_name }}</td>
                            <td>{{ $websiteTop->da }}</td>
                            <td>{{ $websiteTop->pa }}</td>
                            <td>{{ $websiteTop->link_type }}</td>
                            <td>{{ $websiteTop->price }}$</td>
                            <td>
                                <button class="btnT">
                                    Add to cart
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        <!-- Second Table -->
        <div class="sT">
            <h4 class="titleT"><i class="fas fa-clock"></i> Recomended</h4>
            <form>
                <table class="table">
                    <tbody class="bodyT">
                        <thead class="headT">
                            <tr>
                                <th>Website</th>
                                <th>DA</th>
                                <th>PA</th>
                                <th>Link Type</th>
                                <th>Price</th>
                                <th>Buy Guest Post</th>
                            </tr>
                        </thead>
                        @foreach($websiteRecommends as $websiteRecommend)
                        <tr class="tr">
                            <td>{{ $websiteRecommend->web_name }}</td>
                            <td>{{ $websiteRecommend->da }}</td>
                            <td>{{ $websiteRecommend->pa }}</td>
                            <td>{{ $websiteRecommend->link_type }}</td>
                            <td>{{ $websiteRecommend->price }}$</td>
                            <td>
                                <button class="btnT">
                                    Add to cart
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
            <form>
                <button class="btnT tY">
                    View all website <i class="fas fa-angle-double-right"></i>
                </button>
            </form>
        </div>
    </div>
    <!-- Two Block -->
    <div class="twoB">
        <div class="fT">
            <h4 class="titleT"><i class="far fa-chart-bar"></i> HIGH AUHTORITY & LOW BUDGET</h4>
            <form>
                <table class="table">
                    <tbody class="bodyT">
                        <thead class="headT">
                            <tr>
                                <th>Website</th>
                                <th>DA</th>
                                <th>PA</th>
                                <th>Link Type</th>
                                <th>Price</th>
                                <th>Buy Guest Post</th>
                            </tr>
                        </thead>
                        @foreach($websiteHighs as $websiteHigh)
                        <tr class="tr">
                            <td>{{ $websiteHigh->web_name }}</td>
                            <td>{{ $websiteHigh->da }}</td>
                            <td>{{ $websiteHigh->pa }}</td>
                            <td>{{ $websiteHigh->link_type }}</td>
                            <td>{{ $websiteHigh->price }}$</td>
                            <td>
                                <button class="btnT">
                                    Add to cart
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        <div class="sT">
            <h4 class="titleT"><i class="fas fa-star"></i> Top Selling Sites</h4>
            <form>
                <table class="table">
                    <tbody class="bodyT">
                        <thead class="headT">
                            <tr>
                                <th>Website</th>
                                <th>DA</th>
                                <th>PA</th>
                                <th>Link Type</th>
                                <th>Price</th>
                                <th>Buy Guest Post</th>
                            </tr>
                        </thead>
                        @foreach($websiteTops as $websiteTop)
                        <tr class="tr">
                            <td>{{ $websiteTop->web_name }}</td>
                            <td>{{ $websiteTop->da }}</td>
                            <td>{{ $websiteTop->pa }}</td>
                            <td>{{ $websiteTop->link_type }}</td>
                            <td>{{ $websiteTop->price }}$</td>
                            <td>
                                <button class="btnT">
                                    Add to cart
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
            <form>
                <button class="btnT tY">
                    View all website <i class="fas fa-angle-double-right"></i>
                </button>
            </form>
        </div>
    </div>
</div>
<div class="seoRank main">
    <img src="{{ asset('img/seo.png') }}" alt="SEO Google" class="imgR">
    <div class="contS">
        <h1 class="titleS">RANK #1 IN GOOGLE</h1>
        <ul>
            <li class="liS">
                <h3 class="titleLS">
                    <span>01.</span> BROWSE THE MARKETPLACE
                </h3>
                <p class="descriptionS">
                    If you have decided to rank your webpage, you don't need to research for relevant blogs, our
                    diggings will take you to marketplace where you browse hundreds of websites matching to your
                    requirements.
                </p>
            </li>
            <li class="liS">
                <h3 class="titleLS">
                    <span>02.</span> SELECT WEBSITE
                </h3>
                <p class="descriptionS">
                    We have scrutinized each and every website before publishing your guest post. You have assurance
                    against authenticity of hosting websites. You can pick your target website.

                </p>
            </li>
            <li class="liS">
                <h3 class="titleLS">
                    <span>03.</span> SETUP POST CONTENT
                </h3>
                <p class="descriptionS">
                    You pitch should be strong enough to reflect your services. Our quality writers will ensure that
                    each and every reader gets his/her answer through perfect content. You can also provide your own
                    content.
                </p>
            </li>
            <li class="liS">
                <h3 class="titleLS">
                    <span>04.</span> GOING LIVE
                </h3>
                <p class="descriptionS">
                    We are always on target when it comes to deliver results on time and our posts will be live
                    within given time on your
                    targeted websites.
                </p>
            </li>
        </ul>
    </div>
</div>
<div class="miniArticles main">
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="far fa-file-alt"></i>
            </div>
            <h3 class="titleArticle">
                HIGH-QUALITY CONTENT
            </h3>
        </div>
        <div class="descriptionArticle">
            In case you use our writers then they will be fully conscious and would give proofreading before
            publishing anything on your website. It will be our responsibility that only quality is discussed
            through given pitch.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="fas fa-globe"></i>
            </div>
            <h3 class="titleArticle">
                WEB 2.0 SUPPORTED
            </h3>
        </div>
        <div class="descriptionArticle">
            We don't have any issues if you are running web 2.0 websites (blogger, WordPress, Tumblr, etc.) nor
            guests websites will
            raise their concerns. Only interested and relevant customers will be getting access to you.

        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="fas fa-check"></i>
            </div>
            <h3 class="titleArticle">
                ACCEPT OR REJECT
            </h3>
        </div>
        <div class="descriptionArticle">
            Your decision will always be given value and no other choice will be considered. You will be having
            a higher authority to proofread anything and give decision regarding acceptance and rejection.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h3 class="titleArticle">
                100% PRIVACY
            </h3>
        </div>
        <div class="descriptionArticle">
            Website Privacy is our 1st Priority. We have Designed our system in such a way, that your website
            will not be visible
            publically. Only Your Customers can see your website URL.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="far fa-newspaper"></i>
            </div>
            <h3 class="titleArticle">
                RELEVANT NICHE ARTICLE
            </h3>
        </div>
        <div class="descriptionArticle">
            We have witnessed businesses getting ruined while publishing guest posts blindly. In the guest
            posting, it should be
            topmost priority to check for relevancy and plagiarism. Both guest and host blogs might face issues
            if irrelevant topics
            are being discussed.

        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="fa fa-check-circle"></i>
            </div>
            <h3 class="titleArticle">
                SATISFACTION GUARANTEED
            </h3>
        </div>
        <div class="descriptionArticle">
            We are dead sure that you will be our loyal publisher right after your initial deal. Yes, this is
            our approach that we believe in building relations rather than chasing amount. Your satisfaction
            will be of high worth for us and we know how to get customer satisfied.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="fas fa-lock"></i>
            </div>
            <h3 class="titleArticle">
                CONTENT PROTECTION
            </h3>
        </div>
        <div class="descriptionArticle">
            Guest websites will be having access to you only after finalizing the deal. In the initial stage,
            your SEO parameters
            will be visible only. Plus, once we publish content on your blog then we will be responsible for any
            changes and that
            change will not ruin your authority.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="fas fa-chart-pie"></i>
            </div>
            <h3 class="titleArticle">
                THOUSAND OF ADVERTISERS
            </h3>
        </div>
        <div class="descriptionArticle">
            Our legitimate practice has earned us relations with thousands of real and authentic companies. We
            are ready to publish
            their posting on your given niche and you are free to decide the value against that posting.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="fab fa-wordpress"></i>
            </div>
            <h3 class="titleArticle">
                WORDPRESS PLUGIN
            </h3>
        </div>
        <div class="descriptionArticle">
            Our wordpress plugin allows you to check and accept guest posting order directly from your WP admin
            panel. It will not only helps you to earn maximum, but also saves a lot of time.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="fa fa-link"></i>
            </div>
            <h3 class="titleArticle">
                SEO FRIENDLY
            </h3>
        </div>
        <div class="descriptionArticle">
            You will witness our legitimacy through our work. We have mold ourselves according to ongoing google
            updates. We have
            never fallen a prey to google penguin, panda or hummingbird algorithms.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="far fa-clock"></i>
            </div>
            <h3 class="titleArticle">
                SELECT DELIVERY TIME
            </h3>
        </div>
        <div class="descriptionArticle">
            Owner of hosting website will be having the freedom to decide time limit to publish a guest post.
            You can select
            delivery time that suits you best.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="fas fa-chart-pie"></i>
            </div>
            <h3 class="titleArticle">
                FORUMS SUPPORTED
            </h3>
        </div>
        <div class="descriptionArticle">
            No need to hesitate if you are running a forum. Just get in touch with us and have your say about
            terms and conditions.
            We also don't mind if you are an author of a premium forum, You will be welcomed.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="fas fa-certificate"></i>
            </div>
            <h3 class="titleArticle">
                PREMIUM WEBSITE SUPPORTED
            </h3>
        </div>
        <div class="descriptionArticle">
            If you are author/contributor of any premium website e-g: HuffingtonPost, TheNextWeb, NYTimes,
            TechCrunch etc. you will
            be given a premium section to display your services and priority support from our platform as well.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="fas fa-dollar-sign"></i>
            </div>
            <h3 class="titleArticle">
                MULTIPLE WIDTHDRAW METHODS
            </h3>
        </div>
        <div class="descriptionArticle">
            We are ever ready to pay you in return for guest posting through any means you like. In fact, you
            can decide the medium
            for receiving the amount.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="far fa-clock"></i>
            </div>
            <h3 class="titleArticle">
                PLAGIARISM FREE CONTENT
            </h3>
        </div>
        <div class="descriptionArticle">
            We know the value of hosting websites might get lower if the plagiarised content is published. You
            can check plagiarism
            of any article that advertiser will send you for publishing post.
        </div>
    </div>
    <div class="cardArticle">
        <div class="headArticle">
            <div class="iconArticle">
                <i class="far fa-copy"></i>
            </div>
            <h3 class="titleArticle">
                24/7 SUPPORT
            </h3>
        </div>
        <div class="descriptionArticle">
            We are ready to answer your queries any time any day. You are most welcome to get in touch with us
            and state your
            concern. Our experts will be turning around your queries within next 12 hours.
        </div>
    </div>
</div>
<div class="main legend">
    <p>
        We believe in adopting positive and creative ways and our innovators are always keen to find something new.
        So we have done an exceptional work by giving marketplace to both buyers and sellers for guest posting. This
        is a common platform where both parties will be collaborating with each other. To make this platform more
        efficient, we have devised an integrated perfect tools that can show you SEO parameters of your
        corresponding websites within no time. Being a guest, you can select the category that best fits your domain
        and opts for the target website within given list. All terms and conditions associated with target website
        will be tagged on that page too. Our marketplace gives assurance to both sellers and buyers that each and
        every website you deal with will be legitimate.
    </p>
    <p>
        Now, gone are the days when people used to dig internet even for days in order to come access authentic
        website to host their posts. We have done all the hard work and have put everything at your fingertips. It
        is no more difficult for buyers to come across the authentic website and buyers don't have to worry about
        the seriousness and content of guest.
    </p>
    <p>
        Through our marketplace, it is no more intimidating even for new brands to spread awareness about their
        brands. Through guest posting, you will be earning your repute in totally new community and this will
        ultimately increase your fan following. Top blogs will be selling guest posting to relevant domains
        according to their requirements and giving you niche to pitch your content. So you will be dragging new
        users to your website through backlinks. This practice of your’s will not only spread awareness about your
        services but your rank will be higher if you keep on updating your content according to queries from new
        customers.
    </p>
    <p>
        You can build phenomenal relations with top blogs having high domain authority than you. In fact, if you
        deliver quality content through your guest post then it will bring harmony for both seller and buyer in
        terms of SEO rank. Strong and relevant content has always brought back quality customers.
    </p>
    <p>
        If perfect white hat techniques are being practiced, it means both seller and buyer are earning domain and
        search engine authority. Plus guest posting will also build influence of both parties as you will be
        delivering only quality. Stronger influence of vast audience is the guarantee that newcomers are going to
        trust blindly what you say.
    </p>
    <p>
        Just imagine your services are being discussed on blogs that have phenomenal rank, obviously, your authority
        will be unchallengeable. We have such top blogs listed on our website for various categories, who are ready
        to sell guest posting. So seller can have money in return and buyer can have a stronger image.
    </p>
    <p>
        As pioneers, we are giving the opportunity to both buyers and sellers to pop in and strive for your
        survival. We have will be eliminating all the worries regarding PA, DA and Moz rank after scrutinizing
        website that join our platform. So give yourself a thrilling boost and open doors of success for your
        business.
    </p>
</div>

@endsection('content')

@section('custom_js')

<script src="{{ asset('js/marketplace.js') }}">

@endsection('custom_js')
