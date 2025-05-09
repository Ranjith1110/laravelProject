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
            <img class="w-100 object-fit-cover" src="{{asset('images/separateCourses/eceImg/ece-banner.svg')}}" alt="">
            <div class="position-absolute">
                <h2 class="text-white text-center fw-bolder">Electronics & Communication Engineering</h2>
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
            <h2 class="text-center fw-bold title-slogan">The Voice of Innovation, The Pulse of Technology!</h2>
            <a href="#" style="background-color: #9d7651; border: 2px solid #dfcfc1;"
                class="text-white px-md-2 px-0 py-2 rounded text-uppercase" data-bs-toggle="modal"
                data-bs-target="#popupForm">Book Your Admission in ECE</a>
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
                            The department of Electronics and Communication Engineering in MAM started with 40 seats
                            in 1998-1999. Intake increased to 60 in 2000-2001 and intake increased to 180 in
                            2012-2013. The Post Graduate programme in Electronics and Communication(ME-ECE) was
                            started in the year 2012. The department was accredited by NBA-AICTE in 2008-2009 for 3
                            years(2008-2011) and was reaccredited from June 2014 to June 2016 under the Washington
                            Accord by NBA.
                        </p>
                        <button class="btn text-white fw-bold" style="background-color: #9d7651;">VIEW PROGRAM
                            OUTCOMES ></button>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">VISION</h2>
                            <p class="text-justify text-black">
                                To evolve as a center of excellence in Electronics and Communication Engineering by
                                training students in contemporary technologies, enabling them to meet the needs of
                                global industry, develop them as skillful engineers imbued with human values and
                                professional ethics
                            </p>
                        </div>
                        <div class="mt-10 p-5" style="border: 10px solid #9d7651;">
                            <h2 class="title-slogan mb-4">MISSION</h2>
                            <p class="text-justify text-black">
                                To adapt best pedagogical practices for fundamentals through active learning. To
                                encourage students to take up core and multidisciplinary projects leading towards
                                product development. To create competent teachers and researchers. To develop
                                laboratories in collaboration with leading industries and research organizations. To
                                provide opportunities for students to hone their interpersonal skills and imbibe
                                ethical values.
                            </p>
                        </div>
                    </div>

                    <!-- Facilities Section -->
                    <div id="facilities" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Facilities</h2>
                        <ul class="text-black">
                            <li>Embedded Lab</li>
                            <li>Digital Lab</li>
                            <li>VLSI Lab</li>
                            <li>DSP Lab</li>
                            <li>Communication Lab</li>
                            <li>EDC Lab</li>
                            <li>Centre of Excellence</li>
                        </ul>
                    </div>

                    <!-- Value added programmes Section -->
                    <div id="value-added-programmes" class="content-section d-none">
                        <h2 class="title-slogan mb-4">Value added programmes</h2>
                        <div class="table-container">
                            <table class="trust-table">
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th class="text-uppercase">SI.NO</th>
                                        <th class="text-uppercase">NAME</th>
                                        <th class="text-uppercase">YEAR</th>
                                        <th class="text-uppercase">Organisation</th>
                                        <th class="text-uppercase">Duration</th>
                                        <th class="text-uppercase">Course</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>D.Saranya</td>
                                        <td>3 rd year</td>
                                        <td>SD PRO Solutions</td>
                                        <td>12.08.2024-16.08.2024</td>
                                        <td>VLSI DESIGN</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>A.Tamizharasi</td>
                                        <td>3 rd year</td>
                                        <td>SD PRO Solutions</td>
                                        <td>12.08.2024-16.08.2024</td>
                                        <td>VLSI DESIGN</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>V.Dhivya</td>
                                        <td>3 rd year</td>
                                        <td>SD PRO Solutions</td>
                                        <td>12.08.2024-16.08.2024</td>
                                        <td>VLSI DESIGN</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>M.Sabitha</td>
                                        <td>3 rd year</td>
                                        <td>SD PRO Solutions</td>
                                        <td>12.08.2024-16.08.2024</td>
                                        <td>VLSI DESIGN</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>M.Arul Prabha</td>
                                        <td>3 rd year</td>
                                        <td>GALWIN TECHNOLOGY</td>
                                        <td>14.07.2024-15.07.2024</td>
                                        <td>PCB DESIGN</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>M.Abdul Rahuman</td>
                                        <td>3 rd year</td>
                                        <td>CodeBind Technologies</td>
                                        <td>09.10.2024 – 15.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>M.Abdul Rahuman</td>
                                        <td>3 rd year</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>M.MANOJ</td>
                                        <td>3 rd year</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>M.Abdul Rahuman</td>
                                        <td>3 rd year</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>M.Abdul Rahuman</td>
                                        <td>3 rd year</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>M.Abdul Rahuman</td>
                                        <td>3 rd year</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>M.Abdul Rahuman</td>
                                        <td>3 rd year</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="table-container">
                            <table class="trust-table">
                                <thead>
                                    <tr class="text-white" style="background-color: #9d7651;">
                                        <th class="text-uppercase">SI.NO</th>
                                        <th class="text-uppercase">NAME</th>
                                        <th class="text-uppercase">COLLEGE</th>
                                        <th class="text-uppercase">Prize</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>M.MANOJ</td>
                                        <td>KNOWLEDGE BYTES</td>
                                        <td>MOUNT ZION COLLEGE OF ENGINEERING</td>
                                        <td>2ND</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>M.MANOJ</td>
                                        <td>TECH SPOOL</td>
                                        <td>KONGUNADU COLLEGE OF ENGINEERING</td>
                                        <td>1ST</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>G.GOWTHAM</td>
                                        <td>TECH SPOOL</td>
                                        <td>KONGUNADU COLLEGE OF ENGINEERING</td>
                                        <td>1ST</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>G.GOWTHAM</td>
                                        <td>KNOWLEDGE BYTES</td>
                                        <td>MOUNT ZION COLLEGE OF ENGINEERING</td>
                                        <td>2ND</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>M.DEEPAK</td>
                                        <td>TECH SPOOL</td>
                                        <td>KONGUNADU COLLEGE OF ENGINEERING</td>
                                        <td>1ST</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>P.DINESHKUMAR</td>
                                        <td>PAPER PRESENTATION</td>
                                        <td>DHANALAKSHMI SRINIVASAN ENGINEERING COLLEGE</td>
                                        <td>3RD</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>KAVIYA</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>M.MANOJ</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>M.Abdul Rahuman</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>M.Abdul Rahuman</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>M.Abdul Rahuman</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>M.Abdul Rahuman</td>
                                        <td>CodeBind Technologies</td>
                                        <td>04.10.2024-09.10.2024</td>
                                        <td>EMBEDDED SYSTEMS</td>
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
                                        <th>YEAR</th>
                                        <th>EVENT NAME</th>
                                        <th>COLLEGE NAME</th>
                                        <th>PRIZE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>D.Saranya</td>
                                        <td>3 rd year</td>
                                        <td>Brain Buzz</td>
                                        <td>M.A.M College of engineering</td>
                                        <td>1st</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>M. Arul prabha </td>
                                        <td>3 rd year</td>
                                        <td>Technical Symposium</td>
                                        <td>Roever Engineering College</td>
                                        <td>1st</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>V.Dhivya</td>
                                        <td>3 rd year</td>
                                        <td>Brain Buzz</td>
                                        <td>M.A.M College of engineering</td>
                                        <td>1st</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>A.Tamizharasi</td>
                                        <td>3 rd year</td>
                                        <td>Brain Buzz</td>
                                        <td>M.A.M College of engineering</td>
                                        <td>1st</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>M.Sabitha</td>
                                        <td>3 rd year</td>
                                        <td>Idea Summit</td>
                                        <td>M.A.M College of engineering</td>
                                        <td>1st</td>
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
                                        <td>Karthi K.D</td>
                                        <td>Knacktech</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sabanayasmine A</td>
                                        <td>Knacktech</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>SYED MOHAMMED JALALUDEEN S</td>
                                        <td>Knacktech</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Thenmozhi P</td>
                                        <td>Qspider</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Narthnapriya S</td>
                                        <td>Qspider</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>VADIVEL V</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>A. Sairam</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>A.Mohamed Yasir</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>Aravindh MP</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Devibalan</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>Gokul A</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>Karan</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>Krishna P</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>M.Mithesh kanna</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>M.Prithviraj</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>16</td>
                                        <td>Manoj M</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>17</td>
                                        <td>Manoj</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td>PARTHIBAN. M</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>19</td>
                                        <td>PRAVEEN P</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>20</td>
                                        <td>PURUSOTHAMAN R</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>21</td>
                                        <td>R. Partha sarathi</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>22</td>
                                        <td>R.KABILAN</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>23</td>
                                        <td>RAMAJAYAM N</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>24</td>
                                        <td>Riyas Ahamed A </td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>S U GOKULA SELVAN</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>26</td>
                                        <td>Shanmugabalan B</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>27</td>
                                        <td>SYED MOHAMMED JALALUDEEN S</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>28</td>
                                        <td>V.Arun kumar</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>S.Mahadevan</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>30</td>
                                        <td>Karthi K D</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>31</td>
                                        <td>M.Praveen</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>32</td>
                                        <td>S.Rajamurugan</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>33</td>
                                        <td>PRAVEEN P</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>34</td>
                                        <td>PRAVEEN P</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>35</td>
                                        <td>Dinesh kumar</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>36</td>
                                        <td>Emaiyavarman</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>37</td>
                                        <td>Marimuthu</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>38</td>
                                        <td>Silambarasan</td>
                                        <td>TVS Lucas</td>
                                    </tr>
                                    <tr>
                                        <td>39</td>
                                        <td>M.Kaviya</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>40</td>
                                        <td>R.Brindha</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>41</td>
                                        <td>V.Vinitha</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>42</td>
                                        <td>P.Ramya</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>43</td>
                                        <td>V.Vignesh</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>44</td>
                                        <td>K.Sudhakaran</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>45</td>
                                        <td>S.Mohamed Riyas</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>46</td>
                                        <td>M.Selvi</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>47</td>
                                        <td>K.Shanmugam</td>
                                        <td>ZF WABCO</td>
                                    </tr>
                                    <tr>
                                        <td>48</td>
                                        <td>T.S.Omprakash</td>
                                        <td>ZF WABCO</td>
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
                        <div class="row g-5">

                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/eceImg/ece-1.jpg')}}"
                                    alt="">
                                <!-- <h5 class="text-center py-5">Hydraulic Engineering lab</h5> -->
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/eceImg/ece-2.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/eceImg/ece-3.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/eceImg/ece-4.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/eceImg/ece-5.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/eceImg/ece-6.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/eceImg/ece-7.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/eceImg/ece-8.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded" src="{{asset('images/separateCourses/eceImg/ece-9.jpg')}}"
                                    alt="">
                            </div>
                            <div class="col-lg-6">
                                <img class="img-fluid rounded"
                                    src="{{asset('images/separateCourses/eceImg/ece-10.jpg')}}" alt="">
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
            <h4 class="text-black">March 26 – (Arjuna’s 2k25) - Intra Mini Project Competition</h4>
            <h4 class="text-black">April 09 – Workshop on Embedded system & IOT</h4>
            <h4 class="text-black">May 07 - Guest lecture on Antenna and RF electronis</h4>
        </div>
    </div>
</section>
<!-- Upcoming Events End here -->

@endsection