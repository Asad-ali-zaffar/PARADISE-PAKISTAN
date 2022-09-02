@extends('frontend.layouts.main')

	@section('main-section')

    <!--Page Title-->
    <section class="page-title" style="background-image:url({{url('frontend/images/background/Naltar-Valley1.jpg')}})">
    	<div class="auto-container">
        	<h2>{{$titel}}</h2>
            <ul class="page-breadcrumb">
            	<li><a href="{{url('/')}}">home</a></li>
                <li>{{$titel}}</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

	<!--Shop Single Section-->
    <section class="shop-single-section">
    	<div class="auto-container">

            <div class="shop-single">
                <div class="product-details">
                    @foreach ($tourpakage as $tourpakag )


                    <!--Basic Details-->
                    <div class="basic-details">
                        <div class="row clearfix">
                            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                                <figure class="image-box"><a href="" class="lightbox-image" title="Image Caption Here"><img src="{{url('visiters').'/'.$tourpakag->pakage_img}}" alt=""></a></figure>
                            </div>
                            <div class="info-column col-lg-6 col-md-12 col-sm-12">
                            	<div class="inner-column">
                                    <form action="{{$url}}" method="post">
                                        @csrf
                                    <h4><input class="quantity-spinner" type="text" value="{{$tourpakag->pakage_name}}" name="pakage_name"></h4>
                                    <div class="text">{{$tourpakag->pakage_description}} </div>
                                    <div class="price">Price : <span><input class="quantity-spinner" type="text" value="${{$tourpakag->pakage_price}}" name="pakage_price"></span></div>

                                    <div class="other-options clearfix">
                                        <div class="item-quantity"><label class="field-label">Pakage Days:</label><input class="quantity-spinner" type="text" value="{{$tourpakag->pakage_dayes}}" name="pakage_dayes"></div>
                                        <button type="submit" class="theme-btn cart-btn">Book Know</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Basic Details-->

                    <!--Product Info Tabs-->
                    <div class="product-info-tabs">
                        <!--Product Tabs-->
                        <div class="prod-tabs tabs-box">

                            <!--Tab Btns-->
                            <ul class="tab-btns tab-buttons clearfix">
                                <li data-tab="#prod-details" class="tab-btn active-btn">Descripton</li>
                                <li data-tab="#prod-spec" class="tab-btn">Specification</li>
                                <li data-tab="#prod-reviews" class="tab-btn">Review </li>
                            </ul>

                            <!--Tabs Container-->
                            <div class="tabs-content">

                                <!--Tab / Active Tab-->
                                <div class="tab active-tab" id="prod-details">
                                    <div class="content">
                                        <p>World Travel and Tourism Council is committed to protecting your privacy.
                                            We recognise our obligation to keep personal information secure and believe it is important for our partners, Members, website users, and other individuals to know how we treat their personal information. This policy sets out the basis on which any personal data we collect from you, or that you provide to us, will be processed by us.

                                            Please read the following carefully to understand our views and practices regarding your personal data and how we will treat it.

                                            </p>
                                        <p>By visiting our website or otherwise providing data to us you are accepting and consenting to the practices described in this policy

                                            Any changes we may make to our privacy policy in the future will be posted on this page. Please check back frequently to see any updates or changes to our privacy policy.

                                            Here are some of the key changes we made on 25 May 2018, when the European Union General Data Protection.
                                            </p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-spec">
                                    <div class="content">
                                        <p><b>We envision :</b> Adventure Planners as a one-stop-shop for the ever-dynamic tourism industry of Pakistan. We are a team of diverse licensed tour guides ranging from the fields of business to engineering, bringing years of rich traveling experience on board. We treat our tourists as a part of the clan, offering them true Pakistani hospitality and making them feel at home every step of the way.</p>
                                    </div>
                                </div>

                                <!--Tab-->
                                <div class="tab" id="prod-reviews">
                                    <h2 class="title">Reviews For Visitors</h2>
                                    <!--Reviews Container-->
                                    <div class="comments-area">
                                        <!--Comment Box-->
                                        @foreach ($tbl_visitor_reviews as $tbl_visitor_review )


                                        <div class="comment-box">
                                            <div class="comment">
                                                <div class="author-thumb"><img src="{{url('visiters').'/'.$tbl_visitor_review->review_img}}" alt=""></div>
                                                <div class="comment-inner">
                                                    <div class="comment-info clearfix">{{$tbl_visitor_review->review_name}}</div>

                                                    <div class="text">{{$tbl_visitor_review->message}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        {{-- <!--Comment Box-->
                                        <div class="comment-box reply-comment">
                                            <div class="comment">
                                                <div class="author-thumb"><img src="{{url('frontend/images/resource/author-2.jpg')}}" alt=""></div>
                                                <div class="comment-inner">
                                                    <div class="comment-info clearfix">William Cobus – Aug 21, 2016:</div>

                                                    <div class="text">There anyone who loves or pursues or desires to obtain pain itself, because it is pain sed, because occasionally circumstances occur some great pleasure.</div>
                                                </div>
                                            </div>
                                        </div> --}}

                                    </div>

                                    <!-- Comment Form -->
                                    <div class="shop-comment-form">
                                        <h2>Add Your Review</h2>
                                        <form method="post" action="{{$url1}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row clearfix">
                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <label for="username">First Name *</label>
                                                    <input type="text" name="username" id="username" placeholder="" required>
                                                </div>

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                                    <label for="Last_name">Last Name*</label>
                                                    <input type="text" name="Last_name" id="Last_name" placeholder="" required>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <label for="email">Email*</label>
                                                    <input type="email" name="email" id="email" placeholder="" required>
                                                </div>
                                                <div class="form-group col-md-12 col-sm-12 col-xs-12 required">
                                                    <x-input type="file" name="Pakage_img" label="Image" id="img" placeholder="" value="" pattern=""/>
                                                    {{-- <label for="img">Image:</label>
                                                    <input type="file" id="img" name="Pakage_img" multiple
                                                        accept="image/*"> --}}
                                                </div>

                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <label for="message">Your Comments*</label>
                                                    <textarea name="message" id="message" placeholder=""></textarea>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                    <button class="theme-btn btn-style-four" type="submit" ><span class="txt">Submit now</span></button>
                                                </div>

                                            </div>
                                        </form>

                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                    <!--End Product Info Tabs-->

                </div>
            </div>

        </div>
    </section>
    <!--End Shop Single Section-->
	@endsection
