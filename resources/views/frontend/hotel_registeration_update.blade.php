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
                            @foreach ($tbl_hotel as $tblhotel)


                            <x-input type="text" name="hotel_name" label="Hotel Name:" id="hotel_name" placeholder="Enter Your hotel name" value="{{$tblhotel->hotel_name}}" pattern=""/>
                            <x-input type="text" name="hotel_address" label="Hotel Address:" id="hotel_address" placeholder="Enter Your Hotel Address" value="{{$tblhotel->hotel_address}}" pattern=""/>
                            <x-input type="text" name="hotel_cityName" label="City Name:" id="hotel_cityName" placeholder="Enter City Name" value="{{$tblhotel->hotel_cityName}}" pattern=""/>
                            <x-input type="number" name="hotel_contact_number" label="Contact Number:" id="hotel_contact_number" placeholder="Enter Hotel Contact Number" value="{{$tblhotel->hotel_contact_number}}" pattern=""/>

                            <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="">Hotel Type:</label><br>
                                    <input type="radio" name="hotel_type" id="one" value="one" checked >
                                    <label for="one">One Star</label>
                                    <input type="radio" name="hotel_type" id="two" value="two"  {{$tblhotel->hotel_type == "two" ? 'checked':""}}>
                                    <label for="two">Two Stars</label>
                                    <input type="radio" name="hotel_type" id="three" value="three" {{$tblhotel->hotel_type == "three" ? 'checked':""}}>
                                    <label for="three">Three Stars</label>
                                    <input type="radio" name="hotel_type" id="four" value="four" {{$tblhotel->hotel_type == "four" ? 'checked':""}}>
                                    <label for="four">Four Stars</label>
                                    <input type="radio" name="hotel_type" id="five" value="five" {{$tblhotel->hotel_type == "five" ? 'checked':""}}>
                                    <label for="five">Five Stars</label>
                                    <input type="radio" name="hotel_type" id="six" value="six " {{$tblhotel->hotel_type == "six" ? 'checked':""}}>
                                    <label for="six">Six Stars</label>
                                    <input type="radio" name="hotel_type" id="seven" value="seven" {{$tblhotel->hotel_type == "seven" ? 'checked':""}}>
                                    <label for="seven">Seven Stars</label>
                                </div>
                             </div>
                             <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="">Hotel Status:</label><br>
                                    <input type="radio" name="roomtype" id="single" value="1" checked >
                                    <label for="single">Room available</label>
                                    <input type="radio" name="roomtype" id="double" value="0" {{$tblhotel->hotel_status == "0" ? 'checked':""}} >
                                    <label for="double">Not available</label>
                                </div>
                             </div>
                             {{-- <x-input type="file" name="hotel_img" label="Hotel Image:" id="hotel_img" placeholder="" value="" pattern=""/> --}}
                             <div class="row">
                                <div class="form-group col-md-6 required">
                                    <label for="hotel_img">Hotel Image:</label>
                                <input type="file" id="hotel_img" name="hotel_img"  accept="image/*" >
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

