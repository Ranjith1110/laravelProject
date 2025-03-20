@extends('dashboard.layouts.app')
@section('content')

<div class="content-section p-10">
    <h2 class="text-black mb-6">Admission Enquiry Details</h2>

    <div class="list-container bg-body px-6 rounded">

        <div class="row">

            <div class="col-lg-8">
                <ul class="list-unstyled">
                    <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                        <li class="fw-bold">Name</li>
                        <li class="ms-20">Ranjith</li>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                        <li class="fw-bold">Email</li>
                        <li class="ms-20">your@email.com</li>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                        <li class="fw-bold">Phone Number</li>
                        <li class="ms-20">9999009999</li>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                        <li class="fw-bold">Course Type</li>
                        <li class="ms-20">ug</li>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pe-16 pt-8 pb-2 border-bottoms">
                        <li class="fw-bold">Course</li>
                        <li class="ms-20">cse</li>
                    </div>
                </ul>
            </div>

        </div>

    </div>

</div>

@endsection