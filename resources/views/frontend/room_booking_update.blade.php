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
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
                 <!--Content Side / Blog Classic -->
                 <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-classic padding-right">
                        <form action="{{$url}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @foreach ($Room_booking as $booking)

                            @endforeach
                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="source_place_name">Room Booking:</label>
                                @php
                                    $cites= array("select type", "hotel","local");
                                @endphp
                                <select class="border border-5 form-control-file p-2 rounded" name="booking_place_name" id="booking_place_name"  value="{{$booking->room_checkout_date}}"  >
                                    @foreach($cites  as $city )
                                    <option >{{$city}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="destination_place_name">Roomes type:</label>
                                @php
                                    $cites= array("single bed","double bed","laxrey" );
                                @endphp
                                <select class="border border-5 form-control-file p-2 rounded" name="rooms_type" id="destination_place_name" value="{{$booking->room_checkout_date}}"   >
                                    @foreach($cites  as $city )
                                    <option >{{$city}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <x-input type="date" name="checkin_date" label="Check-In Date:" id="checkin_date" placeholder="Enter your Chek in Date" value="{{$booking->room_checkIn_date}}" pattern=""/>
                            <x-input type="date" name="checkout_date" label="Check-Out Date:" id="going_date" placeholder="Enter your Chek Out Date" value="{{$booking->room_checkout_date}}" pattern=""/>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12 required ">
                                <label for="destination_place_name">Roomes:</label>
                                <select class="border border-5 form-control-file p-2 rounded" name="room_booking" id="room_booking_type" value="{{$booking->room_checkout_date}}">
                                <option value="">select type</option>
                                </select>
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#booking_place_name').change(function(){
                    let roomtype = $(this).val();
                    $.ajax({
                        url: '/roomby_booking_type',
                        type: 'get',
                        data: 'type='+roomtype+'&_token={{csrf_token()}}',
                        success: function(result) {
                            console.log(result);
                            $('#room_booking_type').html(result);
                        },
                        error: function() {
                            alert("Issue");
                        }
                    });
                });
    });
</script>
@endsection
