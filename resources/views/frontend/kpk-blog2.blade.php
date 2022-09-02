{{-- balochistan blog --}}
@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/kpk01.jpg')}})">
    	<div class="auto-container">
        	<h2>Khyber Pakhtunkhwa Blog</h2>
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
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/hazara.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Hazara Division</a></h3>
		                            <div class="text">Hazara is a region in the northeastern part of the Khyber Pakhtunkhwa province of Pakistan. It is located east of the Indus River and comprises eight districts: Abbottabad, Battagram, Haripur, Kolai-Palas, Mansehra, Upper Kohistan, Lower Kohistan, and Torghar. </div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

						<!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/mardan.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Mardan Division</a></h3>
		                            <div class="text">District Mardan is a district in Mardan Division of Khyber Pakhtunkhwa province in Pakistan. The district is named after Mardan city, which is also the headquarters of the district. The district is famous for its agriculture industry and for its archaeological sites of Takht Bhai, Jamal Garhi and Sawal Dher.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/malakand.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Malakand Division</a></h3>
		                            <div class="text"> In 1970, Malakand Division was formed from the princely states of Chitral, Dir and Swat (incorporated into West Pakistan in 1969) and an area around the Malakand Fort known as the Malakand Protected Area. The capital of Malakand Division is Saidu Sharif, with the largest city being Mingora. </div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/peshawar.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Peshawar Division</a></h3>
		                            <div class="text">The Local Councils Association – Khyber Pakhtunkhwa (LCA-KP) was established in 2008 under, “The Societies Registration Act, 1860” as an independent and private association of the elected local government representatives. The Association, being a representative body of more than 42,000 elected councilors, aims to increase the effective participation of the councilors and citizens in local government planning, development and decision-making within the framework of participatory democracy and associative spirit.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

		                <!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/kohat.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Kohat Division</a></h3>
		                            <div class="text">Kohat Division is comprising of 05 Districts Kohat, Karak, Hangu, Kurram and Orakzai with a total area of 12,280.55 Sq.Km having a population of 30,92,877. On the North of Kohat Division lies District Peshawar, on the South District Bannu and District Lakki Marwat, on the East District Attock and on the West lies Afghanistan .</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>
					</div>

					<!--Styled Pagination-->
					<ul class="styled-pagination">
                        <li><a href="/kpk-blog"><span class="fa fa-angle-left"></span></a></li>
                        <li><a href="/kpk-blog" >1</a></li>
						<li><a href="/kpk-blog2"class="active">2</a></li>

					</ul>
					<!--End Styled Pagination-->

				</div>

				<!--Sidebar Side-->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">

						{{-- <!-- Search -->
                        <div class="sidebar-widget search-box">
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

                        </div> --}}

						{{-- <!-- Popular Tags -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h2>Tags</h2></div>
                            <a href="{{url('City_view_by_divistion')}}">Interior Tips</a>
                            <a href="{{url('City_view_by_divistion')}}">Lighting</a>
                            <a href="{{url('City_view_by_divistion')}}">Designs</a>
                            <a href="{{url('City_view_by_divistion')}}">Vintage Look</a>
                            <a href="{{url('City_view_by_divistion')}}">Kitchens</a>
                            <a href="{{url('City_view_by_divistion')}}">Kitchens</a>
                        </div> --}}

					</aside>
				</div>

			</div>
		</div>
	</div>

	@endsection
