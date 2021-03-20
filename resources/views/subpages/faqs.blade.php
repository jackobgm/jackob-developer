@extends('layouts.app')

@section('page-title', "Faqs - Amit's Website")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/faqs.css') }}">

@endsection('custom_css')

@section('content')

<div class="contFaqs" id="fean">
    <h2 class="faqsTitle">
        FAQs
    </h2>
    <div class="faqs">
        <div class="faqs__item">
            <p class="btnItem">
                What exactly is being offered here?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    BSGP is a platform for both webmasters and SEO Experts. If you have a Good website of any kind
                    e-g: BlogSpot, WordPress, community forum, Q/A website, classified, etc. you can earn by selling
                    paid guest posts on your website. For SEO Experts it is one of the Top platforms where you can
                    find 100% Real webmasters & Bloggers to get high-quality backlinks.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                What kind of websites can join our platform?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Any Type of website can join BSGP for selling guest posts. There is no restriction if you are
                    the owner of forum, web 2.0, blog, Q-A site or an author of some premium websites, you can
                    submit website and sell guest posts.

                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                Are all websites on your platform safe for publishing guest post and backlinks?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Yes, it 100% Safe for SEO and backlinks. Any Guest post your purchase came from a real website.
                    BSGP post is a marketplace where different bloggers have submitted their websites. These
                    websites are 100% real and filtered from our quality department.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                How soon can I get guest posts after payment?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Guest Post process starts As soon as both seller and buyer agreed on post requirements. After
                    Payment completed your
                    order will be placed and a Notification sent to the website owner to review placed an order.
                    After Order Approved seller
                    will provide live guest post URL within the time frame mentioned on the guest post page.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                Is there any guarantee how long your guest posts remain on publisher’s website?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    All Guest posts are supposed to be live permanent on publisher’s websites.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                How many guest posts one website can have?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Currently, there is no limit on how many guest posts a website can have. You can publish as many
                    guest posts as you
                    want.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                How can I pay for buying guest posts?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Just open single product page and proceed to cart. You can Pay in following ways
                    <br>
                    <br>
                    Account balance
                    <br>Paypal
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                How can I withdraw amount, being a seller?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Any amount you earn at BSGP is held for 30 days before it’s available for withdrawal. Users can
                    withdraw amount using
                    any of the following methods
                    <br><br>
                    Paypal
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                What if publisher removes backlink after some time?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    All Guest posts are supposed to be live permanent on publisher’s websites.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                Can publisher proofread content before publishing it?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Publishers have right to accept or reject content sent by the advertiser. And similarly,
                    webmasters can proofread the
                    content before publishing it on the website.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                Is there authority to the publisher to accept or reject any guest post?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Yes, Website owner has full authority to accept or reject content sent by advertisers. Because
                    it’s quite a possible
                    article sent by advertiser does not meet quality standards of the hosting website.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                What will be turnaround time for the guest post being live?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    All Publishers are supposed to deliver guest post within the time frame they set on the product
                    page. If Publisher
                    failed to deliver it on time, advertisers have right to cancel the order.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                Is there any refund policy?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Yes, please check out our refund policy page.
                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                What inputs do I need to provide in order to join your platform as a publisher?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Please create an account at the registration page, and go open publisher dashboard. There you
                    will find a button to submit new website. You can submit a website that you Own and you can also
                    add those websites on which you have author/contributor account.

                </p>
            </div>
        </div>
        <div class="faqs__item">
            <p class="btnItem">
                Is publishing/advertising guest posts safe practice?
                <span class="plus">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="minus">
                    <i class="fas fa-minus"></i>
                </span>
            </p>
            <div class="contentFaqs">
                <p>
                    Publishing a guest post on websites is considered as 100% safe technique to sell paid articles.
                    You must write article natural and related to your website category.
                </p>
                <br>
                <p>
                    For Advertisers, buying guest posts is considered as one of the top and 100% white hat SEO
                    technique. Guest Posting not
                    only increases your brand authority but also increase your website ranking quickly.

                </p>
            </div>
        </div>
    </div>
    <div class="learn tac">
        <h2 class="learn__title">
            Want To Learn More?
        </h2>
        <p class="learn__description">
            Learn to use the BuySellGuestPost suite of products and tools with our easy-to-follow guides, articles
            and
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
                    Get quality contextual backlinks, view guest blogging sites marketplace that includes 2500+
                    sites.
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
    </div>
</div>

@endsection('content')