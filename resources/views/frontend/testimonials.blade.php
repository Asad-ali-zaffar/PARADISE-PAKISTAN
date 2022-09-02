@extends('frontend.layouts.main')

	@section('main-section')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/005.jpg')}})">
    	<div class="auto-container">
        	<h2>{{$titel}}</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>{{$titel}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Testimonials Page Section -->
	<section class="testimonials-page-section">
		<div class="auto-container">

			<!-- Page Title -->
			<div class="title-box">
				<h2>What Our Clients Says</h2>
				<div class="text">Hundred plus peoples provide services to Tourest</div>
			</div>

			<div class="row clearfix">
                @foreach ($tbl_visitor_reviews as $tbl_visitor_review )


				<!-- Testimonial Block -->
				<div class="testimonial-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{url('visiters').'/'.$tbl_visitor_review->review_img}}" alt="" />
								</div>
							</div>
							<h3>{{$tbl_visitor_review->review_name}}</h3>
							<div class="title">PARADISE PAKISTAN</div>
							<div class="text">{{$tbl_visitor_review->message}}</div>
						</div>
					</div>
				</div>
                @endforeach

				{{-- <!-- Testimonial Block -->
				<div class="testimonial-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{url('frontend/images/resource/author-2.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{url('frontend/images/resource/author-1.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{url('frontend/images/resource/author-2.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{url('frontend/images/resource/author-1.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{url('frontend/images/resource/author-2.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{url('frontend/images/resource/author-1.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div>

				<!-- Testimonial Block -->
				<div class="testimonial-block col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="content">
							<div class="image-outer">
								<div class="image">
									<img src="{{url('frontend/images/resource/author-2.jpg')}}" alt="" />
								</div>
							</div>
							<h3>Michale John</h3>
							<div class="title">I got luxuary inteior from Stella Orr'e</div>
							<div class="text">Osed quia consequuntur magni dolores eos qui rati one voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numqua.</div>
						</div>
					</div>
				</div> --}}

			</div>

		</div>
	</section>
	<!-- End Story Section -->
	@endsection
