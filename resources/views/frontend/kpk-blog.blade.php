{{-- kpk blog --}}
@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/kpk01.jpg')}})">
    	<div class="auto-container">
        	<h2> Khyber Pakhtunkhwa Blog</h2>
            <ul class="page-breadcrumb">
            	<li><a href="/">home</a></li>
                <li>Khyber Pakhtunkhwa Blog</li>
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
		                            <figure class="image"><a href="/sindh-blog"><img src="{{url('frontend/images/resource/kpk.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <div class="post-meta">
		                            <div class="lower-box">
                                        <h3>History of Khyber Pakhtunkhwa</h3>
                                        <div class="text">
                                            <p>Khyber Pakhtunkhwa, formerly North-West Frontier Province, northernmost province of Pakistan. It is bounded by Afghanistan to the west and north, Azad Kashmir and Gilgit-Baltistan (the Pakistani-administered areas of the Kashmir region) to the east and northeast, Punjab province to the southeast, and Balochistan province to the southwest. On the western boundary of Khyber Pakhtunkhwa, along the Afghan border, are the areas formerly known as the Federally Administered Tribal Areas (FATA), a series of areas that are ethnically homogeneous with the province but were semiautonomous until 2018.Peshawar is the provincial capital. Area province, 39,282 square miles (101,741 square km). Pop. (2017) province, 35,519,927.

                                                The terrain consists of mountain ranges, undulating submontane areas, and plains surrounded by hills. In the north the mountain ranges generally run north-south; south of the Kābul River, which bisects the province from east to west, the ranges generally run east-west. </p>
                                            <h4>Sample introduction of Khyber Pakhtunkhwa</h4>
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <p>Khyber Pakhtunkhwa, formerly North-West Frontier Province, northernmost province of Pakistan. It is bounded by Afghanistan to the west and north, Azad Kashmir and Gilgit-Baltistan (the Pakistani-administered areas of the Kashmir region) to the east and northeast, Punjab province to the southeast, and Balochistan province to the southwest.</p>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <p> Peshawar is the provincial capital. Area province, 39,282 square miles (101,741 square km). Pop. (2017) province, 35,519,927.</p>
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
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/dera-ismail.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Dera ismail Khan Division</a></h3>
		                            <div class="text">Dera Ismail Khan, often abbreviated to D. I. Khan, is a city and capital of Dera Ismail Khan District, located in Khyber Pakhtunkhwa Province, Pakistan. It is the 37th largest city of Pakistan and fifth largest in the province of Khyber Pakhtunkhwa by population.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

						<!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/bannu.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Bannu Division</a></h3>
		                            <div class="text">Bannu Division is one of seven divisions in Pakistan's Khyber Pakhtunkhwa province. It consists of three districts: Bannu, Lakki Marwat, and North Waziristan.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>
					</div>

					<!--Styled Pagination-->
					<ul class="styled-pagination">
                        <li><a href="/kpk-blog" class="active">1</a></li>
						<li><a href="/kpk-blog2">2</a></li>
						<li><a href="/kpk-blog2"><span class="fa fa-angle-right"></span></a></li>
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
                            $points = array("Saif-ul-Maluk Lake","Kaghan Valley","Lulusar","Mahodand Lake","Shandur Pass","Samsons Resort Malam Jabba","Kumrat Valley","Khyber Pass","Tirich Mir","Kashmir Point","Mukeshpuri","Ansoo Lake","Masjid Mahabat Khan","Tarbela Dam","Khanpur Dam","Lalazar","Mall Road","Kalash Valley Road","Chitral Gol National Park","Miranjani","Bala Hisar Fort","Kundol Lake","Peshawar Museum","GPO Murree","Bumburet","Fizagat","Garam Chashma","White Palace","Makra Peak","Naran Valley","Utror","Mukshpuri Peak","Thandiani Road","Attock Fort","Malika Parbat","Kalash Valley","Kandol Lake","Rumbur","Pyala Lake","Lowari Pass","Diamer Basha Dam Site","Jamrud Fort","Peshawar Zoo","Ayubia National Park","Warsak Dam","Daral Lake","Chitral Fort","Siri Lake","Pindi Point Chair Lift","Sir Cunningham Clock Tower","Payee Lake","Lulusar Lake","Ayubia Chair Lift","Swat Museum","Broghil Pass (3,882 metres)","Zeeland River","Samundar katha lake parking","Saiful Maluk National Park","Musa ka Musalla","Tanda Dam","Lulusar-Dudipatsar National Park","Pipeline Track Ayubia","Samundar Katha","Kumrat Valley Dir","Saidgai Lake","Saifullah Lake","Falak Sar","Bhamala Stupa","Baab e Khyber","Butkara I","Sethi House Museum","PIA Park Murree","Takht-e-Sulaiman","Rani Gat Buddhists Ruins","Kafir Kot","Kalam Forest...Usho Forest","Koyo Zom","Saraghrar","Tatara Park","ہرنو جھیل Harnoi lake","Shahi Masjid Chitral","Sethial Street","Attock Bridge","Fiza Gut Park","Lalazar Wildlife Park","Izmis Lake","Kund Park","Thandiani Top","Istor-o-Nal","Manshi Top","Chitral Museum","Gomal Zam Dam","Dagri Bangla Rest House","Buni Zom","Manglot Wildlife Park","Fiza Gat Park","Kanishka Stupa Fort","Godar Lake");
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
