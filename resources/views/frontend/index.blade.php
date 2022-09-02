

  @extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!-- Main Slider -->
	<section class="main-slider">
		<div class="slider-box">

			<!-- Banner Carousel -->
			<div class="banner-carousel owl-theme owl-carousel">
				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{url('frontend/images/ttp-images/slider12.jpg')}})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Designs Beautiful <br> Tours & Traveling Planes</h2>
							<div class="text">From the latest in travel guidelines to the health and safety standards of our partners, our consultants are equipped with the knowledge you need to travel confidently and responsibly.</div>
							<div class="btns-box">
								<a href="{{url('/blog')}}" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{ url('frontend/images/ttp-images/Chaukandi-Tombs.jpg')}})"></div>
					<div class="auto-container">
						<div class="content">

							<h2>Civilization & Religious <br>Tours & Traveling in Pakistan </h2>
							<div class="text">Gurdwara, Nankana Sahib,Takht-i-Bahi, Buddhist Tourism,Katas Raj Mandir,Kartar Pur,Hinglaj Goddess at Hinglaj Mata Mandir.</div>
							<div class="btns-box">
								<a href="{{url('/blog')}}" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>
				<!-- Slide -->
				<div class="slide">
						<div class="image-layer" style="background-image:url({{ url('frontend/images/ttp-images/slider33.jpg')}})"></div>
						<div class="auto-container">
							<div class="content">
								<h2> Tours & Traveling <br>Northern Areas in Pakistan  </h2>
								<div class="text">The best tourist places in Pakistan plus hidden gems! ... a high-altitude pass that connects Upper Chitral with Yasin Valley in Gilgit Baltistan.</div>
								<div class="btns-box">
									<a href="{{url('/blog')}}" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
								</div>
							</div>
						</div>
					</div>

				<!-- Slide -->
				<div class="slide">
                	<div class="image-layer" style="background-image:url({{ url('frontend/images/ttp-images/Toba-tek-singh.jpg')}})"></div>
					<div class="auto-container">
						<div class="content">
							<h2>Designs Planes <br>Visiting Historical Places </h2>
							<div class="text">Visiting a historical site is a pleasant experience. It allows us to look back at the roots of our culture. Pakistan is one of the most sought-after tourist.</div>
							<div class="btns-box">
								<a href="{{url('/blog')}}" class="theme-btn btn-style-one"><span class="txt">Know more</span></a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
	<!-- End Banner Section -->

	<!-- Services Section -->
	<section class="services-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Awesome places of Pakistan <br>Tour Provinces Areas of Pakistan.</h2>
			</div>

			<div class="row clearfix">
				<div class="service-block col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{url('/punjab-blog')}}"><div style="width: 137%;"><img src="{{url('frontend/images/ttp-images/punjab/punjab00010.jpg')}}" alt="" /></div></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{url('/punjab-blog')}}">Punjab</a></h3>
							<div class="text">Punjab province is located in the eastern part of Pakistan and is bordered to the south by Sindh province, to the west by Khyber Pakhtunkhwa, and Balochistan, by Islamabad and Azad Kashmir to the north, by the Indian states of Jammu and Kashmir and Punjab to the northeast and Rajasthan to the east. Lahore is the provincial capital.</div>
							<a href="{{url('/punjab-blog')}}" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- sindh Block6 -->
				<div class="service-block col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

						<div class="image">
							<a href="{{url('/sindh-blog')}}"><img src="{{url('frontend/images/ttp-images/sindh/sindh001.jpg')}}" alt="" /></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{url('/sindh-blog')}}">Sindh</a></h3>
							<div class="text">The province of Sindh, which is located in the southeastern part of the country, is bordered to the northeast by Punjab, to the north and west by Balochistan, to the south by the Arabian Sea, and to the east by the Indian states of Gujarat and Rajasthan. Karachi is the provincial capital.The province occupies an area of about 54,407 square miles and is home to a population of about 35,864,000.</div>
							<a href="{{url('/sindh-blog')}}" class="read-more">Read more</a>
						</div>
					</div>
				</div>

				<!-- balochistan Block7 -->
				<div class="service-block col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{url('/balochistan-blog')}}"><div style="width: 128%;"><img src="{{url('frontend/images/ttp-images/balochisat/balochistan0100.jpg')}}" alt="" /></div></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{url('/balochistan-blog')}}">Balochistan</a></h3>
							<div class="text">The province of Balochistan is located on the western part of the country and is bordered by Sindh to the southeast, by Punjab to the east, by Khyber Pakhtunkhwa to the northeast, and the south by the Arabian Sea. The provincial capital is Quetta. It occupies an area of about 134,051 square miles and is home to a population of about 7,450,000 (2003 est.).</div>
							<a href="{{url('/balochistan-blog')}}" class="read-more">Read more</a>
						</div>
					</div>
				</div>
				<!-- Kpk Block8-->
				<div class="service-block col-lg-6 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="image">
							<a href="{{url('/kpk-blog')}}"><div style="width: 119%;"><img src="{{url('frontend/images/ttp-images/kpk/kpk1.jpg')}}" alt="" /></div></a>
						</div>
						<div class="lower-content">
							<h3><a href="{{url('/kpk-blog')}}">Khyber Pakhtunkhwa</a></h3>
							<div class="text">The Khyber Pakhtunkhwa, which was previously referred to as the Northwest Frontier Province, is bordered by Azad Kashmir to the northeast and east, to the west and north by Afghanistan, to the southwest by Balochistan, and to the southeast by Punjab. Areas on the western border with Afghanistan are tribal areas administered by the federal government. The provincial capital is Peshawar.</div>
							<a href="{{url('/kpk-blog')}}" class="read-more">Read more</a>
						</div>
					</div>
				</div>



			</div>

		</div>
	</section>
	<!-- End Services Section -->

	<!-- Services Section Two -->
	<section class="services-section-two" >
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Our Services</h2>
				<div class="text">Pakistan tours package prices are stable as we provide quality services to our clients to get the proper response from our customers. We are offering excellent travel and tour services for the northern areas of Pakistan tours. We provide lush condition cars, tour guides, and stay at the best hotels.</div>
			</div>

			<div class="row clearfix">

				<!-- Service hotel Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon fas fa-hotel"></span>
							</div>
							<h3><a href="{{url('/hotel-residence')}}">Hotel Reservation</a></h3>
							<a href="{{url('/hotel-residence')}}"><div class="text" style="height:24vh">Choose From a Wide Range.<br>Book your hotels with vacation Setup. We provide best hotel bookings within your budget all over the Pakistan.</div></a>
							<a href="{{url('/hotel-residence')}}" class="read-more">Read More</a>
						</div>
					</div>
				</div>

				<!-- Service loclhome Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-house-1"></span>
							</div>
							<h3><a href="{{url('/local-residence')}}">Appartments & Flats</a></h3>
							<div class="text" style="height:24vh">Find the best Apartments & Flats for rent in Pakistan.  We provide best Apartments & Flats bookings within your budget all over the Pakistan.</div>
							<a href="{{url('/local-residence')}}" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				<!--Hospitality Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon flaticon-hospital"></span>
							</div>
							<h3><a href="{{url('/services')}}">Hospitality</a></h3>
							<div class="text" style="height:24vh">The standards for patient care and medical services in Pakistan will differ from your home country. Pakistan has a public healthcare system which typically does not meet international standards.</div>
							<a href="{{url('/services')}}" class="read-more">Read More</a>
						</div>
					</div>
				</div>
				<!--transport Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon fas fa-bus-alt"></span>
							</div>
							<h3><a href="{{url('/services')}}" target="_blank">Transport Booking</a></h3>
							<div class="text" style="height:24vh">We are offering the best Booking Services with the latest and brand new transport. Also, don’t forget to give your feedback to us...</div>
							<a href="{{url('/services')}}" target="_blank" class="read-more">Read More</a>
						</div>
					</div>
				</div>

				<!--flight Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon fas fa-plane-departure"></span>
							</div>
							<h3><a href="{{url('/services')}}">Flight Booking</a></h3>
							<div class="text" style="height:24vh">Compare 520+ Airlines - All Fares in One Place. Save Time & Money - Lowest Fare Guarantee! Best Flight Deals 2022 - Review Best Cheap Flights.</div>
							<a href="{{url('/services')}}" class="read-more">Read More</a>
						</div>
					</div>
				</div>

				<!--local guider Service Block -->
				<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
						<div class="content">
							<div class="icon-box">
								<span class="icon fas fa-male"></span>
							</div>
							<h3><a href="{{url('/tour-guide')}}">Local guider</a></h3>
							<div class="text" style="height:24vh">we provide you Professional Tour Guides who know different languages. Pakistan Tour Guide services. Lahore Tourist Guide services.</div>
							<a href="{{url('/tour-guide')}}" class="read-more">Read More</a>
						</div>
					</div>
				</div>



			</div>

		</div>
	</section>
	<!-- End Services Section Two -->

	<!-- Project Section -->
	<section class="project-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Our Latest Residential Roomes</h2>
			</div>
		</div>

		<div class="outer-container">

			<!--Isotope Galery-->
            <div class="sortable-masonry">

                <!--Filter-->
                <div class="filters clearfix">

                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All Packages</li>
						<li class="filter" data-role="button" data-filter=".residential">Residential Placess</li>
						<li class="filter" data-role="button" data-filter=".commercial">Commercial</li>
						<li class="filter" data-role="button" data-filter=".hospital">Hospitality</li>
						{{-- <li class="filter" data-role="button" data-filter=".office">Office</li> --}}
                    </ul>

                </div>

				<div class="items-container row clearfix">

					<!-- Gallery Item -->
					<div class="gallery-item large-block masonry-item all hospital commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{url('frontend/images/gallery/1.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="/local-residence">Living Room</a></h3>
											<a href="{{url('frontend/images/gallery/1.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="/local-residence" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all hospital commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{url('frontend/images/gallery/2.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="/local-residence">Modern Kitchen</a></h3>
											<a href="{{url('frontend/images/gallery/2.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="/local-residence" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all residential office commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{url('frontend/images/gallery/3.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="/local-residence">Siting Room</a></h3>
											<a href="{{url('frontend/images/gallery/3.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="/local-residence" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all commercial">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{url('frontend/images/gallery/4.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="/local-residence">TV Lone</a></h3>
											<a href="{{url('frontend/images/gallery/4.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="/local-residence" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item large-block masonry-item all hospital office residential">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{url('frontend/images/gallery/7.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="/local-residence">Guest Room</a></h3>
											<a href="{{url('frontend/images/gallery/7.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="/local-residence" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all residential">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{url('frontend/images/gallery/5.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="/local-residence">Siting Area</a></h3>
											<a href="{{url('frontend/images/gallery/5.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="/local-residence" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item small-block masonry-item all hospital office">
						<div class="inner-box">
							<figure class="image-box">
								<img src="{{url('frontend/images/gallery/6.jpg')}}" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="/local-residence">Studey Room</a></h3>
											<a href="{{url('frontend/images/gallery/6.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="/local-residence" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

				</div>

			</div>

			<!-- More Projects -->
			<div class="more-projects">
				<a href="/projects-classic" class="projects">View All Projects</a>
			</div>

		</div>
	</section>
	<!-- End Project Section -->

	<!-- Fluid Section One -->
    <section class="fluid-section-one">
    	<div class="outer-container clearfix">

			<!--Content Column-->
			<div class="content-column">
				<div class="content-box">
					<h2>Adventure Highlights</h2>

						<div class="text">
                            <marquee  direction="up" height="200vh">
							Pakistan means “Land of (the) Pure” - pure natural beauty, pure hospitality, pure food, pure culture and most of all pure adventure!
							Marvel at the mightiest of mountain ranges: The Hindu Kush, the Himalayas, the Karakoram and the Pamirs. Climb K2 or trek around Nanga Parbat, visit the Baltit Fort and eat apricot soup with the local Hunzakuts. Watch the game of kings on the highest polo ground in the world – the Shandur Top, dive into the mystic world of the Kalasha’s in Chitral. Discover the ancient kingdom of Gandhara, follow the roaring Indus River into Punjab and Sindh or ride a camel near Mohenjo-Daro.
							We warmly welcome you to join us on an adventure to explore and enjoy the spectacular and fascinating landscape of our beautiful country and experience its incredible hospitality
                            </marquee>
                        </div>
                        <h2>Adventures Places</h2>
                        <ul class="list-style-one">
                        <marquee behavior="scroll" scrollamount="3" direction="up" height="200vh">
						<li>Lulusar Dudipatsar National Park</li>
						<li>Lulusar Lake KPK</li>
						<li>Babusar Top KPK</li>
						<li>Babusar Valley Mountain Goats</li>
						<li>Chillas Valley Indus River</li>
						<li>KaraKoram Highway KKH Sillk road</li>
                        <li>Rama Lake Nanga Parbat</li>
                        <li>Trishing Nanga Parbat Base camp</li>
                        <li>Deosai National Park 16000 feet above see leval</li>
                        <li>Sheosar Lake Natural Heart Shaped Lake</li>
                        <li>Found Brown Bear Far Far in Deosai</li>
                        <li>Satpara Lake Near Skardu</li>
                        <li>Khaplu Palace Khaplu</li>
                        <li>Masherbrum Mountain Range India Loc</li>
                        <li>Cold Desert Skardu</li>
                        <li>Blind Lake Shigar</li>
                        <li>Shangrilla Lake Skardu</li>
                        <li>Water Fall out Skirts of Skardu</li>
                        <li>Shigar Fort Shigar Skardu</li>
                        <li>Rati Gali Pass Khagan</li>
                        <li>Lulusar Lake Lulusar Valley</li>
                        <li>Khunjarab Pass, China Border Gilgit</li>
                        <li>Nanga Parbat</li>
                        <li>Lalazar KPK</li>
                        <li>Rani Kot Sindh 35 km long wall Magnificent</li>
                        <li>Gorakh Hills </li>
                        <li>Beauty of Makran Costal Highway</li>
                        <li>Mesmerizing Beach of Kund Malir</li>
                        <li>Scenic Mountain Ranges</li>
                        <li>Bhanbore Wetlands Sindh</li>
                        <li>Makli Tombs Sindh</li>
                        <li>Darawat Dam Sindh</li>
                        <li>Bujo Koh-Sapat Beach Balochistan</li>
                        <li>Moola Chotak Balochistan</li>
                        <li>Astola Island BAlochistan</li>
                        <li>Charna Island Blochistan</li>
                        <li>Darawar Fort Punjab</li>
                        <li>Moti Masjid Punjab</li>
                        <li>Kenjhar Lake Sindh</li>
                        <li>Kanraj Balochistan</li>
                        <li>Finger Print Mountain</li>
                        <li>Finger Print Mountain</li>
                        <li>Tubko Chasma </li>
                        <li>Mud Volcano Behoid Balochistan </li>
                        <li>Gulzar Mahal BahawllPur Punjab</li>
                        <li>Darbar Mahal BahawllPur Punjab</li>
                        <li>Nara Desert Sindh</li>
                        <li>Farms Punjab</li>
                        <li>Tharparkar Sindh</li>
                        <li>Khipro Sindh</li>
                    </marquee>
					</ul>
					<div class="bold-text">Design your Own Tour Plain through <b> PARADISE PAKISTAN.</b><br>
                        <a href="{{url('/contact')}}">Talk to a Guider</a></div>
				</div>
			</div>

			<!--Image Column-->
        	<div class="image-column" style="background-image: url({{url('frontend/images/ttp-images/Pakistan-Lovely-Pakistan-Village-View-2437.jpg')}})">
				<div class="inner-column">
					<div class="image">
						<img src="{{url('frontend/images/ttp-images/Pakistan-Lovely-Pakistan-Village-View-2437.jpg')}}" alt="">
					</div>
                    {{-- F:\D\xampp\htdocs\ttp\public\frontend\video --}}

					<a href="{{url('frontend/video/MUST-WATCH_Pakistan-Tour-in-6-minutes.mp4')}}" class="overlay-link lightbox-image">
                        <div class="icon-box">
							<span class="icon flaticon-play-button"></span>
                            <i class="ripple"></i>
						</div>
					</a>
				</div>
            </div>
            <!--End Image Column-->

		</div>
	</section>


	
	<!-- End Featured Section -->
<!-- Testimonial Section -->
<section class="testimonial-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title-two centered">
            <h2>What our customers says</h2>
            <div class="title-text">Hundred plus peoples provide services</div>
        </div>

        <div class="testimonial-carousel owl-carousel owl-theme">
            @foreach ($tbl_visitor_reviews as $tbl_visitor_review)


            <!-- Testimonial Block -->
            <div class="testimonial-block">
                <div class="inner-box">
                    <div class="content">
                        <div class="image-outer">
                            <div class="image">
                                <img src="{{url('visiters').'/'.$tbl_visitor_review->review_img}}" alt="" />
                            </div>
                        </div>
                        <h3>{{$tbl_visitor_review->review_name}}</h3>
                        <div class="title">I tour luxuary to this PARADISE PAKISTAN </div>
                        <div class="text">{{$tbl_visitor_review->message}}</div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>
<!-- End Testimonial Section -->
<!-- Call To Action Section -->
<section class="call-to-action-section" style="background-image: url({{url('frontend/images/background/Naltar-Valley1.jpg')}})">
    <div class="auto-container">
        <h2>Think Travel and Tourism. Think <b>PARADISE  PAKISTAN</b></h2>
        <div class="text">If want you to visit & tour Pakistan choose <b>PARADISE  PAKISTAN</b>, I have hundert  <br> plus peoples workes and they provide  best services to visiter all country.</div>
        <a href="{{url('/contact')}}" class="theme-btn btn-style-two"><span class="txt">contact us</span></a>
    </div>
</section>
<!-- End Call To Action Section -->



@endsection
