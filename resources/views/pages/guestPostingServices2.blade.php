@extends('layouts.app')

@section('page-title', "Sell Guest Posts - Amit's Website")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/gps.css') }}">

@endsection('custom_css')

@section('content')

<div class="getPremium" id="fean">
    <div class="main">
        <div class="titles">
            <h1 class="titleH1">
                Premium Guest Posting & Blogger Service
            </h1>
            <h2 class="titleH2">
                Fully Managed, Extremely Powerful
            </h2>
        </div>
        <ul class="ulP">
            <li>
                <p>
                    <div class="iconP">
                        <i class="far fa-check-circle"></i>
                    </div>
                    100% Natural Blogs
                </p>
            </li>
            <li>
                <p>
                    <div class="iconP">
                        <i class="far fa-check-circle"></i>
                    </div>
                    High-Quality Content
                </p>
            </li>
            <li>
                <p>
                    <div class="iconP">
                        <i class="far fa-check-circle"></i>
                    </div>
                    High DA/PA Websites
                </p>
            </li>
        </ul>
        <a href="#pricing" class="btnP">
            See Princing
        </a>
    </div>
</div>
<div class="main characteristics">
    <h2 class="titleCharacteristics">
        Designed For Seo Agencies
    </h2>
    <div class="characteristicsChart">
        <div class="characteristic">
            <img src="{{ asset('img/1.svg') }}" alt="writers" class="imgCharacteristic">
            <h3 class="titleCharacteristic">
                Native Writers
            </h3>
            <p class="descriptionCharacteristic">
                Our native writers create quality content, with images, outbound links and proper formatting.
            </p>
        </div>
        <div class="characteristic">
            <img src="{{ asset('img/2.svg') }}" alt="writers" class="imgCharacteristic">
            <h3 class="titleCharacteristic">
                Manually Approved Blogs
            </h3>
            <p class="descriptionCharacteristic">
                All Blogs in our database manually checked to make this list of 100% natural <websites class="">
                </websites>
            </p>
        </div>
        <div class="characteristic">
            <img src="{{ asset('img/3.svg') }}" alt="writers" class="imgCharacteristic">
            <h3 class="titleCharacteristic">
                Multiple Parameters
            </h3>
            <p class="descriptionCharacteristic">
                You can check multiple parameters of any website that listed. Only websites with organic traffic get
                approval.
            </p>
        </div>
        <div class="characteristic">
            <img src="{{ asset('img/4.svg') }}" alt="writers" class="imgCharacteristic">
            <h3 class="titleCharacteristic">
                Direct With Owners
            </h3>
            <p class="descriptionCharacteristic">
                No 3rth person involved when buying guest post from a blog. You will be communicating directly with
                blogger.

            </p>
        </div>
    </div>
