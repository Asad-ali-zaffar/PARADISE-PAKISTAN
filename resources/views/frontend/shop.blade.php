@extends('frontend.layouts.main')

	@section('main-section')
    <div class="preloader"></div>
    <!--Shop Banner Section-->
    <section class="shop-banner-section" style="background-image:url({{url('frontend/images/background/0005.jpg')}});">
    	<div class="auto-container">
            <!-- Content Box -->
			<div class="content-box">
				<div class="box-inner">
					<h2>{{$titel}}</h2>
					<div class="text">Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative.</div>
					<a href="{{url('product-detail/1')}}" class="theme-btn btn-style-one"><span class="txt">Book now</span></a>
				</div>
			</div>

        </div>
    </section>
    <!--End Shop Banner Section-->

	<!--Shop Features Section-->
    <section class="shop-features-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Feature Block-->
                {{-- <div class="shop-feature-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-delivery-truck"></span>
                        </div>
                        <h3><a href="#">Free Shipping</a></h3>
                        <div class="text">Duis aute irure dolor in reprehend erit in voluptate velit esse cillu.</div>
                    </div>
                </div> --}}

                <!--Feature Block-->
                <div class="shop-feature-block col-lg-6 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-tag"></span>
                        </div>
                        <h3>Sale 15% Off</h3>
                        <div class="text">Duis aute irure dolor in reprehend erit in voluptate velit esse cillu.</div>
                    </div>
                </div>

                <!--Feature Block-->
                <div class="shop-feature-block col-lg-6 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-store-new-badges"></span>
                        </div>
                        <h3>New Arriaval</h3>
                        <div class="text">Duis aute irure dolor in reprehend erit in voluptate velit esse cillu.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Shop Features Section-->

	<!--Shop Section-->
    <section class="shop-section">
    	<div class="auto-container">
        	<!--Sec Title-->
            <div class="title-box">
            	<h2>Featured Products</h2>
            </div>
            <div class="row clearfix">
				<!--Shop Item-->
                @foreach ($tourpakage as $tourpakag)
                <div class="shop-item col-lg-3 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="image">
                        	<a href="product-detail.html"><img src="{{url('visiters').'/'.$tourpakag->pakage_img}}" alt="" /></a>
							<div class="overlay-box">
                                <ul class="option-box">
                                    <li><a href="{{url('product-detail').'/'.$tourpakag->tour_pakage_id}}"><span class="far fa-heart"></span></a></li>
                                    <li><a href="{{url('product-detail').'/'.$tourpakag->tour_pakage_id}}"><span class="fa fa-shopping-bag"></span></a></li>
                                    <li><a href="{{url('visiters').'/'.$tourpakag->pakage_img}}" class="lightbox-image" data-fancybox="products"><span class="fa fa-search"></span></a></li>
                                </ul>
                            </div>
                            <div class="tag-banner">New</div>
                        </div>
                        <div class="lower-content">
                        	<h3><a href="#">{{$tourpakag->pakage_name}}</a></h3>
                            <div class="price">${{$tourpakag->pakage_price}}</div>
                            <div class="">{{$tourpakag->pakage_description}}</div>
                        </div>
                    </div>
                </div>
                @endforeach


            <div class="shop-pagination">
                <ul class="clearfix">
                    <li class="prev"><a href="{{url('product-detail/1')}}"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="{{url('product-detail/1')}}">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="{{url('product-detail/1')}}">3</a></li>
                    <li class="next"><a href="{{url('product-detail/1')}}"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
		</div>
	</section>

	<!--Products Section-->
    <section class="products-section">
    	<div class="auto-container">
        	<div class="row clearfix">

            	<!--Product Column-->
                <div class="product-column col-lg-6 col-md-12 col-sm-12">
                	<div class="row clearfix">
                    	<!--Shop Item Two-->
                        @foreach ($tourpakage as $tourpakag)
                    	<div class="shop-item-two col-lg-6 col-md-6 col-sm-12">
                        	<div class="inner-box">
                            	<div class="image">
                                	<a href="product-detail.html"><img src="{{url('visiters').'/'.$tourpakag->pakage_img}}" alt="" /></a>
                                </div>
                                <div class="lower-content">
                                	<h3><a href="{{url('product-detail').'/'.$tourpakag->tour_pakage_id}}">{{$tourpakag->pakage_name}}</a></h3>
									<div class="price">${{$tourpakag->pakage_price}}</div>
									<a href="{{url('product-detail').'/'.$tourpakag->tour_pakage_id}}" class="theme-btn cart-btn">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <!--Content Column-->
                @foreach ($tourpakage as $tourpakag)
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner-column">
                    	<h2>Best pakages <span>for home</span></h2>
                        <div class="text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </div>
                        <a href="{{url('product-detail').'/'.$tourpakag->tour_pakage_id}}" class="theme-btn btn-style-one"><span class="txt">View all pakages</span></a>
                    </div>
                </div>
                @php
                      break;
                @endphp
                @endforeach
            </div>
        </div>
    </section>
    <!--End Products Section-->

@endsection
