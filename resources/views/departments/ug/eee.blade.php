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
            <img class="w-100 object-fit-cover" src="{{asset('images/separateCourses/eeeImg/eee-banner.svg')}}" alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Electrical & Electronics Engineering</h2>
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
            <h2 class="text-center fw-bold title-slogan">The Power to Create, The Passion to Innovate!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in EEE</a>
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
                            Electrical engineering is an engineering discipline concerned with the study, design,
                            and application of equipment, devices, and systems which use electricity, electronics,
                            and electromagnetism. It emerged as an identifiable occupation in the latter half of the
                            19th century after the commercialization of the electric telegraph, the telephone, and
                            electrical power generation, distribution, and use.
                        </p>
                        <button class="btn text-white fw-bold" style="background-color: #9d7651;">VIEW PROGRAM
                            OUTCOMES ></button>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <p class="text-justify text-black">
                                To develop as world class engineering institution producing competent professionals
                            </p>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <p class="text-justify text-black">
                                To blend rigorous academics with innovative approaches under a sustainable ambience
                                to produce competent professionals
                            </p>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>ELECTRICAL MACHINE LAB</li>
                            <li>POWER ELECTRONICS LAB</li>
                            <li>ELECTRONIC AND DEVICES LAB</li>
                            <li>SIMULATION LAB</li>
                            <li>EPL LAB</li>
                            <li>PG POWER ELECTRONICS AND DRIVES LAB</li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <ul class="text-black">
                            <li>AUTO CADD</li>
                            <li>MATLAB</li>
                            <li>LAB VIEW</li>
                            <li>NAN MUDHALVAN ( DRONE TECHNOLOGY)</li>
                            <li>ELECTRICAL VECHICLE TECHNOLOGY</li>
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
                                        <th>EVENT NAME</th>
                                        <th>COLLEGE NAME</th>
                                        <th>PRIZE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>RAFEEQA</td>
                                        <td>HAIR DRESSING</td>
                                        <td>Holy cross clg</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mohansundaram</td>
                                        <td>Technical symposium</td>
                                        <td>Salem engg college</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>RAFEEQA</td>
                                        <td>Technical symposium</td>
                                        <td>KRCE engg college</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>RAGAVAN, ELUMALAI</td>
                                        <td>Dancing</td>
                                        <td>HOLY CROSS COLLEGE</td>
                                        <td>THIRD PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>SINDHU</td>
                                        <td>Food</td>
                                        <td>HOLY CROSS COLLEGE</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>RAFEEQA, MOHANASUNDHARAM</td>
                                        <td>PAPER PRESENTATION</td>
                                        <td>ANNA UNIVERSITY ,BIT CAMPUS TRICHY</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>MOHANASUNDHARAM</td>
                                        <td>PAPER PRESENTATION</td>
                                        <td>K.RAMAKRISHNAN ENGINEERING COLLEGE</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>MOHANASUNDHARAM</td>
                                        <td>PAPER PRESENTATION</td>
                                        <td>TAGORE INSITUTE OF TECHNOLOGY</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>T.Deenadalayan, K.Nirmal</td>
                                        <td>Circuit debugging</td>
                                        <td>J.J college of engineering</td>
                                        <td>THIRD PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>V.Santhosh, M.Akaram</td>
                                        <td>Hangman</td>
                                        <td>J.J college of engineering</td>
                                        <td>FIRST PRICE</td>
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
                                        <th>COMPANY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ABDUL RAHUMAN</td>
                                        <td>BRAKES INDIA LTD</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>FRANKLIN M</td>
                                        <td>BRAKES INDIA LTD</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>JEGAN S</td>
                                        <td>BRAKES INDIA LTD</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>MOHAMMED ASIQ </td>
                                        <td>BRAKES INDIA LTD</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>MOHAMMED ANAYEEM</td>
                                        <td>BRAKES INDIA LTD</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>ABDUL RAHUMAN</td>
                                        <td>ALASS INFO TECH PVT LTD</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Events Section -->
                    <div id="events" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Events</h2>

                        <div class="table-container">
                            <table class="trust-table">
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th>SI.NO</th>
                                        <th>NAME OF EVENT</th>
                                        <th>CONDUCTED DATE</th>
                                        <th>STUDENTS</th>
                                        <th>RESOURCE PERSON</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PRESENTATION DAY</td>
                                        <td>10-02-2023</td>
                                        <td>2,3 YEAR</td>
                                        <td>Class Coordinator</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>E-CADD</td>
                                        <td>24-03-2023</td>
                                        <td>2,3 YEAR</td>
                                        <td>Mrs.GANGA GOWRI</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>PROJECT EXPO 2K23</td>
                                        <td>06.05.2023</td>
                                        <td>3,4 YEAR</td>
                                        <td>Dept STAFFS</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>PRESENTATION DAY</td>
                                        <td>30.05.2023</td>
                                        <td>1 YEAR</td>
                                        <td>Class Coordinator</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Yoga Class (II Sem)</td>
                                        <td>19-06-203</td>
                                        <td>First Year (3)</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Group Discussion (II Sem)</td>
                                        <td>21-06-2023</td>
                                        <td>First Year (15)</td>
                                        <td>Mrs.Divya /CDP Coordinator</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Seminar on Industrial Automation</td>
                                        <td>21.07.2023</td>
                                        <td>1st year</td>
                                        <td>Mr.R.Karunesh IPECS</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>Webinar on solar energy</td>
                                        <td>25.07.2023</td>
                                        <td>1st year</td>
                                        <td>Yet to finalize</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Industral Visit</td>
                                        <td>25.09.2023</td>
                                        <td>ALL 2,3,4 Years</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Symposium</td>
                                        <td>29.09.2023</td>
                                        <td>ALL 2,3,4 Years</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Presentation day</td>
                                        <td>12.10.2023</td>
                                        <td>II YEAR</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Webinar</td>
                                        <td>24.08.2023</td>
                                        <td>II YEAR</td>
                                        <td>N.Santhanam Director TCIL</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>INNOVATIVE CLASS</td>
                                        <td>13.08.2023</td>
                                        <td>II YEAR</td>
                                        <td>R.RAMANATHAN</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Gallery Section -->
                    <div id="gallery" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Gallery</h2>
                        <div class="row g-5">

                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eeeImg/eeeEng.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eeeImg/eeeEng-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eeeImg/eeeEng-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eeeImg/eeeEng-3.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eeeImg/eeeEng-4.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eeeImg/eeeEng-5.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eeeImg/eeeEng-6.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eeeImg/eeeEng-7.jpg')}}" alt="">
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

            <h4 class="text-black">ELECTRIC VEHICLE TECHNOLOGY 10.03.2025</h4>
            <h4 class="text-black">PROJECT EXHIBITION 16.04.2025</h4>
            <h4 class="text-black">ESEMINARS ON RENEWABLE ENERGY TECHNOLOGY 22.06.2025</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->


@endsection