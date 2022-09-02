{{-- sindh blog --}}
@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/sindh.jpg')}})">
    	<div class="auto-container">
        	<h2>Sindh Blog</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li> Sindh Blog</li>
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
		                            <figure class="image"><a href="/sindh-blog"><img src="{{url('frontend/images/resource/sindh1.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <div class="post-meta">
		                            <div class="lower-box">
                                        <h3>History of Sindh</h3>
                                        <div class="text">
                                            <p>The earliest authentic history of Sindh dates from the time when Alexander the Great abandoned his scheme of conquest towards the Ganges, alarmed at the discontent of his soldiers. He embarked a portion of the army in boats, floated them down the Jhelum and the Chenab, and marched the remainder on the banks of the river till he came to the Indus. There he constructed a fleet, which sailed along the coast towards the Persian Gulf with part of his forces, under the command of Nearchus and Ptolemy, whilst Alexander himself marched through Southern Baluchistan and Persia to Seistan or Susa. At that time Sindh was in the possession of the Hindus, the last of whose rulers was Raja Sahasi, whose race, as is reported by native historians, governed the kingdom for over two thousand years. The Persian monarchs were probably alluded to, for in the sixth century BC Sindh was invaded by them, They defeated and slew the monarch in a pitched battle and plundered the province and then left. Eight years after his accession to the Persian throne, Darius I, son of Hystaspes extended his authority as far as the Indus. This was about 513 BC.

                                               <br> The Arab conquest of Sindh by Muhammad Bin Qasim in 712 AD gave the Muslims a firm foothold on the sub-continent. The description of Hiun Tsang, a Chinese historian, leaves no doubt that the social and economic restrictions inherent in the caste differentiations of Hindu society had however, gradually sapped the inner vitality of the social system and Sindh fell without much resistance before the Muslim armies. According to Al-Idreesi, the famous city of Al-Mansura was founded during the reign of Mansur (754-775 AD) the second Khalifa of the Abbasid dynasty. Khalifa Harun-al-Rashid (786-809 AD) was able to extend the frontiers of Sindh on its western side. For nearly two hundred years since its conquest by Muhammad Bin Qasim, Sindh remained an integral part of the Umayyad and the Abbasid caliphates. The provincial governors were appointed directly by the central government. History has preserved a record of some 37 of them. </p>
                                            <h4>Sample introduction of Sindh</h4>
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <p>The province of Sindh has been designated after the river Sindh (Indus) which literally created it and has been also its sole means of sustenance. However, the importance of the river and close phonetical resemblance in nomenclature would make one consider Sindhu as the probable origin of the name of Sindh.</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <p>Later phonetical changes transformed Sindhu into Hindu in Pahlavi and into Hoddu in Hebrew. The Greeks (who conquered Sindh in 125 BC under the command of the Alexander the great) rendered it into Indos, hence modern Indus.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
		                        </div>
		                    </div>
		                </div>
                        {{-- News Block Three --}}
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/karachi.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Karachi Division</a></h3>
		                            <div class="text">Karachi is the largest city in Pakistan and the twelfth-largest city in the world. It is the capital of the Pakistani province of Sindh. Ranked as a beta-global city, it is Pakistan's premier industrial and financial centre, with an estimated GDP of $164 billion as of 2019.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

						<!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/hyderabad.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
                                    <h3><a href="{{url('City_view_by_divistion')}}">Hyderabad Division</a></h3>
		                            <div class="text">Hyderabad is a city and capital of Hyderabad Division in the Sindh province of Pakistan. It is the second-largest city in Sindh, and the eight-largest in Pakistan..</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/sukkur.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Sukkur Division</a></h3>
		                            <div class="text">Sukkur is a city in the Pakistani province of Sindh along the western bank of the Indus River, directly across from the historic city of Rohri. Sukkur is the third largest city in Sindh after Karachi and Hyderabad, and 14th largest city of Pakistan by population..</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/larkano1.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Larkana Division</a></h3>
		                            <div class="text">Larkana Division is an administrative division of the Sindh Province of Pakistan. It was abolished in 2000 but restored again on 11 July 2011. Larkana is the divisional headquarters of Larkana Division.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/mirpur.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Mirpur Khas Division</a></h3>
		                            <div class="text">Mirpur Khas Division is an administrative division of the Sindh Province of Pakistan. It was abolished in 2000 but restored again on 11 July 2011. Mirpur Khas is the divisional headquarter of Mirpur Khas Division. It comprises the following three districts: Mirpur Khas District Tharparkar District Umerkot District.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

					</div>

					<!--Styled Pagination-->
					<ul class="styled-pagination">
						<li><a href="/sindh-blog" class="active">1</a></li>
						<li><a href="/sindh-blog2">2</a></li>
						<li><a href="/sindh-blog2"><span class="fa fa-angle-right"></span></a></li>
					</ul>
					<!--End Styled Pagination-->

				</div>

				<!--Sidebar Side-->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">

						<!-- Search -->
                        {{-- <div class="sidebar-widget search-box">
                        	<form method="post" action="">
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
                            $points = array("Mohenjo-daro","Mazar-e-Quaid, Jinnah's Mausoleum","Mohatta Palace Museum","Clifton Beach, Karachi","RaniKot Fort","Frere Hall","Makli Necropolis","Shah Jahan Masjid Thatta","Pakistan Air Force Museum","French Beach, Karachi","National Museum Of Pakistan","Hawke's Bay Beach","Karachi Zoo Park","Quaid e Azam House Museum","Chaukhandi Tombs","Masjid-e-Tooba","Empress Market","Port Grand karachi","Gorakh Mount","Haleji Lake","Khirthar National Park ","Pakistan Maritime Museum","Shamspir Island","Safari Park","Lansdowne Bridge","St. Patrick's Cathedral","Bagh Ibn-e-Qasim","Hill Park","Do Darya","Kirthar Mountains","Askari Amusement Park","Manora Beach","The Great Fiesta Family Water Park","Paradise Point, Pakistan","Lloyd Barrage Museum","Sindh Museum","Hub Dam","Bahria Adventure Land Theme Park","Karachi Beach Hut {{url('City_view_by_divistion')}} A-55 Turtle Beach","Clifton Art Gallery","Sunway Lagoon Water Park","State Bank Museum & Art Gallery","Picnic World Water Park","The Great bath","Bahria Town Danzoo","Sindbad Amusement park","Cape Mount","Darbar Hazrat Usman Marvandi Lal Shahbaz","Habib Bank Plaza","Karoonjhar Mountains","Makli Graveyard","Kot Diji Fort","Wazir Mansion ( Quaid-e-Azam Place)","Tushan Beach","Wild Venture Water Park and Resort","Sadh Belo","Zamzama Park","Paradise Island Water Park Gharo","Jehangir Kothari Parade","Boat Basin","Ayub Bridge Sukkur","Hadero Lake","Hilal Park","Chunky Monkey Amusement Parks","TDF MagnifiScience Centre","Sunhera Beach","Varun Dev Temple","Umerkot Fort","Shaheed Benazir Bhutto Park","Rani Bagh Zoo","Karachi Metropolitan Corporation Building","Beach Huts Rental -- Karachi","Russian Beach","Dargah Hazrat Shah Abdul Latif Bhittai","Grand Jamia Masjid","Ranikot","Elixir Zoo","Aziz Bhatti Park","A.K. Khan Park","Devil's Point","PIA Planetarium","Village NM Arain","Manora Beach","Beach View Park","Cosy Water Park","Arabian Sea Country Club","Kidney Hill Park","Nisar Shaheed Park","Faiz Mahal","Ghanta Ghar","Karachi Golf Club","Jahangir Park","Nathiagali Beach","Merewether Clock Tower","Bukkur");
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
