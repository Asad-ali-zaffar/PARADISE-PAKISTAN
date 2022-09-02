@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/pu5.jpg')}})">
    	<div class="auto-container">
        	<h2>{{$titel}}</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>{{$titel}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    {{-- view section --}}
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
                    <table class="table" id="myTable">
                    {{-- <pre>
                        {{print_r($guider)}}
                    </pre> --}}
                    @php
                        $i=1;
                    @endphp
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pakage Name</th>
                            <th>Pakage Days</th>
                            <th>Pakage Price</th>
                            <th>Pakage Id</th>
                            {{-- <th>Roomes Booking Type</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($tbl_pakageBooking as $Booking )
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$Booking->pakage_name}}</td>
                            <td>{{$Booking->pakage_days}}</td>
                            <td>{{$Booking->pakage_price}}</td>
                            <td>{{$Booking->pakage_id}}</td>
                            {{-- <td>{{$Booking->room_booking}}</td> --}}
                            <td>
                               {{-- <a href="{{url('/pakage_booking-edit')}}/{{$Booking->pakage_booking_id}}"><button class="btn btn-primary">Edit</button></a> --}}
                               <a href="{{url('/pakage_booking-delete')}}/{{$Booking->pakage_booking_id}}"><button class="btn btn-danger">Delete</button></a>

                            </td>
                        </tr>
                        @php
                            $i++;
                        @endphp
                        @endforeach

                    </tbody>
                </table>
            </div>


        </div>
    </div>


@endsection

