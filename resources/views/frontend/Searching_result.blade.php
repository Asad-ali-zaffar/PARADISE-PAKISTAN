{{-- Punjab blog --}}
@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/pu5.jpg')}})">
    	<div class="auto-container">
        	<h2>{{$titel}}</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>{{$titel}}</li>
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
                                @foreach ($City as $Cityes)
		                        <div class="image-box">
		                            <figure class="image"><img src="{{url('visiters').'/'.$Cityes->city_image}}" alt=""></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <div class="post-meta">
		                            <div class="lower-box">
                                        <h3>History of {{$Cityes->city_name}}</h3>
                                        <div class="text">
                                            <p>{{$Cityes->city_history}} </p>
                                            @endforeach
                                            @foreach ($TourPoint as $TourPointe )
                                            <h4>Tour Point: {{$TourPointe->tour_point_name}} </h4>
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <p>{{$TourPointe->tour_point_address}}
                                                        <br>
                                                        <b>History of Tour Point:</b>
                                                        {{$TourPointe->tour_point_history}}

                                                        @endforeach
                                                        Punjab is considered most developed, populous, and prosperous province of Pakistan having about 60% of the country's total population living in it.</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    @foreach ($Health as $Healths )


                                                    <p><b>Health Care Center : </b>{{$Healths->health_care_center_name}}</b> <br><b>Health Care Discription:</b>{{$Healths->health_care_discription}}

                                                        </p>
                                                        @endforeach
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
		                        </div>
		                    </div>
		                </div>

                		<!-- News Block Three 1 Lahore Division-->
                        @foreach ($TourPoint as $TourPointe )
		                <!-- News Block Three 5 Dera Ghazi Khan Division-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><img src="{{url('tour_point_img').'/'.$TourPointe->tour_point_img}}" alt=""></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="#">{{$TourPointe->tour_point_name}}</a></h3>
		                            <div class="text">{{$TourPointe->tour_point_history}}</div>
			                        {{-- <div class="link-box"><a href="#" class="theme-btn read-more">Read more</a></div> --}}
		                        </div>
		                    </div>
		                </div>

					</div>
                    @endforeach
					<!--Styled Pagination -->
					<ul class="styled-pagination">
						<li><a href="/punjab-blog" class="active">1</a></li>
						<li><a href="/punjab-blog2">2</a></li>
						<li><a href="/punjab-blog2"><span class="fa fa-angle-right"></span></a></li>
					</ul>
					<!--End Styled Pagination-->

				</div>

				<!--Sidebar Side-->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">

						<!-- Search -->
                        {{-- <div class="sidebar-widget search-box">
                        	<form method="get" action="{{url('search_tourpoint')}}">
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
                            $Points = array("Badshahi Mosque", "Lahore Fort", "Masjid Wazir Khan", "Rohtas Fort", "Minar-e-Pakistan", "Shalamar Bagh","Tomb of Jahangir","Sheesh Mahal","Lahore Museum","Katas Raj Temples","Hiran Minar Park","Noor Mahal","Lahore Zoo","Khewra Salt Mines","قلعہ دراوڑ","PIA Planetarium, Lahore","Patriata Chair Lift Road","Tomb of Hazrat Shah Rukn-e-Alam","Taxila Museum","Bagh-e-Jinnah","Ayub National Park","Lahore Wildlife Park","Lal Suhanra National Park","Delhi Gate","Joyland","Grand Jamia Masjid Bahria Town",
                            "Race Course (Jilani Park)","Greater Iqbal Park","Jallo Park, Botanical Park","Darbar Mahal","Murree Hills","New Sozo Adventure Park","Changa Manga Forest Park","Fakir Khana Museum","Chauburji","CLOCK TOWER","Ghanta Ghar/Municipal","Swaik Lake","Gulshan-e-Iqbal Park","Sakesar","Samadhi of Maharaja Ranjit Singh","Anarkali Bazaar","Fort Monroe","Army Museum","Dharmarajika Stupa And Monastery","Ghanta Ghar/Municipal","Swaik Lake","Gulshan-e-Iqbal Park","Sakesar","Samadhi of Maharaja Ranjit Singh","Anarkali Bazaar",
                            "Fort Monroe","Army Museum","Dharmarajika Stupa And Monastery","Data Darbar","Moti Masjid","Baradari","Khabikki Lake","Uchhali Lake","Gurudwara Janam Asthan Nankana Sahib","Sozo Water Park","Panjpeer Rocks","Sunehri Masjid","Wah Gardens","Mosque of Mariyam Zamani Begum","Tomb of Javindi Bibi","Tomb of Anarkali","Jinnah Park Rawalpindi","Hazuri Bagh","MM Alam Road","Army Museum","Fort Kohna Qasim Garden","Gulzar Mahal","Tomb of Noor Jahan","Thal Desert","Food Street Fort Road","Tomb of Allama Iqbal","Head Marala",
                            "Jaulian Buddhist Stupa & Monastery","narkali Bazaar","Taunsa Barrage","Nila Sandh","Kanhati Gardens","Lyallpur Museum Faisalabad","Bhati Gate","Sheikhupura Fort","SS World Family Park","","Haveli Nau Nihal Singh","Tomb Shah Shams Sabzwari Tabrez","Joyland Rawalpindi","Fun Dunya Amusement Park","Kamran's Baradari","Jamia Masjid Al-Sadiq","","Lohari Gate","Naulakha","Tomb of Dai Anga","Jungle World","Jamia Mosque Bhong RYK","Model Town Park","Sangrela Natural Water Park","Walled City Of Lahore Authority","National History Museum",
                            "Eid Ghah","National Museum Of Science & Technology","GPO","Fort Pharwala","Mochi Gate");
                             @endphp --}}
                            <ul class="cat-list">
                                @foreach ($TourPointes as $Point)
                                <li><a href="#">{{$Point->tour_point_name}}</a></li>
                               @endforeach
                            </ul>
                        </div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	@endsection
