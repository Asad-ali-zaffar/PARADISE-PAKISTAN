@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/28.jpg')}})">
    	<div class="auto-container">
        	<h2>Hotel Residences</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{url('/')}}">home</a></li>
                <li><a href="{{url('/services')}}">Services</a></li>
                <li>Hotel Residences</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Services Page Section -->
	<section class="services-page-section style-two">
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>We Provide Different Services In Hotel Residences Field</h2>
				<div class="text">Survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation is on the runway heading towards a streamlined cloud solution.</div>
			</div>

			<div class="row clearfix">
                @foreach ($tbl_Hoteles as $tbl_Hotele)


				<!-- Service Block -->
				<div class="service-block-three style-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{url('/hotel_booking_user_sight')}}/{{$tbl_Hotele->hotel_name}}"><img src="{{url('visiters').'/'.$tbl_Hotele->hotel_img}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{url('/hotel_booking_user_sight')}}/{{$tbl_Hotele->hotel_name}}">{{$tbl_Hotele->hotel_name}}</a></h3>
							<div class="text">{{$tbl_Hotele->hotel_type}} Star</div>
                            <div class="text">
                                @if ($tbl_Hotele->hotel_status == '1')
                                {{-- <a href="{{url('/hotel_register_status')}}/{{$tbl_Hotele->hotel_id}}"> --}}
                                    <span class="badge badge-success">Room available</span>
                                </a>
                            @else
                                {{-- <a href="{{url('/hotel_register_status')}}/{{$tbl_Hotele->hotel_id}}"> --}}
                                    <span class="badge badge-danger">Not available</span>
                                </a>
                            @endif
                                </div>
							<a href="{{url('/hotel_booking_user_sight')}}/{{$tbl_Hotele->hotel_name}}" class="read-more">Book know</a>
						</div>
					</div>
				</div>
                @endforeach
			</div>

		</div>
	</section>
	<!-- End Story Section -->

@endsection
