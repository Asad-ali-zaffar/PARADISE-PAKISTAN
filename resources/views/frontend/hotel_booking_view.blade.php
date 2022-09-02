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
                            <th>Hotel Name</th>
                            <th>Hotel type</th>
                            <th>Room type</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hoteles as $hotel )
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$hotel->hotel_name}}</td>
                            <td>{{$hotel->hotel_type}}</td>
                            <td>{{$hotel->hotel_roomtype}}</td>
                            <td>{{$hotel->hotel_room_bookingDate}}</td>
                            <td>{{$hotel->hotel_room_checkoutDate}}</td>
                            {{-- <td>
                                @if($guide->guider_status == "1")
                            <a href="{{url('/guider-status')}}/{{$guide->guider_id}}">
                                <span class="badge badge-success"> Active</span>
                            </a>
                            @else
                            <a href="{{url('/guider-status')}}/{{$guide->guider_id}}">
                              <span class="badge badge-danger">inactive</span>
                            </a>
                            @endif</td>
                            <td>
                                <img class="rounded-circle" src="{{url('visiters').'/'.$guide->guider_img}}">
                            </td> --}}
                            <td>

                               <a href="{{url('/hotel-booking-delete')}}/{{$hotel->hotel_id}}"><button class="btn btn-danger">Delete</button></a>
                               <a href="{{url('/hotel-booking-edit')}}/{{$hotel->hotel_id}}"><button class="btn btn-primary">Edit</button></a>
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

