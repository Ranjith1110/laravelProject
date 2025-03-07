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
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.svg')}}"
                alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">About MAMCE</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- About MAMCE Start here -->
<section class="about-mamce">
    <div class="container">

        <div class="text-justify p-5">
            <h2 class="title">ABOUT MAMCE</h2>
            <p class="text-black">M.A.M. College of Engineering, Tiruchirappalli is approved by the AICTE, New
                Delhi, and affiliated to
                Anna University, Chennai. The college is an ISO 9001-2008 certified institution and offers 11 Under
                Graduate and 7 Post Graduate programmes in the domains of Engineering, Management, and Computer
                Applications. All departments have been recognized as Research Centres by Anna University, Chennai
                and the Institute has the facility for pursuing doctoral work i</p>
        </div>

        <div class="p-5">
            <h2 class="title">WHY MAMCE</h2>
            <p> <span class="d-block mb-2 text-black"><span class="fw-bold" style="color: #9d7651;">> </span>Close
                    to 27 years of impeccable
                    placement record.</span>
                <span class="d-block mb-2 text-black"><span class="fw-bold" style="color: #9d7651;">>
                    </span>Research Initiatives by faculties in
                    enriching knowledge bank.</span>
                <span class="d-block mb-2 text-black"><span class="fw-bold" style="color: #9d7651;">>
                    </span>Industry collaborated innovative
                    laboratories offering real-world experience.</span>
                <span class="d-block mb-2 text-black"><span class="fw-bold" style="color: #9d7651;">> </span>Highly
                    qualified and dedicated faculty
                    imparting value-based education.</span>
                <span class="d-block mb-2 text-black"><span class="fw-bold" style="color: #9d7651;">> </span>MoU
                    with leading industries providing
                    Training and Internship.</span>
                <span class="d-block mb-2 text-black"><span class="fw-bold" style="color: #9d7651;">> </span>Active
                    learning sessions promoting
                    analysis and synthesis.</span>
                <span class="d-block mb-2 text-black"><span class="fw-bold" style="color: #9d7651;">> </span>ED and
                    CDP cells, the pathway from
                    education to vocation.</span>
                <span class="d-block mb-2 text-black"><span class="fw-bold" style="color: #9d7651;">>
                    </span>Technical clubs melting pot pool of
                    ideas, innovation, and brainstorming.</span>
                <span class="d-block mb-2 text-black"><span class="fw-bold" style="color: #9d7651;">>
                    </span>Abundant scholarships incentivizing
                    performance with special impetus to Muslim students.</span>
                <span class="d-block mb-2 text-black"><span class="fw-bold" style="color: #9d7651;">>
                    </span>Successful alumni spreading knowledge
                    across the globe.</span>
            </p>
        </div>

        <div class="p-5">
            <h2 class="title">ABOUT TRUST</h2>

            <div class="table-container">
                <table class="trust-table">
                    <tbody>
                        <tr>
                            <td>Name of the Organization running the institution</td>
                            <td>Maluk Educational Health & Charitable Trust</td>
                        </tr>
                        <tr>
                            <td>Type of the Organization</td>
                            <td>Trust</td>
                        </tr>
                        <tr>
                            <td>Address or the Organization</td>
                            <td>49, Raja Colony, Collector's Office Road, Tiruchirappalli - 621 105.</td>
                        </tr>
                        <tr>
                            <td>Registered with</td>
                            <td>Sub Register</td>
                        </tr>
                        <tr>
                            <td>Registration No.</td>
                            <td>301/1993</td>
                        </tr>
                        <tr>
                            <td>Registration date</td>
                            <td>25 / 10 / 1993</td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>

        <div class="p-5">
            <h2 class="title">GOVERNING BOARD MEMBERS</h2>

            <div class="table-container">
                <table class="trust-table">
                    <thead>
                        <tr class="text-white" style="background-color: #9d7651;">
                            <th>SI.NO</th>
                            <th>MEMBERS</th>
                            <th>DESIGNATION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dr. M.A. MOHAMED NIZAM</td>
                            <td>CHAIRMAN</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Mrs. N. SHASMINAZ NIZAM</td>
                            <td>MEMBER</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Dr. M. SHANMUGAPRIYA</td>
                            <td>MEMBER</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Mrs. T. SATHYA</td>
                            <td>MEMBER</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Mrs. T. NANCY JEEVA</td>
                            <td>MEMBER</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mr. U.S. SARVADAYAPARAN</td>
                            <td>MEMBER</td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>

        <div class="p-5">
            <h2 class="title">VISION & MISSION</h2>
            <div class="text-justify mt-5">
                <h5 style="color: #9d7651;">Vision</h5>
                <p class="text-black">To Develop As World Class Engineering Institution Producing Competent
                    Professionals.</p>
            </div>
            <div class="text-justify mt-5">
                <h5 style="color: #9d7651;">Mission</h5>
                <p class="text-black">To Blend Rigorous Academics With Innovative Approaches Under A Sustainable
                    Ambience To Produce
                    Competent Professionals.</p>
            </div>
        </div>

    </div>
</section>
<!-- About MAMCE End here -->

<!-- Upcoming Events Start here -->
<section id="upcoming">
    <div class="container">
        <div class="py-lg-10 py-md-8 py-6 text-center ">
            <h2 class="mb-lg-10 title">UPCOMING EVENTS</h2>
            <h4 class="mb-lg-10">Coming Soon..</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->




<script>
    $(function() {
        // Load the popup form dynamically
        $("#popupContainer").load("../popup-form.html", function() {
            // Add event listeners after the form is loaded
            $("#openPopupBtn").on("click", function() {
                $("#popupOverlay").show();
            });
            $(document).on("click", "#closePopupBtn", function() {
                $("#popupOverlay").hide();
            });
        });
    });
</script>

@endsection