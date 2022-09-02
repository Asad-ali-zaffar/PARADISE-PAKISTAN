@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/5.jpg')}})">
    	<div class="auto-container">
        	<h2>Portfolio Masonry</h2>
            <ul class="page-breadcrumb">
            	<li><a href="index-2.html">home</a></li>
                <li>Portfolio Masonry</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!-- Project Section -->
	<section class="project-section">
		<div class="auto-container">
			<!-- Title Box -->
			<div class="title-box">
				<h2>Our Latest Projects</h2>
			</div>
		</div>

		<div class="outer-container">

			<!--Isotope Galery-->
            <div class="sortable-masonry">

                <!--Filter-->
                <div class="filters clearfix">

                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All Projects</li>
						<li class="filter" data-role="button" data-filter=".residential">Residential</li>
						<li class="filter" data-role="button" data-filter=".commercial">Commercial</li>
						<li class="filter" data-role="button" data-filter=".hospital">Hospitality</li>
						<li class="filter" data-role="button" data-filter=".office">Office</li>
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
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{url('frontend/images/gallery/1.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
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
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{url('frontend/images/gallery/2.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
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
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{url('frontend/images/gallery/3.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
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
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{url('frontend/images/gallery/4.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
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
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{url('frontend/images/gallery/7.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
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
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{url('frontend/images/gallery/5.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
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
											<h3><a href="projects-fullwidth.html">Modular Kitchen</a></h3>
											<a href="{{url('frontend/images/gallery/6.jpg')}}" data-fancybox="gallery-1" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="projects-fullwidth.html" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

				</div>

			</div>

		</div>
	</section>
	<!-- End Project Section -->


@endsection
