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
                            @foreach ($Health as $Healthes)


                            <x-input type="text" name="health_care_center_name" label="Hotel Name:" id="hotel_name" placeholder="Enter Your hotel name" value="{{$Healthes->health_care_center_name}}" pattern=""/>
                            <x-input type="text" name="health_care_center_address" label="Hotel Address:" id="hotel_address" placeholder="Enter Your Hotel Address" value="{{$Healthes->health_care_center_address}}" pattern=""/>
                             <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="tour_pakege_name">City name</label>
                                    <select class="border border-5 form-control-file p-2 rounded" name="health_care_center_cityID" id="tour_pakege_name">
                                        @foreach ($cityData as $tourpakages)
                                        <option value="{{$tourpakages->city_id}}">{{$tourpakages->city_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                             </div>
                             <x-input type="text" name="health_care_discription" label="Health Care Discription:" id="hotel_address" placeholder="Health Care Discription" value="{{$Healthes->health_care_discription}}" pattern=""/>
                                <div class="row">
                                   <div class="form-group col-md-6 required">
                                       <label for="hotel_img"> Image:</label>
                                   <input type="file" id="hotel_img" name="health_care_center_img"  accept="image/*" >
                                   </div>
                                </div>
                             <button type="submit" class="btn btn-primary">Submit</button>
                             @endforeach
                        </form>
                    </div>
                 </div>


            </div>
        </div>
    </div>
    @endsection

