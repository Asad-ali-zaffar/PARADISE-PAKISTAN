<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/  30 Nov 2019 03:42:43 GMT -->
<head>
<meta charset="utf-8">
<title>PARADISE PAKISTAN</title>
<!-- Stylesheets -->
<link href="{{url('frontend/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{url('frontend/css/style.css')}}" rel="stylesheet">
<link href="{{url('frontend/css/responsive.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{url('frontend/images/young-man1.jpg')}}" type="image/x-icon">
<link rel="icon" href="{{url('frontend/images/icons/ppppp.png')}}" type="image/x-icon">
{{-- data table link --}}
<link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
    .header-style-one.fixed-header .header-upper, .header-style-one.fixed-header .header-lower, .header-style-three.fixed-header .header-upper, .header-style-three.fixed-header .header-lower {
        position: fixed;
        left: 0px;
        top: 0px;
    }
    </style>
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    {{-- <div class="preloader"></div> --}}

    <header class="main-header header-style-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <div class="text"><span class="icon flaticon-call-answer"></span> Need help? Call Us Now : <a href="tel:+923083962198" class="number">+92308 396 2198</a></div>

                </div>
                <div class="top-right clearfix">
                    <!-- Info List -->
					<ul class="info-list">
                        <li><a href="/register_hotel_user_sight">Register Hotel</a></li>
                        <li><a href="/register_LocalRoom_user_sight">Register Local Rooms</a></li>
                        <li><a href="/registration_guider_user_sight">Register Guaider </a></li>
						<li class="quote"><a href="/register_user_sight">Registration</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        {{-- <img src="{{url('frontend/images/logo.png')}}" alt="" title=""> --}}
                        <div class="logo"><a href="{{url('/')}}">PARADISE PAKISTAN</a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-1"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="{{url('/')}}">Home</a>

                                    </li>
									<li class=" dropdown"><a href="{{url('/about')}}">About us</a>
                                        <ul>
                                            <li><a href="{{url('/about')}}">Our Introduction</a></li>
											<li><a href="{{url('/team')}}">Our Team</a></li>
											<li><a href="{{url('/testimonials')}}">Visitor Reviews</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="{{url('/services')}}">Services</a>
                                        <ul>
											<li class="dropdown"><a href="/residence">Residence</a>
                                                <ul>
                                                    <li><a href="{{url('/hotel-residence')}}">Hotel Residence</a></li>
                                                    <li><a href="{{url('/local-residence')}}">Local Residence</a></li>
                                                </ul>
                                            </li>
											<li class="dropdown"><a href="#">Transportes</a>
                                                <ul>
                                                    <li><a href="/services" >Car Reservation</a></li>
                                                    <li><a href="/services" >Bus seat Reservation</a></li>
                                                    <li><a href="/services" >Train seat Reservation</a></li>
                                                    <li><a href="/services" >Flight Ticket Booking</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/health_care_center">Health cear center</a></li>
                                            <li><a href="{{url('/tour-guide')}}">Tour Guide</a></li>
                                        </ul>
                                    </li>

									<li class="dropdown"><a href="{{url('/blog')}}">Blog</a>
                                        <ul>
                                            <li><a href="{{url('/punjab-blog')}}">Punjab Blog</a></li>
                                            <li><a href="{{url('/sindh-blog')}}">Sindh Blog</a></li>
                                            <li><a href="{{url('/balochistan-blog')}}">Balochistan Blog</a></li>
                                            <li><a href="{{url('/kpk-blog')}}">Khyber Pakhtunkhwa Blog</a></li>

                                        </ul>
                                    </li>
									<li class="dropdown"><a href="{{url('shop')}}">Pakages</a>
                                        <ul>
                                            <li><a href="{{url('/shop')}}">Main Pakages page</a></li>
                                            </ul>
                                    </li>
                                    <li><a href="{{url('/contact')}}">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

						<!-- Outer Box -->
                        <div class="outer-box clearfix">
                            <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{url('/')}}">PARADISE PAKISTAN</a></div>
                <ul class="navigation clearfix"></ul>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><span class="fab fa-twitter"></span></a></li>
						<li><a href="https://www.facebook.com/login"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="https://www.pinterest.com/login/"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="https://www.instagram.com/accounts/login/?"><span class="fab fa-instagram"></span></a></li>
						<li><a href="https://www.youtube.com/"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
