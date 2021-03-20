@extends('layouts.app')

@section('page-title', "Privacy - Amit's Website")

@section('custom_css')

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<link rel="stylesheet" href="{{ asset('css/privacy.css') }}">

@endsection('custom_css')

@section('content')

<header class="main header" id="fean">
    <h2 class="titleH">
        Privacy Policy
    </h2>
    <h1 class="title">
        BSGP <span class="sT">» Privacy Policy</span>
    </h1>
</header>
<div class="main principal">
    <span class="i">
        Last Modified: May 27, 2018
    </span>
    <p class="p">
        This Privacy Policy governs the manner we get, use, maintains and discloses information of
        <a href="{{ url('/') }}" class="aP">BuySellGuestPost.com</a> users. Following Terms applied on all services offered by
        BSGP.
    </p>
    <div class="element">
        <h2 class="titleE">
            Personal Identification Information
        </h2>
        <p class="p">
            We may collect personal identification information from Users in a variety of ways, including, but not
            limited to, when Users visit our site, register on the site, subscribe to the newsletter, fill out a
            form, and in connection with other activities, services, features or resources we make available on our
            Site. Users may be asked for, as appropriate, name and email address. Users may, however, visit our Site
            anonymously as well. We will collect personal identification information from Users only if they
            voluntarily submit such information to us. Users can always refuse to supply personally identification
            information, except that it may prevent them from engaging in certain Site related activities.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            Non-Personal Identification Information
        </h2>
        <p>
            We may collect non-personal identification information about Users whenever they interact with our Site.
            Non-personal identification information may include the browser name, the type of computer and technical
            information about Users means of connection to our Site, such as the operating system and the Internet
            service providers utilized and other similar information.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            Web Browser Cookies
        </h2>
        <p class="p">
            Our Site may use “cookies” to enhance User experience. User’s web browser places cookies on their hard
            drive for record-keeping purposes and sometimes to track information about them. User may choose to set
            their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note
            that some parts of the Site may not function properly.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            How We Use Collected Information
        </h2>
        <p class="p">
            BuySellGuestPost may collect and use Users personal information for the following purposes:
        </p>
        <p class="p">
            <span class="i">
                – To improve customer service
            </span>
            Information you provide helps us respond to your customer service requests and support needs more
            efficiently.
        </p>
        <p class="p">
            <span class="i">
                – To improve our Site
            </span>
            We may use feedback you provide to improve our products and services.
        </p>
        <p class="p">
            <span class="i">
                – To personalize user experience
            </span>
            We may use information in the aggregate to understand how our Users as a group use the services and
            resources provided on our Site.
        </p>
        <p class="p">
            <span class="i">
                – To send periodic emails
            </span>
            We may use the email address to send User information and updates pertaining to their order. It may also
            be used to respond to their inquiries, questions, and/or other requests. Users may receive emails that
            may include company news, updates, related product or service information, etc. If at any time the User
            would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at
            the bottom of each email or User may contact us via our Site.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            How We Protect Your Information
        </h2>
        <p class="p">
            We make reasonable attempts to protect your information by using physical and electronic safeguards. For
            this reason we use SSL certificates to enhance our Platform security. However, as this is the Internet,
            we can make no guarantees as to the security or privacy of your information. For this reason, we
            recommend that you use anti-virus software, routine credit checks, firewalls, and other precautions to
            protect yourself from security and privacy threats.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            Accessing, Editing, And Removing Your Information
        </h2>
        <p class="p">
            You will be able to access any information contained in your account through our Platform. You may edit
            that information by removing or changing the information listed in your account. If you have any
            questions or wish to review, change, or access any of your information collected by us, please contact
            us at <span class="sP">support@buysellguestpost.com.</span> Additionally, if you wish to opt out of our
            data collection
            practices or would like us to remove any of your information from our databases, please contact us at
            support@ buysellguestpost.com. After you have cancelled your account please be aware that we may keep
            inaccessible copies of your PII and non-PII subject to our data retention policies.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            Sharing Your Personal Information
        </h2>
        <p class="p">
            We do not sell, trade, or rent Users personal identification information to others. We may share generic
            aggregated demographic information not linked to any personal identification information regarding
            visitors and users with our business partners, trusted affiliates and advertisers for the purposes
            outlined above.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            Website Information (For Sellers & Buyers)
        </h2>
        <p class="p">
            As a Seller any website you add in our website, we can collect and store as much information regarding
            that website as much we want.
        </p>
        <p class="p">
            As an Advertiser, any website or link your uses through our system we can store that URLs and
            information in our database.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            Using Website Information
        </h2>
        <p class="p">
            We can sell, trade, or rent any URLs used through our system. It might be your main website, our guest
            post link or any URL you used in our website. Even if you have marked your website as hidden we can use
            that URL in future.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            Changes To This Privacy Policy
        </h2>
        <p class="p">
            BuySellGuestPost has the discretion to update this privacy policy at any time. Like our Terms of Use, we
            may amend this Privacy Policy from time to time. When we amend this Privacy Policy, we will modify the
            date listed on this Agreement or we may contact you. You must agree to the amendments as a condition of
            your continued use of our Platform. If you do not agree, you must immediately cease using our Platform
            and notify us of your refusal to agree by e-mailing us at support@buysellguestpost.com.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            Your Acceptance Of These Terms
        </h2>
        <p class="p">
            By using this Site, you signify your acceptance of this <a class="aP" href="/term.php">policy and
                terms of
                service.</a> If you do not agree
            to this policy, please do not use our Site. Your continued use of the Site following the posting of
            changes to this policy will be deemed your acceptance of those changes.
        </p>
    </div>
    <div class="element">
        <h2 class="titleE">
            Contacting Us
        </h2>
        <p class="p">
            If you have any questions about this Privacy Policy, the practices of this site, or your dealings with
            this site, please don’t hesitate to contact us using our <a class="aP" href="/contact.php">Contacts
                Form</a>.
        </p>
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