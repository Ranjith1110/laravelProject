<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.A.M College of Engineering</title>
    <link href="{{asset('images/web-title-logo.png')}}" rel="icon" />

    <!-- External Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/adminStyle.css')}}" rel="stylesheet">
    <link href="{{asset('css/fastbootstrap.min.css')}}" rel="stylesheet">

    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/fastbootstrap.min.js')}}"></script>

</head>

<body>

    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!---- Sidebar Start ---->
        <div class="sidebar">
            <div class="logo">
                <ul id="sidebar">
                    <li>
                        <div class="profile-element">
                            <span class="d-flex align-items-center gap-4">
                                <img class="" src="/assets/images/web-title-logo.png" alt="">
                                <h2 class="mt-2">MAMCE</h2>
                            </span>
                        </div>
                    </li>

                    <li class="mt-8">
                        <a href="">
                            <i class="fa fa-th-large"></i>
                            <span class="nav-item">Demo</span>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <i class="fa fa-th-large"></i>
                            <span class="nav-item">Demo</span>
                        </a>
                    </li>

                    <li>
                        <a href="">
                            <i class="fa fa-th-large"></i>
                            <span class="nav-item">Demo</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!---- Sidebar End ---->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">

                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="btn px-4 py-2 me-2" style="background-color: #2f4050;">
                        <i class="fa-solid fa-arrow-up-right-from-square text-white me-1"></i>
                        <a href="" class="text-white" style="text-decoration: none;">Website</a>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle" src="/assets/images/web-title-logo.png" alt=""
                                style="width: 40px; height: 40px;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Demo</a>
                            <a href="#" class="dropdown-item">Demo</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Main Content -->
            @yield('content')
            <!-- <div class="main-dash px-10 py-5">
                <div class="">

                    <ul class="list-unstyled mt-5">

                        <div class="bg-body rounded border-lefts">

                            <div class="">
                                <div class="d-flex align-items-center justify-content-between pt-5 px-16">
                                    <div class="d-flex align-items-center gap-4">
                                        <li>Demo</li>
                                        <li class="bg-black text-white rounded-1 py-1 px-2">Admissin Enquries</li>
                                    </div>
                                    <li>12 Jan 2025</li>
                                </div>
                                <div class="border-bottoms m-0 px-16 pt-3">
                                    <p>Admissin Form</p>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-flex align-items-center justify-content-between pt-5 px-16">
                                    <div class="d-flex align-items-center gap-4">
                                        <li>Demo</li>
                                        <li class="bg-black text-white rounded-1 py-1 px-2">Admissin Enquries</li>
                                    </div>
                                    <li>12 Jan 2025</li>
                                </div>
                                <div class="border-bottoms m-0 px-16 pt-3">
                                    <p>Admissin Form</p>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-flex align-items-center justify-content-between pt-5 px-16">
                                    <div class="d-flex align-items-center gap-4">
                                        <li>Demo</li>
                                        <li class="bg-black text-white rounded-1 py-1 px-2">Admissin Enquries</li>
                                    </div>
                                    <li>12 Jan 2025</li>
                                </div>
                                <div class="border-bottoms m-0 px-16 pt-3">
                                    <p>Admissin Form</p>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-flex align-items-center justify-content-between pt-5 px-16">
                                    <div class="d-flex align-items-center gap-4">
                                        <li>Demo</li>
                                        <li class="bg-black text-white rounded-1 py-1 px-2">Admissin Enquries</li>
                                    </div>
                                    <li>12 Jan 2025</li>
                                </div>
                                <div class="border-bottoms m-0 px-16 pt-3">
                                    <p>Admissin Form</p>
                                </div>
                            </div>

                            <div class="">
                                <div class="d-flex align-items-center justify-content-between pt-5 px-16">
                                    <div class="d-flex align-items-center gap-4">
                                        <li>Demo</li>
                                        <li class="bg-black text-white rounded-1 py-1 px-2">Admissin Enquries</li>
                                    </div>
                                    <li>12 Jan 2025</li>
                                </div>
                                <div class="border-bottoms m-0 px-16 pt-3">
                                    <p>Admissin Form</p>
                                </div>
                            </div>


                        </div>

                    </ul>

                </div>
            </div>

            <div class="content-section p-10">
                <h2 class="text-black mb-6">Students Details</h2>

                <div class="list-container bg-body px-6 rounded">

                    <div class="row">

                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">First Name</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Last Name</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Email</li>
                                    <li class="ms-20">Demo@gmail.com</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Phone Number</li>
                                    <li class="ms-20">9900990090</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Gender</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Date Of Birth</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Blood Group</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Religion</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Caste</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                            </ul>
                        </div>

                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Roll No</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Admission ID</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Standard</li>
                                    <li class="ms-20">Demo@gmail.com</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Section</li>
                                    <li class="ms-20">9900990090</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Father Name</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Mother Name</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Father Occupation</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Mother Occupation</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                                <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                                    <li class="fw-bold">Mole</li>
                                    <li class="ms-20">Demo</li>
                                </div>
                            </ul>
                        </div>

                    </div>

                </div>

            </div> -->
        </div>
        <!-- Content End -->

    </div>

</body>

</html>