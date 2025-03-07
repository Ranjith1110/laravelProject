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
                <h2 class="text-white text-center fw-bolder">Master of Business Administration</h2>
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
            <h2 class="text-center fw-bold title-slogan">Shaping Business Minds, Shaping the Future!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in MBA</a>
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
                            To provide holistic and value based professional education relevant
                            to the country's progress in the field of business administration
                        </p>

                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <p class="text-justify text-black">
                                To develop the analytical and strategic management skills of students,
                                using concepts derived from a wide range of academic disciplines, enabling them
                                to respond creatively and effectively to the challenges of the global business
                                environment.Our mission is to become a Centre of Excellence for nurturing creativity,
                                encouraging entrepreneurship and enhancing employability, holistic development
                                of students, teaching and quality research.

                            </p>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <p class="text-justify text-black">
                                The Department of Management Studies was started in M.A.M.C.E in the year 2008.
                                The programme is approved by AICTE, New Delhi & Affiliated to Anna University, Chennai.</p>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>Communication labs Data Analytics</li>
                            <li>Business Modelling laboratory </li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <ul class="text-black">
                            <li>Workshop On Tally</li>
                            <li>Workshop On SPSS</li>
                            <li>Seminar on World Entrepreneurship Development</li>
                            <li>Workshop on Management Break</li>
                        </ul>
                    </div>

                    <!-- Students' Achievements Section -->
                    <div id="students-corner" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Students' Achievements</h2>
                        <h4 class="text-center">Students' Achievements List</h4>

                        <div class="table-container">
                            <table class="trust-table">
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>STUDENT NAME</th>
                                        <th>YEAR</th>
                                        <th>DURATION</th>
                                        <th>COMPAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ANUSHYA MUTHUSAMY</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>Hindustan Unilever limited</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>GOMATHI R</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>ABC Hospital</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>HARISH S</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>Sri Alamelu steels</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>HARNISH A</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>kamaraj foods</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>MADHUMATHI M</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>Velmurugan industries pvt Ltd</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>MOHAMED JAMEER R</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>AKR Paper Cup Industry</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>AKR Paper Cup Industry</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>Amirtham foods</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>ROSHNI M</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>Andavar plus water company</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>SANGEETHA R</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>Silver line hospital</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>SANTHOSH B</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>Vijay Dairy and Farm products pvt Ltd</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>SHOBANA S</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>RKM herbal products company</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>SIVA SUNDAR M</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>LSG and Co</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>VEERABAGU G</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>Sri Vishnu Shankar Mill Limited</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>VENGATESH K</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>BELL BERRIES FOOD AND BEVERAGES LLP</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>VIBIN BOSCO B</td>
                                        <td>II</td>
                                        <td>1 MONTH</td>
                                        <td>Cookieman-Australian Foods India Pvt Ltd</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Placements Section -->
                    <div id="placement" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Placements</h2>

                        <div class="table-container">
                            <table class="trust-table">
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>STUDENT NAME</th>
                                        <th>YEAR</th>
                                        <th>COMPANY NAME</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ANUSHIYA</td>
                                        <td>II YEAR</td>
                                        <td>KNACKTECH</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>KANIMOZHI</td>
                                        <td>II YEAR</td>
                                        <td>KNACKTECH</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>PAVITHRA</td>
                                        <td>II YEAR</td>
                                        <td>KNACKTECH</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>SHOBHANA</td>
                                        <td>II YEAR</td>
                                        <td>KNACKTECH</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>SUDHIR</td>
                                        <td>II YEAR</td>
                                        <td>KNACKTECH</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>MADHAN KUMAR</td>
                                        <td>II YEAR</td>
                                        <td>TITAN</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>VEERABAGHU</td>
                                        <td>II YEAR</td>
                                        <td>TITAN</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>RENUGA</td>
                                        <td>II YEAR</td>
                                        <td>MS IT PARK</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>ANUSHIYA</td>
                                        <td>II YEAR</td>
                                        <td>MS IT PARK</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Events Section -->
                    <div id="events" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Events</h2>

                        <ul class="text-black">
                            <li>BUSINESS ASSEMBLY</li>
                            <li>HR Events</li>
                            <li>Guest Lectures</li>
                            <li>MAM yuga symposium</li>
                            <li>Industrial Visit</li>
                            <li>Role Play</li>
                        </ul>

                    </div>

                    <!-- Gallery Section -->
                    <div id="gallery" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Gallery</h2>
                        <div class="row g-5">

                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mbaImg/mba-1.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mbaImg/mba-2.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mbaImg/mba-3.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mbaImg/mba-4.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mbaImg/mba-5.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mbaImg/mba-6.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mbaImg/mba-7.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mbaImg/mba-8.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mbaImg/mba-9.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/mbaImg/mba-10.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/mbaImg/mba-11.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/mbaImg/mba-12.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/mbaImg/mba-13.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/mbaImg/mba-14.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/mbaImg/mba-15.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/mbaImg/mba-16.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/mbaImg/mba-17.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/mbaImg/mba-18.jpg')}}" alt="">
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

            <h4 class="text-black">MAMYUGA</h4>
            <h4 class="text-black">Workshop On Effective Sales And Marketing Strategies</h4>
            <h4 class="text-black">Session On Achieving Problem Solution Fit And Product Market Fit</h4>
            <h4 class="text-black">Seminar On Learn Office Ethics By Ms.Priya Govindarajan, Samudhriga Academy</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->

@endsection