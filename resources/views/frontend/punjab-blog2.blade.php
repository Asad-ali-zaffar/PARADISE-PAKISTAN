{{-- Punjab blog --}}
@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/pu5.jpg')}})">
    	<div class="auto-container">
        	<h2>Punjab Blog</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>Punjab Blog</li>
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
                        <!-- News Block Three 6 Gujranwala Division-->
                        <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/gujranwala.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <div class="post-meta">
		                            <div class="lower-box">
                                        <div class="lower-content">
                                            <h3><a href="{{url('City_view_by_divistion')}}">Gujranwala Division</a></h3>
                                            <div class="text">Gujranwala Division is an administrative division of Punjab province, Pakistan. The division, headquartered at the city of Gujranwala, covers an area of 17,206 km². According to the 1981 census, the population was 7,522,352, and rose by almost 4 million to 11,431,058 according to the 1998 census.</div>
                                            <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
		                        </div>
		                    </div>
		                </div>
                		<!-- News Block Three 7 Rawalpindi Division-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/rawalpindi.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Rawalpindi Division</a></h3>
		                            <div class="text">Rawalpindi Division is an administrative division of Punjab Province, Pakistan. Rawalpindi city is the capital of the division. According to the 2017 Census of Pakistan, the total population of division was 10 million. Divisions are the third tier of government below the federal and provincial levels.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

						<!-- News Block Three 8 Sahiwal Division-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/sahiwal.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Sahiwal Division</a></h3>
		                            <div class="text">Sahiwal Division (Punjabi, Urdu: ساہیوال) is one of the nine Divisions of Punjab province, Pakistan.

                                        It was formed by merging parts of Lahore Division and Multan Division and took its name Sahiwal from the district and city of the same name, which in turn are named for the Sahi Clan of the Kharal tribe, the traditional inhabitants of the area. In 2008, Sahiwal Division was reorganised into three districts: Sahiwal District, Okara District, Burewala and Pakpattan District. Sahiwal is the capital of Sahiwal Division.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three 9 Sargodha Division-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/sargodha.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Sargodha Division</a></h3>
		                            <div class="text">Sargodha Division is an administrative division of Punjab Province, Pakistan. Sargodha city is the capital of the division. According to the 2017 Census of Pakistan, the total population of the division was 8.18 million. Divisions are the third tier of government below the federal and provincial levels..</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                {{-- <!-- News Block Three 4 Bahawalpur Division-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/news-7.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Bahawalpur Division</a></h3>
		                            <div class="text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum Duis aute irure dolor in reprehenderit in voluptate ...</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three 5 Dera Ghazi Khan Division-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/news-8.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Dera Ghazi Khan Division</a></h3>
		                            <div class="text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum Duis aute irure dolor in reprehenderit in voluptate ...</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div> --}}

					</div>

					<!--Styled Pagination 6 Gujranwala Division-->
					<ul class="styled-pagination">
                        <li><a href="/punjab-blog"><span class="fa fa-angle-left"></span></a></li>
						<li><a href="/punjab-blog" >1</a></li>
						<li><a href="/punjab-blog2" class="active">2</a></li>

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
                                <h2>Points Of Interesting</h2>
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
                                <li><a href="{{url('interesting_point')}}/{{$Point->tour_point_id}}">{{$Point->tour_point_name}}</a></li>
                               @endforeach
                            </ul>
                        </div>

						{{-- <!-- Popular Posts -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h2>Recent News</h2></div>

                            <article class="post">
                            	<figure class="post-thumb"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/post-thumb-1.jpg')}}" alt=""></a></figure>
                                <div class="text"><a href="{{url('City_view_by_divistion')}}">Hanging fruit to identify a ballpark value added ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                            	<figure class="post-thumb"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/post-thumb-2.jpg')}}" alt=""></a></figure>
                                <div class="text"><a href="{{url('City_view_by_divistion')}}">Organically grow the holistic world view ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                            	<figure class="post-thumb"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/post-thumb-3.jpg')}}" alt=""></a></figure>
                                <div class="text"><a href="{{url('City_view_by_divistion')}}">Bring to the table in the win-win survival ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                            <article class="post">
                            	<figure class="post-thumb"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/post-thumb-4.jpg')}}" alt=""></a></figure>
                                <div class="text"><a href="{{url('City_view_by_divistion')}}">Override the digital divide with additional ...</a></div>
                                <div class="post-info">12 April. 2019</div>
                            </article>

                        </div>

						<!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h2>Tags</h2></div>
                            <a href="#">Interior Tips</a>
                            <a href="#">Lighting</a>
                            <a href="#">Designs</a>
                            <a href="#">Vintage Look</a>
                            <a href="#">Kitchens</a>
                            <a href="#">Kitchens</a>
                        </div> --}}

					</aside>
				</div>

			</div>
		</div>
	</div>

	@endsection
