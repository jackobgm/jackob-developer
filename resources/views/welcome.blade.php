@extends('layouts/app')

@section('page-title', "Amit's Website")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<link rel="stylesheet" href="{{ asset('css/mp.css') }}">

@endsection('custom_css')

@section('content')

<main class="main mainA" id="fean">
        <article class="main__article text-right-b">
            <h2 class="main__article--title">
                Get Quality Guest Posts & <strong>Rank #1 in Google</strong>
            </h2>
            <p class="main__article--text">
                Let the leading and the most relevant media talk about your business
            </p>
            <div>
                <a href="{{ route('marketplace') }}" class="btn"><i class="fas fa-link iconBtn-right"></i> Buy Guest Post</a>
            </div>
        </article>
        <article class="main__article text-left-b">
            <h2 class="main__article--title">
                Write Content For Your Website & <strong>Get Paid</strong>
            </h2>
            <p class="main__article--text">
                Get paid for what you love - creating and placing content on your website.
            </p>
            <div>
                <a href="{{ route('sell-guest-posts') }}" class="btn">Sell Guest Posts <i class="fas fa-plus iconBtn-left"></i></a>
            </div>
        </article>
    </main>
    <div class="patners">
        <img src="{{ asset('img/f-1.png') }}" class="patners__img" alt="">
        <img src="{{ asset('img/f-2.png') }}" class="patners__img" alt="">
        <img src="{{ asset('img/f-3.png') }}" class="patners__img" alt="">
        <img src="{{ asset('img/f-4.png') }}" class="patners__img" alt="">
        <img src="{{ asset('img/f-5.png') }}" class="patners__img" alt="">
        <img src="{{ asset('img/f-6.png') }}" class="patners__img" alt="">
    </div>
    <div class="contFaqs">
        <h2 class="faqsTitle">
            FAQs
        </h2>
        <div class="faqs">
            <div class="faqs__item">
                <p class="btnItem">
                    What can I Sale?
                    <spam class="plus">
                        <i class="fas fa-plus"></i>
                    </spam>
                    <spam class="minus">
                        <i class="fas fa-minus"></i>
                    </spam>
                </p>
                <div class="contentFaqs">
                    <p>
                        Buy-Sell Guest Post is a platform that merchandise guest posts only with no limitation to
                        minimum guest posts or any SEO metrics. Further, there’s no evaluation for home page features or
                        any
                        other requirements.
                    </p>
                </div>
            </div>
            <div class="faqs__item">
                <p class="btnItem">
                    How do I price my guest post?
                    <spam class="plus">
                        <i class="fas fa-plus"></i>
                    </spam>
                    <spam class="minus">
                        <i class="fas fa-minus"></i>
                    </spam>
                </p>
                <div class="contentFaqs">
                    <p>
                        You can price the guest post whatever you want. On BSGP, the pricing starts from $5 while it
                        goes for unlimited valuation. It is recommended to set your price according to the value of your
                        website.
                    </p>
                </div>
            </div>
            <div class="faqs__item">
                <p class="btnItem">
                    How much money can I make?
                    <spam class="plus">
                        <i class="fas fa-plus"></i>
                    </spam>
                    <spam class="minus">
                        <i class="fas fa-minus"></i>
                    </spam>
                </p>
                <div class="contentFaqs">
                    <p>
                        This is depending on you because many of the sellers are working full time while some are
                        considering this platform as part-time work. You can use the BSGP platform as much as you want
                        and make some extra money out of it.
                    </p>
                </div>
            </div>
            <div class="faqs__item">
                <p class="btnItem">
                    How do I get paid?
                    <spam class="plus">
                        <i class="fas fa-plus"></i>
                    </spam>
                    <spam class="minus">
                        <i class="fas fa-minus"></i>
                    </spam>
                </p>
                <div class="contentFaqs">
                    <p>
                        Once you complete your order, you can withdraw your balance anytime through your buyer/seller
                        account. Currently, we have two methods for withdrawal including PayPal and Pioneer.
                    </p>
                </div>
            </div>
            <div class="faqs__item">
                <p class="btnItem">
                    How much does it cost?
                    <spam class="plus">
                        <i class="fas fa-plus"></i>
                    </spam>
                    <spam class="minus">
                        <i class="fas fa-minus"></i>
                    </spam>
                </p>
                <div class="contentFaqs">
                    <p>
                        There are no joining fees for the BSGP whereas you don’t any subscription charges to list your
                        websites. We just charge 10% of each transaction while the rest 90% is yours.
                    </p>
                </div>
            </div>
            <div class="faqs__item">
                <p class="btnItem">
                    How much time will I need to invest?
                    <spam class="plus">
                        <i class="fas fa-plus"></i>
                    </spam>
                    <spam class="minus">
                        <i class="fas fa-minus"></i>
                    </spam>
                </p>
                <div class="contentFaqs">
                    <p>
                        This platform is very flexible. Once you learn the methods of performing in the marketplace then
                        the time depends on you. You can work for a spare time while this platform is available to work
                        for full time.
                    </p>
                </div>
            </div>
            <div class="faqs__item">
                <p class="btnItem">
                    How much time will it take to transfer my earnings into my withdrawal account?
                    <spam class="plus">
                        <i class="fas fa-plus"></i>
                    </spam>
                    <spam class="minus">
                        <i class="fas fa-minus"></i>
                    </spam>
                </p>
                <div class="contentFaqs">
                    <p>
                        Once you complete your order, your earnings would be transferred to your BSGP account
                        immediately. It would require 30 days to transfer it in your withdrawal account (PayPal or
                        Payoneer).
                        <br>
                        <br>
                        Please note that we review every payment withdrawal request. Kindy make sure your given
                        backlinks stay live to make your payment clear.

                    </p>
                </div>
            </div>
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
    </div>

@endsection('content')