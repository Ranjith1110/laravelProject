@extends('dashboard.layouts.app')
@section('content')

<!-- <div class="main-dash px-10 py-5">
    <div class="">
        <ul class="list-unstyled mt-5">
            <div class="bg-body rounded border-lefts">
                {{--@foreach($admissionEnquiry as $key => $value)--}}
                <div class="">
                    <div class="d-flex align-items-center justify-content-between pt-5 px-16">
                        <div class="d-flex align-items-center gap-4">
                            <li>Demo</li>
                            <a href="/dashboard-view">
                                <li class="bg-black text-white rounded-1 py-1 px-2">View Detail</li>
                            </a>
                        </div>
                        <li>20-03-2025</li>
                    </div>
                    <div class="border-bottoms m-0 px-16 pt-3">
                        <p>cse</p>
                    </div>
                </div>
                {{--@endforeach--}}
            </div>

        </ul>
        {{--{{ $admissionEnquiry->links() }}--}}

    </div>
</div> -->

<div class="container mt-4">
    <h3 class="mb-3">Student Details</h3>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Sl.No</th>
                <th>Name</th>
                <th>Department</th>
                <th>Reg No</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Ranjith M</td>
                <td>-</td>
                <td>-</td>
                <td>ranjithm@yopmail.com</td>
                <td>+916544469000</td>
                <td>07 Mar 2025</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Student Email</td>
                <td>-</td>
                <td>-</td>
                <td>email@student.comm</td>
                <td>+917222000011</td>
                <td>07 Mar 2025</td>
            </tr>
            <tr>
                <td>3</td>
                <td>SANGEETHA S</td>
                <td>MBA - I A</td>
                <td>812624631043</td>
                <td>ssangeethacafound2207@gmail.com</td>
                <td>+919123532148</td>
                <td>21 Feb 2025</td>
            </tr>
            <tr>
                <td>4</td>
                <td>VINITH M</td>
                <td>MBA - I A</td>
                <td>812624631056</td>
                <td>vinith621black@gmail.com</td>
                <td>+916380079621</td>
                <td>19 Feb 2025</td>
            </tr>
            <tr>
                <td>5</td>
                <td>RANJITH R</td>
                <td>MBA - I A</td>
                <td>812624631040</td>
                <td>ranjith24062003@gmail.com</td>
                <td>+918807156759</td>
                <td>19 Feb 2025</td>
            </tr>
        </tbody>
    </table>
</div>



@endsection