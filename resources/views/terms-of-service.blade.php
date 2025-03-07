@extends('includes.header')
@section('content')
<!-- Spinner Start here -->
<div id="spinner"
    class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End here -->

<!-- Navbar Start here -->
<!-- Navbar End here -->

<!-- Vertical Button Start here -->
<button style="background-color: #9d7651; border: 2px solid #dfcfc1;"
    class="vertical-button text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
    data-bs-target="#admissionEnquiryModal" id="openPopupBtn">
    Admission Enquiry
</button>
<!-- Vertical Button End here -->



<!-- Banner Section Start here -->
<section id="banner">
    <div class="dep-banner">
        <div class="py-lg-10 py-md-8 py-6 position-relative">
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.svg')}}" alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Teams of Service</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- Terms of Service Start here -->
<section class="about-mamce">
    <div class="container">

        <div class="text-justify p-5">
            <h2 class="title">OVERVIEW</h2>
            <p class="text-black">This website is operated by M.A.M. College of Engineering Throughout the site, the
                terms “we”, “us” and “our” refer to M.A.M. College of Engineering. M.A.M. College of Engineering
                offers this website, including all information, tools and services available from this site to you,
                the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated
                here.</p>
            <p class="text-black">By visiting our site and/ or paying college fees, you engage in our “Service” and
                agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including
                those additional terms and conditions and policies referenced herein and/or available by hyperlink.
                These Terms of Service apply to all users of the site, including without limitation users who are
                students, parents, alumni, Teaching & Non Teaching staffs, vendors and/ or contributors of content.
            </p>
            <p class="text-black">Please read these Terms of Service carefully before accessing or using our
                website. By accessing or using any part of the site, you agree to be bound by these Terms of
                Service. If you do not agree to all the terms and conditions of this agreement, then you may not
                access the website or use any services. If these Terms of Service are considered an offer,
                acceptance is expressly limited to these Terms of Service.</p>
            <p class="text-black">Any new features or tools which are added to the current shall also be subject to
                the Terms of Service. You can review the most current version of the Terms of Service at any time on
                this page. We reserve the right to update, change or replace any part of these Terms of Service by
                posting updates and/or changes to our website. It is your responsibility to check this page
                periodically for changes. Your continued use of or access to the website following the posting of
                any changes constitutes acceptance of those changes.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 1 - ONLINE TERMS</h2>
            <p class="text-black">By agreeing to these Terms of Service, you represent that you are at least the age of
                majority in your state or province of residence, or that you are the age of majority in your state or
                province of residence and you have given us your consent to allow any of your minor dependents to use
                this site. You may not use our products for any illegal or unauthorized purpose nor may you, in the use
                of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws). You
                must not transmit any worms or viruses or any code of a destructive nature. A breach or violation of any
                of the Terms will result in an immediate termination of your Services.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 2 - GENERAL CONDITIONS</h2>
            <p class="text-black">We reserve the right to refuse service to anyone for any reason at any time. You
                understand that your content (not including credit card information), may be transferred unencrypted
                and involve (a) transmissions over various networks; and (b) changes to conform and adapt to
                technical requirements of connecting networks or devices. Credit card information is always
                encrypted during transfer over networks.</p>
            <p class="text-black">You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion
                of the Service, use of the Service, or access to the Service or any contact on the website through
                which the service is provided, without express written permission by us.</p>
            <p class="text-black">The headings used in this agreement are included for convenience only and will not
                limit or otherwise affect these Terms.</p>
        </div>

        <div class="p-5">
            <h2 class="title">SECTION 3 - ACCURACY, COMPLETENESS AND TIMELINESS OF INFORMATION</h2>
            <p class="text-black text-justify">We are not responsible if information made available on this site is not
                accurate, complete or current. The material on this site is provided for general information only and
                should not be relied upon or used as the sole basis for making decisions without consulting primary,
                more accurate, more complete or more timely sources of information. Any reliance on the material on this
                site is at your own risk.</p>
            <p class="text-black text-justify">This site may contain certain historical information. Historical
                information, necessarily, is not current and is provided for your reference only. We reserve the right
                to modify the contents of this site at any time, but we have no obligation to update any information on
                our site. You agree that it is your responsibility to monitor changes to our site.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 4 – COURSES AND FEES UPDATION</h2>
            <p class="text-black">Fees for courses are subject to change without notice. We reserve the right at any
                time to modify or discontinue the Course (or any part or content thereof) without notice at any time.
            </p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 5 - ACCURACY OF BILLING AND ACCOUNT INFORMATION</h2>
            <p class="text-black">We reserve the right to refuse any payment you made with us. We may, in our sole
                discretion, limit or cancel admission. These restrictions may include fees paid by or under the same
                account, the same credit card, and/or admissions that use the same billing. In the event that we make a
                change to or cancel an admission, we may attempt to notify you by contacting the e-mail and/or permanent
                address/phone number provided at the time the enquiry / admission was made. We reserve the right to
                limit or prohibit admissions that, in our sole judgment, appear to be placed by consultant or third
                party online admission platforms.</p>
            <p class="text-black">You agree to provide course and account information for payments made at our webbsite.
                You agree to promptly update your account and other information, including your email address and credit
                card numbers and expiration dates, so that we can complete your transactions and contact you as needed.
                For more detail, please review our Returns Policy.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 6 - OPTIONAL TOOLS</h2>
            <p class="text-black">We may also, in the future, offer new courses and/or training programs and/or short
                term courses through the website (including, the release of new tools and resources). Such new features
                and/or services shall also be subject to these Terms of Service.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 7 - USER COMMENTS, FEEDBACK AND OTHER SUBMISSIONS</h2>
            <p class="text-black">If, at our request, you send certain specific submissions (for example contest
                entries) or without a request from us you send creative ideas, suggestions, proposals, plans, or other
                materials, whether online, by email, by postal mail, or otherwise (collectively, 'comments'), you agree
                that we may, at any time, without restriction, edit, copy, publish, distribute, translate and otherwise
                use in any medium any comments that you forward to us. We are and shall be under no obligation (1) to
                maintain any comments in confidence; (2) to pay compensation for any comments; or (3) to respond to any
                comments.</p>
            <p class="text-black">We may, but have no obligation to, monitor, edit or remove content that we determine
                in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, pornographic, obscene
                or otherwise objectionable or violates any party’s intellectual property or these Terms of Service. You
                agree that your comments will not violate any right of any third-party, including copyright, trademark,
                privacy, personality or other personal or proprietary right. You further agree that your comments will
                not contain libelous or otherwise unlawful, abusive or obscene material, or contain any computer virus
                or other malware that could in any way affect the operation of the Service or any related website. You
                may not use a false e-mail address, pretend to be someone other than yourself, or otherwise mislead us
                or third-parties as to the origin of any comments. You are solely responsible for any comments you make
                and their accuracy. We take no responsibility and assume no liability for any comments posted by you or
                any third-party.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 8 - PERSONAL INFORMATION</h2>
            <p class="text-black">Your submission of personal information through the website is governed by our Privacy
                Policy.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 9 - ERRORS, INACCURACIES AND OMISSIONS</h2>
            <p class="text-black">Occasionally there may be information on our site or in the Service that contains
                typographical errors, inaccuracies or omissions that may relate to course descriptions, Fees, and
                availability. We reserve the right to correct any errors, inaccuracies or omissions, and to change or
                update information or cancel your payments if any information in the Service or on any related website
                is inaccurate at any time without prior notice (including after you have paid).</p>
            <p class="text-black">We undertake no obligation to update, amend or clarify information in the Service or
                on any related website, including without limitation, fees information, except as required by law. No
                specified update or refresh date applied in the Service or on any related website, should be taken to
                indicate that all information in the Service or on any related website has been modified or updated.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 10 - PROHIBITED USES</h2>
            <p class="text-black">In addition to other prohibitions as set forth in the Terms of Service, you are
                prohibited from using the site or its content: (a) for any unlawful purpose; (b) to solicit others to
                perform or participate in any unlawful acts; (c)to violate any international, federal, provincial or
                state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual
                property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm,
                defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion,
                ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g)
                to upload or transmit viruses or any other type of malicious code that will or may be used in any way
                that will affect the functionality or operation of the Service or of any related website, other
                websites, or the Internet; (h) to collect or track the personal information of others; (i) to spam,
                phish, pharm, pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or (k) to
                interfere with or circumvent the security features of the Service or any related website, other
                websites, or the Internet.</p>
            <p class="text-black">We reserve the right to terminate your use of the Service or any related website for
                violating any of the prohibited uses.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 11 - INDEMNIFICATION</h2>
            <p class="text-black">You agree to indemnify, defend and hold harmless M.A.M. College of Engineering and our
                students, parents, teachers, staffs, affiliates, partners, officers, directors, agents, contractors,
                licensors, service providers, subcontractors, suppliers, interns and employees, harmless from any claim
                or demand, including reasonable attorneys’ fees, made by any third-party due to or arising out of your
                breach of these Terms of Service or the documents they incorporate by reference, or your violation of
                any law or the rights of a third-party.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 12 - SEVERABILITY</h2>
            <p class="text-black">In the event that any provision of these Terms of Service is determined to be
                unlawful, void or unenforceable, such provision shall nonetheless be enforceable to the fullest extent
                permitted by applicable law, and the unenforceable portion shall be deemed to be severed from these
                Terms of Service, such determination shall not affect the validity and enforceability of any other
                remaining provisions.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 13 - GOVERNING LAW</h2>
            <p class="text-black">These Terms of Service and any separate agreements whereby we provide you Services
                shall be governed by and construed in accordance with the laws of India and jurisdiction of
                Tiruchirappalli, Tamilnadu.

            </p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 14 - CHANGES TO TERMS OF SERVICE</h2>
            <p class="text-black">You can review the most current version of the Terms of Service at any time at this
                page. We reserve the right, at our sole discretion, to update, change or replace any part of these Terms
                of Service by posting updates and changes to our website. It is your responsibility to check our website
                periodically for changes. Your continued use of or access to our website or the Service following the
                posting of any changes to these Terms of Service constitutes acceptance of those changes.</p>
        </div>

        <div class="text-justify p-5">
            <h2 class="title">SECTION 15 - CONTACT INFORMATION</h2>
            <p class="text-black">Questions about the Terms of Service should be sent to us at secretary@mamce.org</p>
        </div>

    </div>
</section>
<!-- Terms of Service End here -->
 @endsection