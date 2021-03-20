@extends('layouts.app')

@section('page-title', "Contact Us - Amit's Website")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/contact.css') }}">

@endsection('custom_css')

@section('content')

<div class="main" id="fean">
    <div class="fBlock">
        <h2 class="title">
            Contact Us
        </h2>
        <p class="descriptionF">
            Let us know if you have any question in your mind. we will try our best to help you as much as we can
            provide to you. Feel free to contact us for any quote.
        </p>
        <form action="" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name">
            <label for="Email">Email</label>
            <input type="email" name="email" id="email" placeholder="Your Email">
            <label for="message">Type your message below</label>
            <textarea name="message" id="message" placeholder="Enter your message here"></textarea>
            <input type="submit" value="Submit" class="btn">
        </form>
    </div>
    <div class="sBlock">
        <h2 class="title">
            FAQs
        </h2>
        <div class="faqs">
            <div class="faqs__item">
                <p class="btnItem active">
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
                        BSGP is a platform for both webmasters and SEO Experts. If you have a Good website of any
                        kind e-g: BlogSpot, WordPress,
                        community forum, Q/A website, classified, etc. you can earn by selling paid guest posts on
                        your website. For SEO Experts
                        it is one of the Top platforms where you can find 100% Real webmasters & Bloggers to get
                        high-quality backlinks.
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
                        Any Type of website can join BSGP for selling guest posts. There is no restriction if you
                        are the owner of forum, web 2.0, blog, Q-A site or an author of some premium websites, you
                        can submit website and sell guest posts.
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
                        Yes, it 100% Safe for SEO and backlinks. Any Guest post your purchase came from a real
                        website. BSGP post is a marketplace where different bloggers have submitted their websites.
                        These websites are 100% real and filtered from our quality department.
                    </p>
                </div>
            </div>
        </div>
        <p>View All <a href="{{ route('faqs') }}" class="lF">FAQs</a></p>
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

@endsection('content')