</div>
<div class="main contPlains tac" id="pricing">
    <h2 class="titleCP">
        Flexible Plans & Pricing
    </h2>
    <p class="subTitleCP">
        Choose a package that fits
    </p>
    <div class="plains">
        <div class="plain" id="cardPlain">
            <div class="card">
                <h3 class="titlePlain" id="titleCard">
                    Basic
                </h3>
                <p class="benefits" id="benefitsCard">
                    No. of Posts : 3 <br>
                    DA: 20+
                </p>
                <p class="price">
                    $75
                </p>
                <ul class="listPlain">
                    <li class="liPlain">
                        Hand-written content
                    </li>
                    <li class="liPlain">
                        High Quality Posts
                    </li>
                    <li class="liPlain">
                        7-14 days delivery
                    </li>
                </ul>
                <button class="btnP btnB" id="btnB">
                    Buy Now
                </button>
            </div>
        </div>
        <div class="plain" id="cardPlain2">
            <div class="card">
                <h3 class="titlePlain" id="titleCard">
                    Standard
                </h3>
                <p class="benefits" id="benefitsCard">
                    No. of Posts : 5 <br>
                    DA: 25+
                </p>
                <p class="price">
                    $150
                </p>
                <ul class="listPlain">
                    <li class="liPlain">
                        Hand-written content
                    </li>
                    <li class="liPlain">
                        High Quality Posts
                    </li>
                    <li class="liPlain">
                        7-14 days delivery
                    </li>
                </ul>
                <button class="btnP btnB" id="btnB">
                    Buy Now
                </button>
            </div>
        </div>
        <div class="plain" id="cardPlain3">
            <div class="card">
                <h3 class="titlePlain" id="titleCard">
                    Premium
                </h3>
                <p class="benefits" id="benefitsCard">
                    No. of Posts : 10 <br>
                    DA: 30+
                </p>
                <p class="price">
                    $350
                </p>
                <ul class="listPlain">
                    <li class="liPlain">
                        Hand-written content
                    </li>
                    <li class="liPlain">
                        High Quality Posts
                    </li>
                    <li class="liPlain">
                        2-4 weeks delivery
                    </li>
                </ul>
                <button class="btnP btnB" id="btnB">
                    Buy Now
                </button>
            </div>
        </div>
        <div class="plain" id="cardPlain4">
            <div class="card">
                <h3 class="titlePlain" id="titleCard">
                    Premium PLUS
                </h3>
                <p class="benefits" id="benefitsCard">
                    No. of Posts : 15 <br>
                    DA: 40+
                </p>
                <p class="price">
                    $700
                </p>
                <ul class="listPlain">
                    <li class="liPlain">
                        Hand-written content
                    </li>
                    <li class="liPlain">
                        High Quality Posts
                    </li>
                    <li class="liPlain">
                        2-4 days delivery
                    </li>
                </ul>
                <button class="btnP btnB" id="btnB">
                    Buy Now
                </button>
            </div>
        </div>
    </div>
    <h2 class="titleBgp">
        Test The Power Of Guest Posting?
    </h2>
    <div class="bgp">
        <img src="img/graph.png" alt="graph" class="imgBgp">
        <div class="proBgp">
            <p class="descriptionBgp">
                Buy single guest post only for $19 to test our services.
            </p>
            <a class="btn">
                Buy Guest Posts
            </a>
        </div>
    </div>
    <div class="faqs">
        <div class="faqs__item">
            <p class="btnItem">
                What Is Guest Posting?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Guest posting is regarded as a strategy in digital marketing that involves publishing your
                    writing on another website
                    with the relevant niche. This practice is adopted to enhance viewership, backlinks, authority,
                    and rank of your website
                    or blog.
                </p>
                <p>
                    There could be three different ultimate goals behind guest posting. These goals are listed
                    below:
                </p>
                <p>
                    Posing your website or blog as an authority and an established entity in a specific industry or
                    niche. Getting an increased number of visitors on your website. Spreading a number of backlinks
                    to your site that would ultimately increase the authority of your website. Keeping any of these
                    goals in mind, you should devise a strategy for guest posting that would serve the purpose
                    precisely. Knowing your end goal ahead of posting or publishing your content on any other
                    website would definitely help you in getting the optimum results.
                </p>
                <p>
                    Before selecting a website to publish your post as a guest post, you should consider certain
                    factors regarding the stature of a website. These factors are directly responsible for the
                    improvement of your website. The factors we are discussing about, are listed below:
                </p>
                <p>
                    Niche relevant to your product or services. Higher Domain Authority (DA) and Domain Rank (DR)
                    Higher UR Lower span Score
                </p>
                <p>
                    All the factors, as mentioned above, add to higher quality and ultimately higher traffic. There
                    are multiple benefits of guest posting. Guest posting enables you to build strong relationships
                    with fellow bloggers and other people in your industry. Guest posting is also a great way to
                    rank your website higher on search engines and for most people, this is the primary purpose
                    behind guest posts. Guest posting also enables you to introduce yourself to a new audience,
                    enter van already established community and deliver your message or content effectively.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                Guest Posting Guidelines
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Both the parties involved in the process of guest posting should follow certain guidelines to
                    make the process smooth
                    and easier for everyone. Here are some general guidelines for this purpose:
                </p>
                <p>
                    Email your Bio and relevant information written clearly to remove any confusion.<br>
                    The authors should write posts or blogs in such a way that it looks similar to the writing
                    fashion of the blog where the content would be published.
                    bars
                    <br>
                    The publishers should verify the track record of authors.
                    <br>
                    The authors should provide relevant and detailed content that could be informative for the
                    targeted audience.
                    <br>
                    Hyperlinks should be relevant to the blog.
                    <br>
                    At least 2 images relevant to the content being published should be provided to the publisher.
                    <br>
                    The publisher should verify the uniqueness and relevance of content before publishing it on the
                    blog.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                Guest Posting In SEO <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    We offer quality guest post services as per the desire of our clients. We have our very own team
                    of quality writers who can craft amazing content that is engaging and informative as well. You
                    can proudly share the blogs or posts written by our writers to your audience to receive
                    appreciation. We always rely on our writers for quality work and never outsource the tasks to
                    ensure the quality of content.
                </p>
                <p>
                    We would outreach to the relevant quality blogs faster and quicker than anyone else. Our quicker
                    processes would help you in getting an edge over your competitors. It is sometimes very
                    frustrating for you when your partners never respond in time and don’t give timely updates about
                    the progress of tasks. But we provide exceptional services and try to respond to our partners as
                    quickly as possible to keep them updated about what is actually happening.
                </p>
                <p>
                    We try to pose your content in such a way that it looks natural and not promotional. Natural
                    looking content doesn’t alarm the search engines, and your website gets higher ranking because
                    of this, eventually. We tend to handpick the blogs and websites for the guest posting of your
                    content, we consider each and every factor in giving you the quality results.
                </p>
                <p>
                    We always do research about the relevance of the targeted audience, the niche of a targeted
                    blog, traffic, Domain Authority (DA) and Domain Rating (DR) of a blog or website before choosing
                    it for publication of your content. We focus more on traffic coming to the blog, all other
                    metrics are secondary factors. Regardless of the higher DA of a website, we never choose it if
                    the traffic coming to the website doesn’t seem ideal to us. However, the average DA and DR of
                    chosen platforms by us are 40+ and 30+ respectively.
                </p>
                <p>
                    We would never misguide or deceive our partners by publishing their content on private blog
                    networks (PBNs) and pose them as real websites for guest post submission, as plenty of service
                    providers do. We believe in honesty and therefore, we won’t apply such practices in our
                    business. We are always looking to place impactful in-content links according to context to make
                    the anchor text interesting for the audience and urge them to visit your website. The content
                    offered by us is engaging and totally unique with the best placement of in-text links. We work
                    on a comprehensive plan which includes steps like finding compelling content on your website,
                    choosing the relevant quality blogs to publish your content, pitching the idea about content to
                    the publishers, ensuring quality content for you, and finally publishing it and delivering a
                    detailed report about the process to partners. So, our services come in an all-in-one package
                    which helps you in taking firm steps towards a successful presence on the web.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                Guest Blogging Safe?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    No SEO strategy is totally safe and secure. However, if you make guest posts look natural and
                    create in-content links
                    that are totally relevant to the niche and discussed the topic on the blog, then search engines
                    won’t take any harmful
                    action against your site.
                </p>
                <p>
                    The authors and publishers should take necessary steps to make a guest post safe in such a way
                    that it would remain safe in the coming years as well. This would enable your site to have
                    secure backlinks to your website which won’t get vanished because of any newer update in
                    algorithms of search engines.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection('content')

@section('custom_js')

<script>
    fean.style.marginTop = `${hNavbar}px`;
</script>

@endsection('custom_js')