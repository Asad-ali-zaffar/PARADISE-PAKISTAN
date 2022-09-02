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
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/naseerabad.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Naseerabad Division</a></h3>
		                            <div class="text">Nasirabad Division is an administrative division of Balochistan Province, Pakistan. It is the only Irrigation & Agricultural Division of Balochistan, The division connects Balochistan with Sindh. Its Divisional headquarters are at Dera Murad Jamali.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/makran.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Makran Division</a></h3>
		                            <div class="text">Makran Division is an administrative division of Balochistan Province, Pakistan. It is the eastern component of the larger Makran region shared between Pakistan and Iran, located in southern Balochistan along the Gulf of Oman coast.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/kalat.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Kalat Division</a></h3>
		                            <div class="text">Qalat or Kalat is a district in Balochistan, Pakistan. It is one of 26 in that province, and encompasses an area of 6,621 km². The population of the district is estimated to be over 400,000 in 2005. The district is governed from the city of Kalat. Kalat was notified as a district on February 3, 1954.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>
                        <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/sibi.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Sibi Division</a></h3>
		                            <div class="text">According to 2017 census, Sibi division had a population of 963,941, which includes 506,028 males and 457,852 females. Sibi division constitutes 5,953 Hindus, 956,124 Muslims,1,456 Christians followed by 289 scheduled castes and 119 others.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

					</div>

					<!--Styled Pagination-->
					<ul class="styled-pagination">
                        <li><a href="/balochistan-blog"><span class="fa fa-angle-left"></span></a></li>
                        <li><a href="/balochistan-blog" >1</a></li>
						<li><a href="/balochistan-blog2"class="active">2</a></li>

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

						{{--  --}}

					</aside>
				</div>

			</div>
		</div>
	</div>

	@endsection
