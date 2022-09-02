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
                            <x-input type="text" name="hotel_name" label="Hotel Name:" id="hotel_name" placeholder="Enter hotel name" value="{{$name}}" pattern=""/>
                            <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="">Hotel Type:</label><br>
                                    <input type="radio" name="hotel" id="lowclass" value="lowclass" checked >
                                    <label for="lowclass">lowclass</label>
                                    <input type="radio" name="hotel" id="middelclass" value="middelclass"  >
                                    <label for="middelclass">middelclass</label>
                                    <input type="radio" name="hotel" id="topclass" value="topclass">
                                    <label for="topclass">topclass</label>
                                </div>
                             </div>
                             <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="">Room Type:</label><br>
                                    <input type="radio" name="roomtype" id="single" value="single" checked >
                                    <label for="single">Single</label>
                                    <input type="radio" name="roomtype" id="double" value="double"  >
                                    <label for="double">Double</label>
                                    <input type="radio" name="roomtype" id="normal" value="normal">
                                    <label for="normal">Normal</label>
                                    <input type="radio" name="roomtype" id="laxrey" value="laxrey">
                                    <label for="laxrey">Laxrey</label>

                                </div>
                             </div>
                             <x-input type="date" name="hotel_room_bookingDate" label="Check In:" id="hotel_room_bookingDate" placeholder="Enter Check In date" value="" pattern=""/>
                             <x-input type="date" name="hotel_room_checkoutDate" label="Check Out:" id="hotel_room_checkoutDate" placeholder="Enter Check Out date" value="" pattern=""/>


                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                 </div>


            </div>
        </div>
    </div>
    @endsection

