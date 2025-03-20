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
    <h3 class="mb-3 ms-5">Student Details</h3>
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
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ranjith N</td>
                    <td>ranjithn@yopmail.com</td>
                    <td>+916544469000</td>
                    <td>Perambalur</td>
                    <td>B.Tech</td>
                    <td>AI&DS</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ranjith N</td>
                    <td>ranjithn@yopmail.com</td>
                    <td>+916544469000</td>
                    <td>Perambalur</td>
                    <td>B.Tech</td>
                    <td>AI&DS</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Ranjith N</td>
                    <td>ranjithn@yopmail.com</td>
                    <td>+916544469000</td>
                    <td>Perambalur</td>
                    <td>B.Tech</td>
                    <td>AI&DS</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



@endsection