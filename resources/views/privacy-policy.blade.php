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

    <!-- Container for the popup form -->
    <div id="popupContainer"></div>

    <!-- Banner Section Start here -->
    <section id="banner">
        <div class="dep-banner">
            <div class="py-lg-10 py-md-8 py-6 position-relative">
                <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.svg')}}"
                    alt="">
                <div class="position-absolute">
                    <h2 class="text-white text-center fw-bolder">Privacy Policy</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End here -->

    <!-- Terms of Service Start here -->
    <section class="about-mamce">
        <div class="container">

            <div class="text-justify p-5">
                <h2 class="title">SECTION 1 - WHAT DO WE DO WITH YOUR INFORMATION?</h2>
                <p class="text-black">We collect your Name, Register number, course, branch and type of fees for the preparation of bill.</p>
            </div>

            <div class="text-justify p-5">
                <h2 class="title">SECTION 2 - CONSENT</h2>
                <p class="text-black">How do you get my consent?</p>
                <p class="text-black">When you provide us with personal information to complete a transaction, verify your credit card If we ask for your personal information for a secondary reason, like marketing, we will either ask you directly for your expressed consent, or provide you with an opportunity to say no.</p>
                <p class="text-black">How do I withdraw my consent?</p>
                <p class="text-black">If after you opt-in, you change your mind, you may withdraw your consent for us to contact you, for the continued collection, use or disclosure of your information, at anytime, by contacting us at secretary@mamce.org or mailing us at: M.A.M College of Engineering, Siruganur, Trichy 621105.</p>
            </div>

            <div class="p-5">
                <h2 class="title">SECTION 3  - DISCLOSURE</h2>
                <p class="text-black text-justify">We may disclose your personal information if we are required by law to do so or if you violate our Terms of Service.</p>
            </div>

            <div class="p-5">
                <h2 class="title">SECTION 4 - PAYMENT</h2>
                <p class="text-black text-justify">We use Razorpay for processing payments. We/Razorpay do not store your card data on their servers. The data is encrypted through the Payment Card Industry Data Security Standard (PCI-DSS) when processing payment. Your fees payment transaction data is only used as long as is necessary to complete your transaction. After that is complete, your transaction information is not saved.</p>
                <p class="text-black text-justify">Our payment gateway adheres to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, MasterCard, American Express and Discover.</p>
                <p class="text-black text-justify">PCI-DSS requirements help ensure the secure handling of credit card information by our institution and its service providers.</p>
                <p class="text-black text-justify">For more insight, you may also want to read terms and conditions of razorpay on https://razorpay.com</p>
            </div>

            <div class="text-justify p-5">
                <h2 class="title">SECTION 5 - THIRD-PARTY SERVICES</h2>
                <p class="text-black">In general, the third-party providers used by us will only collect, use and disclose your information to the extent necessary to allow them to perform the services they provide to us.</p>
                <p class="text-black">However, certain third-party service providers, such as payment gateways and other payment transaction processors, have their own privacy policies in respect to the information we are required to provide to them for your purchase-related transactions.</p>
                <p class="text-black">For these providers, we recommend that you read their privacy policies so you can understand the manner in which your personal information will be handled by these providers. In particular, remember that certain providers may be located in or have facilities that are located a different jurisdiction than either you or us. So if you elect to proceed with a transaction that involves the services of a third-party service provider, then your information may become subject to the laws of the jurisdiction(s) in which that service provider or its facilities are located.</p>
                <p class="text-black">Once you leave our store’s website or are redirected to a third-party website or application, you are no longer governed by this Privacy Policy or our website’s Terms of Service.</p>
                <p class="text-black">Links - When you click on links on our website, they may direct you away from our site. We are not responsible for the privacy practices of other sites and encourage you to read their privacy statements.</p>
            </div>

            <div class="text-justify p-5">
                <h2 class="title">SECTION 6 - SECURITY</h2>
                <p class="text-black">To protect your personal information, we take reasonable precautions and follow industry best practices to make sure it is not inappropriately lost, misused, accessed, disclosed, altered or destroyed.</p>
            </div>

            <div class="text-justify p-5">
                <h2 class="title">SECTION 7 - COOKIES</h2>
                <p class="text-black">We use cookies to maintain session of your user. It is not used to personally identify you on other websites.</p>
            </div>

            <div class="text-justify p-5">
                <h2 class="title">SECTION 8 - CHANGES TO THIS PRIVACY POLICY</h2>
                <p class="text-black">We reserve the right to modify this privacy policy at any time, so please review it frequently. Changes and clarifications will take effect immediately upon their posting on the website. If we make material changes to this policy, we will notify you here that it has been updated, so that you are aware of what information we collect, how we use it, and under what circumstances, if any, we use and/or disclose it.</p>
            </div>

            <div class="text-justify p-5">
                <h2 class="title">QUESTIONS AND CONTACT INFORMATION</h2>
                <p class="text-black">If you would like to: access, correct, amend or delete any personal information we have about you, register a complaint, or simply want more information contact our Privacy Compliance Officer at</p>
                <p class="text-black mt-4">secretary@mamce.org or by mail at M.A.M College of Engineering, Siruganur, Trichy 621105</p>
            </div>

        </div>
    </section>
    <!-- Terms of Service End here -->
     @endsection