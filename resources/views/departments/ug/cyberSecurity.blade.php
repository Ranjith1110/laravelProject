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
            <img class="w-100 object-fit-cover" src="{{asset('images/separateCourses/cyberImg/cyber-banner.svg')}}"
                alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Cyber Security</h2>
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
            <h2 class="text-center fw-bold title-slogan">Protecting Your Digital Footprint!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in Cyber Security</a>
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
                            Department of Civil Engineering the latest of branches in MAMCE was started in the
                            academic year 2009-10. The discipline deals with the design, construction and
                            maintenance of the physical and naturally built environment, including works such as
                            bridges, roads, canals, dams and buildings.
                        </p>

                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <p class="text-justify text-black">
                                "To advance knowledge and educate students in Civil Engineering and its
                                related fields that will best serve the nation and the world in the 21st century. To
                                generate, disseminate, and preserve knowledge, and to work with others
                                to bring this knowledge to bear on the world's great challenges. To provide its
                                students with an education that combines rigorous academic
                                study and the excitement of discovery with the support and intellectual
                                stimulation of a diverse campus community. To develop in each member of the
                                community the ability and passion to
                                work wisely, creatively, and effectively for the betterment of humankind."
                            </p>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <p class="text-justify text-black">
                                "To provide advanced skills and knowledge in state-of-the-art research and
                                design in sub-areas of civil engineering for graduate students; and to
                                provide service to the engineering profession, and the public. To provide quality
                                education to prepare nationally competitive
                                undergraduate students for a successful career in Civil Engineering."
                            </p>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>Surveying and Levelling Laboratory</li>
                            <li>Water and Waste Water Analysis </li>
                            <li>Hydraulic Engineering Laboratory</li>
                            <li>Soil Mechanics Laboratory</li>
                            <li>Materials Testing Laboratory</li>
                            <li>Highway Engineering Laboratory</li>
                            <li>Building Drawing and Detailing Laboratory</li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <p class="text-black">Total Station Surveying</p>
                    </div>

                    <!-- Students' Achievements Section -->
                    <div id="students-corner" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Students' Achievements</h2>
                        <h4 class="text-center text-black">Students' Achievements List</h4>

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
                                        <td>AMSAVALLI P</td>
                                        <td>FIRELESS COOKING</td>
                                        <td>PERIYAR MANIAMMAI COLLEGE</td>
                                        <td>FIRST PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>SRINITHI T</td>
                                        <td>FIRELESS COOKING</td>
                                        <td>PERIYAR MANIAMMAI COLLEGE</td>
                                        <td>FIRST PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>SIVARANJANI V</td>
                                        <td>CONNECTION EVENT</td>
                                        <td>PERIYAR MANIAMMAI COLLEGE</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>VINISHA T</td>
                                        <td>CONNECTION EVENT</td>
                                        <td>PERIYAR MANIAMMAI COLLEGE</td>
                                        <td>THIRD PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>THANGAMARIS K</td>
                                        <td>CONNECTION EVENT</td>
                                        <td>PERIYAR MANIAMMAI COLLEGE</td>
                                        <td>THIRD PRICE</td>
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
                                        <th>JOB TITLE</th>
                                        <th>STUDENT PHOTO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>ARIVUKARASU.A</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>ARUNPANDIYAN.A</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>DHINESKUMAR.M</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KANIGACHALAM.G</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>HELEN SOBHA.A</td>
                                        <td>IV</td>
                                        <td>SURVEYOR</td>
                                        <td>-</td>
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
                                        <th>EVENT DATE</th>
                                        <th>STUDENTS</th>
                                        <th>RESOURCE PERSON</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>PRESENTATION DAY</td>
                                        <td>12-02-2024</td>
                                        <td>III & IV YEAR</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>CONSERVE SOLUTION SEMINAR AT BIM</td>
                                        <td>06-03-2024</td>
                                        <td>III & IV YEAR</td>
                                        <td>Mr. M. MAHESWARN</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>SYMPOMISUM</td>
                                        <td>23-03-2024</td>
                                        <td>II, III & IV YEAR</td>
                                        <td>Dr.K.DEVAKUMARAN</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>KPM TOPOMAPPER& ENGINNERING SURVEYOR (INTERNSHIP COME PLACEMENT)</td>
                                        <td>04-03-2024</td>
                                        <td>IV</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>WORKSHOP ON SOFTWARE DEMONSTRATION</td>
                                        <td>27-05-2024</td>
                                        <td>II & III YEAR</td>
                                        <td>Mr.SANTHANA GOPALA KRISHNAN</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>

                    <!-- Gallery Section -->
                    <div id="gallery" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Gallery</h2>
                        <p class="text-black">Update Soon..</p>
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