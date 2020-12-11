<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Al_Hoceima _ecotourism</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="../app-assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../app-assets/css/animate.css">
    
    <link rel="stylesheet" href="../app-assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../app-assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../app-assets/css/magnific-popup.css">

    <link rel="stylesheet" href="../app-assets/css/aos.css">

    <link rel="stylesheet" href="../app-assets/css/ionicons.min.css">

    <link rel="stylesheet" href="../app-assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../app-assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../app-assets/css/flaticon.css">
    <link rel="stylesheet" href="../app-assets/css/icomoon.css">
    <link rel="stylesheet" href="../app-assets/css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
                  <li class="{{ Request::path() === '/' ? 'nav-item cta active' : 'nav-item active'}}"><a href="/" class="nav-link">Home</a></li>
                  <li class="{{ Request::path() === 'places' ? 'nav-item cta active' : 'nav-item active'}}"><a href="/places" class="nav-link">Places</a></li>
                  <li class="{{ Request::path() === '/restaurants' ? 'nav-item cta active' : 'nav-item active'}}"><a href="/restaurants" class="nav-link">Restaurant</a></li>
                  <li class="{{ Request::path() === '/hotels' ? 'nav-item cta active' : 'nav-item active'}}"><a href="/hotels" class="nav-link">Hotels</a></li>
                  
                </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    <div class="hero-wrap js-fullheight" style="background-image: url('../app-assets/images/{{$hotel->slug}}1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="hotels">Hotels</a></span> <span>Hotel Single</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels Details</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      	<div class="container">
        	<div class="row">
        		<div class="col-lg-3 sidebar">
        			<div class="sidebar-wrap bg-light ftco-animate">
        				<h3 class="heading mb-4">Find City</h3>
        				<form action="{{route('post_request') }}" method ="POST">

        					@csrf
        					<div class="fields">
		              			<div class="form-group">
		                			<input type="text" class="form-control" placeholder="Destination, City">
		              			</div>
		              			<div class="form-group">
		                			<div class="select-wrap one-third">
	                    				<div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    				<select name="location" id="" class="form-control" placeholder="Keyword search">
	                    					<option value="">Select Location</option>
			                      			<option value="Al Hoceima">Al Hoceima</option>
			                      			<option value="Ajdir">Ajdir</option>
			                    		</select>
	                  				</div>
		              			</div>
		              			

		              			<div class="form-group">
		              				<div class="range-slider" id="price_slider">
		              					<span>
											<input id="min_price" name="min_price" type="number" value="0" min="0" max="2000"/>	-
											<input id="max_price" name="max_price" type="number" value="800" min="0" max="2000"/>
										</span>
											<input name="range_min_price" value="500" min="0" max="2000" step="200" type="range"/>
											<input name="range_max_price" value="1000" min="0" max="2000" step="200" type="range"/>
											</svg>
									</div>
		              			</div>

		             			<div class="form-group">
		                			<input type="submit" value="Search" class="btn btn-primary py-3 px-5">
		              			</div>
		            		</div>
	            		</form>
        			</div>
        			<div class="sidebar-wrap bg-light ftco-animate">
        				<h3 class="heading mb-4">Star Rating</h3>
        				<form method="post" class="star-rating">
							<div class="form-check">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">
									<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i></span></p>
								</label>
							</div>
							<div class="form-check">
						      	<input type="checkbox" class="form-check-input" id="exampleCheck1">
						      	<label class="form-check-label" for="exampleCheck1">
						    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i></span></p>
						        </label>
							</div>
							<div class="form-check">
						        <input type="checkbox" class="form-check-input" id="exampleCheck1">
						        <label class="form-check-label" for="exampleCheck1">
						      	  	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						     	</label>
							</div>
							<div class="form-check">
							    <input type="checkbox" class="form-check-input" id="exampleCheck1">
						    	<label class="form-check-label" for="exampleCheck1">
						      		<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
						    	</label>
							</div>
							<div class="form-check">
						      	<input type="checkbox" class="form-check-input" id="exampleCheck1">
						      	<label class="form-check-label" for="exampleCheck1">
						      		<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i></span></p>
							    </label>
							</div>
						</form>
        			</div>
          		</div>
          		<div class="col-lg-9">
          			<div class="row">
		          		<div class="col-md-12 ftco-animate">
		          			<div class="single-slider owl-carousel">
		          				<div class="item">
		          					<div class="hotel-img" style="background-image: url(../app-assets/images/{{$hotel->slug}}2.jpg);"></div>
		          				</div>	
		          				<div class="item">
		          					<div class="hotel-img" style="background-image: url(../app-assets/images/{{$hotel->slug}}3.jpg);"></div>
		          				</div>
		          				<div class="item">
		          					<div class="hotel-img" style="background-image: url(../app-assets/images/{{$hotel->slug}}4.jpg);"></div>
		          				</div>
		          			</div>
		          		</div>
		          		<div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
		          			<span>Our Best hotels &amp; Rooms</span>
		          			<h2>{{$hotel->nom}}</h2>
          			<p class="rate mb-5">
          				<span class="loc"><a href="#"><i class="icon-map"></i> {{$hotel->full_adresse}}</a></span>
          				<span class="star">
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star"></i>
    							<i class="icon-star-o"></i>
    							8 Rating</span>
    						</p>
    						<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
    						
    						<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
          		</div>
          		
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Our Rooms</h4>
          			<div class="row">
          				<div class="col-md-4">
				    				<div class="destination">
				    					<a href="#" class="img img-2" style="background-image: url(../app-assets/images/{{$hotel->slug}}5.jpg);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="hotel-single.html">Hotel, Italy</a></h3>
						    						<p class="rate">
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star-o"></i>
						    							<span>8 Rating</span>
						    						</p>
					    						</div>
					    						<div class="two">
					    							<span class="price per-price">$40<br><small>/night</small></span>
				    							</div>
				    						</div>
				    						<p>Far far away, behind the word mountains, far from the countries</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
				    							<span class="ml-auto"><a href="#">Book Now</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-md-4">
				    				<div class="destination">
				    					<a href="hotel-single.html" class="img img-2" style="background-image: url(../app-assets/images/{{$hotel->slug}}6.jpg);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="#">Hotel, Italy</a></h3>
						    						<p class="rate">
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star-o"></i>
						    							<span>8 Rating</span>
						    						</p>
					    						</div>
					    						<div class="two">
					    							<span class="price per-price">$40<br><small>/night</small></span>
				    							</div>
				    						</div>
				    						<p>Far far away, behind the word mountains, far from the countries</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
				    							<span class="ml-auto"><a href="#">Book Now</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-md-4">
				    				<div class="destination">
				    					<a href="#" class="img img-2" style="background-image: url(../app-assets/images/{{$hotel->slug}}7.jpg);"></a>
				    					<div class="text p-3">
				    						<div class="d-flex">
				    							<div class="one">
						    						<h3><a href="#">Hotel, Italy</a></h3>
						    						<p class="rate">
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star"></i>
						    							<i class="icon-star-o"></i>
						    							<span>8 Rating</span>
						    						</p>
					    						</div>
					    						<div class="two">
					    							<span class="price per-price">$40<br><small>/night</small></span>
				    							</div>
				    						</div>
				    						<p>Far far away, behind the word mountains, far from the countries</p>
				    						<hr>
				    						<p class="bottom-area d-flex">
				    							<span><i class="icon-map-o"></i> Miami, Fl</span> 
				    							<span class="ml-auto"><a href="#">Book Now</a></span>
				    						</p>
				    					</div>
				    				</div>
				    			</div>
          			</div>
          		</div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-5">Check Availability &amp; Booking</h4>
          			<div class="fields">
          				<div class="row">
          					<div class="col-md-6">
				              <div class="form-group">
				                <input type="text" class="form-control" placeholder="Name">
				              </div>
			              </div>
			              <div class="col-md-6">
				              <div class="form-group">
				                <input type="text" class="form-control" placeholder="Email">
				              </div>
			              </div>
			              <div class="col-md-6">
				              <div class="form-group">
				                <input type="text" id="checkin_date" class="form-control" placeholder="Date from">
				              </div>
			              </div>
			              <div class="col-md-6">
				              <div class="form-group">
				                <input type="text" id="checkin_date" class="form-control" placeholder="Date to">
				              </div>
				            </div>
				            <div class="col-md-6">
					            <div class="form-group">
				                <div class="select-wrap one-third">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="" id="" class="form-control" placeholder="Guest">
			                      <option value="0">Guest</option>
			                      <option value="1">1</option>
			                      <option value="2">2</option>
			                      <option value="3">3</option>
			                      <option value="4">4</option>
			                    </select>
			                  </div>
				              </div>
			              </div>
			              <div class="col-md-6">
					            <div class="form-group">
				                <div class="select-wrap one-third">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="" id="" class="form-control" placeholder="Children">
			                      <option value="0">Children</option>
			                      <option value="1">1</option>
			                      <option value="2">2</option>
			                      <option value="3">3</option>
			                      <option value="4">4</option>
			                    </select>
			                  </div>
				              </div>
			              </div>
				            <div class="col-md-12">
				              <div class="form-group">
				                <input type="submit" value="Check Availability" class="btn btn-primary py-3">
				              </div>
			              </div>
		              </div>
		            </div>
          		</div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
          			<h4 class="mb-4">Review &amp; Ratings</h4>
          			<div class="row">
          				<div class="col-md-6">
          					<form method="post" class="star-rating">
										  <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
												</label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
									     </label>
										  </div>
										  <div class="form-check">
										    <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
										    </label>
										  </div>
										</form>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
          			<h4 class="mb-4">Related Hotels</h4>
          			<div class="row">

          				@foreach($paginate ?? '' as $hotel)
						<div class="col-md-4">
				    		<div class="destination">
				    			<a href="hotels/{{$hotel->slug}}" class="img img-2" style="background-image: url(../{{$hotel->photo}});"></a>
				    			<div class="text p-3">
				    				<div class="d-flex">
				    					<div class="one">
						    				<h3>{{$hotel->nom}}</h3>
						    				<p class="rate">
						    					<i class="icon-star"></i>
						    					<i class="icon-star"></i>
						    					<i class="icon-star"></i>
						    					<i class="icon-star"></i>
						    					<i class="icon-star-o"></i>
						    					<span>8 Rating</span>
						    				</p>
					    				</div>
					    				<div class="two">
					    					<span class="price per-price">{{$hotel->prix_moyen}}<br><small>/night</small></span>
				    					</div>
				    				</div>
				    					<p>Far far away, behind the word mountains, far from the countries</p>
				    					<hr>
				    					<p class="bottom-area d-flex">
				    						<span><i class="icon-map-o"></i> {{$hotel->short_adresse}}</span> 
				    						<span class="ml-auto"><a href="{{$hotel->link}}">Book Now</a></span>
				    					</p>
				    			</div>
				    		</div>
				    	</div>
				    	@endforeach

          			</div>
          		</div>

          	</div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

   
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Service</a></li>
                <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Become a partner</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../app-assets/js/jquery.min.js"></script>
  <script src="../app-assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../app-assets/js/popper.min.js"></script>
  <script src="../app-assets/js/bootstrap.min.js"></script>
  <script src="../app-assets/app-assets/js/jquery.easing.1.3.js"></script>
  <script src="../app-assets/js/jquery.waypoints.min.js"></script>
  <script src="../app-assets/js/jquery.stellar.min.js"></script>
  <script src="../app-assets/js/owl.carousel.min.js"></script>
  <script src="../app-assets/js/jquery.magnific-popup.min.js"></script>
  <script src="../app-assets/js/aos.js"></script>
  <script src="../app-assets/js/jquery.animateNumber.min.js"></script>
  <script src="../app-assets/js/bootstrap-datepicker.js"></script>
  <script src="../app-assets/js/jquery.timepicker.min.js"></script>
  <script src="../app-assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../app-assets/js/google-map.js"></script>
  <script src="../app-assets/js/main.js"></script>
  <script src="../app-assets/js/range.js"></script>
    
  </body>
</html>