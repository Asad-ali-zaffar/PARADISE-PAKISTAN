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
                            <x-input type="text" name="pakage_name" label="Pakage Name:" id="pakage_name" placeholder="Define pakage name" value="{{--$tblhotel->hotel_name--}}" pattern=""/>
                            <x-input type="number" name="pakage_dayes" label="Pakage Dayes:" id="pakage_dayes" placeholder="Set Pakage Dayes" value="{{--$tblhotel->hotel_address--}}" pattern=""/>
                            <x-input type="number" name="pakage_price" label="Set Pakage dues:" id="pakage_price" placeholder="Set pakage dues" value="{{--$tblhotel->hotel_cityName--}}" pattern=""/>
                            <x-input type="text" name="pakage_services" label="Pakage Description:" id="pakage_services" placeholder="Describe Services Pakage " value="{{--$tblhotel->hotel_contact_number--}}" pattern=""/>
                                <div class="form-group col-md-6 required">
                                    <label for="tour_point_img">Pakage Image:</label>
                                    <input type="file" id="tour_point_img" name="Pakage_img" multiple
                                        accept="image/*">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                 </div>


            </div>
        </div>
    </div>
    @endsection

