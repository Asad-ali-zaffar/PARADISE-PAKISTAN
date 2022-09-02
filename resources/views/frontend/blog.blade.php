@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/pakistan1.jpg')}})">
    	<div class="auto-container">
        	<h2>Blog</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side / Blog Classic -->
                <div class="content-side col-xl-12 col-lg-12 col-md-12 col-sm-12">
                	<div class="blog-classic padding-right">

                		<!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="/punjab-blog"><img src="{{url('frontend/images/resource/news-04.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="/punjab-blog">Punjab Blog</a></h3>
		                            <div class="text">The history of Punjab dates back to the Indus civilization. The region has been invaded and ruled by many different empires and races including the Aryans, Persians, Greeks, Egyptians, Afghans, and Mongols.

                                        The population of Punjab had been pre-dominantly Hindu with large Buddhist minorities before it was conquered by Muhammad bin Qasim in 712 AD. He was the first to bring the message of Islam to the region. It was later spread through the teachings of various Sufi saints. The Mughals controlled the region from 1524-1739. It was their reign that saw the construction of the great architectural wonders such as the Badshahi Mosque and the Shalimar Gardens.</div>
			                        <div class="link-box"><a href="/punjab-blog" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

						<!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="/sindh-blog"><img src="{{url('frontend/images/resource/sindh1.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="/sindh-blog">Sindh Blog</a></h3>
		                            <div class="text">Sindh is known as “Bab-ul-Islam,” which means the “gateway of Islam”. The importance of Bhanbhore (often spelled as Bhambhore) in making Sindh, a gateway of Islam in South Asia, can’t be emphasized enough. According to some historians, Bhanbhore is Debal or Daybul, another ancient city, where the Arab commander Muhammad bin Qasim defeated Raja Dahir and conquered Sindh, marking the advent of Islam in the sub-contient. </div>
			                        <div class="link-box"><a href="/sindh-blog" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="/balochistan-blog"><img src="{{url('frontend/images/resource/balochistan.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="/balochistan-blog">Balochistan Blog</a></h3>
		                            <div class="text">The arid region of Balochistan, situated at the eastern end of the Iranian plateau, is split almost evenly between Pakistan’s Balochistan province and Iran’s Sistan-Baluchistan province (a small portion of the southern parts of Afghanistan’s Nimruz, Helmand, and Kandahar provinces are also part of Baluchistan).</div>
			                        <div class="link-box"><a href="/balochistan-blog" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="/kpk-blog"><img src="{{url('frontend/images/resource/kpk.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="/kpk-blog">Khyber Pakhtunkhwa Blog</a></h3>
		                            <div class="text">Khyber Pakhtunkhwa, formerly North-West Frontier Province, northernmost province of Pakistan. It is bounded by Afghanistan to the west and north, Azad Kashmir and Gilgit-Baltistan (the Pakistani-administered areas of the Kashmir region) to the east and northeast, Punjab province to the southeast, and Balochistan province to the southwest. On the western boundary of Khyber Pakhtunkhwa, along the Afghan border, are the areas formerly known as the Federally Administered Tribal Areas (FATA), a series of areas that are ethnically homogeneous with the province but were semiautonomous until 2018.</div>
			                        <div class="link-box"><a href="/kpk-blog" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection
