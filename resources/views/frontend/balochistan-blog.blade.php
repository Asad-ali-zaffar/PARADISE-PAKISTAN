{{-- balochistan blog --}}
@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/balochistan1.jpg')}})">
    	<div class="auto-container">
        	<h2>Balochistan Blog</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>Balochistan Blog</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">

                <!--Content Side / Blog Classic -->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                	<div class="blog-classic padding-right">
                        <!-- News Block Three-->
                        <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="/balochistan-blog"><img src="{{url('frontend/images/resource/balochistan.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <div class="post-meta">
		                            <div class="lower-box">
                                        <h3>History of Balochistan</h3>
                                        <div class="text">
                                            <p>Balochistan has an eventful history dating back to the Stone Age. Recent research and archaeological excavations at Mehrgarh have revealed 9000 years old civilization. Human settlement pattern at Mehrgarh was unparalleled and unique, inaugurating the distinct shift from a hunting gathering to a settled life for the first time in human history. Domestication of animals, cultivation of plants, and perfume export were modern features of Mehrgarh civilization. Alexander the great passed through Balochistan in 325 B. C. After his death Balochistan came under the rule of Selecus Nicator whose descendents lost power to the Graeco-Bactrians. The province has also witnessed the march of a number of great conquerors and warriors such as Macedonians, Arabs, Ghaznavies, Mangols and Mughals in the past.

                                                The Muslim rule began in 712 A.D. The parts of Balochistan which were ruled by the Arabs were called by them Turan (Jhallawan area) having capital at Khuzdar and Nudha or Buddha (Kachhi). In the 11th century, Balochistan fell into the hands of Nasir-ud-din Subuktagin marking the beginning of Ghaznivid dynasty. Ghorids succeeded the Ghaznivids. In 1219, it was annexed to the dominion of Sultan Mohammad Khan of Khwarizm (Khiva). The year 1223 saw the danger of the Yellow Peril, the Mongols, in the south of Mekran. In the 1595 it became a part of the Mughal Empire and later Nadir Shah of Persia captured it . Ahmed Shah Durrani of Afghanistan was successful to establish his rule in 1747. The Khanate of Kalat emerged in 1758 when Nasir Khan-I revolted against the Afghans. </p>
                                            <h4>Sample introduction of Balochistan</h4>
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <p>Balochistan, the largest of the four provinces of Pakistan, spreads over an area of 347,190 Sq, Kms., forming 43.6 per cent of the total area of Pakistan. It has clustered population and is smallest in proportion as compared to that of other provinces.</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <p>Its population, according to 1998 census, is xx million, having a low density per square kilometer. Physically, Balochistan is an extensive plateau of rough terrain divided into basins by ranges of sufficient heights and ruggedness.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
		                        </div>
		                    </div>
		                </div>

                		<!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/q.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Qurtta Division</a></h3>
		                            <div class="text">Quetta Division is an administrative division of Balochistan Province, Pakistan, being the third tier of government.

                                        In 2015, the Balochistan Assembly unanimously passed a resolution calling upon the provincial government to establish a new Rakhshan Division comprising the districts of Nushki, Chagai, Kharan and Washuk which were parts of Quetta and Kalat..</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

						<!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/zhob.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Zhob Division</a></h3>
		                            <div class="text">Zhob Division is an administrative division of Balochistan Province, Pakistan. It had been abolished between 2000 and 2008 during the military rule of Pervez Musharraf.Loralai Division is carved after splitting Zhob Division,consisting of Barkhan District, Loralai District, Musakhail District and Duki District.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

					</div>

					<!--Styled Pagination-->
					<ul class="styled-pagination">
						<li><a href="/balochistan-blog" class="active">1</a></li>
						<li><a href="/balochistan-blog2">2</a></li>
						<li><a href="/balochistan-blog2"><span class="fa fa-angle-right"></span></a></li>
					</ul>
					<!--End Styled Pagination-->

				</div>

				<!--Sidebar Side-->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">

						<!-- Search -->
                        {{-- <div class="sidebar-widget search-box">
                        	<form method="post" action="templateshub.net">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Search Keywords" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div> --}}

						<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Points of interesting</h2>
                            </div>
                            {{-- @php
                            $points = array("Hanna Lake", "Kund malir Beach", "Hingol National Park", "Hazarganji-Chiltan National Park", "Bolan Pass", "Princess of Hope","Moola Chotok Waterfalls","Mehrgarh","Pir Ghaib","Gadani Beach","Sapat Beach","Quaid-e-Azam residency ZIARAT","Buji Koh, Sapat Bandar, Hingol","Chandragup","Buzi Pass","Wali Tangi Dam","Kharan Desert Pasni City Beach","Burhani Recreational Park","Koh-i-Chiltan","Gondrani (Shehr-e-Roghan)","Gwadar Beach","Ziarat Juniper Forest","Mirani Dam","Lahoot Lamakan","Ormara Turtle Beaches","Prospect Point","Moola Chotok","Kanrach Nai","Khojak Pass","Lahoot e Lamakan","Spin Karez","Tipu Sultan Shaheed Park And Garden","Pari Chashma","Koh-i-Takatu","Quetta Fort","Chappar Rift","Liaquat Family Park","Urak Valley,Quetta","Fatima Jinnah Family Park","Sibi Fort","Linjo water park","Golden Beach Kund Malir","Fatima Jinnah Family Park Quetta","Tubko","Zarghun Ghar","Miri Fort","Zangi Nawar Lake","Ras Koh Hills","Juddi","Shaheed Moula Bakhsh Sports Park","Nushki Desert","Central Makran Range","Akra Kaur Dam","Sokhta Koh","Makran Coastal Range","Koh-i-Murdaar","Lakpass","Chiltan Mountain","Jabal-e-Noor Ul Quran","Gorakh Hill Station","Tilismati beach");
                             @endphp --}}
                            <ul class="cat-list">
                                @foreach ($TourPointes as $Point)
                                <li><a href="{{url('interesting_point')}}/{{$Point->tour_point_id}}">{{$Point->tour_point_name}}</a></li>
                               @endforeach
                            </ul>
                        </div>



					</aside>
				</div>

			</div>
		</div>
	</div>

	@endsection
