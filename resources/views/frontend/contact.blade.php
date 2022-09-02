@extends('frontend.layouts.main')

	@section('main-section')
    {{-- <div class="preloader"></div> --}}
	<!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/0005.jpg')}})">
    	<div class="auto-container">
        	<h2>Contact Us</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{url('/')}}">home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Contact Form Section -->
	<section class="contact-form-section" >
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Get In Touch</h2>
				<div class="text">Do you have anything in your mind to let us know?  Kindly don't delay to connect to us by means of our contact form.</div>
			</div>

			<div class="row clearfix">

				<!-- Form Column -->
				<div class="form-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Contact Form -->
						<div class="contact-form">

							<!--Contact Form-->

							<form method="post" action="{{url('Contact_Us')}}" id="contact-form">
								@csrf
                                <div class="row clearfix">
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="username" placeholder="Your name" required>
									</div>

									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="email" placeholder="Email address" required>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<input type="text" name="subject" placeholder="Subject" required>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" placeholder="Message"></textarea>
									</div>

									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Submit now</span></button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>

				<!-- Info Column -->
				<div class="info-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">

						<!-- Contact Info List -->
						<ul class="contact-info-list">
							<li><strong>Address :</strong><br>Pull suny R.Y.K Pakistan</li>
						</ul>
						<!-- Contact Info List -->
						<ul class="contact-info-list">
							<li><strong>Phone : </strong><a href="tel:1800-456-7890">(+92308) 396 2198</a></li>
							<li><strong>Email : </strong><a href="mailto:info@stellaorre.com">info@tourism.com.pk</a></li>
						</ul>
						<!-- Contact Info List -->
						<ul class="contact-info-list">
							<li><strong>Opening Hours :</strong><br>8:00 AM - 10:00 PM <br> Monday - Sunday</li>
						</ul>

					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Contact Form Section -->

	<!-- Map Section -->
    <section class="map-section">
        <div class="outer-container">
            {{-- <div class="map-outer">
                <div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Melbourne Australia"
                    data-icon-path="{{url('frontend/images/icons/map-marker.png')}}"
                    data-content="(1800) 456 7890 <br> Mon-Sat: 7.00an - 9.00pm">
                </div>
            </div> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1194.2405615935609!2d70.41888522592862!3d28.37602397801295!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39375f9ad2fe9773%3A0xc7916e81f72bbdd2!2sPehlwan%20Sweets%20and%20Hotel!5e0!3m2!1sen!2sus!4v1642749886370!5m2!1sen!2sus" width="100%" height="500px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
    </section>
    <!-- End Map Section -->
@endsection
