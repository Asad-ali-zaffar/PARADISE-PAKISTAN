	<!--Main Footer-->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="/"><b>PARADISE  PAKISTAN</b>   {{-- <img src="{{url('frontend/images/footer-logo.png')}}" alt="" /> --}}</a>
                                    </div>
                                    <div class="text">PARADISE PAKISTAN is a theme to travel and tourism in Pakistan. It has good features and you will love.</div>
                                    <ul class="social-icons">
                                        <li><a href="https://www.facebook.com/login"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="https://www.linkedin.com/login"><span class="fab fa-linkedin-in"></span></a></li>
                                        <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4ifQ%3D%3D%22%7D"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="https://accounts.google.com/login/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin"><span class="fab fa-google-plus-g"></span></a></li>
                                    </ul>
								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                	<h2>Quick links</h2>
									<div class="widget-content">
										<ul class="list">
                                        	<li><a href="http://127.0.0.1:8000/about">About us</a></li>
                                            <li><a href="http://127.0.0.1:8000/about">Privacy Policy</a></li>
                                            <li><a href="http://127.0.0.1:8000/about">Terms & Conditionis</a></li>

                                        </ul>
                                    </div>
								</div>
							</div>

						</div>
					</div>

					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h2>Contact Info</h2>
									<div class="widget-content">
										<a href="tel:+9230-8396-2198" class="contact-number">(+9230) 8396 2198</a>
										<ul>
											<li>Pull suny R.Y.K Pakistan</li>
											<li>Email :<a href="mailto:info@stellaorre.com"> info@tourism.com.pk</a></li>
										</ul>
									</div>
								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                	<h2>Newsletter</h2>
									<div class="text">Get Special offers & Discounts</div>
									<!-- Newsletter Form -->
									<div class="newsletter-form">
										<form method="post" action="{{url('/Subscribe')}}">
											<div class="form-group">
                                                @csrf
												<input type="email" name="email" value="" placeholder="Enter your email address" required>
												<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="" action="{{url('search_city')}}">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search_input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Islamabad</a></li>
                <li><a href="#">Gilgit-Baltistan</a></li>
                <li><a href="#">Azad Jammu and Kashmir</a></li>
                <li><a href="#">Punjabi</a></li>
                <li><a href="#">Khyber Pakhtunkhwa</a></li>
            </ul>

        </div>

    </div>
</div>

<!--Scroll to top-->
<script src="{{url('frontend/js/jquery.js')}}"></script>
<script src="{{url('frontend/js/popper.min.js')}}"></script>
<script src="{{url('frontend/js/jquery-ui.js')}}"></script>
<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.fancybox.js')}}"></script>
<script src="{{url('frontend/js/isotope.js')}}"></script>
<script src="{{url('frontend/js/owl.js')}}"></script>
<script src="{{url('frontend/js/wow.js')}}"></script>
<script src="{{url('frontend/js/appear.js')}}"></script>
<script src="{{url('frontend/js/scrollbar.js')}}"></script>
<script src="{{url('frontend/js/script.js')}}"></script>
{{-- js link of datatable --}}
<script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
</body>

<!-- stella-orre/  30 Nov 2019 03:45:45 GMT -->
</html>
