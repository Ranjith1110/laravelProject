@extends('dashboard.layouts.app')
@section('content')


<style>
    .table-responsive::-webkit-scrollbar {
        display: none;
    }

    .table-striped thead tr th {
        padding: 20px 10px;
        font-size: 18px;
        font-weight: 500;
    }

    .table-striped tbody tr td {
        padding: 10px 6px;
        font-weight: 500;
    }
</style>

<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-3 ms-5">Student Details</h3>
        <div>
            <!-- <input type="date" class="form-control" id="date" placeholder="Select Date" style="width: 200px; display: inline-block;"> -->
            <button class="btn text-white ms-2" id="downloadodf" style="background-color: #2f4050;">Download PDF</button>
        </div>
    </div>
    <div class="p-5 table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Si.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Degree</th>
                    <th>Course</th>
                    <th>Date of Admission</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ranjith N</td>
                    <td>ranjithn@yopmail.com</td>
                    <td>+916544469000</td>
                    <td>Perambalur</td>
                    <td>B.Tech</td>
                    <td>AI&DS</td>
                    <td>28-04-2025</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ranjith N</td>
                    <td>ranjithn@yopmail.com</td>
                    <td>+916544469000</td>
                    <td>Perambalur</td>
                    <td>B.Tech</td>
                    <td>AI&DS</td>
                    <td>28-04-2025</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ranjith N</td>
                    <td>ranjithn@yopmail.com</td>
                    <td>+916544469000</td>
                    <td>Perambalur</td>
                    <td>B.Tech</td>
                    <td>AI&DS</td>
                    <td>28-04-2025</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ranjith N</td>
                    <td>ranjithn@yopmail.com</td>
                    <td>+916544469000</td>
                    <td>Perambalur</td>
                    <td>B.Tech</td>
                    <td>AI&DS</td>
                    <td>28-04-2025</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script>
    document.getElementById('downloadodf').addEventListener('click', function() {
        var element = document.querySelector('.table-responsive'); // Capture the table part

        var opt = {
            margin: 0.5,
            filename: 'student-details.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'a4',
                orientation: 'landscape'
            }
        };

        html2pdf().set(opt).from(element).save();
    });
</script>




@endsection