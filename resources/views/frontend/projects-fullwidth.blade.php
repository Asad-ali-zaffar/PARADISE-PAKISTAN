@extends('frontend.layouts.main')

	@section('main-section')
    {{-- <div class="preloader"></div> --}}

     <!--Page Title-->
     <section class="page-title" style="background-image:url({{url('frontend/images/background/3.jpg')}})">
    	<div class="auto-container">
        	<h2>Residence</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{url('/')}}">home</a></li>
                <li>Residence</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Portfolio Page Section -->
    {{-- portfolio-page-section --}}
	<section class="project-section" style="background-color: #ffff">
		<div class="outer-container">
			<!--MixitUp Galery-->
            <div class="mixitup-gallery">

                <fieldset>
                    <legend>Hotel Residence</legend>

                <div class="filter-list row clearfix">
                    @foreach ($tbl_Hoteles as $tbl_Hotele)
					<!-- Gallery Item1 -->
					<div class="gallery-item mix all wardrobe kitchen col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{url('visiters').'/'.$tbl_Hotele->hotel_img}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="/hotel-residence">{{$tbl_Hotele->hotel_name}}</a></h3>
											<a href="{{url('visiters').'/'.$tbl_Hotele->hotel_img}}" data-fancybox="gallery-5" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="/hotel-residence" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
                    @endforeach
                </div>
            </fieldset>
            <fieldset>
                <legend>Local Residence </legend>

                <div class="filter-list row clearfix">
					<!-- Gallery Item5 -->
                    @foreach ($localrooms as $localroom)
					<div class="gallery-item mix all interior residential-interior col-lg-3 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{url('local_room').'/'.$localroom->room_img}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="/local-residence">{{$localroom->room_address}}</a></h3>
											<a href="{{url('local_room').'/'.$localroom->room_img}}" data-fancybox="gallery-5" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="/local-residence" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>
                    @endforeach

					
				</div>
            </fieldset>

			</div>
		</div>
	</section>
	<!-- End Story Section -->



@endsection

