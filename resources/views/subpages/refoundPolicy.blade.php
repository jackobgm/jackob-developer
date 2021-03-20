@extends('layouts.app')

@section('page-title', "Refound Policy - Amit's Website")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/refunds.css') }}">

@endsection('custom_css')

@section('content')

<header class="main header" id="fean">
    <h2 class="titleH">
        Refund Policy
    </h2>
    <h1 class="title">
        BSGP <span class="sT">» Refund Policy</span>
    </h1>
</header>
<div class="main principal">
    <span class="i">
        Last Modified: May 27, 2018
    </span>
    <p class="p">
        BuySellGuestPost does not automatically refund payments made for cancelled orders back to your payment
        provider. Funds from order cancellations are refunded to the buyer's balance as credit and are available for
        future purchases on BuySellGuestPost. Funds returned to your balance from cancelled orders will not include
        processing fees paid.
    </p>
    <p class="p">
        Deposit refunds, when available from the payment provider, can be performed by our Customer Support team. To
        prevent fraud and abuse, we limit the total amount of times users can request a payment provider refund from
        their account which is subject to review by our Customer Support team. Such refunds may be subject to an
        additional fee. If any processing fees were added at the time of purchase to create a new order, the
        processing fees from that payment will not be refunded along with your deposit.
    </p>
    <div class="element">
        <h2 class="titleE">
            Seller And User Disputes
        </h2>
        <p class="p">
            In the event of a dispute between Seller and user, Seller and user agree to attempt to settle the
            dispute amicably and in good faith by contacting each other and attempting resolve such a dispute. If
            such dispute cannot be settled, Seller or user may contact BuySellGuestPost. BuySellGuestPost, at its
            discretion, may assist in settling the dispute. In the event that BuySellGuestPost assists in any
            dispute resolution, Seller and user agree to accept such resolution as resolved, binding, and final.
            This section does not obligate BuySellGuestPost to settle disputes between any users and any Sellers and
            all users agree that BuySellGuestPost is not a party to any such disputes.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            Refund Policy For DA-DR Increase Order Package
        </h2>
        <p class="p">
            Refund can be asked within 24 hours after placing the order. Refund request shall not be entertained
            after 24 hours since the order will be in middle of process by that time.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            Chargebacks
        </h2>
        <p class="p">
            We attempt to protect our Sellers from chargebacks by employing different fraud detection methods. In
            the event of a
            chargeback we will notify the Seller immediately and the Order shall be immediately cancelled. If we
            believe that you
            have participated in a fraudulent chargeback we will pursue our claims against you to the fullest extent
            allowed by law.
            Please be aware that Sellers will not be compensated for any lost profits or time due to a chargeback by
            user. In the
            event that we believe that a user has submitted a fraudulent chargeback, we will forward your
            information to the
            applicable law enforcement agency and your fraudulent chargeback may result in either a civil fine or
            jail time.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            What If I Am Not Satisfied With The Services Of Seller?
        </h2>
        <p class="p">
            Everything a seller provides mentioned on the services page. We recommend you to check each and every
            thing before placing an order. You can reject order on delivery. Once you accepted the final delivery,
            you will lose your right for refund.
        </p>
        <strong class="p">
            To get refund you must applicable with the following conditions
        </strong>
        <ol class="ulR">
            <li>You Must not accept the final delivery</li>
            <li>You purchased a product twice by mistake</li>
            <li>You can only ask for refund with in the 15 days of purchase date.</li>
        </ol>
        <p class="p">
            If any processing fees were added at the time of purchase to create a new order, the processing fees
            from that payment will not be refunded along with your deposit.
        </p>
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