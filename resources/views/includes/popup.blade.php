<style>
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

    .mamcePopup {
        background: rgba(255, 255, 255, 0.5) !important;
        backdrop-filter: blur(10px) !important;
        border: 1px solid rgba(255, 255, 255, 0.3) !important;
        border-radius: 15px !important;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1) !important;
        width: 75% !important;
        margin: 0 auto !important;
    }

    .popupBtn {
        background-color: #9d7651 !important;
        color: #fff !important;
        border: none;
        transition: background-color 0.3s ease;
    }

    .popupBtn:hover {
        background-color: #b07d60 !important;
    }

    @media (max-width: 500px) {

        .mamcePopup {
            width: 100%;
        }

    }
</style>

<div class="modal fade" id="admissionEnquiryModal" tabindex="-1" aria-labelledby="admissionEnquiryLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content mamcePopup">
            <div class="modal-header">
                <h5 class="modal-title" id="admissionEnquiryLabel">Admission Enquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admission.enquiry') }}" method="POST">
                    @csrf
                    <div class="mt-3">
                        <label for="name" class="form-label text-dark">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mt-3">
                        <label for="email" class="form-label text-dark">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mt-3">
                        <label for="phone" class="form-label text-dark">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="mt-3">
                        <label for="address" class="form-label text-dark">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="2" placeholder="Enter your address"></textarea>
                    </div>
                    <div class="mt-3">
                        <label for="course" class="form-label text-dark">Course Selection</label>
                        <select class="form-select" id="course" name="course">
                            <option selected disabled>Choose your course</option>
                            <option value="Course 1">Course 1</option>
                            <option value="Course 2">Course 2</option>
                            <option value="Course 3">Course 3</option>
                        </select>
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit" class="btn popupBtn w-50 fw-bold">Apply Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>