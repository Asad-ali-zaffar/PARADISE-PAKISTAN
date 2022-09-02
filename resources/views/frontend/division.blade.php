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
                            <x-input type="text" name="division_name" label="Division Name:" id="division_name" placeholder="Enter Your Division name" value="" pattern=""/>
                           {{-- City name --}}
                            <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="division_cityID">City name</label>
                                    <select class="border border-5 form-control-file p-2 rounded" name="division_cityID" id="division_cityID">
                                        @foreach ($City as $tourpakages)
                                        <option value="{{$tourpakages->city_id}}">{{$tourpakages->city_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                             </div>
                             {{-- division_tour_guiderID --}}
                             <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="division_tour_guiderID">Guider name</label>
                                    <select class="border border-5 form-control-file p-2 rounded" name="division_tour_guiderID" id="division_tour_guiderID">
                                        @foreach ($GuiderRegistrationModel as $tourpakages)
                                        <option value="{{$tourpakages->guider_id}}">{{$tourpakages->guider_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                             </div>

                            {{-- Tour Point --}}
                             <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="division_tour_pointID">Tour Point</label>
                                    <select class="border border-5 form-control-file p-2 rounded" name="division_tour_pointID" id="division_tour_pointID">
                                        @foreach ($TourPoint as $tourpakages)
                                        <option value="{{$tourpakages->tour_point_id}}">{{$tourpakages->tour_point_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                             </div>


                             {{-- Tbl_Hotel --}}
                             <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="division_hotelID">Hoteles</label>
                                    <select class="border border-5 form-control-file p-2 rounded" name="division_hotelID" id="division_hotelID">
                                        @foreach ($Tbl_Hotel as $tourpakages)
                                        <option value="{{$tourpakages->hotel_id}}">{{$tourpakages->hotel_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                             </div>
                             {{-- Tbl_Local_rooms --}}
                             <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="division_local_roomID">Local Rooms</label>
                                    <select class="border border-5 form-control-file p-2 rounded" name="division_local_roomID" id="division_local_roomID">
                                        @foreach ($Tbl_Local_rooms as $tourpakages)
                                        <option value="{{$tourpakages->room_id}}">{{$tourpakages->room_address}}</option>
                                        @endforeach
                                    </select>
                                </div>
                             </div>
                             {{-- HealthCareCenter --}}
                             <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="health_care_center_cityID">Health Care Center</label>
                                    <select class="border border-5 form-control-file p-2 rounded" name="health_care_center_cityID" id="health_care_center_cityID">
                                        @foreach ($HealthCareCenter as $tourpakages)
                                        <option value="{{$tourpakages->care_center_Id}}">{{$tourpakages->health_care_center_name}}</option>
                                        @endforeach
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
    @endsection

