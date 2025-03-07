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
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.jpg')}}"
                alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Master of Computer Applications</h2>
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
            <h2 class="text-center fw-bold title-slogan">Ctrl+Alt+Innovate: The MCA Mantra!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in MCA</a>
        </div>
        <div class="mx-10 my-16">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-2 sidebar">
                    <ul class="p-0">
                        <li class="active text-black" data-target="about">ABOUT</li>
                        <li class="text-black" data-target="facilities">Facilities</li>
                        <li class="text-black" data-target="value-added-programmes">Value Added Programmes</li>
                        <li class="text-black" data-target="events">Events</li>
                        <li class="text-black" data-target="placement">Placement</li>
                        <li class="text-black" data-target="gallery">Gallery</li>
                    </ul>
                </div>

                <!-- Content -->
                <div class="col-md-10 p-4">
                    <!-- About Section -->
                    <div id="about" class="content-section">
                        <h2 class="title-slogan mb-4">About</h2>
                        <p class="text-justify text-black">
                            The department of Computer Applications was established in the year 2009 with an intake of 60. The major asset of the department is well - dedicated and experienced faculty members who strive to impart quality education to the students to become eminent effective and dynamic energetic software professionals. The department encourages the faculty members to undertake research activities and professional growth of students. All of our faculty members completed their Master's degree and one of them pursuing Ph.D. The average experience of our faculty is above five years. Besides, the retention ratio of the staff members is effectively fair. The course offers several areas of specialization as an elective paper with advanced curriculum that has been developed and delivered by experienced academicians and industry professionals. This helps the students to abreast with market world challenges.
                        </p>

                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <ul class="text-black">
                                <li>To Establish a full-fledged, recognized R & D Center & to launch a journal on computer applications</li>
                                <li>To Develop the Department as Center of Excellence in learning.
                                    Aiming at 100 % Placement.
                                </li>
                                <li>To Organize more technical events with cutting-edge technology.</li>
                                <li>To Establish good rapport with reputed firms & Universities (In & abroad).</li>
                            </ul>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <ul class="text-black">
                                <li>To achieve academic excellence on par with Global Institutions.</li>
                                <li>To achieve overall 100% pass with 50% Distinctions.</li>
                                <li>To achieve 50% placement.</li>
                                <li>To produce more rank holders.</li>
                                <li>To spread computer literacy to rural folk.</li>
                                <li>To get grants from MHRD/DST/CSIR/AICTE for R & D Projects.</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>ION FOSTER Laboratory </li>
                            <li>Dijiktra Laboratory</li>
                            <li>Innovation Laboratory</li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <p class="text-black">BRIDGE COURSES FOR NON COMPUTER SCIENCE STUDENTS</p>
                    </div>

                    <!-- Placements Section -->
                    <div id="placement" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Placements</h2>

                        <div class="table-container">

                            <table class="trust-table">
                                <h4 class="text-center">PLACEMENT DETAILS (2020-2021) BATCH</h4>
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>STUDENT NAME</th>
                                        <th>COMPANY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>NIVETHA A</td>
                                        <td>WIPRO LIMITED</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>DHOSHIBA B</td>
                                        <td>WIPRO LIMITED</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>SHALMAN KHAN. S</td>
                                        <td>ADELA SOFTWARE & SERVICE PVT LMD</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>AISHWARYA SELLI.R</td>
                                        <td>CAPGEMINI</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>VINOTH.R</td>
                                        <td>HCL TECHNOLOGIES LTD</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>KOWSALYA D</td>
                                        <td>COGNIZANT SOLUTIONS</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="trust-table">
                                <h4 class="text-center pt-10">PLACEMENT DETAILS (2021-2022) BATCH</h4>
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>STUDENT NAME</th>
                                        <th>COMPANY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>MOHAMED IQBAL S</td>
                                        <td>VDART TECHNOLOGIES PVT LMD</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>RAXANA S</td>
                                        <td>VDART TECHNOLOGIES PVT LMD</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>JAYA SURYA V</td>
                                        <td>ADELA SOFTWARE & SERVICE PVT LMD</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>VIJAYAKANTH K</td>
                                        <td>ADELA SOFTWARE & SERVICE PVT LMD</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>VIJAYA KUMAR K</td>
                                        <td>TVM INFOTECH, CHENNAI</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="trust-table">
                                <h4 class="text-center pt-10">PLACEMENT DETAILS (2022-2023) BATCH</h4>
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>STUDENT NAME</th>
                                        <th>COMPANY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>KAVITHA S</td>
                                        <td>OMEGA HEALTHCARE, TRICHY.</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>SUGUMAR M</td>
                                        <td>TVM INFOTECH</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>DEVA DHARSHINI M</td>
                                        <td>ALASSH INFOTECH</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>BHUVANESWARI S</td>
                                        <td>TVM INFOTECH</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>KISHORE KUMAR T</td>
                                        <td>Inmakes Infotech</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>ABDUL FAHATH S.A</td>
                                        <td>OMEGA HEALTHCARE, TRICHY.</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>ARAVIND R</td>
                                        <td>TVM INFOTECH</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>LEGASRI R</td>
                                        <td>KG INVICTA SERVICE PVT LTD</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>VIMAL KUMAR S</td>
                                        <td>Phonepe</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="trust-table">
                                <h4 class="text-center pt-10">PLACEMENT DETAILS (2023-2024) BATCH</h4>
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>STUDENT NAME</th>
                                        <th>COMPANY</th>
                                        <th>DOMAIN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Nawinshanmugam A</td>
                                        <td>Instruserv technology</td>
                                        <td>Data Entry Operator</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Janani I</td>
                                        <td>UCMAS ABACUS</td>
                                        <td>Teacher</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Ajithkumar M</td>
                                        <td>First source solutions</td>
                                        <td>BPO</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Sulaiha Jamruth Begam S</td>
                                        <td>Newton Ceramics</td>
                                        <td>Administrative and Accountancy Management</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Ranjith M</td>
                                        <td>Inmakes Infotech</td>
                                        <td>Automation Testing</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Harini D</td>
                                        <td>Shalom Info Tech company</td>
                                        <td>Digital Marketing and Marketing Consultant</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <!-- Events Section -->
                    <div id="events" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Events</h2>

                        <ul class="text-black">
                            <li>FULL STACK WEB DEVELOPMENT</li>
                            <li>WORKSHOP</li>
                            <li>PRESENTATION DAY</li>
                        </ul>

                    </div>

                    <!-- Gallery Section -->
                    <div id="gallery" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Gallery</h2>
                        <div class="row g-5">

                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-1.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-2.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-3.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-4.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-5.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-6.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-7.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-8.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-9.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-10.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-11.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-12.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-13.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-14.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-15.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-16.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-17.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-18.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mcaImg/mca-19.jpg')}}"
                                    alt="">
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
            <h4 class="mb-lg-10">Coming Soon..</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->

@endsection