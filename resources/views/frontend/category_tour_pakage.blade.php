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

                            <div class="row">
                                <div class="form-group col-md-12 required">
                                    <label for="tour_pakege_name">Tour Pakege Name</label>
                                    <select class="border border-5 form-control-file p-2 rounded" name="tour_pakege_name" id="tour_pakege_name">
                                        @foreach ($tourpakage as $tourpakages)
                                        <option value="{{$tourpakages->tour_pakage_id}}">{{$tourpakages->pakage_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                             </div>
                             <x-input type="text" name="pakege_description" label="pakege_description:" id="pakege_description" placeholder="Enter pakege_description" value="" pattern=""/>


                             <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                 </div>


            </div>
        </div>
    </div>
    @endsection

