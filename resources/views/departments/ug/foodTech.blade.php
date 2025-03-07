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
                <h2 class="text-white text-center fw-bolder">Food Technology</h2>
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
            <h2 class="text-center fw-bold title-slogan">The Art of Food, The Science of Technology!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in Food Tech</a>
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
                            Food technology encompasses a range of scientific and technological processes used to
                            transform raw ingredients into food products. It is a branch of engineering that deals
                            with the techniques involved in the production
                            ,processing,preservation,packaging,labelling,quality management and distribution of food
                            products. It involves various disciplines such as chemistry,microbiology,engineering,and
                            nutrition.
                        </p>

                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <p class="text-justify text-black">
                                To be centre of excellence for development and dissemination of knowledge in the
                                field of food technology for the nation and beyond. To be a centre ofrepute in the
                                frontier areas of food technology through quality research and education.
                            </p>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <p class="text-justify text-black">
                                Develop vibrant, competent and ethical food engineers who can promote technical
                                advancements in the field of food technology.To impart knowledge in the realm of
                                food technology through research and education.Faster the research activities of
                                faculty and students to explore the state-of-the-air techniques to meet the
                                industrial and societal needs.
                            </p>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>Food Chemistry Laboratory</li>
                            <li>Food Microbiology Laboratory</li>
                            <li>Biochemistry and Nutrition Laboratory</li>
                            <li>Unit Operation Laboratory</li>
                            <li>Food Processing and Preservation Laboratory</li>
                            <li>Food Analysis Laboratory</li>
                            <li>Food Process Engineering Laboratory</li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <p class="text-black">Update Soon...</p>
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
                                        <th>EVENT NAME</th>
                                        <th>COLLEGE NAME</th>
                                        <th>PRIZE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>D.Sandhiya</td>
                                        <td>3rd Year</td>
                                        <td>Technical Symposium</td>
                                        <td>KONDU ENGINEERING COLLEGE</td>
                                        <td>FIRST PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>S.Abitha</td>
                                        <td>3rd Year</td>
                                        <td>Technical Symposium</td>
                                        <td>KONDU ENGINEERING COLLEGE</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>M.Dharika,
                                            S.Knimozhi
                                        </td>
                                        <td>3rd Year</td>
                                        <td>TECHFINIX-24</td>
                                        <td>PAAVAI ENGIUNEERING COLLEGE</td>
                                        <td>FIRST PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Ashima sri
                                            Navanayagi
                                        </td>
                                        <td>3rd Year</td>
                                        <td>Technical Symposium</td>
                                        <td>KONDU ENGINEERING COLLEGE</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>THANGAMARIS K</td>
                                        <td>3rd Year</td>
                                        <td>Technical Symposium</td>
                                        <td>KONDU ENGINEERING COLLEGE</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>P.Swathi,
                                            S.Vaishnavi
                                        </td>
                                        <td>2nd Year</td>
                                        <td>BIOFENIX 2K24</td>
                                        <td>SALEM ENGINEERING COLLEGE</td>
                                        <td>SECOND PRICE</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <!-- Placements Section -->
                    <div id="placement" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Placements</h2>
                        <p class="text-black">Update Soon...</p>
                    </div>

                    <!-- Gallery Section -->
                    <div id="gallery" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Gallery</h2>
                        <div class="row g-5">
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/foodTechImg/food-1.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/foodTechImg/food-2.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/foodTechImg/food-3.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/foodTechImg/food-4.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/foodTechImg/food-5.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/foodTechImg/food-6.jpg')}}" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/foodTechImg/food-7.jpg')}}" alt="">
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

            <h4 class="text-black">March-Food festival</h4>
            <h4 class="text-black">April-Guests lecture</h4>
            <h4 class="text-black">April-Workshop</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->

@endsection