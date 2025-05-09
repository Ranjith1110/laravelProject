@extends('includes.header')
@section('content')

<style>
    /* Glassmorphism background */
    .modal-content {
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 15px;
    }

    .modal-content-admin {
        background: #fff;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 15px;
    }

    /* Glassmorphic input fields */
    .form-control,
    .form-select {
        background: rgba(255, 255, 255, 0.5);
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(5px);
        border-radius: 8px;
        padding: 10px;
        font-size: 1rem;
        color: #000;
        transition: all 0.3s ease;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: rgba(211, 32, 50, 0.5);
        box-shadow: 0 0 8px rgba(232, 39, 58, 0.5);
        outline: none;
    }

    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .scrolled {
        background-color: white;
        color: black;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .scrolled .nav-link {
        color: black !important;
    }

    @media (max-width: 769px) {
        .navbar {
            background: #fff;
        }

    }
</style>

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
                <h2 class="text-white text-center fw-bolder">Administration</h2>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End here -->

<!-- About Administration Start here -->
<section class="about-admin">
    <div class="container">

        <!-- Popup Chariman Start here -->
        <div class="row gap-10 gap-lg-0 p-8">
            <div class="col-12 col-lg-6">
                <div class="shadow p-4 rounded text-justify">
                    <h3 class="fw-bold mb-4" style="color: #9d7651;">FOUNDER & CHAIRMAN</h3>
                    <h3 class="text-dark fw-bold mb-4 text-uppercase">Alhaj M. Abdul Majedu</h3>
                    <p class="text-black">
                        M.A.M College of Engineering, Siruganur, Tiruchirappalli is patronized by Maluk Educational,
                        Health and Charitable Trust. The college was established on 10.02.1999 with the approval of
                        Tamilnadu Government and All India Council for Technical Education and is affiliated to Anna
                        University Tiruchirappalli. Many batches of student Engineers have passed out successfully
                        with 100% result and placed in reputed Companies in various fields. In this competitive
                        environment in the engineering education, MAMCE proves their commitment to provide quality
                        education to their students.</p>
                    <a data-bs-toggle="modal" data-bs-target="#popupChariman" href="" class="btn text-white"
                        style="background-color: #9d7651;">View
                        Details</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <img class="img-fluid" style="max-height: 400px;"
                    src="{{asset('images/administrationImg/chairman.jpg')}}" alt="">
            </div>
        </div>
        <div class="modal fade" id="popupChariman" tabindex="-1" aria-labelledby="popupFormLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content-admin p-8">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold fs-3 text-uppercase" id="popupFormLabel"
                            style="color: #9d7651;">Alhaj M. Abdul Majedu</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-justify">
                        <p class="text-black">M.A.M College of Engineering, Siruganur, Tiruchirappalli is patronized
                            by Maluk Educational, Health and Charitable Trust. The college was established on
                            10.02.1999 with the approval of Tamilnadu Government and All India Council for Technical
                            Education and is affiliated to Anna University Tiruchirappalli. Many batches of student
                            Engineers have passed out successfully with 100% result and placed in reputed Companies
                            in various fields. In this competitive environment in the engineering education, MAMCE
                            proves their commitment to provide quality education to their students.</p>
                        <p class="text-black">MAMCE stands as a monument to witness the vision of Janab. M. Abdul
                            Majedu, the founder Chairman. The scintillating shape to the dream of the Chariman was
                            given by Dr. S. Sathikh, former Vice Chancellor of the University of Madras and the
                            Chairman of the College Governing Council. Their dreams came to reality in the year
                            1998. The great vision of the Chairman is explicitly seen in the Quality Policy, the
                            Vision and Mission of the College.</p>
                        <p class="text-black">MAMCE is located at a distance of 23km from Tiruchirappalli abutting
                            National Highways 45 leading to Chennai. Having situated on the National Highway it is
                            easily accessible from Airport and Railway Station.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popup Chariman End here -->

        <!-- Popup SECRETARY Start here -->
        <div class="row gap-10 gap-lg-0 p-8 reverse-sm">
            <div class="col-12 col-lg-6 text-center">
                <img class="img-fluid" style="max-height: 400px;"
                    src="{{asset('images/administrationImg/secratary.jpg')}}" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <div class="shadow p-4 rounded text-justify">
                    <h3 class="fw-bold mb-4" style="color: #9d7651;">SECRETARY & CORRESPONDENT</h3>
                    <h3 class="text-dark fw-bold mb-4">Dr. M.A.MOHAMED NIZAM</h3>
                    <p class="text-black">
                        Dr.M.A.Mohamed Nizam, Secretary & Correspondent of M.A.M. Group of Educational Institutions
                        at Tiruchirappalli, completed his education in Business Administration and earned his
                        Doctoral Degree and Post Doctoral Fellowship. Since the founding of M.A.M. College of
                        Engineering in 1998, Dr.Nizam, has emerged as an accomplished…</p>
                    <a data-bs-toggle="modal" data-bs-target="#popupSecretary" href="" class="btn text-white"
                        style="background-color: #9d7651;">View
                        Details</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="popupSecretary" tabindex="-1" aria-labelledby="popupFormLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content-admin p-8">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold fs-3" id="popupFormLabel"
                            style="color: #9d7651;">Dr. M.A.MOHAMED NIZAM</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-justify">
                        <p class="text-black">Dr.M.A.Mohamed Nizam, Secretary & Correspondent of M.A.M. Group of
                            Educational Institutions at Tiruchirappalli, completed his education in Business
                            Administration and earned his Doctoral Degree and Post Doctoral Fellowship.</p>
                        <p class="text-black">Since the founding of M.A.M. College of Engineering in 1998, Dr.Nizam,
                            has emerged as an accomplished educationist with his astounding contribution to the
                            expansion of the College into a successful group of educational institutions, comprising
                            of ten institutions offering School education to Polytechnic and Professional programmes
                            leading to doctoral awards in the domains of Engineering & Technology, Architecture,
                            Business Management, Education and Nursing.
                            Dr.Nizam, believing that ‘Every child is a genius’ wanted to give shape to his dream by
                            founding of two more schools in Ooty, offering International Boards of School Education
                            and the CBSE, in India and abroad.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popup SECRETARY End here -->

        <!-- Popup CEO Start here -->
        <div class="row gap-10 gap-lg-0 p-8">
            <div class="col-12 col-lg-6">
                <div class="shadow p-4 rounded text-justify">
                    <h3 class="fw-bold mb-4 text-uppercase" style="color: #9d7651;">Chief executive officer</h3>
                    <h3 class="fw-bold mb-4">Mrs. SHASMINAZ NIZAM</h3>
                    <p class="text-black">
                        Mrs. Shasminaz Nizam, is a well composed person with an enviable sense of equanimity and
                        foresight. The quality driven approach of hers, iced with personal humility and a sense of
                        affability has made her recognized as a person indispensable for an institution, aiming for
                        peace and prosperity. Thus, was Mrs. Shasminaz Nizam, quickly positioned and ably performs
                        as the CEO of the M.A.M. College…</p>
                    <a data-bs-toggle="modal" data-bs-target="#popupCeo" href="" class="btn text-white"
                        style="background-color: #9d7651;">View
                        Details</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <img class="img-fluid" style="max-height: 400px;" src="{{asset('images/administrationImg/ceo.jpg')}}"
                    alt="">
            </div>
        </div>
        <div class="modal fade" id="popupCeo" tabindex="-1" aria-labelledby="popupFormLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content-admin p-8">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold fs-3" id="popupFormLabel"
                            style="color: #9d7651;">CEO Mrs. SHASMINAZ NIZAM</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-justify">
                        <p class="text-black">Mrs. Shasminaz Nizam, is a well composed person with an enviable sense
                            of equanimity and foresight. The quality driven approach of hers, iced with personal
                            humility and a sense of affability has made her recognized as a person indispensable for
                            an institution, aiming for peace and prosperity. Thus, was Mrs. Shasminaz Nizam, quickly
                            positioned and ably performs as the CEO of the M.A.M. College of Engineering and also as
                            the Correspondent of Nizams British International School and the Nizams School, CBSE,
                            both located at Ooty.</p>
                        <p class="text-black">Mrs.Shasminaz Nizam, the proud winner of several titles inclusive of
                            having been recognized as the Women of the Year jointly with Her Excellency Chantana
                            Seelsorn, the Consul of the Royal Thai, has traveled widely to familiarize herself with
                            the educational systems and pedagogy as practiced worldover besides having marked her
                            presence at the many international meets, forums and delegations. She, as any
                            discernible mother, is most considerate to all the students in her institutions, at
                            Tiruchirappalli and Ooty, and as an administrator, does aim to do, just the best for
                            those placed under her responsibility. Mrs.Shasminaz Nizam, has also a preference for
                            Philanthropy, that she gently pursues in quietude with her inimitable grace, charm and
                            purity.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popup CEO End here -->

        <!-- Popup JOIN SECRETARY Start here -->
        <div class="row gap-10 gap-lg-0 p-8 reverse-sm">
            <div class="col-12 col-lg-6 text-center">
                <img class="img-fluid" style="max-height: 400px;"
                    src="{{asset('images/administrationImg/jsImg.jpg')}}" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <div class="shadow p-4 rounded text-justify">
                    <h3 class="fw-bold mb-4 text-uppercase" style="color: #9d7651;">Joint Secretary</h3>
                    <h3 class="text-dark fw-bold mb-4">Mr. M.A.M.Ahmar</h3>
                    <p class="text-black">
                        Mr. M.A.M.Ahmar is a young and energetic philanthropist making expeditions into
                        the field of education. His deep-rooted academic interest fueled his endeavors in the field
                        of education. His vision is to make our students virtuous men and women who can be
                        professionals and entrepreneurs. He combines the energy of youth with the vision of a
                        reformer who recognizes and encourages the talent of every individual of this
                        renowned institution</p>
                    <a data-bs-toggle="modal" data-bs-target="#popupJoinSecretary" href="" class="btn text-white"
                        style="background-color: #9d7651;">View
                        Details</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="popupJoinSecretary" tabindex="-1" aria-labelledby="popupFormLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content-admin p-8">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold fs-3" id="popupFormLabel"
                            style="color: #9d7651;">Mr. M.A.M.Ahmar</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-justify">
                        <p class="text-black"> M.A.M College of Engineering is a young and energetic philanthropist making expeditions into
                            the field of education. His deep-rooted academic interest fueled his endeavors in the field
                            of education. His vision is to make our students virtuous men and women who can be
                            professionals and entrepreneurs. He combines the energy of youth with the vision of a
                            reformer who recognizes and encourages the talent of every individual of this
                            renowned institution</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popup JOIN SECRETARY End here -->

        <!-- Popup principal End here -->
        <div class="row gap-10 gap-lg-0 p-8 reverse-sm">
            <div class="col-12 col-lg-6">
                <div class="shadow p-4 rounded text-justify">
                    <h3 class="fw-bold mb-4" style="color: #9d7651;">PRINCIPAL</h3>
                    <h3 class="text-dark fw-bold">Dr. M. SHANMUGA PRIYA</h3>
                    <p class="text-black">
                        Dr. M. Shanmuga Priya, is an educationist non-pareil who creates an inspiring vision for the
                        future, motivates and inspires everyone around to engage with that vision and builds a team
                        which is more effective at achieving the vision. An innovative and self-motivated champion
                        par Excellence with a fervent attitude to serve the best interests of students by
                        facilitating their natural desire to discover and contribute to the world they live in.</p>
                    <a data-bs-toggle="modal" data-bs-target="#popupPrincipal" href="" class="btn text-white"
                        style="background-color: #9d7651;">View
                        Details</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <img class="img-fluid" style="max-height: 400px;"
                    src="{{asset('images/administrationImg/principal.png')}}" alt="">
            </div>
        </div>
        <div class="modal fade" id="popupPrincipal" tabindex="-1" aria-labelledby="popupFormLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content-admin p-8">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold fs-3 text-uppercase" id="popupFormLabel"
                            style="color: #9d7651;">PRINCIPAL</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-justify">
                        <p class="text-black">Dr. M. Shanmuga Priya, is an educationist non-pareil who creates an inspiring vision for the
                            future, motivates and inspires everyone around to engage with that vision and builds a team
                            which is more effective at achieving the vision. An innovative and self-motivated champion
                            par Excellence with a fervent attitude to serve the best interests of students by
                            facilitating their natural desire to discover and contribute to the world they live in.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popup PRINCIPAL End here -->

        <!-- Popup Chief Administrative Officer End here -->
        <div class="row gap-10 gap-lg-0 p-8">
            <div class="col-12 col-lg-6 text-center">
                <img class="img-fluid" style="max-height: 400px;" src="{{asset('images/administrationImg/cao.jpg')}}"
                    alt="">
            </div>
            <div class="col-12 col-lg-6">
                <div class="shadow p-4 rounded text-justify">
                    <h3 class="fw-bold mb-4 text-uppercase" style="color: #9d7651;">Chief Administrative Officer</h3>
                    <h3 class="text-dark fw-bold mb-4">Mrs. T. NANCY JEEVA</h3>
                    <p class="text-black">
                        Mrs. T. Nancy Jeeva is the Chief Administrative Officer of M.A.M. College of Engineering.
                        She is associated with the college since 2000. She has her Bachelor’s and Master’s degree in
                        Computer Science and Engineering from Anna University, Chennai. She is pursuing her Doctoral
                        studies in Anna University, Chennai.</p>
                    <a data-bs-toggle="modal" data-bs-target="#popupCAO" href="" class="btn text-white"
                        style="background-color: #9d7651;">View
                        Details</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="popupCAO" tabindex="-1" aria-labelledby="popupFormLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content-admin p-8">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold fs-3" id="popupFormLabel"
                            style="color: #9d7651;">Mrs. T. Nancy Jeeva</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-justify">
                        <p class="text-black"> Mrs. T. Nancy Jeeva is the Chief Administrative Officer of M.A.M. College of Engineering.
                            She is associated with the college since 2000. She has her Bachelor’s and Master’s degree in
                            Computer Science and Engineering from Anna University, Chennai. She is pursuing her Doctoral
                            studies in Anna University, Chennai.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popup VICE PRINCIPAL Start here -->
        <div class="row gap-10 gap-lg-0 p-8">
            <div class="col-12 col-lg-6">
                <div class="shadow p-4 rounded text-justify">
                    <h3 class="fw-bold mb-4" style="color: #9d7651;">VICE PRINCIPAL</h3>
                    <h3 class="text-dark fw-bold mb-4">Mrs. T. SATHYA</h3>
                    <p class="text-black">
                        T. Sathya completed her Undergraduate degree in B.E. Civil Engineering from Alagappa
                        Chettiar Government College of Engineering and Technology (Autonomous), Madurai Kamaraj
                        University and Postgraduate degree in M.E Environmental Engineering from Periyar Maniyammai
                        College of Engineering and Technology, Anna University, Tiruchirappalli...</p>
                    <a data-bs-toggle="modal" data-bs-target="#popupVicePrincipal" href="" class="btn text-white"
                        style="background-color: #9d7651;">View
                        Details</a>
                </div>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <img class="img-fluid" style="max-height: 400px;" src="{{asset('images/administrationImg/vp.jpg')}}"
                    alt="">
            </div>
        </div>
        <div class="modal fade" id="popupVicePrincipal" tabindex="-1" aria-labelledby="popupFormLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content-admin p-8">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold fs-3 text-uppercase" id="popupFormLabel"
                            style="color: #9d7651;">VICE PRINCIPAL</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-justify">
                        <p class="text-black">T. Sathya completed her Undergraduate degree in B.E. Civil Engineering
                            from Alagappa Chettiar Government College of Engineering and Technology(Autonomous),
                            Madurai Kamaraj University and Postgraduate degree in M.E Environmental Engineering from
                            Periyar Maniyammai College of Engineering and Technology, Anna University,
                            Tiruchirappalli.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popup VICE PRINCIPAL End here -->


    </div>
</section>
<!-- About Administration End here -->

@endsection