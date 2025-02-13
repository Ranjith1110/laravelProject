@extends('main.layouts.app')

<div class="container-fluid fixed-top p-0" style="background-color: #dfcfc1;">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="fa-solid fa-graduation-cap text-black fs-5 me-2"></small>
                <small class="text-black fs-4 fw-bold">Counselling Code : 3810</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fas fa-phone-alt text-black me-2"></small>
                <small class="text-black"><a class="text-black" href="tel:+91 9952522022">+91 9952522022</a></small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square bg-white text-black me-1" href="https://www.facebook.com/mamce.trichy/"
                    target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square bg-white text-black me-1"
                    href="https://www.linkedin.com/school/mamceofficial/posts/?feedView=all" target="_blank"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square bg-white text-black me-0" href="" target="_blank"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Top Navbar End here -->

<!-- Navbar and banner Start here -->
<nav id="navbar" class="fixed-top navbar navbar-expand-lg navbar-light px-4 py-1 mt-lg-14 mt-0">
    <a href="" class="navbar-brand d-flex align-items-center">
        <img width="300px" class="mamce-logo m-0" src="{{asset('images/mamce-logo.png')}}" alt="">
    </a>
    <button type="button" class="navbar-toggler me-4 collapsed" data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{route('index')}}" class="nav-item nav-link">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">About</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{route('aboutMamce')}}" class="dropdown-item">About Mamce</a>
                    <a href="{{route('historyMamce')}}" class="dropdown-item">History of Mamce</a>
                    <a href="{{route('adminMamce')}}" class="dropdown-item" >Administration</a>
                    <a href="{{route('mandatoryDisclosure')}}" class="dropdown-item">Mandatory Disclosure</a>
                    {{--<a href="" class="dropdown-item">MAMCE In News</a>--}}
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">Courses</a>
                <div class="dropdown-menu fade-up m-0">
                    <div class="d-flex">

                        <div>
                            <p class="dropdown-item h4 fw-bold" style="color: #9d7651;">UG COURSES</p>
                            <a href="{{route('civil')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.E Civil Engineering </a>
                            <a href="{{route('cse')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.E Computer Science and Engineering </a>
                            <a href="{{route('eee')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.E Electrical and Electronics Engineering </a>
                            <a href="{{route('ece')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.E Electronics and Communication Engineering </a>
                            <a href="{{route('eie')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.E Electronics and Instrumentation Engineering </a>
                            <a href="{{route('it')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.E Information Technology </a>
                            <a href="{{route('mech')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.E Mechanical Engineering </a>
                            <a href="{{route('ai&ds')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.Tech Artificial Intelligence and Data Science </a>
                            <a href="{{route('agri')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.Tech Agricultural Engineering </a>
                            <a href="{{route('bioMedical')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.Tech Biomedical Engineering </a>
                            <a href="{{route('foodTech')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.Tech Food Technology </a>
                            <a href="{{route('bioTech')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.Tech Bio Technology </a>
                            <a href="{{route('cyberSecurity')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.Tech Cyber Security </a>
                            <a href="{{route('ai&ml')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> B.Tech Artificial Intelligence and Machine Learning </a>
                        </div>

                        <div>
                            <p class="dropdown-item h4 fw-bold" style="color: #9d7651;">PG COURSES</p>
                            <a href="{{route('mba')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> M.B.A Master of Business Administration </a>
                            <a href="{{route('mca')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> M.C.A Master of Computer Applications </a>
                            <a href="{{route('environmentalEngineering')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> M.E Environmental Engineering </a>
                            <a href="{{route('mecse')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> M.E Computer Science and Engineering </a>
                            <a href="{{route('meece')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> M.E Electronics and Communication Engineering </a>
                            <a href="{{route('ped')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> M.E Power Electronics and Drives </a>
                            <a href="{{route('manufacturingEngineering')}}" class="dropdown-item"><span class="fw-bold" style="color: #9d7651;">>
                                </span> M.E Manufacturing Engineering </a>
                        </div>

                    </div>
                </div>
            </div>
            <a href="{{route('campus')}}" class="nav-item nav-link">Campus</a>
            <a href="{{route('placement')}}" class="nav-item nav-link">Placement</a>
            <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">Online
                    Payment</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="{{route('tutionFees')}}" class="dropdown-item">Tuition Fees</a>
                    <a href="{{route('examFees')}}" class="dropdown-item">Exam Fees</a>
                    <a href="{{route('otherFees')}}" class="dropdown-item">Other Fees</a>
                    <a href="{{route('newAdmissionFees')}}" class="dropdown-item">New Admission Fees</a>
                </div>
            </div>
            <a href="#popupForm" class="nav-item nav-link" data-bs-toggle="modal"
            data-bs-target="#admissionEnquiryModal">Admission</a>
            <a href="{{asset('images/EOA-2024-2025.pdf')}}" class="nav-item nav-link">EoA</a>
            <a href="{{asset('images/Mamce-NIRF.pdf')}}" class="nav-item nav-link">NIRF</a>
            <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">Login</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="https://prezenta.co.in/mameng/ " class="dropdown-item">Staff</a>
                    <a href="https://prezenta.co.in/mameng/ " class="dropdown-item">Student</a>
                    <!-- <a href="" class="dropdown-item">Alumini</a> -->
                </div>
            </div>
            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
            <div class="d-lg-none text-center mt-4 py-4 rounded fs-2 fw-bold" style="background-color: #9d7651;">
                <small class="fa-solid fa-graduation-cap text-white me-2"></small>
                <small class="text-white">Counselling Code : 3810</small>
            </div>
        </div>
    </div>
</nav>

<!-- Include the popup content from the includes folder -->
@include('includes.popup')