@extends('layouts.app')

@section('page-title', "Sell Guest Posts - Amit's Website")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/sgp.css') }}">

@endsection('custom_css')

@section('content')

<main class="main" id="fean">
        <div>
            <strong class="titleMain">
                Have a Website?
            </strong>
        </div>
        <h1 class="mainH1">
            START SELLING GUEST POSTS ON YOUR WEBSITE AND GET PAID
        </h1>
        <div class="sellC">
            <div class="cardSell">
                <i class="far fa-list-alt iconCard"></i>
                <h2 class="titleCard">
                    LIST YOUR WEBSITE
                </h2>
                <p class="descriptionCard">
                    Sign up for free, submit your website, and offer your guest post opportunities. All platform
                    supported (web 2.0, forums, etc.)
                </p>
            </div>
            <div class="cardSell">
                <i class="far fa-file-alt iconCard"></i>
                <h2 class="titleCard">
                    PUBLISH POST CONTENT
                </h2>
                <p class="descriptionCard">
                    Get notified when you get guest post order and use our system to discuss details with Buyers.
                </p>
            </div>
            <div class="cardSell">
                <i class="fas fa-hand-holding-usd iconCard"></i>
                <h2 class="titleCard">
                    GET PAID
                </h2>
                <p class="descriptionCard">
                    Once you complete your endorsement, Get paid for your amazing work.
                </p>
            </div>
        </div>
        <a class="btn" href="{{ route('publisher.add') }}" style="cursor: pointer;">
            <div class="btnIcon" style="cursor: pointer;">
                <i class="fas fa-plus"></i>
            </div>
            Submit Your Website
        </a>
    </main>
    <div class="promotionSeo">
        <img src="{{ asset('img/seo.svg') }}" alt="SEO" class="logo">
        <div class="pSDescription">
            <div>
                <h2 class="titleSeo">
                    Guest Posting Helps In <strong>SEO</strong>
                </h2>
                <p class="descriptionSeo">
                    There is no other second opinion that legitimate Posts on your website can earn you high rank in
                    google.
                    Plus, there will be more readers and followers on your blog if the quality is being discussed there
                    through adequate manners. Publishing Guests posts will help your website gain more legitimate
                    content
                    and your website will start getting more and more traffic as it will start showing on new keywords.
                </p>
            </div>
            <div class="moreSpecification">
                <div class="cardMS">
                    <i class="far fa-clone iconMS"></i>
                    <h3 class="titleMS">
                        REGULAR POSTING / HIGHER RANKING
                    </h3>
                    <p class="pMS">
                        More you are giving space to relevant blogs for guest posting, the more you are earning rank in
                        google. Yes, this it is
                        true that you can be the owner of most famous blog or website if your PA, DA and Moz Rank
                        becomes unbeatable.

                    </p>
                </div>
                <div class="cardMS">
                    <i class="fas fa-user-cog iconMS"></i>
                    <h3 class="titleMS">
                        QUALITY CONTENT / QUALITY RANKING
                    </h3>
                    <p class="pMS">
                        You will be accepting guest website's quality guest posts and you will have authority to reject
                        in case content is substandard. Ultimately your website will get fame for discussing relevant
                        and qualitative services. Quality content forces Google to promote you on high ranks.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="supported">
        <h2 class="supportedTitle">
            Why Sell Guest Posts At <strong>BSGP</strong>
        </h2>
        <div class="miniArticles">
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
    </div>
    <div class="getStarted">
        <div class="started">
            <h2 class="startedTitle">
                Ready To Get Started?
            </h2>
            <p class="startedDescription">
                Join Wolrd’s first guest posting platform and sell backlinks on your website in a legitimate way.
                <br><br>
                Fill out the form to register at BSGP.
            </p>
        </div>
        <div class="formStarted">
            <livewire:form-register />
        </div>
    </div>