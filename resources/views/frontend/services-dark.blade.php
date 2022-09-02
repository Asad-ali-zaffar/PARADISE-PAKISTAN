@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/005.jpg')}})">
    	<div class="auto-container">
        	<h2>Services</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{url('/')}}">home</a></li>
                <li>Services</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Services Page Section -->
	<section class="services-page-section">
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title light centered">
				<h2>We Provide Different Services In Tourism Field</h2>
				<div class="text">Survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation is on the runway heading towards a streamlined cloud solution.</div>
			</div>

			<div class="row clearfix">

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="/residence"><img src="{{url('frontend/images/resource/service-res1.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="/residence">Residential</a></h3>
							<div class="text">If you live in Pakistan you may occasionally need to produce a certificate of residence. The Dutch embassy in Islamabad can draw up this document for you.</div>
							<a href="/residence" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="/hotel-residence"><img src="{{url('frontend/images/resource/service-04.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="/hotel-residence">Hotel Residence</a></h3>
							<div class="text" style="height: 17vh;overflow: hidden;">The Residency Hotel is housed in a modern building located in the heart of Lahore. It welcomes guests with an outdoor pool, free WiFi access and well-appointed rooms. You will also find a free airport shuttle service.</div>
							<a href="/hotel-residence" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="/local-residence"><img src="{{url('frontend/images/resource/service-09.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="/local-residence">Local Residence</a></h3>
							<div class="text">If you live in Pakistan you may occasionally need to produce a certificate of residence. The Dutch embassy in Islamabad can draw up this document for you.</div>
							<a href="/local-residence" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="/health_care_center"><img src="{{url('frontend/images/resource/service-health1.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="/health_care_center">Heath Cear Center</a></h3>
							<div class="text">The public health sector consists of 10,000 health facilities with both Basic Health Units (BHUs) which cover around 10,000 people and Rural Health Centres.</div>
							<a href="/health_care_center" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="/team"><img src="{{url('frontend/images/resource/service-03.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="/team">Tour Guide</a></h3>
							<div class="text" style="height: 17vh;overflow:hidden;">Engage a PARADISE PAKISTAN guide to help you navigate from the heights of the Hindu Kush and the Gilgit Himalayas to the Mughlai cityscapes and throbbing port metropolises of modern Pakistan.</div>
							<a href="/team" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="https://deinfa.com/" target="_blank"><img src="{{url('frontend/images/resource/bmw1.png')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="https://deinfa.com/" target="_blank">Car Reservation</a></h3>
							<div class="text" style="height: 17vh;overflow: hidden;">We are offering the best Rental Services with the latest and brand new cars. Book now the best and affordable Rent a car and enjoy your trip with your loved ones. Also, don’t forget to give your feedback to us.</div>
							<a href="https://deinfa.com/" target="_blank" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="https://www.sastaticket.pk/bus/?gclid=Cj0KCQiAmeKQBhDvARIsAHJ7mF5Yt-cdvL4SLm0ISVKWeK3-m1FtKM4EwomGWIXM53KH9LrvNOjJ_2IaAihyEALw_wcB" target="_blank"><img src="{{url('frontend/images/resource/service-bus1.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="https://www.sastaticket.pk/bus/?gclid=Cj0KCQiAmeKQBhDvARIsAHJ7mF5Yt-cdvL4SLm0ISVKWeK3-m1FtKM4EwomGWIXM53KH9LrvNOjJ_2IaAihyEALw_wcB" target="_blank">Bus seat Reservation</a></h3>
							<div class="text">We are offering buses Rent of buses are very reasonable as compared to Market. We offer old and new models of buses from all over Pakistan.</div>
							<a href="https://www.sastaticket.pk/bus/?gclid=Cj0KCQiAmeKQBhDvARIsAHJ7mF5Yt-cdvL4SLm0ISVKWeK3-m1FtKM4EwomGWIXM53KH9LrvNOjJ_2IaAihyEALw_wcB" target="_blank" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="https://pakrail.gov.pk/Membership/Member_Login.aspx" target="_blank"><img src="{{url('frontend/images/resource/service-train.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="https://pakrail.gov.pk/Membership/Member_Login.aspx" target="_blank">Train seat Reservation</a></h3>
							<div class="text" style="height: 17vh;">Now it is very easy for every person to book a ticket. Now you can book your desire train ticket online and don’t have to go anywhere.</div>
							<a href="https://pakrail.gov.pk/Membership/Member_Login.aspx" target="_blank" class="read-more">Read more</a>
						</div>
					</div>
				</div>
                <!-- Service Block -->
				<div class="service-block-three col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="https://flightaware.com/live/fleet/PIA" target="_blank"><img src="{{url('frontend/images/resource/service-plain1.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="https://flightaware.com/live/fleet/PIA" target="_blank">Airplane seat Reservation</a></h3>
							<div class="text">Book your flights online with us. Explore our routes, find the best fares and see what's on your flight. Complete your trip with hotels and car hire.</div>
							<a href="https://flightaware.com/live/fleet/PIA" target="_blank" class="read-more">Read more</a>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Story Section -->
@endsection
