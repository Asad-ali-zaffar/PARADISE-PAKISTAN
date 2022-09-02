@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/030.jpg')}})">
    	<div class="auto-container">
        	<h2>Health Care Center</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{url('/')}}">home</a></li>
                <li><a href="{{url('/services')}}">Services</a></li>
                <li>Health Care Center</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Services Page Section -->
	<section class="services-page-section">
		<div class="auto-container">



			<div class="row clearfix">
                @foreach ($Health as $Healths)

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">                                                                                                                  {{--  --}}
							<a href="#"><img src="{{url('visiters').'/'.$Healths->health_care_center_img}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="#">{{$Healths->health_care_center_name}}</a></h3>
							<div class="text">{{$Healths->health_care_center_address}}</div>
							{{-- <a href="room_booking_user_sight" class="read-more"></a> --}}
						</div>
					</div>
				</div>
                @endforeach


			</div>

		</div>
	</section>
	<!-- End Story Section -->
@endsection
