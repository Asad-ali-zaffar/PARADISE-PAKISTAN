@extends('frontend.layouts.main')

	@section('main-section')

    <!--Page Title-->
    {{-- F:\D\xampp\htdocs\ttp\public\frontend\images\resource\Mission1.jpg --}}
    <section class="page-title" style="background-image:url({{url('frontend/images/resource/Mission1.jpg')}})">
    	<div class="auto-container">
        	<h2>Our Team</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{url('/')}}">home</a></li>
                <li>Team</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Team Page Section -->
	<section class="team-page-section">
		<div class="auto-container">

			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Our Dedicated Team</h2>
				<div class="text">We are a team of diverse licensed tour guides ranging from the fields of business to engineering, bringing years of rich traveling experience on board. We treat our tourists as a part of the clan, offering them true Pakistani hospitality and making them feel at home every step of the way. </div>
			</div>

			<div class="clearfix">
                @foreach ($guider as $guide )


				 <!-- Team Block -->
				<div class="team-block col-lg-3 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image">
							<img src="{{url('visiters').'/'.$guide->guider_img}}" alt="" />
							<div class="overlay-box">
								<ul class="social-icons">
									<li><a href="{{$guide->guider_fbID_link}}"><i class="fab fa-facebook"></i></a></li>
									<li><a href="{{$guide->guider_linkedin_ID_link}}"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="{{$guide->guider_twitter_ID_link}}"><i class="fab fa-twitter-square"></i></a></li>
									<li><a href="{{$guide->guider_skype_ID_link}}"><i class="fab fa-skype"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="lower-content">
							<h3><a href="/team">{{$guide->guider_name}}</a></h3>
							<div class="designation">Guiding City: {{$guide->guider_guide_city_name}}</div>
						</div>
					</div>
				</div>


                @endforeach
			</div>

		</div>
	</section>
	<!-- End Story Section -->


@endsection
