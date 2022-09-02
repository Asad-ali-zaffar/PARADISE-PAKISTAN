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
                            <x-input type="text" name="room_ownerName" label="Room Owner Name:" id="room_ownerName" placeholder="Enter Your name" value="" pattern=""/>
                            <x-input type="text" name="room_address" label="Home Address:" id="room_address" placeholder="Enter Your Home Address" value="" pattern=""/>
                            <x-input type="number" name="room_rent" label="Room Rent:" id="room_rent" placeholder="Enter Room Rent for 24 hr" value="" pattern=""/>
                            <x-input type="number" name="room_ownerNo" label="Contact Number:" id="room_ownerNo" placeholder="Enter Owner Contact Number" value="" pattern=""/>
                             <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="">Room Status:</label><br>
                                    <input type="radio" name="room_status" id="Room_Booked" value="1" checked >
                                    <label for="Room_Booked">Room Booked</label>
                                    <input type="radio" name="room_status" id=">Room_free" value="0"  >
                                    <label for=">Room_free">Room Available</label>
                                </div>
                             </div>
                             <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="room_img">Room Image:</label>
                                <input type="file" id="room_img" name="room_img" multiple  accept="image/*" >
                                </div>
                             </div>
                             <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                 </div>


            </div>
        </div>
    </div>
    @endsection

