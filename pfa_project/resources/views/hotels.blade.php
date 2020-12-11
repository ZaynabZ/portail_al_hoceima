@extends('layout')

    @section('content')
    
    <div class="hero-wrap js-fullheight" style="background-image: url('app-assets/images/hotel_cover_quemado2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="/">Home</a></span> <span>Hotel</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-degree-bg">
      	<div class="container">
        	<div class="row">
        		<div class="col-lg-3 sidebar">
        			<div class="sidebar-wrap bg-light ftco-animate">
        				<h3 class="heading mb-4">Filter Results</h3>

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
        			
         		</div>
           		<div class="col-lg-9">

	          		<div class="row">

	          			@foreach($hotels as $hotel)
						<div class="col-md-4 ftco-animate">
			    			<div class="destination">
			    				<a href="hotels/{{$hotel->slug}}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ $hotel->photo }});">
			    					<div class="icon d-flex justify-content-center align-items-center">
	    								<span class="icon-search2"></span>
	    							</div>
			    				</a>
			    				<div class="text p-3">
			    					<div class="d-flex">
			    						<div class="one">
					    					<h3><a href="#">{{$hotel->nom}}</a></h3>
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
				    						<span class="price per-price">{{$hotel->prix_moyen}}DH<br><small>/night</small></span>
			    						</div>
			    					</div>
			    					<p>{{ $hotel->apropos }}</p>
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
			    	<div class="map-responsive">
			    	<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d52138.53679368301!2d-3.9726527!3d35.239869!3m2!1i1024!2i768!4f13.1!2m1!1zSMO0dGVscw!5e0!3m2!1sfr!2sma!4v1595879470237!5m2!1sfr!2sma" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			    	</div>

          		</div>
			</div>
		</div>
	</section> <!-- .section -->
    @endsection