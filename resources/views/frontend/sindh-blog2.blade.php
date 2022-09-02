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
                        {{-- News Block Three --}}
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/banbhore.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
		                            <h3><a href="{{url('City_view_by_divistion')}}">Banbhore Division</a></h3>
		                            <div class="text">Banbhore Division, also known as "Thatta Division" or "Bhambore Division", is the sixth administrative division of Sindh as announced by the People's Party's Sindh Government. The name of division is derived from the ancient city of Banbhore. The planned capital of this division is the city of Thatta.</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>

						<!-- News Block Three-->
		                <div class="news-block-three">
		                    <div class="inner-box">
		                        <div class="image-box">
		                            <figure class="image"><a href="{{url('City_view_by_divistion')}}"><img src="{{url('frontend/images/resource/shaheedbenazirabad.jpg')}}" alt=""></a></figure>
		                            <span class="date">9 may 2019</span>
		                        </div>
		                        <div class="lower-content">
                                    <h3><a href="{{url('City_view_by_divistion')}}">Shaheed Benazirabad Division</a></h3>
		                            <div class="text">The district was renamed in September 2008 when most of MPAs of Nawabshah demanded the district be renamed to honour the late party leader.The renaming of the district was criticised by the family of Syed Nawabshah and others who, while saddened at the death of Bhutto, felt that Nawabshah was a historic district and ought to have kept its name..</div>
			                        <div class="link-box"><a href="{{url('City_view_by_divistion')}}" class="theme-btn read-more">Read more</a></div>
		                        </div>
		                    </div>
		                </div>
					</div>

					<!--Styled Pagination-->
					<ul class="styled-pagination">
                        <li><a href="/sindh-blog"><span class="fa fa-angle-left"></span></a></li>
						<li><a href="/sindh-blog2" >1</a></li>
						<li><a href="/sindh-blog2" class="active">2</a></li>

					</ul>
					<!--End Styled Pagination-->

				</div>

				<!--Sidebar Side-->
				<div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
					<aside class="sidebar">

						<!-- Search -->
                        {{-- <div class="sidebar-widget search-box">
                        	<form method="POST" action="{{url('/')}}/sindh-blog">
                                @csrf
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Enter Search Keywords" required>
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
						</div> --}}
                       	<!--Blog Category Widget-->
                        <div class="sidebar-widget sidebar-blog-category">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            {{-- @php
                            $points = array("Mohenjo-daro","Mazar-e-Quaid, Jinnah's Mausoleum","Mohatta Palace Museum","Clifton Beach, Karachi","RaniKot Fort","Frere Hall","Makli Necropolis","Shah Jahan Masjid Thatta","Pakistan Air Force Museum","French Beach, Karachi","National Museum Of Pakistan","Hawke's Bay Beach","Karachi Zoo Park","Quaid e Azam House Museum","Chaukhandi Tombs","Masjid-e-Tooba","Empress Market","Port Grand karachi","Gorakh Mount","Haleji Lake","Khirthar National Park ","Pakistan Maritime Museum","Shamspir Island","Safari Park","Lansdowne Bridge","St. Patrick's Cathedral","Bagh Ibn-e-Qasim","Hill Park","Do Darya","Kirthar Mountains","Askari Amusement Park","Manora Beach","The Great Fiesta Family Water Park","Paradise Point, Pakistan","Lloyd Barrage Museum","Sindh Museum","Hub Dam","Bahria Adventure Land Theme Park","Karachi Beach Hut # A-55 Turtle Beach","Clifton Art Gallery","Sunway Lagoon Water Park","State Bank Museum & Art Gallery","Picnic World Water Park","The Great bath","Bahria Town Danzoo","Sindbad Amusement park","Cape Mount","Darbar Hazrat Usman Marvandi Lal Shahbaz","Habib Bank Plaza","Karoonjhar Mountains","Makli Graveyard","Kot Diji Fort","Wazir Mansion ( Quaid-e-Azam Place)","Tushan Beach","Wild Venture Water Park and Resort","Sadh Belo","Zamzama Park","Paradise Island Water Park Gharo","Jehangir Kothari Parade","Boat Basin","Ayub Bridge Sukkur","Hadero Lake","Hilal Park","Chunky Monkey Amusement Parks","TDF MagnifiScience Centre","Sunhera Beach","Varun Dev Temple","Umerkot Fort","Shaheed Benazir Bhutto Park","Rani Bagh Zoo","Karachi Metropolitan Corporation Building","Beach Huts Rental -- Karachi","Russian Beach","Dargah Hazrat Shah Abdul Latif Bhittai","Grand Jamia Masjid","Ranikot","Elixir Zoo","Aziz Bhatti Park","A.K. Khan Park","Devil's Point","PIA Planetarium","Village NM Arain","Manora Beach","Beach View Park","Cosy Water Park","Arabian Sea Country Club","Kidney Hill Park","Nisar Shaheed Park","Faiz Mahal","Ghanta Ghar","Karachi Golf Club","Jahangir Park","Nathiagali Beach","Merewether Clock Tower","Bukkur");
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
