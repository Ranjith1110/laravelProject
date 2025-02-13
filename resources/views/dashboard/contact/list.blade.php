@extends('dashboard.layouts.app')
@section('content')

<div class="main-dash px-10 py-5">
    <div class="">
        <ul class="list-unstyled mt-5">
            <div class="bg-body rounded border-lefts">
            @foreach($contactEnquiry as $key => $value)
                <a href="{{route('mamce.contact_enquiry_view',$value->id)}}">
                    <div class="">
                        <div class="d-flex align-items-center justify-content-between pt-5 px-16">
                            <div class="d-flex align-items-center gap-4">
                                <li>{{$value->name}}</li>
                                <li class="bg-black text-white rounded-1 py-1 px-2">Contact Enquries</li>
                            </div>
                            <li>{{ $value->created_at->format('d-M-Y') }}</li>
                        </div>
                        <div class="border-bottoms m-0 px-16 pt-3">
                            <p>{{$value->subject}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
            </div>

        </ul>
        {{ $contactEnquiry->links() }}

    </div>
</div>

@endsection