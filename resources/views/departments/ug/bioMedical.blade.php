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
            <img class="w-100 object-fit-cover"
                src="{{asset('images/separateCourses/bioMedicalImg/bio-medical-banner.svg')}}" alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Bio-Medical Engineering</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- About Department Start here -->
<section class="about-dep">
    <div class="container">
        <!-- Slogan For Course -->
        <div class="d-flex justify-content-between align-items-center courses-btn">
            <h2 class="text-center fw-bold title-slogan">Designing a Healthier Tomorrow!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in BME</a>
        </div>
        <div class="mx-10 my-16">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-2 sidebar">
                    <ul class="p-0">
                        <li class="active text-black" data-target="about">ABOUT</li>
                        <li class="text-black" data-target="facilities">Facilities</li>
                        <li class="text-black" data-target="value-added-programmes">Value Added Programmes</li>
                        <li class="text-black" data-target="students-corner">Students' Achievements</li>
                        <!-- <li class="text-black" data-target="placement">Placement</li> -->
                        <li class="text-black" data-target="events">Events</li>
                        <li class="text-black" data-target="gallery">Gallery</li>
                    </ul>
                </div>

                <!-- Content -->
                <div class="col-md-10 p-4">
                    <!-- About Section -->
                    <div id="about" class="content-section">
                        <h2 class="title-slogan mb-4">About</h2>
                        <p class="text-justify text-black">
                            Welcome to the Department of Biomedical Engineering! The biomedical department was
                            launched in the year 2021-2022 with full sanctioned strength of 60 students. In the
                            academic year of 2024-2025 additional intake was 90 students. The vision of the
                            department is to impart quality education and provide enhanced knowledge to the society.
                            The department is equipped with good infrastructure and possess many laboratories
                            related with biomedical engineering. The department has many experienced faculties to
                            deliver the new learning teaching strategy for easy understanding of our students. The
                            department has planned to establish a centre of excellence lab for Biomedical
                            engineering. The department aim is to develop clinically translatable medical solutions
                            for human health by training the next generation of biomedical engineers. Let MAMCE be a
                            stepping stone of your success.
                        </p>

                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <p class="text-justify text-black">
                                To develope the engineering knowledge, technical skill and provide analytical
                                thoughts in Bio-medical Engineering.
                                To improve the quality of human life through scientific research.
                            </p>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <p class="text-justify text-black">
                                Transformative biomedical research innovation, discovery and training of the next
                                generation of biomedical engineers for better health outcomes.
                            </p>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>Bio Sciences Lab</li>
                            <li>Anatomy And Human Physiology Lab</li>
                            <li>Biomedical Instrumentation Lab</li>
                            <li>Diagnostic And Therapeutic Equipment Lab</li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <p class="text-black">NAAN MUDHALVAN(INDUSTRIAL IOT 4.0)</p>
                    </div>

                    <!-- Students' Achievements Section -->
                    <div id="students-corner" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Students' Achievements</h2>
                        <!-- <h4 class="text-center">Students' Achievements List</h4> -->
                        <p class="text-black">Update Soon...</p>
                    </div>

                    <!-- Events Section -->
                    <div id="events" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Events</h2>

                        <ul class="text-black">
                            <li>Presentation day</li>
                            <li>Work shop</li>
                            <li>Hospital visit</li>
                            <li>Incubation centre visit</li>
                            <li>Symposium</li>
                        </ul>
                    </div>

                    <!-- Gallery Section -->
                    <div id="gallery" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Gallery</h2>
                        <div class="row g-5">

                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-3.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-4.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-5.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-6.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-7.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-8.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-9.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-10.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-11.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-12.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/bmeImg/bmEng-13.jpg')}}" alt="">
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Department End here -->

<!-- Upcoming Events Start here -->
<section id="upcoming">
    <div class="container">
        <div class="py-lg-10 py-md-8 py-6 text-center ">
            <h2 class="mb-lg-10 title">UPCOMING EVENTS</h2>
            <!-- <h4 class="mb-lg-10">Coming Soon..</h4> -->
            <h4 class="text-black">March 27- Hospital visit to Appollo Multi Speciality Hospital.</h4>
            <h4 class="text-black">April 17 - Workshop on Criticalcare Equipments</h4>
            <h4 class="text-black">May 20 - Guest Lecture on Fundamentals of Healthcare Analytics</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->

@endsection