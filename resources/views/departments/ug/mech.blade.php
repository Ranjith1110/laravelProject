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

<!-- Container for the popup form -->
<div id="popupContainer"></div>

<!-- Banner Section Start here -->
<section id="banner">
    <div class="dep-banner">
        <div class="py-lg-10 py-md-8 py-6 position-relative">
            <img class="w-100 object-fit-cover" src="{{asset('images/administrationImg/administration-banner.jpg')}}"
                alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Mechanical Engineering</h2>
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
            <h2 class="text-center fw-bold title-slogan">Where Mechanics Meet Magic!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in Mech</a>
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
                            Department of Mechanical Engineering is one the latest of branch in MAMCE was started in
                            the academic year 2009-10. Mechanical Engineering is one of the most distinct and
                            multi-faceted engineering disciplines. A mechanical engineer uses the basic principles
                            of physics/ mathematics and materials science and good problem-solving skills to design,
                            manufacture, and market various products.
                        </p>

                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <p class="text-justify text-black">
                                To be recognized as a provider of high quality education in the field of Mechanical
                                Engineering that enables graduates to meet the needs of society and to craft
                                intellectually-adept research centers with world class competency and cutting edge
                                proficiency..
                            </p>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <p class="text-justify">
                            <ul class="text-black">
                                <li>To educate, prepare and mentor students to excel as professionals.</li>
                                <li>To provide the facilities and environment conducive to high quality education to
                                    get diverse careers as well as research in the field of Mechanical Engineering.
                                </li>
                                <li>To engage the students in academic as well as scholarly activities, which
                                    strengthen the department reputation in global market.</li>
                            </ul>
                            </p>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>Engineering practices Laboratory</li>
                            <li>Manufacturing technology Laboratory</li>
                            <li>Strength of materials Laboratory</li>
                            <li>Fluid mechanics and machinaries Laboratory</li>
                            <li>Metrology & dynamics Laboratory</li>
                            <li>Thermal engineering Laboratory</li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>

                        <div class="table-container">
                            <table class="trust-table">
                                <thead>
                                    <tr class="text-white text-uppercase" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>Name</th>
                                        <th>Year</th>
                                        <th>Organisation</th>
                                        <th>Duration</th>
                                        <th>Course</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Umar Farooq</td>
                                        <td>4 year</td>
                                        <td>CADD CENTER</td>
                                        <td>09.10.2024 – 15.10.2024</td>
                                        <td>Auto CADD</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Susil Kumar</td>
                                        <td>4 year</td>
                                        <td>CADD CENTER</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>Auto CADD</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Esakkiraj</td>
                                        <td>4 year</td>
                                        <td>CADD CENTER</td>
                                        <td>12.08.2024-16.08.2024</td>
                                        <td>Auto CADD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

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
                                        <th>EVENT NAME</th>
                                        <th>COLLEGE NAME</th>
                                        <th>PRIZE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Santhosh</td>
                                        <td>Connection</td>
                                        <td>Roever Engineering college</td>
                                        <td>2nd Price</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sarathi</td>
                                        <td>Connection</td>
                                        <td>Roever Engineering college</td>
                                        <td>2nd Price</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Mohamed Anas</td>
                                        <td>Connection</td>
                                        <td>Roever Engineering college</td>
                                        <td>2nd Price</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>I LINO RILTON </td>
                                        <td>CAD MODELLING</td>
                                        <td>Dhanalakshmi Srinivasan Engineering College, Perambalur</td>
                                        <td>1st Price</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>I LINO RILTON</td>
                                        <td>CAD MODELLING, PARTS IDENTIFICATION, LATHE IT OFF</td>
                                        <td>MAM School of Engineering</td>
                                        <td>2nd Price</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>I LINO RILTON</td>
                                        <td>LATHE IT OFF</td>
                                        <td>NIT Trichy</td>
                                        <td>2nd Price</td>
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
                                <h4 class="text-center">PLACEMENT DETAILS -2024 BATCH</h4>
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
                                        <td>RISHI K</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>MOHAMED RIYASDEEN S</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>LINO RILTON I</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Mohamed ibrahim L</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>RAJALAKSHMI V</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>ABDUL HAKKIM AL M</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>RANJITH T</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>MADHAN K</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>DEEPAN RAJ A</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>MANIKANDAN S</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="trust-table">
                                <h4 class="text-center pt-10">PLACEMENT DETAILS -2025 BATCH</h4>
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
                                        <td>SUSILKUMAR .S</td>
                                        <td>Qspider Campus</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>UMAR FAROOK.J</td>
                                        <td>Ohm's ebergy</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>MADHAN S</td>
                                        <td>KNACK TECH</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>MOHAMED ANAS A</td>
                                        <td>KNACK TECH</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>SUSILKUMAR .S</td>
                                        <td>TITAN</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>SUSILKUMAR .S</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>SUSILKUMAR. S</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>SIVA SURIYA .S</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>BENDICK JAISON .D</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>UMAR FAROOK.J</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>MADHAN S</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>SARATHI.S</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>PRAVEEN.K</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>ELANTHENDRAL.M</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>HARISH S</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>DHINA.S</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>ESAKKIRAJ M</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>MOHAMED ANAS A </td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>KARTHIKEYAN S</td>
                                        <td>TVS-LUCAS</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Events Section -->
                    <div id="events" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Events</h2>

                        <p class="text-black">Update Soon...</p>
                    </div>

                    <!-- Gallery Section -->
                    <div id="gallery" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Gallery</h2>
                        <div class="row g-5">

                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/mechImg/mech-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mechImg/mech-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mechImg/mech-3.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mechImg/mech-4.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/mechImg/mech-5.jpg')}}" alt="">
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
            <h4 class="text-black">March 10 – seminar on hoew to do project works</h4>
            <h4 class="text-black">April 21 – Workshop on NDT</h4>
            <h4 class="text-black">May 5 - Project exhibition</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->

@endsection